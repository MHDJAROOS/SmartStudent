<?php include 'db.php'; ?>

<?php
$total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM students"));
$male = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS male FROM students WHERE gender='Male'"));
$female = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS female FROM students WHERE gender='Female'"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<h2>Student Management Dashboard</h2>

<div class="row mt-4">
  <div class="col-md-4">
    <div class="card text-center p-3 bg-primary text-white">
      <div onclick="location.href='index.php'">
        <h4>Total Students</h4>
      <h2><?= $total['total']; ?></h2>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-center p-3 bg-success text-white">
        
      <h4>Male Students</h4>
      <h2><?= $male['male']; ?></h2>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-center p-3 bg-warning text-dark">
       
      <h4>Female Students</h4>
      <h2><?= $female['female']; ?></h2>
    </div>
  </div>
</div>

<a href="index.php" class="btn btn-dark mt-4">Manage Students</a>

</body>
</html>
