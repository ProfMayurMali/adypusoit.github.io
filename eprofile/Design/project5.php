
<?php include 'menu.php';?>
    <style>
    
        h1{
        text-align: center;
        color: blue;
        padding-top: 25px;
        font-size: 35px;
    }

    .container{
        margin-top: 75px!important;
        display: flex;
        height: 900px;
        width: 1000px;
        background-color: #ffffff;
        border: 2px solid #eedd82;
        margin: auto;
        box-shadow: 0 0rem 1rem rgba(0, 0, 0, 0.1) !important;
       
    }

    .card {
    background: #ffffff;
    border-radius: 30px;
    height: 900px;
    width: 80vw;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
   // text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    //align-items: center;
    padding: 1em;
    overflow: hidden;
    color:#DCE35B;
    }

    .card img.birthday {
    width: 300px;
    height: 300px;
    border-radius: 30px;
    }

    .card card-img-top {
    width: 300px;
    height: 300px;
    border-radius: 30px;
    margin-top: 50px;
    }

@media only screen and (min-width: 1000px) {
  .card {
    flex-direction: row-reverse;
  }
  .card img.birthday {
    width: 60%;
    max-width: 50vw;
    max-height: unset;
    border-radius: 30px;
  }
}

@media only screen and (max-height: 640px) {
  .card {
    flex-direction: row-reverse;
  }
  .card img.birthday {
    width: 100%;
    max-width: 50vw;
    max-height: unset;

  }
}

img.birthday {
  max-height: 40vh;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}

.text {
   padding-top: 0px;
}
.text h2{
  font-family:cursive;
  font-size: 40px;
   padding-top: 0px;
   color: blue;
}
.space {
  height: 100px;
}

.credit a{
  text-decoration: none;
  color: #fff;
}

.credit {
    margin-top: 10px;
    text-align: center;
}
.text p{
   font-size: 15px;
   color: black!important;

}
.text h3{
    color: blue;
}
    </style>

    <section class="dashcontent">

    <h1 class="#">PROJECT TITLE:  React Js Based Project for complete management of video conferences, and meetings of the company on its specific server. </h1>

    <div class="container">

        <div class="card">
            <img class="card-img-top" src="images/" alt="birthday" class="birthday" width="40%" height="40%" >
            <div class="text">
              
              <h3>Information:</h2>
              <p class="card-text"></p>
              <h3>Objectives:</h2>
              <p class="card-text"></p>
              <h3>Outcomes:</h2>
              <p class="card-text"></p>
              
            </div>
            <div class="space"></div>
          </div>
    </div>

    </section>

</body>
</html>