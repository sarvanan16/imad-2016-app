console.log('Loaded!');
var img=document.getElementById('madi');
function moveRight()
{
    marginleft=marginleft+10;
    img.style.marginleft=marginleft+'px';
}
img.onclick=function(){
    var interval=setinterval(moveRight,10);
}