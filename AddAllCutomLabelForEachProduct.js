document.addEventListener("DOMContentLoaded", function () {
  var compoDiv = document.querySelector('#collapse-composition');
  
  if (compoDiv && !document.querySelector('.ingredient-warning')) {
    var warning = document.createElement('p');
    warning.className = 'ingredient-warning mt-2 text-muted';
    warning.innerText = "Cette liste d'ingrédients peut faire l'objet de modifications. Veuillez consulter l'emballage du produit acheté.";
    compoDiv.insertAdjacentElement('beforeend', warning);
  }
});
