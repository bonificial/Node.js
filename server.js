var express = require('express');
var app = express();

app.get('/', function (request, response) {
    console.log("Requested: " +request.url)
    response.sendFile(__dirname + "/index.html");
})
app.get('/contact', function (request, response) {
    console.log("Requested: " +request.url)
    response.send("This is the Contact Page");
})
app.get('/about', function (request, response) {
    console.log("Requested: " +request.url)
    response.send("This is the About Us Page    ");
})
app.get('/profile/:id', function (request, response) {
    console.log("Requested: " +request.url)
    response.send("You Requestd the profile at ID -" + request.params.id);
})

app.listen(3000);