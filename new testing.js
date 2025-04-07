let navbar = document.querySelector('.navbar');
let searchForm = document.querySelector('.search-form');
let cartItem = document.querySelector('.cart-items-container');
let loginContainer = document.querySelector('.login-items-container'); 
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const loginButton = document.getElementById('login-btn');

// Menu button
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    searchForm.classList.remove('active'); 
    cartItem.classList.remove('active'); 
    loginContainer.classList.remove('active');
}

// Search button
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    navbar.classList.remove('active'); 
    cartItem.classList.remove('active'); 
    loginContainer.classList.remove('active');
}

// Cart button
document.querySelector('#cart-btn').onclick = () => {
    cartItem.classList.toggle('active');
    navbar.classList.remove('active'); 
    searchForm.classList.remove('active'); 
    loginContainer.classList.remove('active');
}

//Login button
loginButton.addEventListener('click', () => {
    loginContainer.classList.toggle('active');
    navbar.classList.remove('active'); 
    searchForm.classList.remove('active'); 
    cartItem.classList.remove('active');
});

// Event listener to switch to the "Sign Up" form
registerBtn.addEventListener('click', () => {
    container.classList.add("active"); 
});

// Event listener to switch to the "Sign In" form
loginBtn.addEventListener('click', () => {
    container.classList.remove("active"); 
});

// Close the menu, search, cart, and login when the user scrolls
window.onscroll = () => {
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
    loginContainer.classList.remove('active');
}
// Close login form when clicking outside
document.addEventListener('click', (event) => {
    const isClickInside = loginContainer.contains(event.target) || loginButton.contains(event.target);

    if (!isClickInside) {
        loginContainer.classList.remove('active');
    }
});
