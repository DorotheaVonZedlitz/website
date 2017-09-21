<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <title></title>
  </head>
  <body>

<style media="screen">
  body {
    background: #404040;
  }

  .formdiv {
    padding: 10%;
  }
  .mailform {
    padding: 1%;
    background: #66b3dd;
  }
  .mailform input {
    width: 95%;
    padding: 1%;
  }
  .mailform label {
    font-family: 'Open Sans', sans-serif;

    padding: 0%;
    margin-bottom: 1%;
    margin-top: 1%;
  }
  #btn {
    font-family: 'Open Sans', sans-serif;
    background: rgb(85, 205, 65);
    color: white;
  }
  #btn:hover {
    font-family: 'Open Sans', sans-serif;
    background: rgb(70, 169, 53);
    color: white;
  }

  .inputbox {
    padding: 1%;
  }
</style>

<div class="formdiv">
  <form class="mailform" action="generator.php" method="post">
    <div class="inputbox">
      <label for="firstname">Dein Vorname:</label>
      <input type="text" name="firstname" value="Vorname" onfocus="if (this.value=='Vorname') this.value='';" required>
    </div>
    <div class="inputbox">
      <label for="lastname">Dein Nachname:</label>
      <input type="text" name="lastname" value="Nachname" onfocus="if (this.value=='Nachname') this.value='';"required>
    </div>
    <div class="inputbox">
      <label for="role">Deine Rolle (z.B. Ressort IT oder Ressortleiter Marketing):</label>
      <input type="text" name="role" value="Rolle"onfocus="if (this.value=='Rolle') this.value='';"required>
    </div>
    <div class="inputbox">
      <label for="mail">Deine linkIT Mail:</label>
      <input type="text" name="mail" value="vorname.nachname@linkit.tech" onfocus="if (this.value=='vorname.nachname@linkit.tech') this.value='';"required>
    </div>
    <div class="inputbox">
      <label for="mobile">+(49) wird automatisch vor die Nummer gesetzt.
      Bitte nur den "weißen Teil" der Nummer eingeben. Bsp.: +(49) <i style="color: white">172 12345678</i></label>
      <input type="text" name="mobile" value="Handynummer" onfocus="if (this.value=='Handynummer') this.value='';"required>
    </div>
    <div class="inputbox">
      <input id="btn" type="submit" name="" value="Generieren">
    </div>


  </form>
</div>


  </body>
</html>
