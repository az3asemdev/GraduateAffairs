<?php include('session.php');?>

<?php include 'includes/header.php';?>
<body>
<?php include 'includes/conn.php';?>
<?php  
// retrieve degree data
$name = $dept = $nationality = $birth_date = $birth_place = $graduation_year = $graduation_month = $grade = $percentage = "";
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
    $birth_date = $birth_day . '-' . $birth_month . '-' . $birth_year;
    $birth_place = $row["birth_place"];
    $graduation_year = $row["graduation_year"];
    $graduation_month = $row["graduation_month"];
  }
} else {
  echo "0 results";
}
// 4th_is year
if ($dept == 'نظم معلومات')
{
  $sql = "SELECT * FROM 4th_is WHERE student_id = {$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
// output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $grade = $row["13"];
      $percentage = $row["14"];
    }
  } else {
    echo "0 results";
  }
}
// 4th_cs year
if ($dept == 'علوم حاسب')
{
  $sql = "SELECT * FROM 4th_cs WHERE student_id = {$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
// output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $grade = $row["13"];
      $percentage = $row["14"];
    }
  } else {
    echo "0 results";
  }
}
    $txt = 
    '
    <br><br><br>
<p style="direction: rtl;"><strong>جامعة قناة السويس</strong></p>
<p style="direction: rtl;"><strong>كلية الحاسبات والمعلومات</strong></p>
<p style="direction: rtl;"><strong>&nbsp;</strong></p>
<h1 style="direction: rtl; text-align: center;"><strong>شهادة تخرج</strong></h1><br><br><br><br><br><br><br>
<p style="direction: rtl;"><strong>&nbsp;</strong></p>
<p style="direction: rtl;"><strong>&nbsp;</strong></p>
<p style="direction: rtl;"><strong>تشهد كلية الحاسبات والمعلومات بأن/ 
 '. $name .'
</strong></p>
<p style="direction: rtl;"><strong>المولود في: 
 '. $birth_place .'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; بتاريخ: 
 '. $birth_date .'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; قد حصل على بكالوريوس الحاسبات والمعلومات شعبة: 
 '. $dept .'
</strong></p>
<p style="direction: rtl;"><strong>دور: 
 '. $graduation_month .'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; عام: 
 '. $graduation_year .'
</strong></p>
<p style="direction: rtl;"><strong>التقدير التراكمي:
 '. $grade .'
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; بنسبة: 
 '. $percentage .'%
</strong></p>
    ';
echo $txt;
?>
<script>
window.print();    
</script>
</body>
</html>