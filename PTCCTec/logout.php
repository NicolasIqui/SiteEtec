<?php
session_start(); // Inicia a sessão

// Destrói todas as variáveis de sessão
session_unset(); 

// Destroi a sessão
session_destroy();

// Redireciona para a página de login ou outra página
header("Location: Index.php");
exit();
?>
