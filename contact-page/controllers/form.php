<?php

$data['name'] = htmlspecialchars(trim($_POST['name']));
$data['email'] = htmlspecialchars(trim($_POST['email_address']));
$data['password'] = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($data['password'] === $password_confirm) {
   $data['password'] = password_hash($data['password'], 1);

   if ($app['database']->insert($data, 'contact_list')) {
      header('Location: /thanks');
   } else {
      die('Hey, your data was borked');
   }
}

die('Hey, your passwords are not right');
