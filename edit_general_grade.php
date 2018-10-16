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


$id = $_GET["id"];
$class = $_GET["class"];
$year = $_GET["year"];
$subject_no = $_GET["subject_no"];

$subject_grade = "";

$sql = "SELECT * FROM $class where id = $id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $subject_grade = $row["$subject_no"];

    }
} else {
    echo "0 results";
}
  
  ?>

  <form method="post" action="">
    <div class="form-group">

                <label>التقدير العام</label>
                <select name="subject_grade" id="subject_grade" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
                        <script type="text/javascript">
    document.getElementById('subject_grade').value = "<?php echo $subject_grade; ?>";
  </script>


    </div>
    <button type="submit" name="submit" class="btn btn-primary">تعديل</button>

  </form>



  <?php

// check that $_POST is set or not
if(isset($_POST["submit"])) {



$subject_grade = $_POST["subject_grade"];



$sql = "UPDATE $class
SET 
`$subject_no` = '$subject_grade'
WHERE
id = $id"; 


    if (mysqli_query($conn, $sql)) {
      echo '<script type="text/javascript"> window.location="search_result.php?class='   .$class.   '&year='    .$year.   '&submit=";</script>';
    } else {
      //echo '<span class="error">' . 'error' .  '</span>';
      //echo mysqli_errno();
      echo $sql;


    }
    mysqli_close($conn);
  }
  ?>








</div>
</body>
</html>
