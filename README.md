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

*Hashes Updated 10-16-16*
