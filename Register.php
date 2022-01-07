<?php
    if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!con){
        die("Connection to database fail" . mysqli_connect_error());
    }
    $name=$_POST['Name'];
    $semester=$_POST['Semester'];
    $branch=$_POST['Branch'];
    $section=$_POST['section'];
    $sql="INSERT INTO `cr_details`.`cr` (`Name`, `Semester`, `Branch`, `Section`) VALUES ('$name', '$semester', '$branch', '$section');"
    if($con->query($sql)==true){
        each"Successfully Inserted";
    }
    else{
        echo"ERROR";
    }
    $con->close();
}
?>
