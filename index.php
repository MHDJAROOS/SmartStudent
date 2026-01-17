<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Students</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<h3>Student List</h3>

<a href="dashboard.php" class="btn btn-secondary mb-2">Dashboard</a>
<a href="add.php" class="btn btn-success mb-2">Add Student</a>

<table class="table table-bordered">
<tr>
<th>School ID</th>
<th>Reg No</th>
<th>Name</th>
<th>Grade</th>
<th>Gender</th>
<th>DOB</th>
<th>Income</th>
<th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $row['school_id']; ?></td>
<td><?= $row['reg_no']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['grade']; ?></td>
<td><?= $row['gender']; ?></td>
<td><?= $row['dob']; ?></td>
<td><?= $row['family_income']; ?></td>
<td>
<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
</td>
</tr>
<?php } ?>

</table>
</body>
</html>
