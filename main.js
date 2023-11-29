document.getElementById('loginIcon').addEventListener('click', function() {
  // Adicione aqui o código para desativar o pop-up de login, se necessário.

  // Redirecione para a nova tela
  window.location.href = 'cadastro.php';
});

document.getElementById('loginButton').addEventListener('click', function() {
  // Adicione aqui o código necessário para processar o login, se houver algum.

  // Redirecione para a nova tela após o login
  window.location.href = 'cadastro.php';
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
