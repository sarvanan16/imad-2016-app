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

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'welcome.html'));
});

app.get('/welcome', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'welcome.html'));
});

app.get('/addc', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'addc.html'));
});

app.get('/addc1', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'addc1.html'));
});

app.get('/admin', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'admin.html'));
});

app.get('/detail', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'detail.html'));
});

app.get('/form', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'form.css'));
});

app.get('/about', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'about.html'));
});

app.get('/login', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'login.html'));
});

app.get('/ui/menu.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'menu.css'));
});

app.get('/register', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'register.html'));
});

app.get('/result', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'result.html'));
});

app.get('/style', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'style.css'));
});

app.get('/table', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'table.css'));
});

app.get('/validate', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'validate.html'));
});

app.get('/vote', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'vote.html'));
});

app.get('/voter', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'welcome.html'));
});

app.get('/ui/welcome.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'welcome.jpg'));
});

app.get('/ui/about.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'about.gif'));
});

app.get('/ui/about_bg.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'about_bg.jpg'));
});

app.get('/ui/bgm.mp3', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'bgm.mp3'));
});

app.get('/ui/bird.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'bird.gif'));
});

app.get('/ui/css.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'css.jpg'));
});

app.get('/ui/detail_bg.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'detail_bg.jpg'));
});

app.get('/ui/election_details.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'election_details.gif'));
});

app.get('/ui/home.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'home.gif'));
});

app.get('/ui/html5.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'html5.png'));
});

app.get('/ui/js.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'js.png'));
});

app.get('/ui/login.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'login.gif'));
});

app.get('/ui/login_bg.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'login_bg.jpg'));
});

app.get('/ui/logout.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'logout.gif'));
});

app.get('/ui/nasim.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'nasim.jpg'));
});

app.get('/ui/nasim.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'nasim.jpg'));
});

app.get('/ui/over.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'over.gif'));
});

app.get('/ui/php.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'php.png'));
});

app.get('/ui/point.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'point.gif'));
});

app.get('/ui/register.gif', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'register.gif'));
});

app.get('/ui/register_bg.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'register_bg.jpg'));
});

app.get('/ui/s3logo.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 's3logo.jpg'));
});

app.get('/ui/voter_bg.jpg', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'voter_bg.jpg'));
});

app.get('/ui/voting.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'voting.png'));
});

app.get('/act-register',function(req,res){
    var name='sarvanan';
    var roll='56';
    pool.query('INSERT INTO "test" (name,roll) values($1,$2)',[name,roll],function(err,result){
        if(err)
        {
            res.send();
        }
        else
        {
            res.send("User created"+name);
        }
    });
    
});

var port = 8080; // Use 8080 for local development because you might already have apache running on 80
app.listen(8080, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
