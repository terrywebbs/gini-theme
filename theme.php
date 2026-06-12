<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript">
        function displayNextImage() {
            x = (x === images.length - 1) ? 0 : x + 1;
            document.getElementById("img").src = images[x];
        }
        function startTimer() {
            setInterval(displayNextImage, 3000);
        }
        var trans = [];
        // Updated paths to use WonderCMS template directory logic
        var images = [
              "<?= $WND->path('images/untitled3.png') ?>",
              "<?= $WND->path('images/untitled4.png') ?>",
              "<?= $WND->path('images/banner1.png') ?>",
              "<?= $WND->path('images/banner2.png') ?>",
              "<?= $WND->path('images/banner3.png') ?>",
              "<?= $WND->path('images/banner4.png') ?>",
              "<?= $WND->path('images/untitled1.png') ?>",
              "<?= $WND->path('images/untitled2.png') ?>"
            ], x = -1;
    </script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    
    <!-- Dynamic WonderCMS SEO Head Meta Tags -->
    <title><?= $WND->get('pageTitle') ?></title>
    <meta name="description" content="<?= $WND->get('pageDescription') ?>">
    <meta name="keywords" content="<?= $WND->get('pageKeywords') ?>">
    
    <!-- Essential WonderCMS CSS Hooks -->
    <?= $WND->asset('css') ?>

    <!-- Updated Stylesheet Paths -->
    <link type="text/css" rel="stylesheet" href="<?= $WND->path('style.css') ?>">
    <link rel="stylesheet" href="<?= $WND->path('css/main.css') ?>">
    <noscript><link rel="stylesheet" href="<?= $WND->path('css/noscript.css') ?>"></noscript>
    <link type="text/css" rel="alternate stylesheet" href="<?= $WND->path('css/style.css') ?>">
    
    <style>
      body {
        background-image: url("<?= $WND->path('images/firelights.gif') ?>");
        background-repeat: repeat-y;
        background-position: center;
        background-color: #000000;
      }
    </style>
  </head>
  
  <!-- Injected dynamic body class while preserving your theme styling trigger -->
  <body class="is-preload <?= $WND->get('bodyClass') ?>" onload="startTimer()">
    
    <!-- WonderCMS System Alerts and Admin Settings Login Panel -->
    <?= $WND->get('alerts') ?>
    <?= $WND->get('settings') ?>

    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Header -->
      <header id="header">
          <div class="logo">
              <span class="icon fa-gem"></span>
          </div>
          <div class="content">
              <main>
                  <!-- Main Editable WonderCMS Content Area -->
                  <?= $WND->get('content') ?>
              </main>
          </div>
          
          <nav>
              <ul>
                  <!-- Dynamic Menu: Renders editable pages from WonderCMS settings -->
                  <?= $WND->get('menu') ?>
              </ul>
          </nav>
      </header>
      
      <!-- Optional Sidebar Container for plugins or extra panels -->
      <div style="display:none;"><?= $WND->get('sidebar') ?></div>

      <!-- Footer -->
      <footer id="footer">
          <p class="copyright">
              <!-- Editable dynamic footer region -->
              <?= $WND->get('footer') ?> 
              © GiniGifts : All rights reserved 
              <script type="text/javascript">
                  var d = new Date();
                  document.write(d.getFullYear());
              </script>
          </p>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="<?= $WND->path('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= $WND->path('assets/js/browser.min.js') ?>"></script>
    <script src="<?= $WND->path('assets/js/breakpoints.min.js') ?>"></script>
    <script src="<?= $WND->path('assets/js/util.js') ?>"></script>
    <script src="<?= $WND->path('assets/js/main.js') ?>"></script>
    
    <!-- Essential WonderCMS Javascript Hook (Required for frontend editor to load) -->
    <?= $WND->asset('js') ?>
  </body>
</html>
