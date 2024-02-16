
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<link rel="stylesheet" href="../CSS/studentDashboard.css">
<style>
	.BoxContainer{
		display: grid;
    grid-template-columns: 4;
    column-gap: 5px;
		margin: 20px;
		height: 320px;
		box-shadow: 10px 10px 10px 10px red;
	}
	.facultyOne{
		height: 290px;

    background: #f2f2f2;
	  grid-column-start: 1;
    grid-column-end: 2;

}
.facultyTwo{
		height: 290px;

	    background: #f2f2f2;

	grid-column-start: 2;
	    grid-column-end: 3;

}
.facultyThree{
		height: 290px;

	background: #f2f2f2;
	grid-column-start: 3;
	grid-column-end: 4;

}
h3{
	margin: 10px;
	text-align: center;
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
  <h2 class="headerName">DEPARTMENT DASHBOARD</h2>
<ul>
<li><a href = "../Dashboard/departmentDashboard.php"><button class="homeBtn">Home</button></a></li>
</ul>
<div class="logOut"><a href="../logOut.php"><button>Logout</button></a>
</div>
</div>

<div class="mainContainer">
	<h3>DEPARTMENT INFORMATIONS</h3>
	<div class="BoxContainer">
			   <div class="facultyOne">
			   	<b>Department of CSE</b><br>
			   	<span>
            CSE – is the study of matter and reactions that matter undergoes Lifesaving oxygen to medicine, food to cloth, computer to space shuttle, whatever we see involve.
             CSE – is the study of matter and reactions that matter undergoes Lifesaving oxygen to medicine, food to cloth, computer to space shuttle, whatever we see involve
             </span>
			   </div>
		   <div class="facultyTwo">
		   	<b>Department of BBA</b><br>
		   	<span>
         BBA – is the study of matter and reactions that matter undergoes Lifesaving oxygen to medicine, food to cloth, computer to space shuttle, whatever we see involve.
         CSE – is the study of matter and reactions that matter undergoes Lifesaving oxygen to medicine, food to cloth, computer to space shuttle, whatever we see involve
         </span>
		   </div>
		   <div class="facultyThree">
		   	<b>Department of Law</b><br>
		   	<span>
         Law – is the study of matter and reactions that matter undergoes Lifesaving oxygen to medicine, food to cloth, computer to space shuttle, whatever we see involve.
          CSE – is the study of matter and reactions that matter undergoes Lifesaving oxygen to medicine, food to cloth, computer to space shuttle, whatever we see involve
          </span>
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