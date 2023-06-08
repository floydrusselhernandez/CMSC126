

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
    document.body.style.overflow = 'hidden';

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