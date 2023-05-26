// Filtres sur les tags

const posts = document.querySelectorAll(".postinet");

// art
const artbtn = document.querySelector(".art");
const arttag = document.querySelectorAll(".arts-tag");

artbtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  arttag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// video game
const vgbtn = document.querySelector(".vg");
const vgtag = document.querySelectorAll(".videogames-tag");

vgbtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  vgtag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// tech
const techbtn = document.querySelector(".tech");
const techtag = document.querySelectorAll(".tech-tag");

techbtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  techtag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// internet
const internetbtn = document.querySelector(".internet");
const intertnettag = document.querySelectorAll(".internet-tag");

internetbtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  intertnettag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// Coding

const codebtn = document.querySelector(".coding");
const codetag = document.querySelectorAll(".coding-tag");

codebtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  codetag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// environnement
const envibtn = document.querySelector(".environnement");
const envitag = document.querySelectorAll(".environnement-tag");

envibtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  envitag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// films
const filmbtn = document.querySelector(".films");
const filmtag = document.querySelectorAll(".films-tag");

filmbtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  filmtag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// alexa
const alexbtn = document.querySelector(".alexa");
const alextag = document.querySelectorAll(".alexa-tag");

alexbtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  alextag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// creation
const creabtn = document.querySelector(".crea");
const creatag = document.querySelectorAll(".creations-tag");

creabtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  creatag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// voyage
const voybtn = document.querySelector(".voyage");
const voytag = document.querySelectorAll(".voyage-tag");

voybtn.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("postinet");
    post.classList.add("none");
  });
  voytag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("postinet");
  });
});

// Voir tout 
const seeall = document.querySelector(".all");

seeall.addEventListener("click", () => {
  window.location.href = "index.php"
})