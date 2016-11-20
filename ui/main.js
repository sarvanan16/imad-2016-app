
var express = require('express');
var morgan = require('morgan');
var path = require('path');
var Pool =require('pg').Pool;

var config={
    user: 'sarvanan16',
    database: 'sarvanan16',
    host:   'db.imad.hasura-app.io',
    port:'5432',
    password: process.env.DB_PASSWORD
};

var pool =new Pool(config);

var app = express();
app.use(morgan('combined'));
app.get('/cor_register',function(req,res){
    var username=document.getElementById('username').value;
    var password=document.getElementById('inputpassword').value;
    pool.query('SELECT username FROM "user" WHERE username = $1',[username],function(err,result){
        if(err)
        {
            res.send("some error in 1st");
        }
        else
        {
            if(name==result.rows[0].username)
            {
                res.sendFile(path.join(__dirname, 'ui', 'register.html')); 
            }
            else
            {
                pool.query('INSERT INTO "user" (username,password) values($1,$2)',[username,password],function(err,result){
                if(err)
                {
                    res.send("some error in 2nd");
                   }
               else
               {
                   res.sendFile(path.join(__dirname, 'ui', 'login.html'));
                  }
                });
            }
        }
    
});
