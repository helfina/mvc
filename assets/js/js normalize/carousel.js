// //je recupere mes block
let blockOne = document.querySelector('.blockOne');
let blockTwo = document.querySelector('.blockTwo');
//je les met en tableau
let block = [ blockOne, blockTwo];
let index1 = 0;

console.log(block[1]);

setInterval(function(){
    if(index1 === 1 ){
        blockOne.style.display = "none";
        blockTwo.style.display = "flex";
    }
    else if (index1 === 0){
        blockOne.style.display = "flex";
        blockTwo.style.display = "none";
    }
    else{
    index1++; // j'incremente de 1
    if (index1 == 1) index1=0;// ma boucle
    }

});
console.log(index1 , block);

function ChangeSlide(sens) {
    index1 = index1 + sens;
    if (index1 < 0)
        index1 = block.length - 1;
    else if (index1 > block.length - 1)
        index1 = 0;
    document.getElementsByClassName("carousel").element = block[index1];
}




