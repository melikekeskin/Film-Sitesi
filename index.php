<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bana Film Öner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        .section h2 {
            margin: 20px 0;
            text-align: left;
            padding-left: 10px;
            color: #333;
        }

        .scroll-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 10px;
        }

        .image-box {
            width: 275px;
            height: 350px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            border: 1px solid #ccc;
            overflow: hidden;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-box:hover {
            background-color: #ccc;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">Bana Film Öner</div>
        <nav>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="korkufilmler.php">Korku Filmleri</a></li>
                <li><a href="KomediFilmleri.php">Komedi Filmleri</a></li>
                <li><a href="BilimKurguFilmleri.php">Bilim Kurgu Filmleri</a></li>
                <li><a href="AksiyonFilmleri.php">Aksiyon Filmleri</a></li>
                <li><a href="kayit.php">Yönetici Girişi</a></li>
                <li><a href="hesapolustur.php">Kayıt Ol</a></li>
            </ul>
        </nav>
    </header>

    <!-- Korku Filmleri Bölümü -->
    <section class="section">
        <h2>Korku Filmleri</h2>
        <div class="scroll-container">
            <div class="image-box"><img src="img/korku1.jpeg" alt="Korku 1"></div>
            <div class="image-box"><img src="img/korku2.jpeg" alt="Korku 2"></div>
            <div class="image-box"><img src="img/korku3.jpeg" alt="Korku 3"></div>
            <div class="image-box"><img src="img/korku4.jpeg" alt="Korku 4"></div>
            <div class="image-box"><img src="img/korku5.jpeg" alt="Korku 5"></div>
        </div>
    </section>

    <!-- Komedi Filmleri Bölümü -->
    <section class="section">
        <h2>Komedi Filmleri</h2>
        <div class="scroll-container">
            <div class="image-box"><img src="img/komedi1.jpeg" alt="Komedi 1"></div>
            <div class="image-box"><img src="img/komedi2.jpeg" alt="Komedi 2"></div>
            <div class="image-box"><img src="img/komedi3.jpeg" alt="Komedi 3"></div>
            <div class="image-box"><img src="img/komedi4.jpeg" alt="Komedi 4"></div>
            <div class="image-box"><img src="img/komedi5.jpeg" alt="Komedi 5"></div>
        </div>
    </section>

    <!-- Bilim Kurgu Filmleri Bölümü -->
    <section class="section">
        <h2>Bilim Kurgu Filmleri</h2>
        <div class="scroll-container">
            <div class="image-box"><img src="img/bilimkurgu1.jpeg" alt="Bilim Kurgu 1"></div>
            <div class="image-box"><img src="img/bilimkurgu2.jpeg" alt="Bilim Kurgu 2"></div>
            <div class="image-box"><img src="img/bilimkurgu3.jpeg" alt="Bilim Kurgu 3"></div>
            <div class="image-box"><img src="img/bilimkurgu4.jpeg" alt="Bilim Kurgu 4"></div>
            <div class="image-box"><img src="img/bilimkurgu5.jpeg" alt="Bilim Kurgu 5"></div>
        </div>
    </section>

    <!-- Aksiyon Filmleri Bölümü -->
    <section class="section">
        <h2>Aksiyon Filmleri</h2>
        <div class="scroll-container">
            <div class="image-box"><img src="img/aksiyon1.jpeg" alt="Aksiyon 1"></div>
            <div class="image-box"><img src="img/aksiyon2.jpeg" alt="Aksiyon 2"></div>
            <div class="image-box"><img src="img/aksiyon3.jpeg" alt="Aksiyon 3"></div>
            <div class="image-box"><img src="img/aksiyon4.jpeg" alt="Aksiyon 4"></div>
            <div class="image-box"><img src="img/aksiyon5.jpeg" alt="Aksiyon 5"></div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Bana Film Öner. Tüm hakları saklıdır.</p>
    </footer>
</body>
</html>
