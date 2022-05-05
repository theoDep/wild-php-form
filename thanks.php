<?php

// Destructuration de $_POST
['user_name' => $user_name,
 'user_firstname' => $user_firstname,
 'user_email' => $user_email,
 'user_phone' => $user_phone,
 'user_subjects' => $user_subjects,
 'user_message' => $user_message] = $_POST;

$errors = [];

if(empty($_POST['user_name'])){
    $errors['user_name1'] = '* Veuillez entrer votre nom';
} else {
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['user_name'])) {
    $errors['user_name2'] = '* Veuillez entrer un nom valide';
  }
}

if(empty($_POST['user_firstname'])){
    $errors['user_firstname'] = '* Veuillez entrer votre prenom';
} else {
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['user_firstname'])) {
    $errors['user_firstname'] = '* Veuillez entrer un prenom valide';
  }
}

if(empty($_POST['user_email'])){
    $errors['user_email'] = '* Veuillez entrer votre email';
} else {
  if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
    $errors['user_email'] = '* Veuillez entrer un email valide';
  }
}

if(empty($_POST['user_phone'])){
    $errors['user_phone'] = '* Veuillez entrer votre numero de téléphone';
} else {
  if (!preg_match("/^[0-9]*$/",$_POST['user_phone'])) {
    $errors['user_phone'] = '* Veuillez entrer un numero de téléphone valide';
  }
}

if(empty($_POST['user_subjects'])){
    $errors['user_subjects'] = '* Veuillez choisir votre sujet';
} else {
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['user_subjects'])) {
    $errors['user_subjects'] = '* Veuillez entrer un sujet valide';
  }
}

if(empty($_POST['user_message'])){
    $errors['user_message'] = '* Veuillez entrer votre message';
} else {
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['user_message'])) {
    $errors['user_message'] = '* Veuillez entrer un message valide';
  }
}

if (!empty($errors)) {
  foreach ($errors as $error) {
    echo $error . '<br>';
  }
} else {
echo nl2br ("Merci $user_firstname $user_name de nous avoir contacté à propos de \"$user_subjects\".\n
Un de nos conseiller vous contactera soit à l’adresse $user_email ou par téléphone au $user_phone dans les plus brefs délais pour traiter votre demande :\n
$user_message");
}