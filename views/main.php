<!DOCTYPE html>
<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	 <nav class="navbar navbar-default">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#<?php echo ROOT_URL; ?>">Shareboard</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#<?php echo ROOT_URL; ?>shares">Shares</a>
      </li> 
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li class="nav-item active">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
           <a class="nav-link" href="#<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#<?php echo ROOT_URL; ?>users/logout">Logout</a>
      </li> 

          <?php else : ?>
        <a class="nav-link" href="#<?php echo ROOT_URL; ?>users/login">Login</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#<?php echo ROOT_URL; ?>users/register">Register</a>
      </li> 
    <?php endif; ?>
    </ul>
    
  </div>
</nav>
<div class="row">
  <?php Messages::display(); ?>
	<?php require($view); ?>
</div>


</body>
</html>