<?php // <-- Här öppnar vi PHP-taggen.



if (isset($_POST['submit'])) { // Här kollar vi om "Skicka"-knappen är klickad och vad som ska hända efter att den är klickad.



// Kollar ifall förnamnet INTE är ifyllt och ger isåfall ett felmeddelande till användaren.

if (!$_POST['firstName']) {

$error = "- Please enter your first name.";

}



// Kollar ifall efternamnet INTE är ifyllt och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.

if (!$_POST['lastName']) {

$error = "<br>- Please enter your last name.";

}



// Kollar ifall e-postadressen INTE är ifylld och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.

if (!$_POST['email']) {

$error .= "<br>- Please enter your email adress.";

}



// Kollar ifall meddelandet INTE är ifyllt och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.

if (!$_POST['message']) {

$error .= "<br>- Please enter your message.";

}



// Kollar ifall svaret är något annat än 5 och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.

if (intval($_POST['human']) !== 5) {

$error .= "<br>- Please verify your not a robot.";

}



// Här kollar vi ifall det finns några fel och om det finns så skriver vi ut dem åt användaren.

if ($error) {

$result = "Oh no! An Error! Please correct the following: $error";

}



// Skickar mejlet ifall alla fält är ifyllda och inga fel finns.

else {



// PHPs mailfunktion.

mail(

  "example@example.com", // <-- Adressen dit mejlet skickas

  "Subject line", // <-- Mejlets ämnesrad.

  "Name: " .$_POST['firstName']. // <-- Det användaren har angett som förnamn i formuläret.

  "\r\nEmail: " .$_POST['email']. // <-- Det användaren har angett som e-postadress i formuläret. \r\n gör radbrytningar i själva mejlet.

  "\r\nMessage: " .$_POST['message'] // <-- Det användaren har angett som meddelande i formuläret. \r\n gör radbrytningar i själva mejlet.

);



// Texten som visas efter att mejlet skickats.

{

  $result = "Thank you! We will be in touch shortly.";

}

}

}



?> <!-- Här avslutar vi PHP-taggen. -->



<!-- Nytt anti-spam fält som kollar ifall användaren räknat rätt. -->
