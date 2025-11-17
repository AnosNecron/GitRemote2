<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Simple</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        nav {
            background-color: #0056b3;
            padding: 10px;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        
        nav a:hover {
            text-decoration: underline;
        }
        
        main {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
        }
        
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Website Saya</h1>
    </header>
    
    <nav>
        <a href="#home">Beranda</a>
        <a href="#about">Tentang</a>
        <a href="#services">Layanan</a>
        <a href="#contact">Kontak</a>
    </nav>
    
    <main>
        <h2>Selamat Datang</h2>
        <p>Ini adalah website simple yang dibuat dengan PHP dan HTML.</p>
        
        <section>
            <h3>Informasi</h3>
            <p>Anda dapat menambahkan konten di sini.</p>
            <p>Website ini dirancang untuk memberikan informasi dasar tentang topik tertentu.</p>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Website Saya. Semua hak dilindungi.</p>
    </footer>
</body>
</html>