let navbar = document.querySelector(".header .flex .navbar");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
};

document.querySelector("#user-btn").onclick = () => {
  navbar.classList.remove("active");
};

function fadeOut() {
  setInterval(loader, 2000);
}

window.onload = fadeOut;
