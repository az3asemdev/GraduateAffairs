<?php include('session.php');?>

<?php include 'includes/header.php';?>
<body>
<style type="text/css">
    .error {color: #FF0000;}
</style>
<?php include 'includes/navbar.php';?>
<div class="container">
<?php include 'includes/conn.php';?>
<?php
$name = $dept = $nationality = $birth_day = $birth_month = $birth_year = $birth_place = $graduation_year = $graduation_month = $grade = $percentage = "";
$id = $_GET["id"];
// retrieve student data
$sql = "SELECT * FROM students where id = {$_GET["id"]}";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $dept = $row["dept"];
        $nationality = $row["nationality"];
        $birth_day = $row["birth_day"];
        $birth_month = $row["birth_month"];
        $birth_year = $row["birth_year"];
        $birth_place = $row["birth_place"];
        $graduation_year = $row["graduation_year"];
        $graduation_month = $row["graduation_month"];
    }
} else {
    echo "0 results";
}
?>

  <form method="post" action="">
    <div class="form-group">
      <label>محل الميلاد</label>
      <input type="text" class="form-control" name="birth_place" value="<?php echo $birth_place ?>" required>
      
    </div>
    <button type="submit" name="submit" class="btn btn-primary">تعديل</button>

  </form>



  <?php

// check that $_POST is set or not
if(isset($_POST["submit"])) {

$student_id =$_GET["id"];

$birth_place = $_POST["birth_place"];


$sql = "UPDATE students 
SET 
birth_place = '$birth_place'
WHERE
id = '$student_id'"; 


    if (mysqli_query($conn, $sql)) {
      echo '<script type="text/javascript"> window.location="std_page.php?id=' . $student_id . '";</script>';
    } else {
      echo '<span class="error">' . 'error' .  '</span>';

    }
    mysqli_close($conn);
  }
  ?>








</div>
</body>
</html>
