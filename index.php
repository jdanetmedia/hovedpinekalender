<?php include('includes/header.php'); ?>
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Hovedpinekalender</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <?php
          if(isset($_GET) && isset($_GET['page']) && $_GET['page'] != null) {
            RouterController::router($_GET['page']);
          } else {
            include('pages/home.php');
          }
        ?>
      </div>
<?php include('includes/footer.php'); ?>
