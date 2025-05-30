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
      padding: 0;
      transition: margin-left 0.3s;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 250px;
      background-color: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(14px);
      border-right: 2px solid rgba(255, 255, 255, 0.2);
      padding: 60px 20px 20px;
      z-index: 1000;
      transition: width 0.3s;
    }

    .sidebar.collapsed {
      width: 70px;
    }

    .sidebar .nav-link {
      color: #ffffffcc;
      font-weight: 500;
      margin: 20px 0;
      display: block;
      transition: 0.3s;
      padding: 8px 15px;
      border-radius: 8px;
      white-space: nowrap;
      overflow: hidden;
    }

    .sidebar.collapsed .nav-link {
      text-align: center;
      padding: 10px 5px;
      font-size: 0;
    }

    .sidebar.collapsed .nav-link::before {
      font-size: 16px;
    }

    .sidebar .nav-link:hover,
    .sidebar .active-link {
      color: #00ffd5;
      background-color: rgba(255, 255, 255, 0.2);
      text-shadow: 0 0 5px #00ffd5aa;
    }

    .sidebar .navbar-brand {
      font-size: 22px;
      color: #ffffff;
      text-shadow: 0 0 5px #ffffff80;
      margin-bottom: 25px;
      display: block;
      text-align: center;
      transition: 0.3s;
    }

    .sidebar.collapsed .navbar-brand {
      font-size: 0;
    }

    .toggle-btn {
      position: absolute;
      top: 15px;
      right: -15px;
      background-color: #00ffd5;
      color: black;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      font-size: 18px;
      text-align: center;
      line-height: 30px;
      cursor: pointer;
      box-shadow: 0 0 8px rgba(0,0,0,0.3);
      transition: 0.3s;
    }

    .main-content {
      margin-left: 250px;
      padding: 50px 30px;
      transition: margin-left 0.3s;
    }

    .main-content.collapsed {
      margin-left: 70px;
    }

    .a {
      max-width: 1000px;
      margin: auto;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .b {
      text-align: center;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-weight: bold;
      color: rgb(207, 215, 214);
      margin-bottom: 30px;
    }

    .c {
      font-size: 15px;
      background-color: rgba(255, 255, 255, 0.75);
    }

    .d {
      padding: 6px 14px;
      font-weight: bold;
      border-radius: 25%;
      font-size: 14px;
      border: none;
    }

    .d.edit {
      background-color: rgb(68, 169, 158);
      color: white;
    }

    .d.delete {
      background-color: #ff6363;
      color: white;
    }

    .d.edit:hover {
      background-color: rgb(16, 20, 17);
    }

    .d.delete:hover {
      background-color: #cc3b3b;
    }

    .e {
      display: block;
      margin: 25px auto 0;
      background-color: rgb(68, 169, 158);
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
      background-color: rgb(20, 23, 21);
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="sidebar" id="sidebar">
    <span class="toggle-btn" onclick="toggleSidebar()">‹</span>
    <span class="navbar-brand fw-bold">Client System</span>
    <a class="nav-link active-link" href="<?= site_url('home'); ?>">Clients</a>
    <a class="nav-link" href="<?= site_url('home/edit/'); ?>">Projects</a>
    <a class="nav-link" href="<?= site_url('home/add'); ?>">+ Add</a>
  </div>

  <div class="main-content" id="main-content">
    <div class="a">
      <h2 class="b">CLIENT LIST</h2>
      <table class="table table-bordered c text-center">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Project</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>	
        </thead>
        <tbody>
          <?php foreach ($clients as $client): ?>  <tr>
      <td><?= $client->id; ?></td>
       <td><?= $client->name; ?></td>
     <td><?= $client->email; ?></td>
     <td><?= $client->last_project; ?></td>
  <td><a href="<?= site_url('home/edit/' . $client->id); ?>" class="d edit">Edit</a></td>
 <td><a href="<?= site_url('home/delete/' . $client->id); ?>" class="d delete" onclick="return confirm('Are you sure you want to delete this client and all projects?')">Delete</a></td>
 </tr>
     <?php endforeach; ?>
    </tbody>
   </table>
   <a href="<?= site_url('home/add'); ?>" class="e">+ Add New Client</a>
 </div>
  </div>
  <script>
    function toggleSidebar() {
const sidebar = document.getElementById('sidebar');
  const content = document.getElementById('main-content');
  sidebar.classList.toggle('collapsed');
  content.classList.toggle('collapsed');
    }
  </script>

</body>
</html>
