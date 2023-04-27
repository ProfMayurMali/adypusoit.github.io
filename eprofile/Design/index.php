<?php include 'menu.php';?>

    <style>
       @import url("https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext");
    .card {
    width: 100%;
    height: 400px;
    max-width: 400px;
    display: flex;
    flex-direction: column;
    background: #FFF;
    margin: auto;
    padding: 20px 20px;
    border-radius: 15px;
    box-shadow: 0 8px 60px -10px #3339;
    }
    .img {
    width: 150px;
    height: 150px;
    margin-left: auto;
    margin-right: auto;
    transform: translateY(-40%);
    overflow: hidden;
    border-radius: 50%;
    box-shadow: 0 5px 50px 0 #64F,
                0 0 0 7px #64F8;
    transition: all 300ms;
    }
    @media screen and (max-width: 786px) {
    .card {
        margin: 100px 20px auto 20px ;
    }
    }
    .cnt {
    margin-top: -55px;
    text-align: center;
    padding-bottom: 20px;
    transition: all 300ms;
    }
    .name {
    font-weight: 700;
    font-size: 30px;
    color: #64F;
    margin-top: 10px;
    margin-bottom: 15px;
    }
    .txt {
    font-weight: 500;
    font-size: 20px;
    margin-bottom: 15px;
    margin-top: 7px;
    }
    i{
    margin: 0 5px;
    }
    .card-inf {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 25px;
    }
    .item {
    
    width: 100px;
    }
    .title {
    font-weight: 700;
    font-size: 20px;
    }
    .card-button {
    margin-top: 30px;
    }
    button {
    width: 150px;
    height: 55px;
    font-size: 19px;
    font-family: "Quicksand", sans-serif;
    font-weight: 700;
    border-radius: 50px;
    border: none;
    color: #FFF;
    cursor: pointer;
    transition: all 300ms;
    }
    .btn-blue {
    background: linear-gradient(45deg, #1AF, #07C);
    box-shadow: 0 4px 30px #17D6;
    }
    .btn-orange {
    background: linear-gradient(45deg, #D15, #D52);
    box-shadow: 0 4px 30px #D245;
    }
    .btn-blue:hover {
    box-shadow: 0 4px 30px #17DB;
    }
    .btn-orange:hover {
    box-shadow: 0 4px 30px #D24B;
    }
    button:hover {
    transform: translateY(-5px);
    }
        .container{
        margin-top: 75px!important;
        display: flex;
        height: 500px;
        width: 1000px;
        background-color: #ffffff;
        border: 2px solid #eedd82;
        margin: auto;
        box-shadow: 0 0rem 1rem rgba(0, 0, 0, 0.1) !important;
        border-radius: 5px;
    }


    .fa fa-graduation-cap{
        height: 24px;
        width: 24px;
    }

   .dashcontent .pimg{
        margin-right: 25px;
        margin-top: 25px;
    }

    .card-text{
        padding-top: 15px;
        font-size: 25px;
    }

    .cnt{
        padding-top: 75px;
    }

    </style>

<section class="dashcontent">

        <div class="container">
    
        <div class="card">
    
          <div class="cnt">
    
            <div class="card-body">
                <div class="bcard">
                 <h1 class="name">HELLO I'M <br><span class="aname">RAHUL SINGH THAKUR</span></h1>
                <i class="fa fa-graduation-cap fa-2x"></i>
                <p class="card-text">I'm pursuing Bachelor of <br> Technology in Data Science</p>
                <a href="#" class="btn btn-primary"></a>
                </div>
            </div>
    
            <div class="card-button">
            <a href="index.php"><button class="btn-blue" name="update" id="button">My Project</button></a>
            </div>
    
          </div>
        </div>
    
            <div class="pimg">
                <img src="images/rahul.jpeg" height="400px" width="350px">
            </div>
    
        </section>

    </body>
    </html>
