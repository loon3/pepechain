### Pepe Chain

How to verify Rare Pepe integrity:

1. Clone Repository
2. Open Terminal, go to the Pepe Chain root directory
3. Type ```node scrape_pepe_directory``` and press enter
4. After all images are downloaded, type ```php verify.php``` and press enter
5. Compare asset and image merkle root with published value.  
6. To compare with value listed below, specify count by typing ```php verify.php 215```, ```php verify.php 283```, etc.



````
Count: 1007
Asset Hash Merkle Root: 0da5d2e6f8061c97ac488837254180219141f66a79df3563c1eb787cff2ad51a
Image Hash Merkle Root: 958242a47e963b39e827bd164ac40c3eafd2591e964504a22d5ff183dc719213
````

*Hashes Updated 2-Ju1-17*
