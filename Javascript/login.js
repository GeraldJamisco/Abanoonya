const form = document.querySelector(".login form"),
  continueBtn = form.querySelector(".button input"),
  errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
  e.preventDefault(); // preventing form from submiting/reloading
};

continueBtn.onclick = () => {
  // AJAX starts here  after submitting
  let xhr = new XMLHttpRequest(); // creating XML object

  // xhr.open takes many parameters but we only pass method, url and async
  xhr.open("POST", "php/login.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "success") {
          location.href = "messages.php";
        } else {
          errorText.textContent = data;
          errorText.style.display = "block";
        }
      }
    }
  };
  // sending data from the form data through Ajax to php
  let formData = new FormData(form); // creating new formData object
  xhr.send(formData); //sending the form data to php
};
