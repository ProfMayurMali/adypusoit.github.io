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
        height: 500px;
        width: 1000px;
        background-color: #ffffff;
        border: 2px solid #eedd82;
        margin: auto;
        box-shadow: 0 0rem 1rem rgba(0, 0, 0, 0.1) !important;
       
    }

    .card {
    background: #ffffff;
    border-radius: 30px;
    height: 85vh;
    width: 80vw;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 1em;
    overflow: hidden;
    color:#DCE35B;
    }

    .card-img-top{
        padding-top: 100px;
    }

    .card img.birthday {
    border-radius: 30px;
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
   padding: 35px 0px;
   color: blue;
}

.text p{
   color: black!important;
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
    </style>

    <section class="dashcontent">

    <h1 class="#">EDUCATION...!</h1>

    <div class="container">

        <div class="card">
            <img class="card-img-top" src="images/eduimg.jpeg" alt="birthday" class="birthday" height="400px" width="500px">
            <div class="text">
              <h2>EDUCATIONAL</h2>
            
              <p class="card-text">Paragraph on Importance of Education: Education helps in the mental and intellectual nourishment and growth of a person. Without education an individual cannot progress intellectually, and cannot develop skills and capacities to work. Education fosters the enlightenment, empowerment and emancipation of society. Without education a society will be socially, economically and politically backward. Education is what serves to make a nation strong, capable, powerful and resilient, and take it forward. Education is, therefore, very important for every individual person, and as a whole for every society and nation. Hence, education must be available to all the children and youth of a nation without any discrimination.</p>
              
            </div>
            <div class="space"></div>
          </div>
    </div>

    </section>

</body>
</html>