<?php

function binFlipByteOrder($string) {
    return implode('', array_reverse(str_split($string, 1)));
}

function merkleroot($txids) {

    // Check for when the result is ready, otherwise recursion
    if (count($txids) === 1) {
        return $txids[0];
    }

    // Calculate the next row of hashes
    $pairhashes = [];
    while (count($txids) > 0) {
        if (count($txids) >= 2) {
            // Get first two
            $pair_first = $txids[0];
            $pair_second = $txids[1];

            // Hash them
            $pair = $pair_first.$pair_second;
            $pairhashes[] = hash('sha256', hash('sha256', $pair, true), true);

            // Remove those two from the array
            unset($txids[0]);
            unset($txids[1]);

            // Re-set the indexes (the above just nullifies the values) and make a new array without the original first two slots.
            $txids = array_values($txids);
        }

        if (count($txids) == 1) {
            // Get the first one twice
            $pair_first = $txids[0];
            $pair_second = $txids[0];

            // Hash it with itself
            $pair = $pair_first.$pair_second;
            $pairhashes[] = hash('sha256', hash('sha256', $pair, true), true);

            // Remove it from the array
            unset($txids[0]);

            // Re-set the indexes (the above just nullifies the values) and make a new array without the original first two slots.
            $txids = array_values($txids);
        }
    }

    return merkleroot($pairhashes);
}


$html = file_get_contents('pepe_directory/pepelist.json');
$json = json_decode($html, true);

if(isset($argv[1])){
    $height = $argv[1];
} else {
    $height == false;
}

$img_hash_array = [];
$asset_list = [];
    
$i=0;

//get hash of each img file
foreach($json as $key => $value) {
    
    $ogfile = basename($value);
    
    foreach (glob("pepe_directory/".$key.".*") as $filename) {
        $filehash = hash_file('sha256', $filename);
    }
    
    $asset_name_hash_array[$i] = hash('sha256', $key);
    
    $img_hash_array[$i] = $filehash;
    
    $i++;
    
}

if($height !== false){
    $img_hash_array = array_slice($img_hash_array, 0, $height);
    $asset_name_hash_array = array_slice($asset_name_hash_array, 0, $height);
}

$img_hash_arrayBEbinary = [];
foreach ($img_hash_array as $img_hashBE) {
    // covert to binary, then flip
    $img_hash_arrayBEbinary[] = binFlipByteOrder(hex2bin($img_hashBE));
}
$img_hash_root = merkleroot($img_hash_arrayBEbinary);

$asset_name_hash_arrayBEbinary = [];
foreach ($asset_name_hash_array as $asset_name_hashBE) {
    // covert to binary, then flip
    $asset_name_hash_arrayBEbinary[] = binFlipByteOrder(hex2bin($asset_name_hashBE));
}
$asset_name_hash_root = merkleroot($asset_name_hash_arrayBEbinary);

echo "Count: ".count($img_hash_array).PHP_EOL;
echo "Asset Hash Merkle Root: ".bin2hex(binFlipByteOrder($asset_name_hash_root)).PHP_EOL;
echo "Image Hash Merkle Root: ".bin2hex(binFlipByteOrder($img_hash_root)).PHP_EOL;




?>
