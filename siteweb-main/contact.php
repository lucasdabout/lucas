<div class="box_contact">
  <form action="contact.php" method="POST">
    <div>
      <label class="box_contact_texte" for="name">Nom</label> <input type="text" id="name" name="nom" placeholder="Nom et prénom" required style="color :grey; font-family:'franklin gothic book', sans-serif; text-align : left; padding-left :8px;"></input>
    </div>
    <div>
      <label class="box_contact_texte" for="mail">Adresse mail</label><input type="email" id="mail" name="mail" placeholder="Entrez votre adresse mail" required style="color :grey; font-family:'franklin gothic book', sans-serif; text-align : left; padding-left :8px;"></input>
    </div>
    <div>
      <label class="box_contact_texte" for="msg">Message</label><input type="text" id="msg" name="message" placeholder="Entrez un message (facultatif)" required style="color :grey; font-family:'franklin gothic book', sans-serif; text-align : left; padding-left :8px;"></input>
    </div>
    <button class="g-recaptcha"
        data-sitekey="6Lci7OMZAAAAAPOMpuJPZ7USsQkpDOiLRHAvaaRf"
        data-callback='onSubmit'
        data-action='submit'>Envoyer</button>
  </form><br><br>

</div>

<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $name = utf8_decode($_POST["name"]);
  $mail = ($_POST["mail"]);
  $msg = utf8_decode($_POST["msg"]);
  $headers = 'From :' .$nom.'<'.$mail.'>'."\r\n";
  $headers = 'Reply to: <'.$mail.'>'."\r\n";

  $to = 'lucasdabout@outlook.fr';
  mail ($to, $mail, $message, $headers);
}
?>
