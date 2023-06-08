function validateForm() {
    var form = document.querySelector('form');
    var checkoutBtn = document.getElementById('checkoutBtn');
    checkoutBtn.disabled = !form.checkValidity();
  }

  document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form');
    form.addEventListener('input', validateForm);
    form.addEventListener('change', validateForm);
  });

function openPopup(action) {
    var popup;
    if (action === 'checkoutPop') {
      popup = document.querySelector(".modal");
      document.getElementById("orderText").innerText = "Place your Order?";
    } else if (action === 'cancelPop') {
      popup = document.querySelector("#myModal");
      document.getElementById("cancelText").innerText = "Cancel Checkout?";
    }
    popup.style.display = 'block';

  }

  function closePopup(button) {
    var popup = button.parentNode.parentNode;
    var action = button.dataset.action;

    if (action === 'checkout') {
      // Perform checkout action
    //   window.location.href = "paymentConfirm.php";
    } else if (action === 'cancel') {
      // Perform cancel action
      window.location.href = "cart.php";
    } else if (action === 'no') {
      // Close the popup
      popup.style.display = 'none';
      location.reload();
      return;
    }
    popup.style.display = 'none';
  }