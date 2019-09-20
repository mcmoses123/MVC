<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
	<link rel="stylesheet" href="http://mcholding-com.stackstaging.com/content/MVC/styles.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://mcholding-com.stackstaging.com/content/MVC/">Twit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="?page=timeline">Your timeline</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=yourtweets" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
          Your tweets
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="?page=publicprofiles" tabindex="-1" aria-disabled="true">Public Profiles</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
	<?php if($_SESSION['id']){?>
		<a class="btn btn-outline-success my-2 my-sm-0" href="?function=logout">Logout</a>
	
	<?php }else{?>
      <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Sign Up/Login</button>
	<?php } ?>
    </div>
  </div>
</nav>