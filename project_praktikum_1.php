<?php
  $array_buah = ["Pepaya","Mangga","Pisang","Jambu"];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/css/style.css" />
  <title>Document</title>
</head>
<body>
    
  <h1>array_buah.php</h1>
    <?php foreach ($array_buah as $buah):?>
    <article class="holder">
      <section class="card">
        <div class="card__text">
          <h2><?= $buah?></h2>
        </div>
      </section>
    </article>
    <?php endforeach; ?>
  </div>

</body>
</html>