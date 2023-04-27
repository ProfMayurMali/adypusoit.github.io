<?php include 'menu.php';?>
    <style>
    
        h1{
        text-align: center;
        color: blue;
        padding-top: 35px;
        font-size: 25px;
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
    height: 500px;
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

    <h1 class="#">Title: CANSAT Containing Container and Glider for Measuring Atmospheric Conditions </h1>

    <div class="container">

        <div class="card">
            <img class="card-img-top" src="images/patent1.jpg" alt="birthday" class="birthday" width="65%" height="65%" >
            <div class="text">
              
              <h3>SUMMARY OF THE INVENTION: </h3>
              <p class="card-text">The present invention seeks to provide a CanSat system for measuring atmospheric conditions.<br>
                    In one aspect, an embodiment of the present invention provides a CanSet system 
                    including a glider, having at least one sensor, wherein the glider is operable to follow 
                    a helical descent path; and a container, having a spring loaded release mechanism 
                    operable for programmed release of the glider.<br>
                    In another aspect, an embodiment of the present invention provides a container 
                    having a spring loaded release mechanism for programmed release of a glider. 
                    In yet another aspect, an embodiment of the present invention provides a glider 
                    having a wing assembly arrangement and at least one sensor for measuring at least 
                    one atmospheric condition.<br>
                    Embodiments of the present disclosure substantially eliminate or at least partially 
                    address the aforementioned problems in the prior art, and provide a compact CanSet
                    system which is easy to release and operable to cover a maximum testing volume.

                    Additional aspects, advantages, features and objects of the present disclosure would 
                    be made apparent from the drawings and the detailed description of the illustrative 
                    embodiments construed in conjunction with the appended claims that follow.<br>

                    It will be appreciated that features of the present disclosure are susceptible to being 
                    combined in various combinations without departing from the scope of the present 
                    disclosure as defined by the appended claims.</p>
              
            </div>
            <div class="space"></div>
          </div>
    </div>

    </section>

</body>
</html>