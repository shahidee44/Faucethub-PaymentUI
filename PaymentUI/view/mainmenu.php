<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="main">
    QuickPay Payment UI
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav" style="font-size: 1.15rem">
      <?php

      Session::start();
      $api_key = Session::getSession('api_key');

      if(empty($api_key)) {
        require '_nosign.php'; 
      } else {
        require '_withsign.php';
      }

      ?>

    </ul>
  </div>
</nav>