let imgs = [
    "assets/images/slider/13923533_1387945637887780_3845945640515613113_o.jpg", 
    "assets/images/slider/13923533_1387945637887780_3845945640515613113_o.jpg",
    "assets/images/slider/14480565_1439396382742705_7265724445211225810_o.jpg",
    "assets/images/slider/13923533_1387945637887780_3845945640515613113_o.jpg", 
    "assets/images/slider/14468205_1439402822742061_4159949213737607134_o.jpg",
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