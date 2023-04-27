    <style>

    

    .edu{

        text-align: center;

        color: blue;

        font-size: 35px;

        padding-top: 35px;

}

    .education .qoute {

    font-size: 1.5rem;

    text-align: center;

    font-family: "Nunito", sans-serif;

    font-weight: 600;

    margin-top: 0.5rem;

    }

    .education .box-container {

    display: flex;

    flex-wrap: wrap;

    justify-content: center;

    align-items: center;

    flex-direction: column;

    }

    .education .box-container .box {

    display: flex;

    flex-direction: row;

    width: 80%;

    border-radius: 0.5rem;

    box-shadow: 0.2rem 0.5rem 1rem rgba(0, 0, 0, 0.2);

    text-align: center;

    position: relative;

    margin-top: 2rem;

    overflow: hidden;

    transition: 0.3s;

    background: rgb(252, 252, 252);

    }

    .education .box-container .box:hover {

    transform: scale(1.03);

    box-shadow: 1rem 0.5rem 1.2rem rgba(0, 0, 0, 0.3);

    }

    .education .box-container .box .image {

    flex: 1 1 20rem;

    width: 100%;

    }

    .education .box-container .box img {

    object-fit: cover;

    position: relative;

    width: 100%;

    height: 100%;

    }

    .education .box-container .box .content {

    position: relative;

    display: flex;

    flex-direction: column;

    padding: 1rem;

    flex-wrap: wrap;

    flex: 1 1 70rem;

    }

    .education .box-container .box .content h3 {

    font-size: 2.5rem;

    color: #012970;

    padding: 0.5rem 0;

    font-weight: 600;

    text-align: left;

    margin-left: 1rem;

    }

    .education .box-container .box .content p {

    font-size: 1.5rem;

    margin-left: 1rem;

    text-align: left;

    }

    .education h4 {

    font-size: 2rem;

    color: rgb(34, 109, 0);

    text-align: left;

    margin: 1rem;

    font-family: "Nunito", sans-serif;

    font-weight: 700;

    }



    /* education media queries starts*/

    @media screen and (max-width: 600px) {

    .education .box-container .box {

        flex-direction: column;

        width: 100%;

    }

    .education .box-container .box .image {

        width: 100%;

        height: 25rem;

    }

    .education .box-container .box img {

        width: 100%;

    }

    .education .box-container .box .content {

        position: relative;

        display: flex;

        flex-direction: column;

        padding: 1rem;

        flex-wrap: wrap;

        flex: 0;

    }

    .education .btns {

        margin-top: 2rem;

        margin-left: 1rem;

        margin-right: 1rem;

        flex-wrap: wrap;

    }

    }



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

    @media screen and (max-width: 576px) {

    button {

        margin: 0;

        margin-bottom: 16px;

        width: 100%;

        max-width: 350px;

    }

    }

    

    </style>

    

    <?php include 'menu.php';?>



<section class="education" id="education">

    <div class="edu">

    <h1 class="heading"><img src="images/awards.png" width="=60px" height="60px">

 Awards & Honors</h1>

   

    </div>



      <div class="box-container">

  

      <div class="box">


          <div class="content">

          <h3>International “Young Aspirant Award” for Research Work by I2OR.</h3>

         

          </div>

                

      </div>

  

      <div class="box">


        <div class="content">

        <h3>International Emerging Scientist Award by ISAO.</h3>

       

        </div>
      </div>

            <div class="box">

          <div class="content">

          <h3>Best Research Paper Award for “Quantum Clock Using DoubleAudits and Relations with Gravity” by Novel Research Academy.</h3>
         

          </div>

                

      </div>

      <div class="box">

          <div class="content">

          <h3>Eight-Time National & International Hackathon Winner.</h3>
         

          </div>

      </div>

      <div class="edu">
<h1 class="heading"><img src="images/awards.png" width="=60px" height="60px">

 Extra-Curricular & Co-Curricular Achievement</h1>
 </div>
    <div class="box">

          <div class="content">

          <h3>Mentor in IEEE India WIE Council for research. </h3>
         

          </div>

      </div>

  <div class="box">

          <div class="content">

          <h3>IEEE ADYPUSB Vice-Chair. </h3>
         

          </div>

      </div>
	   <div class="box">

          <div class="content">

          <h3>Global Student Award 2021-2022.</h3>
         

          </div>

      </div>
	   <div class="box">

          <div class="content">

          <h3>National Cadet Corps (2016-2018) ‘A’ Certificate Holder. </h3>
         

          </div>

      </div>
	   <div class="box">

          <div class="content">

          <h3>Delhi Public School, Pune | Head Boy | 2016-2017 & 2019-2020.</h3>
         

          </div>

      </div>
	   <div class="box">

          <div class="content">

          <h3>Played in State level Badminton tournament at School level(under 14). </h3>
         

          </div>

      </div>
	   <div class="box">

          <div class="content">

          <h3>YouTube channel on Data Informatics with 5000 subscribers.</h3>
         

          </div>

      </div>
	  
  </div>

</section>