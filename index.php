<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kos Waifu: Jangan pada halu</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1f1f1;
    }

    header {
      background-color: #353535;
      padding: 20px 0;
      color: #FFFF;
    }
    
    .container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 1000px;
      margin: 0 auto;
    }

    header img {
      width: 150px;
    }

    header h1 {
      margin-bottom: 5px;
      font-size: 2em;
    }

    header p {
      margin: 0;
    }

    nav {
      display: flex;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    nav a {
      padding: 10px 15px;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    header .social {
      display: flex;
    }

    header .social img {
      width: 30px;
      margin-left: 10px;
    }

    .hero {
      background-color: #fff;
      padding: 80px 0;
    }

    .container-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .text-content {
      text-align: center;
    }

    .text-content h2 {
      margin-bottom: 20px;
      font-size: 2.5em;
    }

    .image {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .image img {
      max-width: 100%; 
      max-height: 400px;
    }

    @media (max-width: 768px) {
      .container-grid {
        grid-template-columns: 1fr; 
      }
    }

    footer {
      background-color: #353535;
      color: white;
      text-align: center;
      padding: 20px 0;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
    }
    
  </style>
</head>

<body>
  <header>
    <div class="container">
      <p>KOS ANIME</p>
    </div>
  </header>
  <main>
    <section class="hero">
      <div class="container-grid">
        <div class="text-content">
          <h2>Selamat Datang Di Kos Anime!</h2>
          <p>Tempat Karakter Fiktif Berteduh</p>
          <div class="buttons">
            <a href="penghuni.php">Registrasi pengunjung</a>
          </div>
        </div>
        <div class="image">
          <img src="image/Untitled17_20240423192730.png" alt="Anime Character Image">
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container">
      <p>2024 Kos Waifu. All Rights Reserved </p>
    </div>
  </footer>
</body>

</html>
