<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <style media="screen">

    body {
      background: #404040;
    }

    .print {
      background: white;
      padding: 1%;
    }
    .heading {
      font-family: 'Open Sans', sans-serif;
      background: #66b3dd;
      color: white;
      padding: 1.5%;
      padding-bottom: 3%;
    }
    .heading a{
      font-family: 'Open Sans', sans-serif;
      background: rgb(85, 205, 65);
      color: white;
      padding: 10px;
      border-radius: 3px;
      box-shadow: 3px 4px 5px 0px rgba(0, 0, 0, 0.11);
    }

    </style>

    <div class="heading">
      <h3><?php $firstname = $_POST["firstname"]; echo $firstname;?>, die Generierung deiner Signatur war erfolgreich!</h3>
      <p>Kopiere den Text in der Box und folge den Anleitungen zur Einrichtung der Signatur deines Mailprogramms.</p>
      <br>
      <p>Hier gehts zu den Anleitungen für:</p>
      <a href="https://support.office.com/de-de/article/Erstellen-und-Hinzuf%C3%BCgen-einer-Signatur-zu-Nachrichten-8ee5d4f4-68fd-464a-a1c1-0e1c80bb27f2" target="_blank">Outlook</a>
      <a href="https://podio.com/linkit-hsg/intranet/apps/anleitungen/items/9" target="_blank">Apple Mail</a>
      <a href="https://podio.com/linkit-hsg/intranet/apps/anleitungen/items/8" target="_blank">Google Mail</a>
      <br>
    </div>

    <div class="print">
      <?php

      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $role = $_POST["role"];
      $mail = $_POST["mail"];
      $mobile = $_POST["mobile"];
      $html = htmlspecialchars("
      <html>

      <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
      </head>

      <body>
      <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
      <tbody>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 0px; padding-bottom: 0px; padding-right: 0px;\">
      <span style=\"color: #000000; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10pt; font-weight: bold;\">" . $firstname . " " . $lastname . "</span><br>
      </td>
      </tr>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 2px; padding-bottom: 0px; padding-right: 0px;\">
      <span style=\"margin-top: 0px; margin-bottom: 0px; color: #000000; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight: normal; font-size: 10pt; font-style: italic;\">".$role."</span><br>
      </td>
      </tr>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 12px; padding-bottom: 0px; padding-right: 0px;\">
      <span style=\"color: #000000; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10pt; font-weight: normal;\">". $mail ."</span><br>
      </td>
      </tr>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 2px; padding-bottom: 0px; padding-right: 0px;\">
      <span style=\"color: #000000; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10pt; font-weight: normal;\">Mobil: +49 (0)".$mobile."</span><br>
      </td>
      </tr>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 12px; padding-bottom: 0px; padding-right: 0px;\">
      <a href=\"http://linkit.tech/\"><img src=\"http://linkit.tech/assets/img/logo/LinkIT_Logo.jpg\" nosend=\"1\" border=\"0\" width=\"94\" height=\"53\" alt=\"linkIT\" title=\"linkIT e.V.\"></a>
      </td>
      </tr>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 4px; padding-bottom: 0px; padding-right: 0px;\">
      <span style=\"color: #000000; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10pt; font-style: normal; font-weight: bold;\">linkIT e.V. <span style=\"color: #777777; font-weight: normal;\">-</span> Die Industrie 4.0 Hochschulgruppe<br> </span>
      </td>
      </tr>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 4px; padding-bottom: 0px; padding-right: 0px;\">
      <span style=\"color: #000000; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10pt; font-style: normal; font-weight: normal;\">KIT <span style=\"color: #777777;\">-</span> Karlsruher Institut für Technologie<br> </span>
      </td>
      </tr>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 2px; padding-bottom: 0px; padding-right: 0px;\">
      <span style=\"color: #000000; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 9pt; font-style: normal; font-weight: normal;\">c/o AStA <span style=\"color: #777777;\">|</span> Adenauerring 7 <span style=\"color: #777777;\">|</span> 76131 Karlsruhe<br> </span>
      </td>
      </tr>

      <tr>
      <td valign=\"top\" align=\"left\" style=\"padding-left: 0px; padding-top: 6px; padding-bottom: 0px; padding-right: 0px;\">
      <span style=\"color: #777777; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 8pt; font-weight: regular;\">
      <b>Registergericht:</b> Mannheim VR 701224</br>
      <b>Vorstand:</b> Sebastian Findeisen, Hendrik Schmidt
      </span>
      </td>
      </tr>

      </tbody>
      </table>
      </body>

      <style>
      /a {color: #64B4DC}/
      </style>

      </html>

      ");








      echo $html;



       ?>

    </div>



  </body>
</html>
