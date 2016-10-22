### Pepe Chain

How to verify Rare Pepe integrity:

1. Clone Repository
2. Download latest Rare Pepe list at http://rarepepedirectory.com/json/pepelist.json and save to ```pepe_directory```
3. Open Terminal, go to the Pepe Chain root directory
4. Run ```node scrape_pepe_directory```
5. After all images are downloaded, run ```verify.php```
6. Compare asset and image merke roots with published values.


````
Count: 215
Asset Hash Merkle Root: 3425cdb30ba3b2be84ddefe231da2eae11dca08675493cd5aa8b8e3ba1cda5ed
Image Hash Merkle Root: 8587d3e76980f4f398e705509d99a2c7d18a1fc604115ed016df4069d62a22aa
````
````
Count: 283
Asset Hash Merkle Root: ede446edd856662bd7d3e2323bae35ebc814d06208b24ada15d0192432971144
Image Hash Merkle Root: 3c3ca5e72cd8db5febce34f7d0a0e78d7e83ad0fa01159ffd865b6d47639a477
````
*Hashes Updated 10-22-16*
