let imgs = [
    "assets/images/slider/compofleurrose.jpg", 
    "assets/images/slider/compoplante.jpg",
    "assets/images/slider/compofloral.jpg",
    "assets/images/devantureGC.jpg",
    "assets/images/devanturestjean.jpg"
];
let index = 0;

setInterval(function(){
    document.getElementById("slide").src = imgs[index];
    index++; // j'incremente de 1
    if (index==5) index=0;// ma boucle
    
}, 3000);//4000 milliseconde= 5s (1000 milliseconde = 1 scd)

//--------------------------parti onclick--------------------------------------
// function ChangeSlide(sens) {
//     index = index + sens;
//     if (index < 0)
//         index = slide.length - 1;
//     else if (index > imgs.length - 1)
//         index = 0;
//     document.getElementById("slide").src = imgs[index];
// }