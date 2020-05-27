<?php
  header("Content-Type: text/plain");

  $firstName = isset($_GET['first_name']) ? $_GET['first_name'] : null;
  $lastName = isset($_GET['last_name']) ? $_GET['last_name'] : null;
  $email = isset($_GET['email']) ? $_GET['email'] : null;
  $age = isset($_GET['age']) ? $_GET['age'] : null;
	
  if ($email !== null && strlen($email) > 0)
  {
    $filename = 'data/' . $email . '.txt';
    $data = array('first_name' => $firstName, 'last_name' => $lastName, 'email' => $email, 'age' => $age);
    $data = serialize($data);
		
    if (!file_exists('data/')) 
    {
      mkdir('data/', 0777, true);
    }
		
    file_put_contents($filename, $data);
  }
  else
  {
    echo 'Данные некоректны';
  }