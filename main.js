document.getElementById('loginIcon').addEventListener('click', function() {
    var loginScreen = document.querySelector('.login_screen');
    loginScreen.style.zIndex = '10';
    loginScreen.style.opacity = '1';
    loginScreen.style.transition = 'opacity 0.5s ease-in, z-index 0.5s ease-out';
  });

  document.getElementById('loginButton').addEventListener('click', function() {
    document.getElementById('loginIcon').classList.add('invi');
    document.getElementById('userIcon').classList.remove('invi');
    document.getElementById('cartIcon').classList.remove('invi');
    var loginScreen = document.querySelector('.login_screen');
    loginScreen.style.zIndex = '-10';
    loginScreen.style.opacity = '0';
    loginScreen.style.transition = 'opacity 0.5s ease-in, z-index 0.5s ease-out';
  });

var userIcon = document.getElementById('userIcon');
var loginIcon = document.getElementById('loginIcon');
var cartIcon = document.getElementById('cartIcon');

userIcon.addEventListener('click', function() {
  loginIcon.classList.remove('invi');
  userIcon.classList.add('invi');
  cartIcon.classList.add('invi');
});
