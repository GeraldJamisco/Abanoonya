// password show hide toggle show or hide
const passwordfield = document.querySelector(
    ".form .field input[type='password']"
  ),
  toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
  if (passwordfield.type == "password") {
    passwordfield.type = "text";
    toggleBtn.classList.add("active");
  } else {
    passwordfield.type = "password";
    toggleBtn.classList.remove("active");
  }
};
