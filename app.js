// jshint esversion:6


const express = require("express");
const bodyParser = require("body-parser");
const date = require(__dirname + "/date.js");

/* console.log(date()); */

const app = express();


const items = ["Buy Course", "Execute Course", "Learn Course"];
const workItems = [];

app.set('view engine', 'ejs');

app.use(bodyParser.urlencoded({extended: true}));
app.use(express.static("public"));

app.get("/", function (req, res) {
    // res.send("Hello");

    const day = date.getDay(); // 

    
    res.render("list", {
        listTitle: day,
        newListItems: items
    });

});

app.get("/work", function(req, res) {
    res.render("list", {listTitle: "Work List", newListItems: workItems});
});

app.post("/work", function(req,res) {
    
    const item = req.body.newItem;
    workItems.push(item);
    res.redirect("/work");
})

// console log the input form using app.post
app.post("/",function (req, res) {
    
    const item = req.body.newItem;

    if (req.body.list === "Work") {
        workItems.push(item);
        res.redirect("/work");
    }else {

    items.push(item);
    res.redirect("/");
    };
});

app.get("/about", function (req, res) {
    res.render("about")
})

app.listen(3000, function () { 
    console.log("Server started on port 3000");
});