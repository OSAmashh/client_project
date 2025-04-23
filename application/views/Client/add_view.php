<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Client</title> 

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

	<style>
		body {
			font-family: 'Segoe UI', Tahoma, sans-serif;
			background-image: url('https://wallpaperaccess.com/full/317501.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: 100vh;
			margin: 0;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.container {
  width: 100%;
  max-width: 500px;
  background: rgba(255, 255, 255, 0.15); 
  border-radius: 10px;
  padding: 30px;
  box-shadow: 0 0 20px rgba(0,0,0,0.4);
  backdrop-filter: blur(15px); 
  -webkit-backdrop-filter: blur(15px);
  border: 1px solid rgba(255, 255, 255, 0.3); 
}

		h2 {
			text-align: center;
			margin-bottom: 25px;
			color: #007b8a;
			font-weight: bold;
		}

		label {
			font-weight: bold;
		}

		.form-control {
			margin-bottom: 15px;
		}

		button {
			background-color:rgb(68, 169, 158);
			width: 100%;
		}
		.mb{
			font-family: sans-serif;
			
			text-align: center;
		}
		.navbar-brand {
      font-size: 20px;
      color: #ffffff;
      text-shadow: 0 0 5px #ffffff80;
    }

    .custom-navbar {
      background-color: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(14px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      padding: 10px 25px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 999;
    }

    .custom-navbar .nav-link {
      color: #ffffffcc;
      font-weight: 500;
      margin-left: 15px;
      transition: 0.3s;
    }

    .custom-navbar .nav-link:hover,
    .custom-navbar .active-link {
      color: #00ffd5;
      text-shadow: 0 0 5px #00ffd5aa;
    }
.btn{
	background-color:rgb(68, 169, 158);
}
.mb{
	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
	</style>
</head>

<body>
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold text-white" href="<?= site_url('home'); ?>">Client System</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active-link" href="<?= site_url('home'); ?>">Clients</a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('home/add'); ?>">+ Add</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
	<h2>Insert New Client</h2>
	<form method="post" action="<?php echo site_url('home/add'); ?>">
		<div class="mb">
		<label for="name">NAME</label>
			<input type="text" name="name" class="form-control" required>
		</div>

		<div class="mb">
		<label for="email">EMAIL  
		</label>
	<input type="email" name="email" class="form-control" required>
	</div>
			<button type="submit" class="btn">ADD</button>
		</form>
	</div>
</body>
</html>
