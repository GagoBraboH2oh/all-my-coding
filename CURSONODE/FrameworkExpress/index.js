const express = require("express")
const app = express();

app.get("/", function(req,res) {
    res.end("<h1>sita principal</h1> <p>texto simples</p>")
})
app.get("/produtos", function(req,res) {
    res.end("<h1>sita principal de produtos </h1> <p>texto simples</p>")
})

app.get("/ver", function(req,res) {
    res.end("<h1>sita principal se produtos vistos</h1> <p>texto simples</p>")
})

app.listen(8080, function serve() {
    console.log("esta rodando")
})