<form action="<?php echo $input = "password123";
$hash = hash('sha256', $input);
echo $hash; // Outputs a 64-character hexadecimal strin($_SERVER['PHP_SELF']); ?>" method="post">
    <!-- Form fields go here -->
    <input type="submit" value="Submit">
</form>


<?php
$name=  "suresh";
$lname= "tharu";
$image= "suresh.jpg"; 
$address    =   compact("name","lname","image");
abstract class Father 
{
function disp()
{
    echo "Normal Method";
}
abstract function absMethod();
}

class Son extends Father
{
public function absMethod()
{
    echo "Abstract Method";
}

}
$absObject=new Son;
$absObject->absMethod();
//$dis    =   new Father;
//echo $dis->disp();
/*echo "<pre>";
print_r($address);
echo "</pre>";
if(isset($_POST))
{
    print_r($_SERVER['PHP_SELF']);
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "adv";

$conn = new mysqli($servername,$username,$password,$database);
/*
$sql = "SELECT id, product_name, description FROM product LIMIT 10, 15";
$res = $conn->query($sql);
*/

// Check if the query was successful
/*if ($res) {
    // Fetch all rows and store them in $fetch
    while ($row = $res->fetch_array()) {
        $fetch[] = $row;
    }

    // Output the fetched data
    echo "<pre>";
    print_r($fetch);
    echo "</pre>";
} else {
    // Handle query error
    echo "Error executing query: " . $conn->error;
} */



/*$sql1  = "insert into adds('title','image') values($name,$image)";
$ins  = $conn->query($sql1);
$sql2  = "update adds set tile='$title',image='$image' where id =2";
$ins  = $conn->query($sql2);
$sql  = "delete from adds where id = 2"; */

//$input = "password123";
//$hash = hash('sha256', $input);
//echo $hash; // Outputs a 64-character hexadecimal string
//$a  =   10;
//$b  =   "20";
//echo $a+$b;
// Define some sample text
// Using print in an expression
//$result = print "Hello, world!"; // Outputs: Hello, world! and assigns 1 to $result
//echo $result; // Outputs: 1
?>



