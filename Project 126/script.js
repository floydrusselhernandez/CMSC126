function openPopup() {
  document.getElementById("popup").style.display = "block";
}

var btn_id;
var parentElement;
var id;

const onClick = (event) => {
  btn_id = event.target.id;
  if (event.target.nodeName === 'BUTTON') {
    console.log(event.target.id);
  }
}
window.addEventListener('click', onClick);

function closePopup(response) {
  document.getElementById("popup").style.display = "none";
  parentElement = document.getElementById(btn_id).parentElement.parentElement.parentElement.parentElement;
  id = parentElement.id;
  if (response) {
    removeElement()
  } else {

  }
}

function removeElement() {
  const element = document.getElementById(id);
  element.remove();
}

let circles = document.querySelectorAll(".circle");
let currentPage = 1;

circles.forEach((circle, index) => {
  circle.addEventListener("click", () => {
    currentPage = index + 1;
    updatePage();
  });
});

function updatePage() {
  circles.forEach((circle, index) => {
    if (index < currentPage) {
      circle.classList.add("active");
    } else {
      circle.classList.remove("active");
    }
  });
}

document.addEventListener("DOMContentLoaded", updatePage);
