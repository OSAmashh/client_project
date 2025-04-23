<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Edit Client</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-image: url('https://wallpaperaccess.com/full/317501.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 40px 10px;
        }

        .table-container {
            max-width: 1000px;
            margin: auto;
            background: rgba(255, 255, 255, 0.15);
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
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

        .form-control {
            margin-bottom: 10px;
        }

        .btn {
            background-color: rgb(68, 169, 158);
            color: white;
        }

        .btn-danger {
			border-radius: 30%;
            background-color:rgb(68, 169, 158);
        }

        .btn-danger:hover {
            background-color:rgb(134, 55, 63);
        }

        table {
            background-color: rgba(255, 255, 255, 0.85);
        }

        th {
            background-color: #007b8a;
            color: white;
        }
		.df{
			font-family: tahoma ; 
			font-weight: bold;
		}
    </style>
</head>
<body>
<div class="table-container">
<h2>Client & Projects</h2>
 <form method="post" action="<?= site_url('home/update') ?>">
<input type="hidden" name="id" value="<?= $client->id ?>">

       <table class="table table-bordered text-center">
 <thead>
 
      </thead>
      <tbody>
<tr  class="df"> <td><label>Name</label>
 <input type="text" name="name" class="form-control" value="<?= $client->name ?>"></td>
  <td><label>Email</label>
   <input type="email" name="email" class="form-control" value="<?= $client->email ?>"></td></tr>
 </tbody>
</table>

<table class="table table-bordered text-center mt-4">
   <thead><tr>
  <th>ID</th>
     <th>Project Name</th>
      <th>Client Name</th>
      <th>Client ID</th>
  <th>Delete</th></tr>
</thead>
<tbody>
  <?php foreach ($projects as $project): ?><tr>
 <td><?= $project->id ?></td>
  <td>
       <input type="text" name="projects[]" class="form-control" value="<?= $project->project_name ?>">
  </td>
<td><?= $project->client_name ?></td>
 <td><?= $project->client_id ?></td>
 <td>
<a href="<?= site_url('home/delete_project/' . $project->id . '/' . $project->client_id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this project?')">Delete</a></td>
 </tr>
 <?php endforeach; ?><tr>
 <td colspan="5">
 <input type="text" name="projects[]" class="form-control" placeholder="Add new project">
    </td></tr>
</tbody>
            </table>

            <button type="submit" class="btn w-100 mt-3">UPDATE</button>
        </form>
    </div>
</body>
</html>
