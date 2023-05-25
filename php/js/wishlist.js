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

function applyFilter() {
  // Get selected genre checkboxes
  var selectedGenres = document.querySelectorAll('input[name="genre"]:checked');
  var genres = Array.from(selectedGenres).map(function (checkbox) {
    return checkbox.value;
  });

  // Get selected category checkboxes
  var selectedCategories = document.querySelectorAll('input[name="categories"]:checked');
  var categories = Array.from(selectedCategories).map(function (checkbox) {
    return checkbox.value;
  });

  // Get selected price checkbox
  var selectedPrice = document.querySelector('input[name="price"]:checked');
  var price = selectedPrice ? selectedPrice.value : '';

  // Construct the filter URL with selected options
  var filterUrl = 'wishlist.php?sortby=' + encodeURIComponent(getParameterByName('sortby'));

  if (genres.length > 0) {
    filterUrl += '&genre=' + encodeURIComponent(genres.join(','));
  }

  if (categories.length > 0) {
    filterUrl += '&categories=' + encodeURIComponent(categories.join(','));
  }

  if (price !== '') {
    filterUrl += '&price=' + encodeURIComponent(price);
  }

  // Redirect to the filtered wishlist
  location.href = filterUrl;
}

// Helper function to get the value of a URL parameter by name
function getParameterByName(name) {
  var url = window.location.href;
  name = name.replace(/[[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
  var results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
