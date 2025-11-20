<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Digiperpus</title>
    <script src ="https://cdn.tailwindcss.com"></script>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Bagian Profil Admin -->
    <?php include_once __DIR__ .'/../views/partials/navbar_admin.php'; ?>
    <main class="ml-64 p-6 pt-24">
        <h1 class="text-3xl font-bold mb-6 bg-gradient-to-r from-blue-primary via-blue-secondary to-teal-primary bg-clip-text text-transparent tracking-tight">Profil Admin</h1>
              
        </div>
    </main>

     
</body>
</html>