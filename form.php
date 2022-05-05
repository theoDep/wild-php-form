  <form  action="/thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prenom :</label>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phone">tel :</label>
      <input  type="text"  id="phone"  name="user_phone">
    </div>
    <div>
      <label  for="subject">Sujet :</label>
      <select  id="subjects"  name="user_subjects">
        <option value="probleme">Probleme</option>
        <option value="apres-vente">Service apres-vente</option>
        <option value="livraison">Livraison</option>
</select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>