<?php
if (isset($_GET['logoutId'])) {
    header("Location: ../home.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accountant Dashboard</title>
    <link rel="stylesheet" href="../CSS/studentDashboard.css">
    <style type="text/css">
    	table{
    		margin-left: 30%;
    		margin-top: 20px;
    		    	}
    		    	th{
    		    		background: #00b33c;
    		    		color: white;
    		    	}

                    .subContainer{

height: 650px;
width: 190px;
background-color: #3e8873;
}
footer{
      display: grid;
      grid-template-columns: 12;
      height: 250px;
      width: 100%;
      background-color: #004736;
      margin-top: 15%;

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
    .logOut{
      margin-top: 25px;
      grid-column-start: 11;
      grid-column-end: 12;
    }
    </style>
</head>
<body>


    <div class="navContainer">
        <h2 class="headerName">ACCOUNTANT DASHBOARD</h2>
        <ul>
            <li><a href="../Dashboard/accountantDashboard.php"><button class="homeBtn">Home</button></a></li>
        </ul>

<div class="logOut">
    <a href="../logOut.php"><button>Logout</button></a>
</div>        
    </div>

    <div class="mainContainer">
        <div class="Container">
        <?php

$conn = oci_connect('system', 'tiger', '//localhost/XE');
 
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
 

$query = 'SELECT DEGREE_PROGRAM, DEPARTMENT, TOTAL_CREDIT, TUITON_FEE_PER_CREDIT_HOUR, TOTAL_AMOUNT FROM Tuitionfee';
$stid = oci_parse($conn, $query);
oci_execute($stid);
 

echo '<table>';
echo '<tr><th>DEGREE_PROGRAM</th><th>DEPARTMENT</th><th>TOTAL_CREDIT</th><th>TUITON_FEE_PER_CREDIT_HOUR</th><th>TOTAL_AMOUNT</th></tr> ';
 
while ($row = oci_fetch_assoc($stid)) {
    echo '<tr>';
    echo '<td>' . $row['DEGREE_PROGRAM'] . '</td>';
    echo '<td>' . $row['DEPARTMENT'] . '</td>';
    echo '<td>' . $row['TOTAL_CREDIT'] . '</td>';
    echo '<td>' . $row['TUITON_FEE_PER_CREDIT_HOUR'] . '</td>';
    echo '<td>' . $row['TOTAL_AMOUNT'] . '</td>';

    echo '</tr>';
}
 
echo '</table>';
 
oci_free_statement($stid);
oci_close($conn);
?>
           
                
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
