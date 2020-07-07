let myMap = L.map('map').setView([47.8473883, -2.7208221], 10);// J'initialise ma carte 
// L = apel leaflet
// 47.8473883 = latitude
// -2.7208221 = longitude
// 13 = zoom au chargement de la page

// On charge les "tuiles"
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    // Il est toujours bien de laisser le lien vers la source des données
    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
    minZoom: 1,
    maxZoom: 20
}).addTo(myMap);
// je créer les markeur et leur popup
let StJean = L.marker([47.8473883, -2.7208221]).addTo(myMap);
let GrandChamp = L.marker([47.7555779, -2.8432575]).addTo(myMap);
StJean.bindPopup("<p>2 Rue de buléon<br>56660 Saint-Jean-Brevelay<br>Tel : 02.97.60.41.65</p>").openPopup();
GrandChamp.bindPopup("<p>1 route de vannes</br>56390 Grand-Champ</br>Tel : 09.52.46.16.14<p>").openPopup();