<?php
$conn = oci_connect('system', 'tiger', '//localhost/XE');
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get user input
$myusername = isset($_POST['userid']) ? $_POST['userid'] : "";
$mypassword = isset($_POST['password']) ? $_POST['password'] : "";
 
$query = "SELECT * FROM FacultyInfo WHERE UserID=:myusername AND Password=:mypassword";
$vtpid = oci_parse($conn, $query);
 
oci_bind_by_name($vtpid, ":myusername", $myusername);
oci_bind_by_name($vtpid, ":mypassword", $mypassword);
 
$result = oci_execute($vtpid);
 
$count = oci_fetch_all($vtpid, $rows);
 
oci_free_statement($vtpid);
 
if ($count > 0) {
session_start();
$_SESSION["userid"] = $myusername;
$_SESSION["password"] = $mypassword;
header("Location: ../Dashboard/facultyDashboard.php");
exit();
} else {
echo "Incorrect Username or Password";
}
}
?>

<html>
<head>
<title>Faculty login</title>
<link rel="stylesheet" href="../CSS/user.css">
<link rel="stylesheet" href="../CSS/home.css">
<link rel="stylesheet" href="../CSS/loginForm.css">
<style>
      .loginBox{
    height: 300px;
    width: 300px;
    background-color: transparent;
    color: black;
    margin-top: 140px;
    margin-left: 40%;
    border-radius: 15px;
    box-shadow: 0px 0px 5px 5px green;

}

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
  <h2>Course Registration</h2>

<ul>
<li><a href = "Accountlogin.php"><button>Login as Accountant</button></a>
<li><a href = "Deptslogin.php"><button>Login as Department </button></a>
<li><a href = "Facultylogin.php"><button>Login as Faculty</button></a>
<li><a href  = "Studentlogin.php"><button>Login as Student</button></a>
</ul>
</div>

<div class="body">

<div class="mainContent">

    <div class="loginBox">
<h2>Login for Faculty </h2>
<form action="" method="POST" enctype="multipart/form-data">
<label>Userid</label>
<input type="text" name="userid" id="userid" placeholder="Enter userid">
<label>Password</label>
<input type="password" name="password" id="password" placeholder="Enter password"> <br>
<input class="subBtn" type="submit" name="" value="Login">
</form>
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