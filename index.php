<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Les Argonautes</title>
</head>

<body>
  <!-- Header section -->
  <header>
    <h1>
      <img class="logo" src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
      Les Argonautes
    </h1>
  </header>

  <!-- Main section -->
  <main>

    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form method="POST" action="insert.php" class="new-member-form">
      <label for="name">Nom de l&apos;Argonaute</label>
      <input id="name" name="name" type="text" placeholder="Charalampos" />
      <button type="submit">Envoyer</button>
    </form>

    <!-- Member list -->
    <div class="crew-count">
      <img class="argo__left" src="images/argo__left.gif" alt="Argo left">
      <h2 id="team">Il y a actuellement <span id="counter-label">0</span> membre d'équipage</h2>
      <img class="argo__right" src="images/argo__right.gif" alt="Argo right">
    </div>
    <section class="row member-list">
    </section>
  </main>

  <footer>
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
  </footer>

  <!-- mes scripts  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>

</html>