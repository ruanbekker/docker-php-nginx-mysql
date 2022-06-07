<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Registered Users</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">

</head>

<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="container">
    <div class="row">
      <div class="one column"></div>
      <div class="eleven columns" style="margin-top: 15%">
        <h4>Registered Users</h4>
        <p>This is the data returned from the database:</p>

        <table cellpadding="3">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Country</th>
              <th>Age</th>
              <th>Job</th>
            </tr>
          </thead>

          <tbody>
            <?php
              include_once('connection.php');
              $a=1;
              $stmt = $conn->prepare("SELECT id,name,age,country,job FROM users");
              $stmt->execute();
              $users = $stmt->fetchAll();
              foreach($users as $user) {
            ?>
            <tr>
              <td>
                <?php echo $user['id']; ?>
              </td>
              <td>
                <?php echo $user['name']; ?>
              </td>
              <td>
                <?php echo $user['age']; ?>
              </td>
              <td>
                <?php echo $user['country']; ?>
              </td>
              <td>
                <?php echo $user['job']; ?>
              </td>
            </tr>
            
            <?php
              }
            ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>
              
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="container">
    <div class="two columns"></div>
      <div class="eight columns">
        <footer>Powered by <a href="getskeleton.com/">Skeleton Bootstrap</a></footer>
      </div>
  </div>
  
</body>
</html>
