<?php
  header("Content-Type: text/plain");
	
  $email = isset($_GET['email']) ? $_GET['email'] : null;

  if ($email !== null && strlen($email) > 0)
  {
    $filename = 'data/' . $email . '.txt';
    $data = file_get_contents($filename);
    $data = unserialize($data);
    echo 'First Name: ' . $data['first_name'] . "\n";
    echo 'Last Name: ' . $data['last_name'] . "\n";
    echo 'Email: ' . $data['email'] . "\n";
    echo 'Age: ' . $data['age'] . "\n";
  }
  else
  {
    echo 'Данные некоректны';
  }