var submit=document.getElementById('submit_btn').value;
function sub()
{
    var username=document.getElementById('username').value;
    var password=document.getElementById('password').value;
    request.open('POST','http://sarvanan16.imad.hasura-app.io/login',true);
    request.setRequestHeader('Content-Type','application/json');
    request.send(JSON.stringify({username:username,password:password}));
}