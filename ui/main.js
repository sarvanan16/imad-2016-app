console.log('Loaded!');
var img=document.getElementById('madi');
var marginLeft=0;
function moveRight()
{
    marginLeft=marginLeft+10;
    document.body.style.backgroundColor ="red";
    img.style.marginLeft=marginLeft+'px';
    
}
img.onclick=function(){
    document.body.style.backgroundColor ="green";
    var interval=setInterval(moveRight,100);
};