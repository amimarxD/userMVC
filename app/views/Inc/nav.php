
<header>  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo ROOTPATH; ?>">My Site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      <ul class="navbar-nav">
        <?php if (!empty($_SESSION['user_id']) && isset($_SESSION['user_id'])) : ?>

          <?php
          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="';
          echo ROOTPATH;
          echo '/users/profile/' . $_SESSION['user_id'] . '">';
          echo $_SESSION['user_name'];
          echo '</a>';
          echo '</li>';

          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="';
          echo ROOTPATH;
          echo '/users/logout">';
          echo 'Logout';
          echo '</a>';
          echo '</li>';
          ?>

        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOTPATH; ?>/users/signup">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOTPATH; ?>/users/login">Login</a>
          </li>
        <?php endif; ?>
      </ul>
      </div>
    </div>
  </nav>
</header>