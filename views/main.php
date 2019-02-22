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
        <a class="nav-link" href="#<?php echo ROOT_URL; ?>users/login">Login</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#<?php echo ROOT_URL; ?>users/register">Register</a>
      </li> 
    </ul>
    
  </div>
</nav>
<div class="row">
	<?php require($view); ?>
</div>


</body>
</html>