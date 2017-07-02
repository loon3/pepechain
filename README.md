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
Image Hash Merkle Root: 5ae8e5619140f06923aec9c814aaa77f2dd43b11facc26b77e38d1a6c61095bc
````

*Hashes Updated 2-Jul-17*
