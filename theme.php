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
        
        <!-- Renamed container to mirror the exact row settings of your social links -->
        <a href="<?= $Wcms->url() ?>" class="gini-logo-link">
  <div class="gini-logo-row">
    <div class="gini-header-circle">
      <!-- Image sourced through WonderCMS dynamic root folder paths -->
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
              
              <!-- Contact Page Spliced Additions Module -->
              <?php if ($Wcms->page('url') === 'contact' || $Wcms->currentPage === 'contact'): ?>
                <div id="gini-social-wrapper">
                  <div class="slideshow-container">
                    <img src="<?= $Wcms->asset('images/untitled1.png') ?>" alt="Showcase 1">
                    <img src="<?= $Wcms->asset('images/untitled2.png') ?>" alt="Showcase 2">
                    <img src="<?= $Wcms->asset('images/untitled3.png') ?>" alt="Showcase 3">
                    <img src="<?= $Wcms->asset('images/untitled4.png') ?>" alt="Showcase 4">

                  </div>
                  <p class="contact-prompt">Please use the options below to get in touch</p>
                  
                  <div class="icons-row">
                    <!-- Shop Link -->
                    <a href="https://ginigifts.sumup.link/" target="_blank" class="social-link-item">
                      <div class="icon-circle-frame">
                        <img src="<?= $Wcms->asset('images/gem.png') ?>" alt="Shop" class="social-icon">
                      </div>
                      <span class="icon-label">Shop</span>
                    </a>
                    <!-- eBay Link -->
                    <a href="https://www.ebay.co.uk/usr/ginigifts" target="_blank" class="social-link-item">
                      <div class="icon-circle-frame">
                        <img src="<?= $Wcms->asset('images/ebay.png') ?>" alt="eBay" class="social-icon">
                      </div>
                      <span class="icon-label">eBay</span>
                    </a>
                    <!-- Instagram Link -->
                    <a href="https://www.instagram.com/ginigifts/?hl=en" target="_blank" class="social-link-item">
                      <div class="icon-circle-frame">
                        <img src="<?= $Wcms->asset('images/instagram.png') ?>" alt="Instagram" class="social-icon">
                      </div>
                      <span class="icon-label">Instagram</span>
                    </a>
                  </div>
                </div>
              <?php endif; ?>

            </div>
          </main>
        </div>
        
        <!-- Modern Structural Architectural Navigation Layout Grid -->
        <nav id="gini-grid-nav">
          <!-- The continuous horizontal cross bar anchor line -->
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