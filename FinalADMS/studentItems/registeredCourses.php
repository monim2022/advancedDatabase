<?php
$conn = oci_connect('system', 'tiger', '//localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registered courses</title>
	<link rel="stylesheet" href="../CSS/studentDashboard.css">
    <link rel="stylesheet" href="../CSS/registeredCourseTable.css">

<style type="text/css">
	 

	 footer{
      display: grid;
      grid-template-columns: 12;
      height: 250px;
      width: 100%;
      background-color: #004736;
      margin-top: 20%;

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
<div class="logOut">
    <a href="../logOut.php"><button>Logout</button></a>
</div> </div>
	<div class="title">
		<h3>Registered Courses</h3>
		<form method="post" action="">
<table class="courseTable">
<?php
        $query = "SELECT * FROM registeredCourses";
        $stmt = oci_parse($conn, $query);
        oci_execute($stmt);
        echo '<table>';
        while ($row = oci_fetch_assoc($stmt)) {
            echo '<tr>';
            echo '<td><input hidden type="text" name="courseName[]" value="' . $row['COURSE_NAME'] .'"></td>';
            echo '<td>' . $row['COURSE_NAME'] . '</td>';
            echo '<td><input hidden type="text" name="sec[]" value="' . $row['SEC'] .'"></td>';
            echo '<td>' . $row['SEC'] . '</td>';
            echo '<td><input hidden type="text" name="day[]" value="' . $row['DAY'] .'"></td>';
            echo '<td>' . $row['DAY'] . '</td>';
            echo '<td><input hidden type="text" name="time[]" value="' . $row['TIME'] .'"></td>';
            echo '<td>' . $row['TIME'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
</form>
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