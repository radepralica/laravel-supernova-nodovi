import "./bootstrap";

document.getElementById('searchInput').addEventListener('input', function() {
    var searchTerm = this.value;
 var searchResults = document.getElementById('searchResults');
    var selectElement = document.getElementById('selBlic');
    const blicNod=document.getElementById('blicNod');
var brojNodova=document.getElementById('txtCount');
    if (searchTerm.length > 0) {
        // Sakrij select element ako postoji tekst u input polju
        selectElement.style.display = 'none';
        blicNod.style.display = 'none';
    } else {
        // Prikazuj select element ako nema teksta u input polju

        selectElement.style.display = '';
        blicNod.style.display = '';
    }



if(searchTerm.length>0){



    fetch('/search-nodes?term=' + searchTerm)
    .then(response => response.json())
    .then(nodes => {
        var resultsHTML = '';
        nodes.forEach(node => {
            resultsHTML += `<br> <h2  class="text-center offset-5 tshd fw-bold">${node.ime}</h2> <br>`;
            resultsHTML += `<ul class="list-group  shd rounded offset-5"><li class="list-group-item">Adresa: ${node.adresa}</li>`;
            resultsHTML += `<li class="list-group-item">Naselje: ${node.naselje}</li>`;
            resultsHTML += `<li class="list-group-item">Ulice: ${node.ulice}</li></ul>`;
        });
        document.getElementById('searchResults').innerHTML = resultsHTML;
    });
}
else{
    searchResults.innerHTML = '';
}
});

