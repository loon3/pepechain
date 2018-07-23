### Pepechain

How to verify Rare Pepe integrity:

1. Clone Repository.
2. Open Terminal, go to the Pepe Chain root directory.
3. Type ```node scrape_pepe_directory``` and press enter.
4. After all images are downloaded, type ```php verify.php``` and press enter.
5. Compare asset and image merkle root with published value.  
6. To compare with value listed below, specify count by typing ```php verify.php 999```, ```php verify.php 1007```, etc.


````
Count: 999
Asset Hash Merkle Root: 8b013d94fedbc8c52cc25fcd5cc4cced55179a9df1eec46e042704148666fb5d
Image Hash Merkle Root: 407190aa7248c2d68ed3795e8e7b17b22ee4c4c9fdc60501118ba40fbeb3c177
````
````
Count: 1007
Asset Hash Merkle Root: 0da5d2e6f8061c97ac488837254180219141f66a79df3563c1eb787cff2ad51a
Image Hash Merkle Root: 5ae8e5619140f06923aec9c814aaa77f2dd43b11facc26b77e38d1a6c61095bc
````
````
Count: 1493
Asset Hash Merkle Root: e631a85f7e95e23a5cd79b9eb0b6fa222d1b4a46a4b5c6aa7911e59b78df3f52
Image Hash Merkle Root: 1c8fdf5a0a0dcdcc36af0ead8fe96498771bf58c8691bc77dcc42945353edd89
````
````
Count: 1500
Asset Hash Merkle Root: 1c3279fbac50080f3960015ded7a551dc1d4517d63ca8568963add9de9c32721
Image Hash Merkle Root: ec0f2c6ea577c664a3176d7302f419c4af99dc7a1aff7a13cb40efcffd49184d
````
````
Count: 1774 (final)
Asset Hash Merkle Root: c4d404362e6ad7e0cc69290b52904bc8eacc546b2296099667665c9357ed7407
Image Hash Merkle Root: 3a0ba2a9f0fea161a496abdccdc6c53816832e154f6f252d4d2ec47d49345b22
````
---

#### Final merkle root broadcasts from RAREPEPE genesis address

##### Asset Hash*
````
A:xNQENi5q1+DMaSkLUpBLyOrMVGsilgmWZ2Zck1ftdAc=
````
https://xchain.io/tx/0a7fde9001e453b7c6fe28df7143e0eb6a521301f6c88b9ea7d3616e3607d865


##### Image Hash*
````
I:OguiqfD+oWGklqvczcbFOBaDLhVPbyUtTS7EfUk0WyI=
````
https://xchain.io/tx/78b6fc8c0476cb67e0026b14162141de7cc44f1ef24a73a8f58e78ff82100519

_*preceded by A: or I: to identify hash, presented in Base64_

