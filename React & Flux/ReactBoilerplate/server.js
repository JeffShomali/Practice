var express = require('express');

// Creat our App
var app = express();

// Tel it which folder wants to serve it
app.use(express.static('public'));

// Start the server
app.listen(3000, function(){
     console.log("Express server is up on port 3000");
});
