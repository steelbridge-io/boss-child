<?php
// Change login logo
function boss_login_logo_one() {
  ?>
  <style type="text/css">
    body.login div#login h1 a {
      background-image: url(/wp-content/themes/boss-child/img/boss-logo.jpg);
      padding: 0 3em 30px 3em;
      background-size: 100%;
      max-width: 100%;
    }
    #login form {
      background-color: #f2830a;
      
    }
    #login p label {
      color: #f5f5f5;
    }
    body.login.login-action-login.wp-core-ui.locale-en-us {
      background-color: #E5E2D6;
    }
  </style>
  <?php
} add_action( 'login_enqueue_scripts', 'boss_login_logo_one' );