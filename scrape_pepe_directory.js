const http = require('http')
const fs = require('fs')
const url = require('url')
const path = require('path')

var options = {
  host: 'chiguireitor.com',
  path: '/pepelist.json'
};

if (!fs.existsSync("./pepe_directory")){
    fs.mkdirSync("./pepe_directory");
}

if (!fs.existsSync("./pepe_images")){
    fs.mkdirSync("./pepe_images");
}

callback = function(response) {
  var str = ''

  //another chunk of data has been recieved, so append it to `str`
  response.on('data', function (chunk) {
    str += chunk
  })

  //the whole response has been recieved, so we just print it out here
  response.on('end', function () {
    fs.writeFileSync('./pepe_directory/pepelist.json', str)
    var ob = JSON.parse(str)

    for (x in ob) {
      download(x, ob[x])
    }
  })
}

http.request(options, callback).end()

var downloadQueue = []
var reqsStarted = false
function download(name, url) {
  downloadQueue.push({name, url})

  if (!reqsStarted) {
    fetchOne()
    reqsStarted = true
  }
}

function fetchOne() {
  setTimeout(function() {
    if (downloadQueue.length > 0) {
          
      var curDl = downloadQueue.splice(0,1)[0]
      var udl = url.parse(curDl.url)

      var imagePath = "./pepe_images/"+(curDl.name + path.extname(udl.path))

      fs.access(imagePath, fs.F_OK, function(err) {
          
            if (!err) {
                // Image exists
                
                console.log("> " + curDl.name + path.extname(udl.path) + " exists!")
                fetchOne()
                
            } else {
                // Image doesn't exist
                
                console.log("> Downloading " + curDl.name + path.extname(udl.path))
                
                http.request(udl, function(response) {
                    var data = new Buffer(0)

                    response.on('data', function (chunk) {
                      data = Buffer.concat([data, chunk])
                    })

                    response.on('end', function () {
                      fs.writeFileSync('./pepe_images/' + curDl.name + path.extname(udl.path), data)
                      fetchOne()
                    })
                }).end()
       
                
            }
          
      });
    
    }
  }, 100)
}
