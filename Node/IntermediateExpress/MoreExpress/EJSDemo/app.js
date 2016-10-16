// var app = require('express')(); this is same as next two lines
var express = require('express');
var app     = express();

app.get('/', function(req, res){
     res.render("home.ejs");
     // res.send("<h1>Welcome to the home  page</h1>");
});

app.get('/lovehuskey/:thing', function(req, res){
     var thing = req.params.thing;
     // Load coco.ejs form views directory and passing data to it
     res.render("coco.ejs", {thingVar: thing});
});


//start the server
app.listen(3000, function() {
     console.log("Server is Running!");
});
