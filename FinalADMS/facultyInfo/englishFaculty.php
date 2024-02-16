<?php
$conn = oci_connect('system', 'tiger', '//localhost/XE');

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$query = 'SELECT NAME, EMAIL, ADDRESS, POSITION, DEPARTMENT FROM facultyInfo';
$stid = oci_parse($conn, $query);
oci_execute($stid);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/studentDashboard.css">
    <link rel="stylesheet" href="../CSS/facultyInfo.css">
    <style>
         footer{
      display: grid;
      grid-template-columns: 12;
      height: 250px;
      width: 100%;
      background-color: #004736;

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
    footer label{
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
        <h2 class="headerName">FACULTY DASHBOARD</h2>
        <ul>
            <li><a href="../Dashboard/facultyDashboard.php"><button class="homeBtn">Home</button></a></li>
        </ul>
        <div class="logOut">
    <a href="../logOut.php"><button>Logout</button></a>
</div>     </div>

    <div class="mainContainer">
        <h3>ENGLISH FACULTY INFORMATIONS</h3>

        <div class="Container">                 
			<div class="facultyOne">

			<div class="details">

            <?php
            $conn = oci_connect('system', 'tiger', '//localhost/XE');

			if (!$conn) {
				$e = oci_error();
				trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
			}
			$stid = oci_parse($conn, "SELECT NAME, EMAIL, ADDRESS, POSITION, DEPARTMENT FROM facultyInfo WHERE DEPARTMENT = 'English' and Name = 'Tasnia Tarannum'");
            oci_execute($stid);

            
            while ($row = oci_fetch_assoc($stid)) {
                echo '<div class="facultyOne">';
                echo '<img src="../images/eng2.png" alt=""><br>';
                echo '<div class="details">';
                echo '<label for="">Name: ' . $row['NAME'] . '</label><br>';
                echo '<label for="">Email: ' . $row['EMAIL'] . '</label><br>';
                echo '<label for="">Address: ' . $row['ADDRESS'] . '</label><br>';
                echo '<label for="">Position: ' . $row['POSITION'] . '</label><br>';
                echo '<label for="">Department: ' . $row['DEPARTMENT'] . '</label><br>';
                echo '</div>';
                echo '</div>';
            }
            echo '<hr>';
            if (!$conn) {
				$e = oci_error();
				trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
			}
			$stid = oci_parse($conn, "SELECT NAME, EMAIL, ADDRESS, POSITION, DEPARTMENT FROM facultyInfo WHERE DEPARTMENT = 'English' and Name = 'Iftekhar Mahmud'");
            oci_execute($stid);

        
            while ($row = oci_fetch_assoc($stid)) {
                echo '<div class="facultyTwo">';
                echo '<img src="../images/eng1.png" alt=""><br>';
                echo '<div class="details">';
                echo '<label for="">Name: ' . $row['NAME'] . '</label><br>';
                echo '<label for="">Email: ' . $row['EMAIL'] . '</label><br>';
                echo '<label for="">Address: ' . $row['ADDRESS'] . '</label><br>';
                echo '<label for="">Position: ' . $row['POSITION'] . '</label><br>';
                echo '<label for="">Department: ' . $row['DEPARTMENT'] . '</label><br>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            
          
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

<?php

oci_free_statement($stid);
oci_close($conn);
?>
