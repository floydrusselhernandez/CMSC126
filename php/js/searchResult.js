



function resetFilter() {
  // Get the existing URL parameters
  var urlParams = new URLSearchParams(window.location.search);

  // Remove the 'categories' parameter
  urlParams.delete('categories');

  // Remove the 'page' parameter or set it to 1
  urlParams.set('page', 1);

  // Reload the page with the updated URL
  window.location.href = window.location.pathname + '?' + urlParams.toString();
}

function applyFilter() {

  // Get selected category checkboxes
  var existingCategories = getSelectedCheckboxes('categories');

  // Get the existing pagenum parameter
  var pageNum = getParameterByName('pagenum');

  // Construct the filter URL with selected options
  var filterUrl = 'searchResult.php?category=' + encodeURIComponent(existingCategories);

  if (selectedCategories.length > 0) {
    filterUrl += '&categories=' + encodeURIComponent(selectedCategories.join(','));
  }

  if (pageNum) {
    filterUrl += '&pagenum=' + encodeURIComponent(pageNum);
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
  var selectedCategories = getParameterByName('categories');

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
