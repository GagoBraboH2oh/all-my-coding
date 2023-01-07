var http = require('http')

http.createServer(function (req, res){
    res.end("<h1>ola</h1>")
}).listen(8080)

console.log("o serve esta rodando")
console.error("o serve esta fechado");