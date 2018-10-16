<?php include('session.php');?>

<?php include 'includes/header.php';?>
<style type="text/css" media="print">
@media print
{
#non-printable { display: none; }
#printable {
display: block;
width: 100%;
height: 100%;
}
}
</style>
<body>
<?php include 'includes/conn.php';?>
<div class="container-fluid" id="printable">  
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
<h1 style="direction: rtl; text-align: center;"><strong>بيان تقديرات</strong></h1><br><br><br><br><br><br><br>
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
<p style="direction: rtl;"><strong>وفيما يلي بيان بالتقديرات التي حصل عليها خلال السنوات الدراسية الأربعة</strong></p>
    ';
echo $txt;
?>
<br><br><br><br><br>

<table class="table table-bordered" >
<thead class="thead-light">


<?php  
// retrieve student results
// 1st year
$sql = "SELECT * FROM 1st WHERE student_id = {$_GET["id"]}";
$result = mysqli_query($conn, $sql);

include 'includes/th1.php';
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>الأولى</td>".
        "<td>".$row["year"]."</td>".
        "<td>".$row["1"]."</td>".
        "<td>".$row["2"]."</td>".
        "<td>".$row["3"]."</td>".
        "<td>".$row["4"]."</td>".
        "<td>".$row["5"]."</td>".
        "<td>".$row["6"]."</td>".
        "<td>".$row["7"]."</td>".
        "<td>".$row["8"]."</td>".
        "<td>".$row["9"]."</td>".
        "<td>".$row["10"]."</td>".
        "<td>".$row["11"]."</td>".
        "<td>".$row["12"]."</td>".
        "</tr>";
    }
} else {
    echo "0 results";
}

// 2nd year
$sql = "SELECT * FROM 2nd WHERE student_id = {$_GET["id"]}";
$result = mysqli_query($conn, $sql);

include 'includes/th2.php';
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>الثانية</td>".
        "<td>".$row["year"]."</td>".
        "<td>".$row["1"]."</td>".
        "<td>".$row["2"]."</td>".
        "<td>".$row["3"]."</td>".
        "<td>".$row["4"]."</td>".
        "<td>".$row["5"]."</td>".
        "<td>".$row["6"]."</td>".
        "<td>".$row["7"]."</td>".
        "<td>".$row["8"]."</td>".
        "<td>".$row["9"]."</td>".
        "<td>".$row["10"]."</td>".
        "<td>".$row["11"]."</td>".
        "<td>".$row["12"]."</td>".
        "</tr>";
    }
} else {
    echo "0 results";
}



// 3rd_is year
if ($dept == 'نظم معلومات')
{
    $sql = "SELECT * FROM 3rd_is WHERE student_id = {$_GET["id"]}";
    $result = mysqli_query($conn, $sql);

    include 'includes/th3_is.php';
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>الثالثة</td>".
        "<td>".$row["year"]."</td>".
        "<td>".$row["1"]."</td>".
        "<td>".$row["2"]."</td>".
        "<td>".$row["3"]."</td>".
        "<td>".$row["4"]."</td>".
        "<td>".$row["5"]."</td>".
        "<td>".$row["6"]."</td>".
        "<td>".$row["7"]."</td>".
        "<td>".$row["8"]."</td>".
        "<td>".$row["9"]."</td>".
        "<td>".$row["10"]."</td>".
        "<td>".$row["11"]."</td>".
        "<td>".$row["12"]."</td>".
        "</tr>";
    }
    } else {
    echo "0 results";
    }
}

// 3rd_cs year
if ($dept == 'علوم حاسب')
{
    $sql = "SELECT * FROM 3rd_cs WHERE student_id = {$_GET["id"]}";
    $result = mysqli_query($conn, $sql);

    include 'includes/th3_cs.php';
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>الثالثة</td>".
        "<td>".$row["year"]."</td>".
        "<td>".$row["1"]."</td>".
        "<td>".$row["2"]."</td>".
        "<td>".$row["3"]."</td>".
        "<td>".$row["4"]."</td>".
        "<td>".$row["5"]."</td>".
        "<td>".$row["6"]."</td>".
        "<td>".$row["7"]."</td>".
        "<td>".$row["8"]."</td>".
        "<td>".$row["9"]."</td>".
        "<td>".$row["10"]."</td>".
        "<td>".$row["11"]."</td>".
        "<td>".$row["12"]."</td>".
        "</tr>";
    }
    } else {
    echo "0 results";
    }
}



// 4th_is year
if ($dept == 'نظم معلومات')
{
    $sql = "SELECT * FROM 4th_is WHERE student_id = {$_GET["id"]}";
    $result = mysqli_query($conn, $sql);

    include 'includes/th4_is.php';
    if (mysqli_num_rows($result) > 0) {
// output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>الرابعة</td>".
            "<td>".$row["year"]."</td>".
            "<td>".$row["1"]."</td>".
            "<td>".$row["2"]."</td>".
            "<td>".$row["3"]."</td>".
            "<td>".$row["4"]."</td>".
            "<td>".$row["5"]."</td>".
            "<td>".$row["6"]."</td>".
            "<td>".$row["7"]."</td>".
            "<td>".$row["8"]."</td>".
            "<td>".$row["9"]."</td>".
            "<td>".$row["10"]."</td>".
            "<td>".$row["11"]."</td>".
            "<td>".$row["12"]."</td>".            
            "</tr>";
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
    $sql = "SELECT * FROM 4th_cs WHERE student_id = {$_GET["id"]}";
    $result = mysqli_query($conn, $sql);

    include 'includes/th4_cs.php';
    if (mysqli_num_rows($result) > 0) {
// output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>الرابعة</td>".
            "<td>".$row["year"]."</td>".
            "<td>".$row["1"]."</td>".
            "<td>".$row["2"]."</td>".
            "<td>".$row["3"]."</td>".
            "<td>".$row["4"]."</td>".
            "<td>".$row["5"]."</td>".
            "<td>".$row["6"]."</td>".
            "<td>".$row["7"]."</td>".
            "<td>".$row["8"]."</td>".
            "<td>".$row["9"]."</td>".
            "<td>".$row["10"]."</td>".
            "<td>".$row["11"]."</td>".
            "<td>".$row["12"]."</td>".
            "</tr>";
            $grade = $row["13"];
            $percentage = $row["14"];
        }
    } else {
        echo "0 results";
    }
}

mysqli_close($conn);
?>

</table>
</div>
</body>
<script type="text/javascript">
    
    window.print();
</script>
</html>
