<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<link rel="stylesheet" href="../CSS/studentDashboard.css">
<style>
	.mainContainer{
		display: grid;
		grid-template-columns: 4;
		grid-template-columns: 2;
		gap: 5px;
		row-gap: 5px;

	}
	.subContainer{
		grid-column-start: 1;
		grid-column-end: 2;
	}
	.facultyImages{
		grid-column-start: 2;
		grid-column-end: 3;

	}
	div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}


div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
	margin: 5px;
  float: left;
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
.subContainer{

height: 620px;
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

</style>

</head>
<body>
<div class="navContainer">
  <h2 class="headerName">FACULTY DASHBOARD</h2>
<ul>
<li><a href = "../Dashboard/facultyDashboard.php"><button class="homeBtn">Home</button></a></li>
</ul>
<div class="logOut"><a href="../logOut.php"><button>Logout</button></a>
</div>
</div>

<div class="mainContainer">
	<div class="subContainer">
	
	<a href="../facultyInfo/cseFaculty.php"><button class="cssWork" id="courseRegiId">CSE FACULTY</button></a>
	<a href="../facultyInfo/bbaFaculty.php"><button class="cssWork" id="currentCourseId">BBA FACULTY</button></a>
	<a href="../facultyInfo/lawFaculty.php"><button class="cssWork" id="availableCourseId">LAW FACULTY</button></a>
	<a href="../facultyInfo/englishFaculty.php"><button class="cssWork" id="availableCourseId">ENGLISH FACULTY</button></a>
	
</div>
<div class="facultyImages">
	
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="../images/bbb1.png" alt="Cinque Terre" width="100" height="100">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="../images/eng1.png" alt="Cinque Terre" width="100" height="100">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="../images/safiSir.jpg" alt="Cinque Terre" width="100" height="100">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="../images/bbb2.png" alt="Cinque Terre" width="100" height="100">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank">
      <img src="../images/reduanSir.png" alt="Cinque Terre" width="100" height="100">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank">
      <img src="../images/bbb1.png" alt="Cinque Terre" width="100" height="100">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
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