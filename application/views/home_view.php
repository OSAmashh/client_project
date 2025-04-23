<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Clients System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('https://wallpaperaccess.com/full/317501.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding-top: 100px;
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

    .a {
	  backdrop-filter: blur(15px); 
  -webkit-backdrop-filter: blur(15px);

      max-width: 1000px;
      margin: auto;
	  background: rgba(255, 255, 255, 0.15); 
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .b {
      text-align: center;
	  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-weight: bold;
      color:rgb(207, 215, 214);
      margin-bottom: 30px;
    }

    .c {
      font-size: 15px;
      background-color: rgba(255, 255, 255, 0.75);
    }

    .d {
      padding: 6px 14px;
      font-weight: bold;
      border-radius: 6px;
      font-size: 14px;
      border: none;
    }

    .d.edit {

		border-radius: 25%;
      background-color:rgb(68, 169, 158);
      color: white;
    }

    .d.delete {
      background-color: #ff6363;
      color: white;
	  border-radius: 25%;

    }

    .d.edit:hover {
      background-color:rgb(16, 20, 17);
    }

    .d.delete:hover {
      background-color: #cc3b3b;
    }

    .e {
      display: block;
      margin: 25px auto 0;
      background-color:rgb(68, 169, 158);
      color: white;
      font-weight: bold;
      font-size: 16px;
      padding: 10px 20px;
      border-radius: 8px;
      text-align: center;
      text-decoration: none;
      width: fit-content;
    }

    .e:hover {
      background-color:rgb(20, 23, 21);
      text-decoration: none;
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
            <a class="nav-link" href="<?= site_url('home/edit/'); ?>">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('home/add'); ?>">+ Add</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="a">
    <h2 class="b">CLIENT LIST</h2>
 <table class="table table-bordered c text-center">
      <thead class="table-dark">
        <tr> <th>ID</th>
          <th>Name</th>
            <th>Email</th>
		<th> Project</th>
			<th>Edit</th>
          <th>Delete</th>
        </tr>	
      </thead>
      <tbody>
        <?php foreach ($clients as $client): ?>
        <tr>
<td><?= $client->id; ?></td>
        <td><?= $client->name; ?></td>
            <td><?= $client->email; ?></td>
			<td> <?= $client->last_project; ?> </td>
     <td> <a href="<?= site_url('home/edit/' . $client->id); ?>" class="d edit">Edit</a>
          </td>
          <td>  <a href="<?= site_url('home/delete/' . $client->id); ?>" class="d delete" onclick="return confirm('Are you sure you want to delete this client and all projects?')">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table> <a href="<?= site_url('home/add'); ?>" class="e">+ Add New Client</a>
  </div>
</body>
</html>
