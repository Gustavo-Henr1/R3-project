const loginBtn = document.querySelector("#entrar");
const registerBtn = document.querySelector("#registrar");
const loginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");

loginBtn.addEventListener('click', () => {
    loginBtn.style.backgroundColor = "rgb(0, 173, 181)";
    registerBtn.style.backgroundColor = "rgb(255, 255, 255)";

    loginForm.style.left = "50%";
    registerForm.style.left = "-150%";

    loginForm.style.opacity = 1;
    registerForm.style.opacity = 0;
});

registerBtn.addEventListener('click', () => {
    loginBtn.style.backgroundColor = "rgb(255, 255, 255)";
    registerBtn.style.backgroundColor = "rgb(0, 173, 181)";

    loginForm.style.left = "150%";
    registerForm.style.left = "50%";

    loginForm.style.opacity = 0;
    registerForm.style.opacity = 1;
});