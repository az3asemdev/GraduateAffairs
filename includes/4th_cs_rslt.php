<?php	
	$sql = "SELECT * FROM {$class}
	WHERE year = {$year}
	ORDER BY name ASC";
	$result = mysqli_query($conn, $sql);


?>


<table id="myTable" class="table table-bordered">
<thead class="thead-light">
<tr>
    <th width="">الرقم</th>
    <th width="15%">الاسم</th>
    <th>السنة</th> 

  	<th>إتصالات البيانات</th>
  	<th>معالجة الصور الرقمية</th>
  	<th>نظم التشغيل</th>
  	<th>اللغات الديناميكية</th>
  	<th>منهج اختياري</th>

  	<th>تعريب الحاسبات</th>
  	<th>الذكاء الإصطناعي</th>
  	<th>نظم الرؤية بالحاسب</th>
  	<th>الأنظمة الموزعة</th>
  	<th>منهج اختياري</th>

  	<th>مشروع التخرج</th>
  	<th>التقدير العام</th>
  	<th>النسبة المئوية</th>


<th></th>
</tr>
</thead><tbody>

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$id = $row["id"];
    	$grade = $row["13"];
    	$percentage = $row["14"];
        echo
		'<tr>' .
        '<td>' . $row["student_id"] .
		'<td>' . '<a href="std_page.php?id=' . $row["student_id"] . '">' . $row["name"] . '</a>' . '</td>' .
		'<td>' . $row["year"] . '</td>' .
		'<td>' . $row["1"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=1&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["2"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=2&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["3"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=3&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["4"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=4&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["5"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=5&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .

		'<td>' . $row["7"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=7&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["8"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=8&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["9"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=9&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["10"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=10&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["11"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=11&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["12"] . '<br><a href="edit_subject.php?class='.  $class . '&year=' . $year .'&subject_no=12&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["13"] . '<br><a href="edit_general_grade.php?class='.  $class . '&year=' . $year .'&subject_no=13&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' .
		'<td>' . $row["14"] . '%<br><a href="edit_percentage.php?class='.  $class . '&year=' . $year .'&subject_no=14&id='.    $id     .'">
		<span style="font-size:10px">عدل</span></a></td>' ;


		echo '<td>';
		include 'includes/del_rslt_btn.php';
		echo '</td>'; 

		'</tr>';
		
    }
} else {
    echo "0 results";
}

?>