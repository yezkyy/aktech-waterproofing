<?php
$pageTitle = "AK Tech Waterproofing - Waterproofing & Injeksi Beton";
$pageDesc  = "Jasa waterproofing dan injeksi beton profesional terpercaya di Subang, Jawa Barat.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="<?= $pageDesc ?>"/>
  <title><?= $pageTitle ?></title>

  <!-- Google Fonts: Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <!-- AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

  <!-- ✅ STEP 1: Tailwind Config DULU sebelum CDN -->
  <script>
    tailwind = {
      config: {
        theme: {
          extend: {
            colors: {
              navy: {
                50:  '#e8edf5',
                100: '#c5d0e6',
                200: '#9fb0d5',
                300: '#7890c4',
                400: '#5a77b8',
                500: '#3c5ea8',
                600: '#2d4f96',
                700: '#1e3a5f',
                800: '#162d4a',
                900: '#0e1f35',
              }
            },
            fontFamily: {
              poppins: ['Poppins', 'sans-serif'],
            },
          }
        }
      }
    }
  </script>

  <!-- ✅ STEP 2: Baru load Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body class="font-poppins bg-white text-gray-800 overflow-x-hidden">

  <?php include_once __DIR__ . '/components/navbar.php'; ?>
  <?php include_once __DIR__ . '/components/hero.php'; ?>
  <?php include_once __DIR__ . '/components/about.php'; ?>
  <?php include_once __DIR__ . '/components/why-us.php'; ?>
  <?php include_once __DIR__ . '/components/services.php'; ?>
  <?php include_once __DIR__ . '/components/pricing.php'; ?>
  <?php include_once __DIR__ . '/components/products.php'; ?>
  <?php include_once __DIR__ . '/components/footer.php'; ?>

  <!-- AOS JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <!-- Particles JS -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

</body>
</html>