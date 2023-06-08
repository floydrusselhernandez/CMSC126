// Open the confirmation popup
function openPopup(productId) {
  var popup = document.getElementById("popup-" + productId);
  popup.style.display = "block";
}

// Close the confirmation popup and perform the removal if confirmed
function closePopup(productId, confirmed) {
  var popup = document.getElementById("popup-" + productId);
  popup.style.display = "none";

  if (confirmed) {
    // Perform the removal using an AJAX request
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            if (this.responseText === "success") {
                // Reload the page to update the cart
                location.reload();
            } else {
                alert("Error occurred while removing the item.");
            }
        }
    };
    xmlhttp.open("GET", "remove_from_cart.php?remove=" + productId, true);
    xmlhttp.send();
  }
}

// Add event listeners to open and close the popup
var openButtons = document.querySelectorAll(".open-popup");
openButtons.forEach(function (button) {
  button.addEventListener("click", function (event) {
    event.preventDefault();
    var productId = this.getAttribute("data-product-id");
    openPopup(productId);
  });
});

var closeButtons = document.querySelectorAll(".close-popup");
closeButtons.forEach(function (button) {
  button.addEventListener("click", function (event) {
    event.preventDefault();
    var productId = this.getAttribute("data-product-id");
    closePopup(productId, false);
  });
});

var confirmButtons = document.querySelectorAll(".confirm-remove");
confirmButtons.forEach(function (button) {
  button.addEventListener("click", function (event) {
    event.preventDefault();
    var productId = this.getAttribute("data-product-id");
    closePopup(productId, true);
  });
});
