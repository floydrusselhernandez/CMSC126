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

function applySort() {
  // Get the selected sort option
  var sortBy = document.getElementById('sortby').value;

  // Get the existing query parameters from the URL
  var urlParams = new URLSearchParams(window.location.search);

  // Update the sort by parameter
  urlParams.set('sortby', sortBy);

  // Redirect to the updated URL
  location.href = 'wishlist.php?' + urlParams.toString();
}

function resetFilter() {
  // Get the existing URL parameters
  var urlParams = new URLSearchParams(window.location.search);

  // Remove the 'categories' parameter
  urlParams.delete('categories');

  // Remove the 'genre' parameter
  urlParams.delete('genre');

  // Reload the page with the updated URL
  window.location.href = window.location.pathname + '?' + urlParams.toString();
}

function applyFilter() {
  // Get selected genre checkboxes
  var selectedGenres = getSelectedCheckboxes('genre');

  // Get selected category checkboxes
  var selectedCategories = getSelectedCheckboxes('categories');

  // Get the existing sortby parameter from the URL
  var existingSortBy = getParameterByName('sortby');

  // Construct the filter URL with selected options
  var filterUrl = 'wishlist.php?sortby=' + encodeURIComponent(existingSortBy);

  if (selectedCategories.length > 0) {
    filterUrl += '&categories=' + encodeURIComponent(selectedCategories.join(','));
  }

  if (selectedGenres.length > 0) {
    filterUrl += '&genre=' + encodeURIComponent(selectedGenres.join(','));
  }

  // Redirect to the filtered wishlist
  location.href = filterUrl;
}

// Helper function to get the selected checkboxes by name
function getSelectedCheckboxes(name) {
  var checkboxes = document.querySelectorAll('input[name="' + name + '"]:checked');
  var selectedValues = Array.from(checkboxes).map(function (checkbox) {
    return checkbox.value;
  });
  return selectedValues;
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

// Function to initialize the filters and keep the selected checkboxes checked
function initializeFilters() {
  // Get the selected filters from the URL parameters
  var selectedGenres = getParameterByName('genre');
  var selectedCategories = getParameterByName('categories');

  // Check the selected genre checkboxes
if (selectedGenres) {
  var genres = selectedGenres.split(",");
  var genreCheckboxes = document.querySelectorAll('input[name="genre"]');
  genreCheckboxes.forEach(function (checkbox) {
    if (genres.includes(checkbox.value)) {
      checkbox.checked = true;
    }
  });
}

// Check the selected category checkboxes
if (selectedCategories) {
  var categories = selectedCategories.split(",");
  var categoryCheckboxes = document.querySelectorAll('input[name="categories"]');
  categoryCheckboxes.forEach(function (checkbox) {
    if (categories.includes(checkbox.value)) {
      checkbox.checked = true;
    }
  });
}

}

// Initialize the filters on page load
initializeFilters();
