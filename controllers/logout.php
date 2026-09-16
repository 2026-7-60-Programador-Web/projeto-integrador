<?php
require_once __DIR__ . '/../core/autenticacao.php';

fazerLogout();
header('Location: /views/login.php');
exit;