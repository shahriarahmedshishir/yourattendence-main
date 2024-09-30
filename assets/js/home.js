// Home starts here
// top bar starts here
let profile__img = document.querySelector(".profile-img");
let icon__img = document.querySelector(".icon-img");
let information_card = document.querySelector(".information-card");



profile__img.addEventListener("mouseover",()=>{
    icon__img.style.left = "80%";
    icon__img.style.transform = "rotate(0deg)";
    profile__img.style.cursor = "not-allowed";

})

icon__img.addEventListener("click",()=>{
    information_card.style.display = "block";
})

information_card.addEventListener("mouseover",()=>{
    information_card.style.display = "block";
})

information_card.addEventListener("mouseout",()=>{
    information_card.style.display = "none";
})
// top bar ends here

let Home = document.querySelector(".home");
let Dashboard = document.querySelector(".dashboard");
let Classes = document.querySelector(".classes");
let Reports = document.querySelector(".repots");
let About = document.querySelector(".abouts");

let home__btn = document.querySelector(".home-btn");
let class__btn = document.querySelector(".class-btn");
let dash__btn = document.querySelector(".dash-btn");
let repo__btn = document.querySelector(".repo-btn");
let about__btn = document.querySelector(".about-btn");
let take_atten_btn = document.querySelector(".take-attendence-btn");


home__btn.addEventListener("click",()=>{ 

home__btn.style.backgroundColor = "#2498c9";
class__btn.style.backgroundColor = "white";
dash__btn.style.backgroundColor = "white";
repo__btn.style.backgroundColor = "white";
about__btn.style.backgroundColor = "none";
home__btn.style.color = "white";
class__btn.style.color = "black";
dash__btn.style.color = "black";
repo__btn.style.color = "black";
about__btn.style.color = "black";

Home.style.left = 0;
Dashboard.style.left = "100%";
Classes.style.left = "200%";
Reports.style.left = "300%";
})
class__btn.addEventListener("click",()=>{

home__btn.style.backgroundColor = "white";
class__btn.style.backgroundColor = "#2498c9";
dash__btn.style.backgroundColor = "white";
repo__btn.style.backgroundColor = "white";
about__btn.style.backgroundColor = "white";
home__btn.style.color = "black";
class__btn.style.color = "white";
dash__btn.style.color = "black";
repo__btn.style.color = "black";
about__btn.style.color = "black";

Home.style.left = "-100%";
Classes.style.left = 0;
Dashboard.style.left = "100%";
Reports.style.left = "200%";
})
dash__btn.addEventListener("click",()=>{

home__btn.style.backgroundColor = "white";
class__btn.style.backgroundColor = "white";
dash__btn.style.backgroundColor = "#2498c9";
repo__btn.style.backgroundColor = "white";
about__btn.style.backgroundColor = "white";
home__btn.style.color = "black";
class__btn.style.color = "black";
dash__btn.style.color = "white";
repo__btn.style.color = "black";
about__btn.style.color = "black";

Home.style.left = "-200%";
Dashboard.style.left = 0;
Classes.style.left = "-100%";
Reports.style.left = "100%";
})
repo__btn.addEventListener("click",()=>{
home__btn.style.backgroundColor = "white";
class__btn.style.backgroundColor = "white";
dash__btn.style.backgroundColor = "white";
repo__btn.style.backgroundColor = "#2498c9";
about__btn.style.backgroundColor = "white";
home__btn.style.color = "black";
class__btn.style.color = "black";
dash__btn.style.color = "black";
repo__btn.style.color = "white";
about__btn.style.color = "black";

Home.style.left = "-300%";
Dashboard.style.left = "-200%";
Classes.style.left = "-100%";
Reports.style.left = 0;
})

take_atten_btn.addEventListener("click",()=>{
home__btn.style.backgroundColor = "white";
class__btn.style.backgroundColor = "#2498c9";
dash__btn.style.backgroundColor = "white";
repo__btn.style.backgroundColor = "white";
about__btn.style.backgroundColor = "white";
home__btn.style.color = "black";
class__btn.style.color = "white";
dash__btn.style.color = "black";
repo__btn.style.color = "black";
about__btn.style.color = "black";

Home.style.left = "-100%";
Classes.style.left = 0;
Dashboard.style.left = "100%";
Reports.style.left = "200%";
})


// Home ends here
