<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id = $id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body class="container mt-4">

<h3>Edit Student Details</h3>

<form method="post">

<input class="form-control mb-2" name="school_id" value="<?= $data['school_id']; ?>" required>

<input class="form-control mb-2" name="reg_no" value="<?= $data['reg_no']; ?>" required>

<input class="form-control mb-2" name="name" value="<?= $data['name']; ?>" required>

<input class="form-control mb-2" name="grade" value="<?= $data['grade']; ?>">

<select class="form-control mb-2" name="gender">
    <option <?= ($data['gender']=="Male")?"selected":""; ?>>Male</option>
    <option <?= ($data['gender']=="Female")?"selected":""; ?>>Female</option>
</select>

<input type="date" class="form-control mb-2" name="dob" value="<?= $data['dob']; ?>">

<input class="form-control mb-2" name="family_income" value="<?= $data['family_income']; ?>">

<button class="btn btn-primary" name="update">Update</button>
<a href="index.php" class="btn btn-secondary">Back</a>

</form>

<?php
if (isset($_POST['update'])) {

    $school_id = $_POST['school_id'];
    $reg_no = $_POST['reg_no'];
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $income = $_POST['family_income'];

    mysqli_query($conn, "UPDATE students SET
        school_id='$school_id',
        reg_no='$reg_no',
        name='$name',
        grade='$grade',
        gender='$gender',
        dob='$dob',
        family_income='$income'
        WHERE id=$id
    ");

    header("Location: index.php");
}
?>

</body>
</html>
