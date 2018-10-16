
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



