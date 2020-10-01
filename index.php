
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Osallistu</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>



    <h1>Tapahtuma 10.10!</h1>
    <h3>Osallistu hulpeaan tapahtumaan 10.10.2020! <br> Täytä alla oleva lomake niin pääset mukaan upeaan seikkailuun.</h3>
    <p>Tapahtuman ikäraja on 16v ja tarkemmat ajankohdat ilmoitetaan myöhemmin.</p>



    <form class="form" action="send.php" method="post">

      <div class="child">

      <label for="sukunimi">Sukunimi:</label> <br>
      <input type="text" name="sukunimi" value="" required> <br>

      <label for="etunimi">Etunimi:</label> <br>
      <input type="text" name="etunimi" value="" required> <br>

      <label for="osoite">Osoite:</label> <br>
      <input type="text" name="osoite" value="" required> <br>

      <label for="postinumero">Postinumero:</label> <br>
      <input type="text" name="postinumero" value="" required> <br>

      <label for="puhelin">Puhelin:</label> <br>
      <input type="text" name="puhelin" value="" required> <br>

      <label for="sposti">Sähköposti:</label> <br>
      <input type="email" name="sposti" value="" required> <br>

      <label for="svuosi">Syntymävuosi:</label> <br>
      <input type="number" name="svuosi" value="" min="1900" max="2020" required> <br>

</div> <br>

  <input class="nappi" type="submit" value="Lähetä">

    </form>



  </body>
</html>
