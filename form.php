<?php
// Check of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verwerkingscode hier
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mijn gecombineerde pagina</title>
</head>
<body>

  <h1>Formulier</h1>

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Naam: <input type="text" name="naam"><br>
    E-mail: <input type="email" name="email"><br>
    Bericht: <textarea name="bericht"></textarea><br>
    <input type="submit" value="Verzenden">
  </form>

  <?php
  // Plaats hier alle inhoud van de tweede pagina
  ?>

</body>
</html>
