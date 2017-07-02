### Pepe Chain

How to verify Rare Pepe integrity:

1. Clone Repository
2. Open Terminal, go to the Pepe Chain root directory
3. Type ```node scrape_pepe_directory``` and press enter
4. After all images are downloaded, type ```php verify.php``` and press enter
5. Compare asset and image merkle root with published value.  
6. To compare with value listed below, specify count by typing ```php verify.php 215```, ```php verify.php 283```, etc.



````
Count: 999
Asset Hash Merkle Root: 3425cdb30ba3b2be84ddefe231da2eae11dca08675493cd5aa8b8e3ba1cda5ed
Image Hash Merkle Root: 8587d3e76980f4f398e705509d99a2c7d18a1fc604115ed016df4069d62a22aa
````

*Hashes Updated 15-Jun-17*
