<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Anggota - Digiperpus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-primary': '#1e40af',
                        'blue-secondary': '#3b82f6',
                        'teal-primary': '#0d9488',
                        'teal-secondary': '#14b8a6',
                        'cyan-accent': '#06b6d4',
                        'emerald-accent': '#10b981'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-blue-50 min-h-screen">
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>

    <!-- Navbar -->
    <?php include_once __DIR__ .'/../views/partials/navbar_anggota.php'; ?>


    
    <main class="p-8 pt-32 bg-blue-50 min-h-screen">
        <div class="mb-6">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <h2 class="text-3xl text-blue-secondary font-semibold mb-4">Selamat Datang <?php echo $_SESSION['username']; ?> di Digiperpus!</h2>
                <p class="text-gray-600">Jelajahi koleksi buku digital kami dan nikmati pengalaman membaca yang menyenangkan.</p>
            </div>
        </div>

        <!-- Rekomendasi Buku Hari ini -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-blue-secondary mb-4">Rekomendasi Buku Hari ini</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php
                include '../config.php';
                $query = mysqli_query($config, "SELECT * FROM buku ORDER BY RAND() LIMIT 8");
                while($buku = mysqli_fetch_array($query)){
                ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="../admin/cover/<?= $buku['cover']; ?>" alt="<?= $buku['judul']; ?>" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2"><?= $buku['judul']; ?></h3>
                        <p class="text-gray-600 mb-1">Pengarang: <?= $buku['pengarang']; ?></p>
                        <p class="text-gray-600 mb-1">Penerbit: <?= $buku['penerbit']; ?></p>
                        <p class="text-gray-600">Kategori: <?= $buku['kategori']; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

            
        

    </main>

    
      
</body>
</html>