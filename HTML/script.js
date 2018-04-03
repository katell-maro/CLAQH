var button = document.getElementsByTagName('button')[0];
var image = document.getElementsByTagName('img')[2];
var carte = document.getElementsByTagName('img')[3];

window.afficher = function(){
    carte.style.display = (carte.style.display == "block") ? "none" : "block";
    image.style.display = (image.style.display == "none") ? "block" : "none";
}