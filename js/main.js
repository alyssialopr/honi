// Faire apparaitre le modal
const button = document.getElementById("newpost");

const modal = document.getElementById("modale");

const close = document.getElementById("close");

button.onclick = function () {
  modal.style.display = "block";
};

close.onclick = function () {
  modal.style.display = "none";
};

// Bouton de suppression
const btnnon = document.querySelectorAll('.btnno');

const btnyes = document.getElementById("yes");

const btndeletes = document.querySelectorAll(".trashbins");

const modalsupprime = document.querySelectorAll('.deletemodal')

btndeletes.forEach((btndelete) => {
  btndelete.addEventListener("click", () => {
    const nextElement = btndelete.nextElementSibling;
    nextElement.classList.toggle("block");
    nextElement.classList.toggle("none");
  });
});


btnnon.forEach(btn => {
  btn.addEventListener('click', () => {
    modalsupprime.forEach(mdl => {
      mdl.classList.add('none')
    });
  })
});


// if (btnyes.onclick = function () {
// }) {

// }

// Effet flou sur tout l'écran
const blurry = document.getElementById('row');
 
if (($_SESSION["id"]) === null) {
  window.addEventListener("scroll", function () {
    const scrollDistance = window.pageYOffset;

    blurry.style.filter = `blur(${scrollDistance / 1000}px)`;
  });
}

// Local Storage
const text = document.querySelector("textarea");

const storageKey = "text";

const submit = document.getElementById("subpost");

const init = () => {
  text.value = localStorage.getItem(storageKey);

  text.addEventListener("input", () => {
    localStorage.setItem(storageKey, text.value);
  });
};

submit.addEventListener("click", () => {
  localStorage.removeItem(storageKey, text.value);
});

init();

// Side navbar
const btnnav = document.getElementById("burger");

const navbar = document.getElementById("sidenavbar");

const closed = document.getElementById("closed");

btnnav.onclick = function () {
  navbar.style.display = "block";
};

closed.onclick = function () {
  navbar.style.display = "none";
};

