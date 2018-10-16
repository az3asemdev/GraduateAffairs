<?php include('session.php');?>

<?php include 'includes/header.php';?>
<style>
table {
   font-size: 90%;
   
}</style>
<body>
<?php include 'includes/navbar.php';?>
<?php include 'includes/conn.php';?>
<div class="container-fluid">
<form class="form-inline" action="">
  <label>الفرقة</label>&nbsp
  <select name="class" id="class" class="form-control">
    <option value=""></option>
    <option value="1st">أولى</option>
    <option value="2nd">ثانية</option>
    <option value="3rd_cs">ثالثة علوم</option>
    <option value="3rd_is">ثالثة نظم</option>
    <option value="4th_cs">رابعة علوم</option>
    <option value="4th_is">رابعة نظم</option>
  </select>
  &nbsp&nbsp&nbsp&nbsp
  
  <script type="text/javascript">
    document.getElementById('class').value = "<?php echo $_GET['class'];?>";
  </script>
  <label>السنة</label>&nbsp
  <select name="year" id="year" class="form-control">
    <option value=""></option>
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
    <option value="2096">2096</option>
    <option value="2097">2097</option>
    <option value="2098">2098</option>
    <option value="2099">2099</option>
  </select>
  &nbsp&nbsp&nbsp&nbsp
  
  <script type="text/javascript">
    document.getElementById('year').value = "<?php echo $_GET['year'];?>";
  </script>
  <button type="submit" name="submit" class="btn btn-primary">بحث</button>
</form>
<br><br>
<?php
if(isset($_GET["submit"])){
  $id = "";
  $class = $_GET["class"];
  $year = $_GET["year"];
// retrieve 1st data
if ($class == "1st")
include 'includes/1st_rslt.php';
// retrieve 2nd data
if ($class == "2nd")
include 'includes/2nd_rslt.php';
// retrieve 3rd_cs data
if ($class == "3rd_cs")
include 'includes/3rd_cs_rslt.php';
// retrieve 3rd_is data
if ($class == "3rd_is")
include 'includes/3rd_is_rslt.php';
// retrieve 4th_cs data
if ($class == "4th_cs")
include 'includes/4th_cs_rslt.php';
// retrieve 4th_is data
if ($class == "4th_is")
include 'includes/4th_is_rslt.php';
}
mysqli_close($conn);
?>
</tbody></table>
</div>
</body>
</html>