<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify</title>
  <!-- Style -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header class="header">
    <div class="logo">
      <img src="../img/logo-spotify.png" alt="logo-spotify">
    </div>
  </header>

  <main>
    <div class="container">
      <?php include __DIR__ . "/../database.php"; ?>
      <?php foreach ($database as $item) { ?>
        <div class="card">
          <div class="card_image">
            <?php echo '<img src="' . $item["poster"] . '" alt="error">'; ?>
          </div>
          <h4>
            <?php echo $item["title"]; ?>
          </h4>
          <h5>
            <?php echo $item["author"]; ?>
          </h5>
          <small>
            <?php echo $item["year"]; ?>
          </small>
        </div>
      <?php } ?>
    </div>
  </main>
</body>

</html>