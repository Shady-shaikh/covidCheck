<?php


$server = "localhost";
$user = "root";
$password = "";
$db = "covidcheck";

$conn = mysqli_connect($server, $user, $password, $db);

if ($conn) {
?>
    <script>
        // alert("Connection established");
    </script>
<?php
} else {
?>
    <script>
        alert("Connection failed");
    </script>
<?php
}






?>