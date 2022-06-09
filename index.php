<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">

  <title>Google FAQ</title>
</head>
<body>
  <header>
    <
    <div class="header-top">
      <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="Google Logo">
      <p>Privacy e termini</p>
    </div>
    <div class="heder-bottom">
      <ul>
        <li><a href="#">Introduzione</a></li>
        <li><a href="#">Norme sulla privacy</a></li>
        <li><a href="#">Termini di servizio</a></li>
        <li><a href="#">Tecnologie</a></li>
        <li class="active"><a href="#">Domande frequenti</a></li>
      </ul>
    </div>
  </header>
  <main>
    
    <div class="faq">
      <?php foreach($faqs as $faq): ?>
        <p class="question"><?php echo $faq["question"] ?></p>
        <div class="answer"><?php echo $faq["answer"] ?></div>
      <?php endforeach; ?>
    </div>
  </main>
</body>
</html>