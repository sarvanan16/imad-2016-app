console.log('Loaded!');
var img=document.getElementById('madi');
var marginleft=0;
function moveRight()
{
    marginleft=marginleft+10;
    img.style.marginLeft=marginLeft+'px';
}
img.onclick=function(){
    var interval=setInterval(moveRight,10);
};