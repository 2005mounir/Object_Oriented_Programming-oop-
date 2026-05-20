
<?php
require "database.php";
require "classes.php";

if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $nameE = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : "";
    $emailL = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : "";

 //object  connect data base
$database = new database();
$connect = $database->connection();



// object (crud) users;
$user = new users($connect , $nameE , $emailL);
$user->create();
 $data = $user->read();
 /*
 $user->update();
 $user->delete();
 */

 echo "<table border='1'>";

echo "<tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>email</th>";
echo "</tr>";

foreach($data as $dt){

    echo "<tr>";

    echo "<td>".$dt['id']."</td>";
    echo "<td>".$dt['name']."</td>";
    echo "<td>".$dt['email']."</td>";

    echo "</tr>";
}

echo "</table>";

}
















?>





