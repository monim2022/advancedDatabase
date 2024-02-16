<html>
<head>
<title> Home </title>
<link rel="stylesheet" href="../CSS/user.css">
<link rel="stylesheet" href="./CSS/home.css">
<style type="text/css">
    .mainContent{
         
    background-image: url('images/aiub.jpg'); 
        margin: 10px;
        margin-top: 50px;
        background-size: 100% 100%;
        box-shadow: 1px 2px 10px 5px black;
        width: 98%;
        height: 70%;
        animation: slider 9s infinite linear;

    }
    @keyframes slider{
        0%{background-image: url('images/aiub.jpg');}
        35%{background-image: url('images/amphitheatre-v2.jpg');}
        75%{background-image: url('images/playground_stadium.jpg');}
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
<li><a href = "./Login/Accountlogin.php"><button>Login as Accountant</button></a>
<li><a href = "./Login/Deptslogin.php"><button>Login as Department </button></a>
<li><a href = "./Login/Facultylogin.php"><button>Login as Faculty</button></a>
<li><a href  = "./Login/Studentlogin.php"><button>Login as Student</button></a>
</ul>
</div>

<div class="mainContent">
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

