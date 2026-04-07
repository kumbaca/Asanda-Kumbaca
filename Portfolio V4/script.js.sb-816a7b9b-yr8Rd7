document.addEventListener("DOMContentLoaded", () => {

const heroBtn = document.getElementById("heroBtn");
const servicesBtn = document.getElementById("servicesBtn");
const portfolioBtn = document.getElementById("portfolioBtn");
const portfolio = document.getElementById("portfolio");
const briefForm = document.getElementById("briefForm");
const cancelBtn = document.getElementById("cancelBrief");
const kitsBtn = document.getElementById("kitsBtn");

/* HERO */
heroBtn.onclick = () => {
  heroBtn.classList.add("active-dark");
  portfolio.scrollIntoView({behavior:"smooth"});
};

/* SERVICES */
servicesBtn.onclick = () => {
  if(confirm("Open WhatsApp?")){
    window.open("https://web.whatsapp.com/", "_blank");
  }
};

/* PORTFOLIO */
portfolioBtn.onclick = (e) => {
  e.preventDefault();
  document.querySelectorAll(".portfolio-item")
    .forEach(el => el.classList.toggle("active"));
};

/* BRIEF */
briefForm.onsubmit = (e) => {
  e.preventDefault();
  const email = document.getElementById("userEmail").value;

  if(!email){
    alert("Enter email");
    return;
  }

  if(confirm("Save brief?")){
    alert("Saved (demo)");
  }
};

cancelBtn.onclick = () => {
  if(confirm("Cancel?")){
    briefForm.reset();
  }
};

/* CREATIVE KITS */
kitsBtn.onclick = (e) => {
  e.preventDefault();
  window.open("https://www.canva.com/templates/EAEvfdv6Qrg/", "_blank");
};

});