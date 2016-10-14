var express = require('express');
var app = express();


//Create 3 different route
app.get("/", function(req, res){
     res.send("Hi there, welcome to my aaasignement");
});

app.get("/speak/:animal", function(req, res){
     var animal = req.params.animal.toLowerCase();
     // console.log(animal);
     /* one way
     switch (animal) {
         case "pig":
             res.send("Hi the pig says 'Oink'");
             break;
         case "cow":
         res.send("Hi the cow says 'Moo'");
             break;
         case "dog":
            res.send("Hi the dog says 'Woof Woof'");
             break;
         default:
             res.send("nothing says'");
     }
     */
    // this is more efficient if use a dictionary
    var sounds = {
         pig : "Oink",
         cow: "Moo",
         dog: "Woof Woof",
         cat: "Meaoo",
         goldfish: "...."
    }
    var sound = sounds[animal];
    res.send("The " + animal + " says '" + sound + "'");

});


app.get("/:repeat/:sub/:val", function(req, res){
     var sub = req.params.sub;
     var val = Number(req.params.val); //convert string val into integer
     // var reqparam = req.params.repeat;
     // var val = req.params.repeat.sub.val;
     var out = "";
     for(var i = 0; i < val; i++){
          out += " " + sub;
     }
          res.send(out);
});


//create 404 page
app.get("*", function(req, res){
     res.send("Your request not found");
});


//listen
app.listen(3000, function(){
     console.log("Start listening port 3000");
});
