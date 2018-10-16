<?php  
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
        $birth_place = $row["birth_place"];
        $graduation_year = $row["graduation_year"];
        $graduation_month = $row["graduation_month"];
    }
} else {
    echo "0 results";
}

echo "
<table style='width:100%'>
    <tr>
        <td><h1>  $name  </h1></td>
        <td><a href='edit_name.php?id={$id}'></a></td>
    </tr>
    <tr>
        <td>رقم الطالب:  $id </td>
        <td><a href='edit_std_id.php?id={$id}'><span style='font-size:15px'>عدل</span></a></td>

        <td>القسم:  $dept </td>
        <td><a href='edit_dept.php?id={$id}'><span style='font-size:15px'>عدل</span></a></td>
    </tr>
    <tr>
        <td>الجنسية:  $nationality </td>
        <td><a href='edit_nationality.php?id={$id}'><span style='font-size:15px'>عدل</span></a></td>

        <td>تاريخ الميلاد: $birth_day-$birth_month-$birth_year </td>
        <td><a href='edit_birth_date.php?id={$id}'><span style='font-size:15px'>عدل</span></a></td>
    </tr>
    <tr>
        <td>محل الميلاد:   $birth_place</td>
        <td><a href='edit_birth_place.php?id={$id}'><span style='font-size:15px'>عدل</span></a></td>

        <td>سنة التخرج:   $graduation_year </td>
        <td><a href='edit_graduation_year.php?id={$id}'><span style='font-size:15px'>عدل</span></a></td>
    </tr>
    <tr>
        <td>دور:  $graduation_month </td>
        <td><a href='edit_graduation_month.php?id={$id}'><span style='font-size:15px'>عدل</span></a></td>


";
// 4th_is year
if ($dept == 'نظم معلومات')
{
    $sql = "SELECT * FROM 4th_is WHERE student_id = {$_GET["id"]}";
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
echo "


        <td>التقدير العام:   $grade </td>

    </tr>
    <tr>
        <td>النسبة المئوية:   $percentage% </td>

    </tr>
</table>
<br>
";
}
// 4th_cs year
if ($dept == 'علوم حاسب')
{
    $sql = "SELECT * FROM 4th_cs WHERE student_id = {$_GET["id"]}";
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
echo "


        <td>التقدير العام:   $grade </td>

    </tr>
    <tr>
        <td>النسبة المئوية:   $percentage% </td>

    </tr>
</table>
<br>
";
}
?>
<table style="width:%">
    <tr>

    <td><?php include 'includes/del_std_btn.php';?></td>
    <td><input type="button" class="btn btn-outline-primary" onclick="window.open('print_degree.php?id=<?php echo $id; ?>');" value="طباعة شهادة تخرج" /></td>
    <td><input type="button" class="btn btn-outline-primary" onclick="window.open('grades_report.php?id=<?php echo $id; ?>');" value="طباعة بيان تقديرات" /></td>
    </tr>
</table>
<br>

