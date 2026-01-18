<<<<<<< HEAD
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<h3>Add Student</h3>

<form method="post">
<input class="form-control mb-2" name="school_id" placeholder="School ID" required>
<input class="form-control mb-2" name="reg_no" placeholder="Registration Number" required>
<input class="form-control mb-2" name="name" placeholder="Student Name" required>
<input class="form-control mb-2" name="grade" placeholder="Grade" required>

<select class="form-control mb-2" name="gender" required>
<option>Male</option>
<option>Female</option>
</select>

<input type="date" class="form-control mb-2" name="dob"required>
<input class="form-control mb-2" name="family_income" placeholder="Family Income">

<button class="btn btn-primary" name="save">Save</button>
<a href="index.php" class="btn btn-secondary">Back</a>
</form>

<?php
if (isset($_POST['save'])) {
    mysqli_query($conn, "INSERT INTO students 
    (school_id, reg_no, name, grade, gender, dob, family_income)
    VALUES (
    '$_POST[school_id]',
    '$_POST[reg_no]',
    '$_POST[name]',
    '$_POST[grade]',
    '$_POST[gender]',
    '$_POST[dob]',
    '$_POST[family_income]'
    )");
    echo "<div class='alert alert-success mt-3'>Student Added</div>";
}
?>

</body>
</html>
=======
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<h3>Add Student</h3>

<form method="post">
<input class="form-control mb-2" name="school_id" placeholder="School ID" required>
<input class="form-control mb-2" name="reg_no" placeholder="Registration Number" required>
<input class="form-control mb-2" name="name" placeholder="Student Name" required>
<input class="form-control mb-2" name="grade" placeholder="Grade">

<select class="form-control mb-2" name="gender">
<option>Male</option>
<option>Female</option>
</select>

<input type="date" class="form-control mb-2" name="dob">
<input class="form-control mb-2" name="family_income" placeholder="Family Income">

<button class="btn btn-primary" name="save">Save</button>
<a href="index.php" class="btn btn-secondary">Back</a>
</form>

<?php
if (isset($_POST['save'])) {
    mysqli_query($conn, "INSERT INTO students 
    (school_id, reg_no, name, grade, gender, dob, family_income)
    VALUES (
    '$_POST[school_id]',
    '$_POST[reg_no]',
    '$_POST[name]',
    '$_POST[grade]',
    '$_POST[gender]',
    '$_POST[dob]',
    '$_POST[family_income]'
    )");
    echo "<div class='alert alert-success mt-3'>Student Added</div>";
}
?>

</body>
</html>
>>>>>>> 2d86d1f4c27c360210c3f3cbd7d2dacc5ca568ea
