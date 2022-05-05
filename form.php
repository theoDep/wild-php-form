<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form  action="/thanks.php"  method="post">
      <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
        <?php if(!empty($errors['user_name1'])){ echo $errors['user_name1']; } ?>
      </div>
      <div>
        <label  for="prenom">Prenom :</label>
        <input  type="text"  id="prenom"  name="user_firstname">
        <?php if(!empty($errors['user_firstname'])){ echo $errors['user_firstname']; } ?>
      </div>
      <div>
        <label  for="courriel">Courriel :</label>
          <input  type="email"  id="courriel"  name="user_email">
          <?php if(!empty($errors['user_email'])){ echo $errors['user_email']; } ?>
      </div>
      <div>
        <label  for="phone">tel :</label>
        <input  type="text"  id="phone"  name="user_phone">
        <?php if(!empty($errors['user_phone'])){ echo $errors['user_phone']; } ?>
      </div>
      <div>
        <label  for="subject">Sujet :</label>
        <select  id="subjects"  name="user_subjects">
          <option value="probleme">Probleme</option>
          <option value="apres-vente">Service apres-vente</option>
          <option value="livraison">Livraison</option>
  </select>
        <?php if(!empty($errors['user_subjects'])){ echo $errors['user_subjects']; } ?>
      </div>
      <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
        <?php if(!empty($errors['user_message'])){ echo $errors['user_message']; } ?>
      </div>
      <div  class="button">
        <button  type="submit">Envoyer votre message</button>
      </div>
    </form>
  
</body>
</html>