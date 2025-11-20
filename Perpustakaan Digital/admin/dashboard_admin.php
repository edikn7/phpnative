<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Digiperpus</title>
    <script src ="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'grey': '#c0c0c0ff',
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
<body class="bg-blue-50">

    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../admin/login.php?pesan=gagal");
	}
 
	?>
    <!-- Bagian Sidebar -->
    <?php include_once __DIR__ .'/../views/partials/navbar_admin.php'; ?>
    
        <main class="ml-64 p-6 pt-32 bg-blue-50 min-h-screen">
           

            <!-- Konten Dashboard -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

            <!-- Card Total Buku -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-blue-secondary mb-4">Total Buku</h2>
                    <p class="text-3xl font-bold text-gray-800">
                        <?php
                            include '../config.php';
                            $result = mysqli_query($config, "SELECT COUNT(*) AS total_buku FROM tbl_buku");

                        ?>
                    </p>
                </div>

            <!-- Card Total Anggota -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-blue-secondary mb-4">Total Anggota</h2>
                    <p class="text-3xl font-bold text-gray-800">
                        <?php
                            include '../config.php';
                            $result = mysqli_query($config, "SELECT COUNT(*) AS total_anggota FROM anggota");
                        
                        ?>
                    </p>
                </div>

            <!-- Card Total Peminjaman -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-blue-secondary mb-4">Total Peminjaman</h2>
                    <p class="text-3xl font-bold text-gray-800">
                        <?php
                            include '../config.php';
                            $result = mysqli_query($config, "SELECT COUNT(*) AS total_peminjaman FROM peminjaman");
                        
                        ?>
                    </p>
                </div>

            <!-- Card     

            

           
               
                   
                
                
             
            
                
                    
            

            <script>
                (function(){
                    const toggle = document.getElementById('profileToggle');
                    const menu = document.getElementById('profileMenu');
                    toggle.addEventListener('click', function(e){
                        e.preventDefault();
                        menu.classList.toggle('hidden');
                    });
                    document.addEventListener('click', function(e){
                        if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                            menu.classList.add('hidden');
                        }
                    });
                })();
            </script>
        </main> 
       
</body>
</html>