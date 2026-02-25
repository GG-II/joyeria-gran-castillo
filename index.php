<?php
// ================================================
// PÁGINA DE INICIO
// ================================================

require_once 'config.php';
require_once 'includes/db.php';
require_once 'includes/funciones.php';
require_once 'includes/auth.php';

// Si está autenticado, ir al dashboard
if (esta_autenticado()) {
    redirigir('dashboard.php');
}

// Si no está autenticado, ir al login
redirigir('login.php');
?>