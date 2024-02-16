<?php

$conn = oci_connect('system', 'tiger', '//localhost/XE');

if (!$conn) {

    $e = oci_error();

    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);

}
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['submit'])) {

        // Corrected the way to get the courseName

        $selectedCourses = $_POST['courseName'];

        $sec = $_POST['sec'];

        $day = $_POST['day'];

        $time = $_POST['time'];
 
        // Check the number of selected courses

        if (count($selectedCourses) > 3) {

            // Display an error message or redirect back with an error

            echo "You can only select a maximum of 3 courses.";

            exit();

        }
 
        // Loop through the selected courses and do something with them

        foreach ($selectedCourses as $index => $courseName) {

            // Insert into the registeredCourses table

            $insertQuery = "INSERT INTO registeredCourses (COURSE_NAME, SEC, DAY, TIME)

                            VALUES (:courseName, :sec, :day, :time)";

            $insertStmt = oci_parse($conn, $insertQuery);

            oci_bind_by_name($insertStmt, ':courseName', $courseName);

            oci_bind_by_name($insertStmt, ':sec', $sec[$index]);

            oci_bind_by_name($insertStmt, ':day', $day[$index]);

            oci_bind_by_name($insertStmt, ':time', $time[$index]);

            oci_execute($insertStmt);

            oci_free_statement($insertStmt);

        }
 
        // Redirect to a success page or perform other actions after insertion

        header("Location: registeredCourses.php");

        exit();

    }

}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>courseregistration</title>
<link rel="stylesheet" href="../CSS/studentDashboard.css">
<style type="text/css">
        .commFooter{
            margin-top: 30%;
        }
        .Title{
            margin-top: 15px;
            text-align: center;
        }
      

        footer{
      display: grid;
      grid-template-columns: 12;
      height: 250px;
      width: 100%;
      background-color: #004736;
      margin-top: 5%;

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
    table{
    margin-left: 8%;
}
    
.courseTable {
    width: 50%;
    height: auto;
    background-color: aqua;
    margin-top: 40px;
}

tr, td {
    width: 10%;
    text-align: center;
   margin: 20px;

}

tr:hover {background-color: coral;}

.submitBtn{
    height: 40px;
    background-color: #10E055;
    border: none;
    width: 150px;
    margin-top: 20px;
}

</style>
</head>
<body>
<div class="navContainer">
<h2 class="headerName">STUDENT DASHBOARD</h2>
<ul>
<li><a href="../Dashboard/studentDashboard.php"><button class="homeBtn">Home</button></a></li>
</ul>
<div class="logOut">
    <a href="../logOut.php"><button>Logout</button></a>
</div> </div>
<div class="Title">
<h3>Course Registration</h3>
<div class="courseItems">
<form method="post" action="">
<table class="courseTable">
<?php
        $query = "SELECT * FROM courseRegistration";
        $stmt = oci_parse($conn, $query);
        oci_execute($stmt);
        echo '<table>';
        while ($row = oci_fetch_assoc($stmt)) {
            echo '<tr>';
            echo '<td><input type="checkbox" name="courseName[]" value="' . $row['COURSE_NAME'] .'"></td>';
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
        echo '<input class="submitBtn" type="submit" name="submit" value="Confirm Courses">';
        ?>
</form>
 
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