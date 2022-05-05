<?php

// Destructuration de $_POST
['user_name' => $user_name,
 'user_firstname' => $user_firstname,
 'user_email' => $user_email,
 'user_phone' => $user_phone,
 'user_subjects' => $user_subjects,
 'user_message' => $user_message] = $_POST;

echo nl2br ("Merci $user_firstname $user_name de nous avoir contacté à propos de 
\"$user_subjects\".\n
\n
Un de nos conseiller vous contactera soit à l’adresse $user_email ou par téléphone au $user_phone dans les plus brefs délais pour traiter votre demande : \n
\n
$user_message");