console.log('Loaded!');
var img=document.getElementById('madi');
var marginLeft=0;
function moveRight()
{
    marginLeft=marginLeft+10;
    img.style.marginLeft=marginLeft+'px';
    
}
img.onclick=function(){
    document.body.style.backgroundColor = "red";
    var interval=setInterval(moveRight,1);
};