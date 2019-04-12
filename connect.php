<?php
if(isset($_POST['Submit']) )
{
    $id = $_POST['id'];
    $st_name = $_POST['st_name'];
    $code = $_POST['code'];
    $semester = $_POST['semester'];
    $credit = $_POST['credit'];
    $section = $_POST['section'];           



    $CO1_1 = $_POST['CO1_1'];
    $CO2_1 = $_POST['CO2_1'];
    $CO3_1 = $_POST['CO3_1'];
    $CO4_1 = $_POST['CO4_1'];

    $CO1_2 = $_POST['CO1_2'];
    $CO2_2 = $_POST['CO2_2'];
    $CO3_2 = $_POST['CO3_2'];
    $CO4_2 = $_POST['CO4_2'];

    $CO1_3 = $_POST['CO1_3'];
    $CO2_3 = $_POST['CO2_3'];
    $CO3_3 = $_POST['CO3_3'];
    $CO4_3 = $_POST['CO4_3'];


    // echo "1st mid = ".$CO1_1." ".$CO1_2." ".$CO1_3."<br>";
    // echo "2nd mid = ".$CO2_1." ".$CO2_2." ".$CO2_3."<br>";
    // echo "Final = ".$CO3_1." ".$CO3_2." ".$CO3_3."<br>";

    // echo $CO1_1+$CO2_1;
    
    $mid1 = $CO1_1+$CO2_1+$CO3_1+$CO4_1;
    $mid2 = $CO1_2+$CO2_2+$CO3_2+$CO4_2;
    $mid3 = $CO1_3+$CO2_3+$CO3_3+$CO4_3;

    $total = $mid1+$mid2+$mid3;

    $grade = 4.00;



$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "grade";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

$sql = "INSERT INTO result Values ('$st_name','$id','$code','$mid1','$mid2','$mid3','$total','$grade')";

$qry = $conn->query($sql) or die('error');

?>

<!-- <script type="text/javascript">
  alert("Successful");
</script> -->

<?php
header("Location: ./submit.php");


}
else {
  header("Location: ./index.php");
}
