var express = require('express');
var app = express();

//define first route
// "/" => "Hi there!"
/**
 * using express get method  and callback function
 * request contain all the request comes to app
 * respond is the all the information back to the user
 */
app.get("/", function(req, res){
     res.send("Hi there");
});

// "/bye" => "Goodbye"
app.get("/bye", function(req, res){
     res.send("Goodbye");
});
// "/dog" => "Hop Hop"
app.get("/dog", function(req, res){
     console.log("/dog request.");
     res.send("Hop Hop");
});
// Use listen method for listening all the requests
// in c9
//  app.listen(process.env.PORT, process.env.IP, function(){
//      console.log("Start listening port 3000");
// });
//
app.listen(3000, function(){
     console.log("Start listening port 3000");
});
