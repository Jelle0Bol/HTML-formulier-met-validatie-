<?php
$naamErr = $emailErr = "";
$naam = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["naam"])) {
    $naamErr = "Naam is verplicht";
  } else {
    $naam = test_input($_POST["naam"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "E-mail is verplicht";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Ongeldig e-mailadres";
      $email = "";
    }
  }

  // Als beide velden zijn ingevuld, verwerk het formulier
  if (!empty($naam) && !empty($email)) {
    // Verwerkingscode hier
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
