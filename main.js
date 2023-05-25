// Faire apparaitre le modal
const button = document.getElementById('newpost');

const modal = document.getElementById('modale');

const close = document.getElementById('close');

button.onclick = function() {
    modal.style.display = "block";
}

close.onclick = function() {
    modal.style.display = "none";
}

// Bouton suppression (A REFAIRE)
// const delt = document.getElementById('sppr')

// delt.addEventListener("click", () => {
//   confirm("Souhaitez-vous supprimer ce post");
// })

// Bouton de suppression v2
const btnnon = document.getElementById('negation');

const btnyes = document.getElementById('yes');

const btndelete = document.getElementById("sppr");

const modalsupprime = document.getElementById('deletemodal');

btndelete.onclick = function () {
  modalsupprime.style.display = "block";
};

btnnon.onclick = function () {
  modalsupprime.style.display = "none";
};

// if (btnyes.onclick = function () {
// }) {
  
// }


// Effet flou sur tout l'écran
// const blurry = document.getElementById('row');

// window.addEventListener('scroll', function() {
//   const scrollDistance = window.pageYOffset;

//   blurry.style.filter = `blur(${scrollDistance / 1000}px)`;
// });


// Local Storage
const text = document.querySelector('textarea');

const storageKey = 'text';

const submit = document.getElementById("subpost");

const init = () => {
  
    text.value = localStorage.getItem(storageKey);
    
    text.addEventListener('input', () => {
      localStorage.setItem(storageKey, text.value);
    });
  }

  submit.addEventListener('click', () => {
    localStorage.removeItem(storageKey, text.value);
  });

  

  
init();



// Side navbar
const btnnav = document.getElementById('burger');

const navbar = document.getElementById('sidenavbar');

const closed = document.getElementById('closed');

btnnav.onclick = function() {
    navbar.style.display = "block";
}

closed.onclick = function() {
    navbar.style.display = "none";
}

// Filtres sur les tags
