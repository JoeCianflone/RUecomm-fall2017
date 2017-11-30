<?php

// This is our homepage route,
$router->get('/', 'controllers/index.php');

$router->get('/admin', 'controllers/about.php');

$router->get('/thanks', 'controllers/thanks.php');

$router->post('/form', 'controllers/form.php');
