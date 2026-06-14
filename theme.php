<?php global $Wcms; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    <meta name="description" content="<?= $Wcms->page('description') ?>">
    <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
    
    <!-- Mandatory Core WonderCMS Styles Injections -->
    <?= $Wcms->css() ?>
    
    <!-- Link to your layout stylesheet -->
    <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
  </head>
  <body>
    <!-- Crucial Sockets Injection Hooks that render your operational Admin Dash -->
    <?= $Wcms->settings() ?>
    <?= $Wcms->alerts() ?>

    <!-- Wrapper Presentation Frame Container -->
    <div id="wrapper">
      <!-- Header Area Wrapped in an Isolated Flex Grid -->
      <header id="header" class="gini-grid-header">
        
        <a href="<?= $Wcms->url() ?>" class="gini-logo-link">
          <div class="gini-logo-row">
            <div class="gini-header-circle">
              <img src="<?= $Wcms->asset('images/gem.png') ?>" alt="GiniGifts Gem Logo" class="gem-img">
            </div>
          </div>
        </a>
        
        <!-- The continuous horizontal cross bar anchor line under the logo -->
        <div class="header-horizontal-line"></div>
        
        <div class="content">
          <main>
            <div id="content-area">
              <!-- Render database core values -->
              <?= $Wcms->page('content') ?>
              
              <!-- Retained your original parent element wrapper ID configuration -->
              <div id="gini-social-wrapper">
                <?= $Wcms->block('giniSocialSection') ?>
              </div>
            </div>
          </main>
        </div>
        
        <!-- Modern Structural Architectural Navigation Layout Grid -->
        <nav id="gini-grid-nav">
          <div class="grid-horizontal-line"></div>
          <ul>
            <?= $Wcms->menu() ?>
          </ul>
        </nav>
      </header>
      
      <!-- Footer Area -->
      <footer id="footer">
        <div class="copyright">
          &copy; GiniGifts. All rights reserved <?= date("Y") ?>
        </div>
      </footer>
    </div>

    <!-- Core Administrative Bottom Scripts -->
    <?= $Wcms->js() ?>
  </body>
</html>