        /* bascule entre ajoute et supprime la classe 
         *"responsive" du menu
         *lorsque lutilisateur clique sur licone*/

        function OpenClose() {
            let menu = document.getElementById("Menu");
            if (menu.className === "menu_") {
                menu.className += "responsive";

            } else {
                menu.className = "menu_";
            }
        }