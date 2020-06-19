<?php
include("logica_usuario.php");
deslogaUsuario();
header("Location: index.php?logout=true");
die();
