document.addEventListener('DOMContentLoaded', function () {
    let newsletterPopup = document.getElementById('newsletter-popup');
    let thankYouPopup = document.getElementById('thank-you-popup');
    let subscribeForm = document.getElementById('subscribe-form');

    setTimeout(function () {
      newsletterPopup.style.display = 'flex'; 
      setTimeout(function () {
        newsletterPopup.style.opacity = 1;
      }, 10);
    }, 2000);

    document.getElementById('close-popup').addEventListener('click', function () {
      hidePopup(newsletterPopup);
    });

    subscribeForm.addEventListener('submit', function (event) {
      event.preventDefault();

      let emailInput = document.querySelector('#email');
      let email = emailInput.value;

      let req = new XMLHttpRequest();
      req.onreadystatechange = function () {
        if (req.readyState === 4) {
          if (req.status === 200) {
            showThankYouPopup();
          } else {
            console.error('Error:', req.status, req.statusText);
          }
        }
      };

      let formData = new FormData();
      formData.append('email', email);
      req.open('POST', 'process-newsletter.php', true);
      req.send(formData);
    });

    document.getElementById('close-thank-you-popup').addEventListener('click', function () {
      hidePopup(thankYouPopup);
    });

    function showThankYouPopup() {
      hidePopup(newsletterPopup);
      thankYouPopup.style.display = 'flex';
      setTimeout(function () {
        thankYouPopup.style.opacity = 1;
      }, 10);
    }

    function hidePopup(popupElement) {
      popupElement.style.opacity = 0;
      setTimeout(function () {
        popupElement.style.display = 'none';
      }, 500);
    }
  });