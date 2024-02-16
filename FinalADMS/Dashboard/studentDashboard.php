<?php
session_start(); 

if (!isset($_SESSION["userid"]) || !isset($_SESSION["password"])) {
    header("Location: Studentlogin.php");
    exit();
}

$myusername = $_SESSION["userid"];
$mypassword = $_SESSION["password"];

$conn = oci_connect('system', 'tiger', '//localhost/XE');

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$query = "SELECT * FROM StudentInfo WHERE USERID=:myusername AND PASSWORD=:mypassword";
$stid = oci_parse($conn, $query);

oci_bind_by_name($stid, ":myusername", $myusername);
oci_bind_by_name($stid, ":mypassword", $mypassword);

$result = oci_execute($stid);

oci_fetch($stid);

$name = oci_result($stid, 'NAME');
$userid = oci_result($stid, 'USERID');
$department = oci_result($stid, 'DEPARTMENT');

oci_free_statement($stid);
oci_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<link rel="stylesheet" href="../CSS/studentDashboard.css">
<link rel="stylesheet" href="../CSS/studentProfile.css">
<style>
	
	.subContainer{

height: 550px;
width: 190px;
background-color: #3e8873;
}
.mainContainer  
{    display: grid;
    grid-template-columns: 6;

}
.profileInfo{
    margin-top: 10%;
    margin-right: 60%;
    grid-column-start: 2;
    grid-column-end: 2;
    background-color: #26725e;
    color: white;
    height: 300px;
    border-radius: 20px;

    
}

footer{
      display: grid;
      grid-template-columns: 12;
      height: 250px;
      width: 100%;
      background-color: #004736;
	  margin-top: 10%;

    }
    footer h3{
        color: white;
    }
   
    .about{
       margin-left: 40px; 
      grid-column-start: 1;
      grid-column-end: 3;
     

    }
    .contactUs{
      grid-column-start: 3;
      grid-column-end: 5;


    }
    .social{
       grid-column-start: 5;
      grid-column-end: 7;
     
    }
    .policy{
       grid-column-start: 7;
      grid-column-end: 9;

    }
    label{
        color: white;
    }
    footer input{
        width: 200px;
    }
    textarea{
        height: 80px;
        width: 200px;
    }
    li{
        list-style: none;
        margin-top: 5px;
    }




</style>



</head>
<body>
<div class="navContainer">
  <h2 class="headerName">STUDENT DASHBOARD</h2>
<ul>
<li><a href = "../Dashboard/studentDashboard.php"><button class="homeBtn">Home</button></a></li>
</ul>
<div class="logOut"><a href="../logOut.php"><button>Logout</button></a>
</div>

</div>

<div class="mainContainer">



	<div class="subContainer">
	
	<a href="../studentItems/courseRegistration.php"><button class="cssWork" id="courseRegiId">Go to Registration</button></a>
	<a href="../studentItems/currentCourse.php"><button class="cssWork" id="currentCourseId">Current Course</button></a>
	<a href="../studentItems/availableCourse.php"><button class="cssWork" id="availableCourseId">Course Available</button></a>
	<a href="../studentItems/registeredCourses.php"><button class="cssWork" id="registeredCourseId">Registered Courses</button></a>
</div>

<div class="profileInfo">
<h3> Welcome to <?php echo $name ?> <br>
UserID: <?php echo $userid ?> <br>
Department: <?php echo $department ?> 
</div>


</div>

</div>



<footer>
    <div class="about">
        <h3>ABOUT US</h3>

            <li><a href="">Information</a></li>
            <li><a href="">Why study here?</a></li>
            <li><a href="">Career</a></li>
            <li><a href="">Rules Regulation</a></li>

    </div>
    <div class="contactUs">
       <h3>CONTACT US</h3>
       <label for="">From:</label><br>
       <input type="email" placeholder="Enter your email"><br>
       <label for="">TO:</label><br>
       <input type="email" placeholder="Enter your email"><br>
       <textarea name="" id="" cols="30" rows="10" placeholder="Write your text..."></textarea><br>
       <input type="submit" value="Send">

    </div>
    <div class="social">
                    <h3>SOCIAL LINK</h3>
            <li><a href="">Facebook</a></li>
            <li><a href="https://www.youtube.com/watch?v=7z_EwP7AXaw&si=4LWG_hmSui-N166G">Youtube</a></li>
            <li><a href="https://learnforother24.blogspot.com/">Website</a></li>
            <li><a href="">LinkDIn</a></li>

    </div>
    <div class="policy">
        <h3>POLICY</h3>
            <li><a href="">Information</a></li>
            <li><a href="">Why study here?</a></li>
            <li><a href="">Career</a></li>
            <li><a href="">Rules Regulation</a></li>

    </div>
</footer>
</body>
</html>