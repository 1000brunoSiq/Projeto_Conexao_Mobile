<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: ../interfaces_e_estilos/area_do_colaborador.php');
