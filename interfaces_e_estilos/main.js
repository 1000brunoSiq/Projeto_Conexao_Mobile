document.getElementById('loginIcon').addEventListener('click', function() {
  
  window.location.href = '../interfaces_e_estilos/login_cliente.php';
});

document.getElementById('loginButton').addEventListener('click', function() {
  

  window.location.href = '../interfaces_e_estilos/login_cliente.php';
});

var userIcon = document.getElementById('userIcon');
var loginIcon = document.getElementById('loginIcon');
var cartIcon = document.getElementById('cartIcon');

userIcon.addEventListener('click', function() {
  loginIcon.classList.remove('invi');
  userIcon.classList.add('invi');
  cartIcon.classList.add('invi');
});

document.getElementById("metodo_pagamento").addEventListener("change", function () {
  var metodoPagamento = this.value;

  // Esconder todos os campos específicos
  document.getElementById("cartao_campos").style.display = "none";
  document.getElementById("boleto_campos").style.display = "none";
  document.getElementById("pix_campos").style.display = "none";

  // Mostrar os campos específicos do método selecionado
  if (metodoPagamento === "cartao") {
      document.getElementById("cartao_campos").style.display = "block";
  } else if (metodoPagamento === "boleto") {
      document.getElementById("boleto_campos").style.display = "block";
  } else if (metodoPagamento === "pix") {
      document.getElementById("pix_campos").style.display = "block";
  }
});
