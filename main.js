function space(){

    var img = document.querySelector('.carousel');

    var nav = document.querySelector('.navbar');

    var h1 = getComputedStyle(img).height;

    var h2 = getComputedStyle(nav).height;

    h1 = parseFloat(h1);

    h2 = parseFloat(h2);

    var h3 = h1 + h2;

    var len = document.getElementsByClassName("margintop").length;

    document.getElementsByClassName("margintop")[0].style.marginTop = h3+"px";

    for(i = 1; i < len; i++)

        document.getElementsByClassName("margintop")[i].style.marginTop = (h1 / 2) + "px";

}