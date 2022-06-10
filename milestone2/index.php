<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify</title>
  <!-- Style -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJs -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
  <header class="header">
    <div class="logo">
      <img src="../img/logo-spotify.png" alt="logo-spotify">
    </div>
  </header>

  <main id="app">
    <div class="container">
      <div class="card" v-for="item in albums">
        <div class="card_image">
          <img :src="item.poster" alt="album-poster">
        </div>
        <h4>
          {{ item.title }}
        </h4>
        <h5>
          {{ item.author }}
        </h5>
        <small>
          {{ item.year }}
        </small>
      </div>
    </div>
  </main>

  <!-- Scripts -->
  <script src="../js/script.js" type="text/javascript"></script>
</body>

</html>