<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Index | Document</title>

    <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  background-color: #FFFDD0;
  background-size: cover;
  background-attachment: fixed;
}
.navbar{
  height: 90px;
  width: 100%;
  padding: 14px 30px;
  background-color: #fff;
  position: relative;
}
.navbar .nav-header{
  display: inline;
}
.navbar .nav-header .nav-logo{
    display: inline-block;
    margin-top: -15px;
    padding: 5px;
    margin-right: 15px;
    height: 10px;
    border-radius: 10px;
}
.navbar .nav-links{
  display: inline;
  float: right;
  font-size: 18px;
  padding-top: 15px;
}
 
.navbar .nav-links .loginBtn{
  display: inline-block;
  padding: 5px 15px;
  margin-left: 20px;
  font-size: 17px;
  color: rgb(9, 14, 90);
}
.navbar .nav-links a{
  padding: 10px 12px;
  text-decoration: none;
  font-weight: 550;
  color: blue;
}
.navbar .nav-links a img{
  display: inline;
  float: right;
  margin-top: -20px;
  padding: 0px 12px;
}
/* Hover effects */
.navbar .nav-links a:hover{
  background-color: #FFFDD0;
}

.navbar .nav-links a img:hover{
  background-color: #fff;
}
 
/* responsive navbar toggle button */
.navbar #nav-check, .navbar .nav-btn{
  display: none;
}
 
@media (max-width:700px) {
  .navbar .nav-btn{
    display: inline-block;
    position: absolute;
    top: 0px;
    right: 0px;
  }
  .navbar .nav-btn label {
    display: inline-block;
    width: 80px;
    height: 70px;
    padding: 25px;
  }
  .navbar .nav-btn label span {
    display: block;
    height: 10px;
    width: 25px;
    border-top: 3px solid #eee;
  }
  .navbar .nav-btn label:hover, .navbar #nav-check:checked ~ .nav-btn label {
    background-color: #fff;
  }
  .navbar .nav-links{
    position: absolute;
    display: block;
    text-align: center;
    width: 50%;
    background-color: #fff;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 70px;
    right: 0px;
  }
  .navbar .nav-links a {
    display: block;
    color: blue;
  }
 
  /* when nav toggle button not checked */
  .navbar #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
 
  /* when nav toggle button is checked */
  .navbar #nav-check:checked ~ .nav-links {
    height: calc(100vh - 70px);
    overflow-y: auto;
  }
  .navbar .nav-links .loginBtn {
    padding: 10px 40px ;
    margin: 20px;
    font-size:  18px;
    font-weight: bold;
    color: rgb(9, 14, 90);
  }
   
}
    </style>

</head>
<body background="#FFFDD0">
<div class="navbar">
 
  <!-- Navbar logo -->
  <div class="nav-header">
    <div class="nav-logo">
      <a href="#">
        <img src="images/adypunew.jpeg" width="100px" height="auto" alt="logo">
      </a>
    </div>
  </div>
   
  <!-- responsive navbar toggle button -->
  <input type="checkbox" id="nav-check">
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
 
  <!-- Navbar items -->
  <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">My Professional Summary</a>
        <a href="education.php">Education</a>
        <a href="skills_strengths.php">Technical Experties</a>
        <a href="allprojects.php">Research & Project</a>
        <a href="commserv.php">Community-Service</a>
        <a href="awards.php">Awards</a>
        <a href="contactme.php">Contact Me</a>
     
        <a href="#">
            <img src="images/inurture.jpeg" width="150px" height="75px" alt="logo">
        </a>
  
  </div>

        
 
</div>
