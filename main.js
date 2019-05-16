function space(){
    var img = document.querySelector('.carousel');
    var nav = document.querySelector('.navbar');
    var h1 = getComputedStyle(img).height;
    var h2 = getComputedStyle(nav).height;
    h1 = parseFloat(h1);
    h2 = parseFloat(h2);
    var h3 = h1 + h2;
    console.log(h1+", "+h2+", "+h3);
    var len = document.getElementsByClassName("margintop").length;
    for(i = 0; i < len; i++)
        document.getElementsByClassName("margintop")[i].style.marginTop = h3+"px";
}