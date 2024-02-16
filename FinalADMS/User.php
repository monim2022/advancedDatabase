<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
    }

    .navContainer {
      display: grid;
      grid-template-columns: 8;
      height: 100px;
      background-color: #559f89;
    }

    

    ul {
      grid-column-start: 7;
      grid-column-end: 9;

      list-style-type: none;  
      display: flex;
    }

    ul li {
      margin: 0 10px;
    }

     a {
      text-decoration: none;
      color: #fff;
      font-weight: bold;

    }

    button:hover {
      background-color: white;
      color: red;
      transition: background-color 0.3s;
      border-color: red;
      border-radius: 20px;
      
    }

   h2{
      grid-column-start: 1;
      grid-column-start: 4;
      color: white;
      margin-top: 40px;
    }
    button{
      height: 30px;
      width: 180px;
      margin-top: 25px;
    }
    
  </style>
</head>
<body>


<div class="navContainer">
  <h2>Course Registration</h2>

<ul>
<li><a href = "../ADMS/Login/Accountlogin.php"><button>Login as Accountant</button></a>
<li><a href = "../ADMS/Login/Deptslogin.php"><button>Login as Department </button></a>
<li><a href = "../ADMS/Login/Facultylogin.php"><button>Login as Faculty</button></a>
<li><a href  = "../ADMS/Login/Studentlogin.php"><button>Login as Student</button></a>
</ul>


</div>
</body>
