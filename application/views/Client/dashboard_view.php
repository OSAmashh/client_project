<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
     body {
            font-family: Tahoma, sans-serif;
            margin: 20px;
           background-color: #f5f5f5;
          color: #333;
       }
      h2 {
            text-align: center;
       margin-bottom: 10px;
        }
      .st {
         display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }
        .box {
            background: #fff;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            width: 30%;
       text-align: center;
        }
        table {
            width: 100%;
            background: #fff;
          border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
           padding: 6px 10px;
            text-align: center;
            font-size: 14px;
        }
        th {
            background-color: #007b8a;
           color: #fff;
        }
        .title {
            background: #007b8a;
            color: #fff;
    padding: 8px;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h2>Control </h2>

    <div class="st">
    <div class="box">
<strong>Total Clients</strong>
         <div><?= $total_clients ?></div>
  </div>
  <div class="box">
      <strong>Total Projects</strong>
    <div><?= $total_projects ?></div>
       </div>
</div>

    <div class="title">Latest Clients</div>
    <table>
        <thead>
           <tr>
         <th>ID</th>
                <th>Name</th>              <th>Email</th>
    </tr>
       </thead>
        <tbody>
      <?php foreach($latest_clients as $client): ?>
            <tr>     <td><?= $client->id ?></td>
             <td><?= $client->name ?></td>
             <td><?= $client->email ?></td>
         </tr>
        <?php endforeach; ?>
     </tbody>
    </table>

    <div class="title">Latest Projects</div>
    <table>
        <thead><tr>
              <th>Client ID</th>
               <th>Project Name</th>
         </tr>
     </thead>
       <tbody>
       <?php foreach($latest_projects as $project): ?>
          <tr>
              <td><?= $project->client_id ?></td>
              <td><?= $project->project_name ?></td>
           </tr>
       <?php endforeach; ?>
     
	</tbody>
 </table>

</body>
</html>
