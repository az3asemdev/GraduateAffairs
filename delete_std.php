<?php include('session.php');?>

<?php include 'includes/header.php';?>

<body>
<?php include 'includes/navbar.php';?>

<?php include 'includes/conn.php';?>

<div class="container-fluid">  

<?php
// sql to delete a record
$sql = "DELETE FROM students WHERE id={$_GET["id"]}";

if (mysqli_query($conn, $sql)) {
    echo "تم مسح بيانات الطالب";
} else {
    echo "خطأ" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</div>
</body>
</html>