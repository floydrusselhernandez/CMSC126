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
        if (this.responseText === "success") {
          // Reload the page to update the wishlist
          location.reload();
        } else {
          alert("Error occurred while removing the item.");
        }
      }
    };
    xmlhttp.open("GET", "update_wishlist.php?remove=" + productId, true);
    xmlhttp.send();
  }
}
