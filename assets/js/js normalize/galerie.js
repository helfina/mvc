filterSelection("all") // Execute the function and show all columns
function filterSelection(categorie) {

  // Let conteneur = document.getElementsByTagName("article");
  // let i = [];
  let conteneur, i;
  conteneur = document.getElementsByTagName("article");
  if (categorie == "all") categorie = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < conteneur.length; i++) {
    RemoveClass(conteneur[i], "show");
    if (conteneur[i].className.indexOf(categorie) > -1) AddClass(conteneur[i], "show");
  }
} 

// Show filtered elements
function AddClass(element, name) {
  // arr1 = element.className.split(" ");
  // arr2 = name.split(" ");
  // let i = [];
  let i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  let i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
let btnFiltre = document.getElementsByClassName("filtre");
let btns = document.getElementsByClassName("btn");
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var addActive = document.getElementsByClassName("active");
    addActive[0].className = addActive[0].className.replace(" active", "");
    this.className += " active";
  });
}
