
<?php include('session.php');?>

<?php include 'includes/header.php';?>

<body>
<style type="text/css">
    .error {color: #FF0000;}
</style>
<?php include 'includes/navbar.php';?>
<div class="container-fluid">
<?php include 'includes/conn.php';?>

<?php
$student_id = $name = $year = $sub1 = $sub2 = $sub3 = $sub4 = $sub5 = $sub6 = $sub7 = $sub8 = $sub9 = $sub10 = $sub11 = $sub12 = "";
$Err = $student_idErr = $nameErr = $yearErr = $sub1Err = $sub2Err = $sub3Err = $sub4Err = $sub5Err = $sub6Err = $sub7Err = $sub8Err = $sub9Err = 
$sub10Err = $sub11Err = $sub12Err = "";
// check student_id
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["student_id"])) {
    $student_idErr = "حقل مطلوب";
    $Err = 1;
  } else {
    $student_id = test_input($_POST["student_id"]);
  }
}
// check name
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "حقل مطلوب";
    $Err = 1;
  } else {
    $name = test_input($_POST["name"]);
  }
}
// check year
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["year"])) {
    $yearErr = "حقل مطلوب";
    $Err = 1;
  } else {
    $year = test_input($_POST["year"]);
  }
}
// check sub1
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub1"])) {
    $sub1Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub1 = test_input($_POST["sub1"]);
  }
}
// check sub2
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub2"])) {
    $sub2Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub2 = test_input($_POST["sub2"]);
  }
}
// check sub3
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub3"])) {
    $sub3Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub3 = test_input($_POST["sub3"]);
  }
}
// check sub4
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub4"])) {
    $sub4Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub4 = test_input($_POST["sub4"]);
  }
}
// check sub5
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub5"])) {
    $sub5Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub5 = test_input($_POST["sub5"]);
  }
}
// check sub6
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub6"])) {
    $sub6Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub6 = test_input($_POST["sub6"]);
  }
}
// check sub7
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub7"])) {
    $sub7Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub7 = test_input($_POST["sub7"]);
  }
}
// check sub8
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub8"])) {
    $sub8Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub8 = test_input($_POST["sub8"]);
  }
}
// check sub9
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub9"])) {
    $sub9Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub9 = test_input($_POST["sub9"]);
  }
}
// check sub10
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub10"])) {
    $sub10Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub10 = test_input($_POST["sub10"]);
  }
}
// check sub11
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub11"])) {
    $sub11Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub11 = test_input($_POST["sub11"]);
  }
}
// check sub12
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sub12"])) {
    $sub12Err = "حقل مطلوب";
    $Err = 1;
  } else {
    $sub12 = test_input($_POST["sub12"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table class="table ">
<thead >
<tr>
<th width="15%">رقم الطالب</th>
<th>الاسم</th>
<th>السنة</th> 
</tr>
</thead>
<tbody>
<tr>
<td><input type="number" class="form-control" name="student_id" value="<?php echo $student_id;?>" required>
<span class="error"><?php echo $student_idErr;?></span></td>
<td><input type="text" class="form-control" name="name" value="<?php echo $name;?>" required>
    <span class="error"><?php echo $nameErr;?></span></td>
    <td>
        <select name="year"  class="form-control">
            <option value="1997">1997</option>                        
            <option value="1998">1998</option>                        
            <option value="1999">1999</option>                        
            <option value="2000">2000</option>                        
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            <option value="2031">2031</option>
            <option value="2032">2032</option>
            <option value="2033">2033</option>
            <option value="2034">2034</option>
            <option value="2035">2035</option>
            <option value="2036">2036</option>
            <option value="2037">2037</option>
            <option value="2038">2038</option>
            <option value="2039">2039</option>
            <option value="2040">2040</option>
            <option value="2041">2041</option>
            <option value="2042">2042</option>
            <option value="2043">2043</option>
            <option value="2044">2044</option>
            <option value="2045">2045</option>
            <option value="2046">2046</option>
            <option value="2047">2047</option>
            <option value="2048">2048</option>
            <option value="2049">2049</option>
            <option value="2050">2050</option>
            <option value="2051">2051</option>
            <option value="2052">2052</option>
            <option value="2053">2053</option>
            <option value="2054">2054</option>
            <option value="2055">2055</option>
            <option value="2056">2056</option>
            <option value="2057">2057</option>
            <option value="2058">2058</option>
            <option value="2059">2059</option>
            <option value="2060">2060</option>
            <option value="2061">2061</option>
            <option value="2062">2062</option>
            <option value="2063">2063</option>
            <option value="2064">2064</option>
            <option value="2065">2065</option>
            <option value="2066">2066</option>
            <option value="2067">2067</option>
            <option value="2068">2068</option>
            <option value="2069">2069</option>
            <option value="2070">2070</option>
            <option value="2071">2071</option>
            <option value="2072">2072</option>
            <option value="2073">2073</option>
            <option value="2074">2074</option>
            <option value="2075">2075</option>
            <option value="2076">2076</option>
            <option value="2077">2077</option>
            <option value="2078">2078</option>
            <option value="2079">2079</option>
            <option value="2080">2080</option>
            <option value="2081">2081</option>
            <option value="2082">2082</option>
            <option value="2083">2083</option>
            <option value="2084">2084</option>
            <option value="2085">2085</option>
            <option value="2086">2086</option>
            <option value="2087">2087</option>
            <option value="2088">2088</option>
            <option value="2089">2089</option>
            <option value="2090">2090</option>
            <option value="2091">2091</option>
            <option value="2092">2092</option>
            <option value="2093">2093</option>
            <option value="2094">2094</option>
            <option value="2095">2095</option>
        </select>
    </td>
</tr>
</tbody>
</table>
    
  <table class="table ">
    <thead >
      <tr>

    <th>تحليل الخوارزميات</th>
    <th>مفاهيم لغات الحاسب</th>
    <th>الرسم بالحاسب</th>
    <th>مقدمة في شبكات الحاسب</th>
    <th>لغة التجميع</th>
    <th>منهج اختياري</th>
    <th>البرمجة المنطقية</th>
    <th>بناء الحاسب  </th>
    <th>هندسة البرمجيات</th>
    <th>نظرية وتصميم المترجمات</th>
    <th>النمذجة والمحاكاة</th>
    <th> منهج اختياري</th>
      </tr>

    </thead>
    <tbody>
      <tr>
       
            <td>
                <select name="sub1" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub2" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub3" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub4" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub5" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub6" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub7" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub8" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub9" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub10" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub11" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
            <td>
                <select name="sub12" class="form-control">
                    <option value="م">م</option>
                    <option value="ج.ج">ج.ج</option>
                    <option value="ج">ج</option>
                    <option value="ل">ل</option>
                    <option value="ض">ض</option>
                    <option value="ض.ج">ض.ج</option>
                </select>
            </td>
        </tr>
    </tbody>
  </table>

  <button type="submit" name="submit" class="btn btn-primary">إرسال</button>
</form>

<?php
// check that $_POST is set or not
if(isset($_POST["submit"]) && empty($Err)){

$sql = "INSERT INTO 3rd_cs (student_id, name, year, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`)
VALUES 
('$student_id', '$name', '$year', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$sub7', '$sub8', '$sub9', '$sub10', '$sub11', '$sub12')";


if (mysqli_query($conn, $sql)) {
    echo "تمت الإضافة";
} else {
    echo "خطأ: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>



</div>
</body>
</html>
