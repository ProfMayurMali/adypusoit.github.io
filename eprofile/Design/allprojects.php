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

    <h1 class="heading"><i class="fa fa-graduation-cap fa-1x" aria-hidden="true"></i>

 My Projects</h1>


    </div>



      <div class="box-container">

  

      <div class="box">

          <div class="content">
          <h3>Project No: - 1</h3>
          <h4>DESIGN AND IMPLEMENTATION OF AN INTELLIGENT SYSTEM BASED ON ML AND IOT FOR ORDINARY TO SMART REFRIGERATOR CONVERSION</h4>
          <h5>Github Link: -https://github.com/Harsh529- beep/ML-AND-IOT-FOR-ORDINARY-TO-SMART-REFRIGERATOR-CONVERSION</h5>
          
          
          <div class="card-button">

                <a href="project1.php"><button class="btn-blue" name="update" id="button">View</button></a>

                </div>

          </div>

                

      </div>

  

      <div class="box">

        <div class="content">

        <h3>Project No: - 2</h3>

        <h4>Designing & Understanding of Human Robot Motion in Social Envirnoment</h4>
        

        <div class="card-button">

                <a href="project2.php"><button class="btn-blue" name="update" id="button">View</button></a>

            </div>

        </div>
      </div>

            <div class="box">

          <div class="content">

          <h3>Project NO: - 3</h3>
          <h4>Movie Ticket Booking Website </h4>
          <h5>Github Link: -https://github.com/Harsh529- beep/Movie-Booking-Website-Crypto-UPI-Gateway</h5>
          <div class="card-button">

                <a href="project3.php"><button class="btn-blue" name="update" id="button">View</button></a>

                </div>

          </div>

                

      </div>

                <div class="box">

          <div class="content">

          <h3>Project NO: - 4</h3>
          <h4>BOGGLE NSUT</h4>
          <h5>Project Link: - https://boggle-nsut.web.app/</h5>
          <div class="card-button">

                <a href="project4.php"><button class="btn-blue" name="update" id="button">View</button></a>

                </div>

          </div>

                

      </div>

      
                <div class="box">

          <div class="content">

          <h3>Project NO: - 5</h3>
          <h4>OpenCV Project on Video Conferencing App</h4>
          <h5>Github Link: -https://github.com/Harsh529-beep/Video Conference-App</h5>
          <div class="card-button">

                <a href="project5.php"><button class="btn-blue" name="update" id="button">View</button></a>

                </div>

          </div>

                

      </div>

      <div class="box">

          <div class="content">

          <h3>Project NO: - 6</h3>
          <h4>Geospatial Project based on Landslides Detection (Python Based)</h4>
          
          <div class="card-button">

                <a href="project6.php"><button class="btn-blue" name="update" id="button">View</button></a>

                </div>

          </div>

                

      </div>


      <div class="edu">
            <h1 class="heading"><img src="images/awards.png" width="=60px" height="60px">

            Research Publications</h1>
            </div>


        <div class="box">

          <div class="content">

          <h4><li>Rahul Thakur & Paras Chawla, “Automated Identification Algorithm Using CNN for Computer Vision in Smart Refrigerators”,Computers, Materials & Continua, Tech Science Press,Vol.71, No.2, pp. 3337-3353, Nov.2022 </li><li> 13 Nov 2021 | Research Paper Published Analytical approach of Quantum computing based on thematic studies (SPRINGER)</li><li>30 Aug 2021 | Research Paper Published an Optimum Approach to Vector Machine with KVM. (AIP)</li><li> Modification in Sap V 2.0 (IEEE Transaction Paper)</li></h4>
          
          <div class="card-button">

                <a href="project6.php"><button class="btn-blue" name="update" id="button">View</button></a>

                </div>

          </div>

                

      </div>

      <div class="edu">

    <h1 class="heading"><i class="fa fa-graduation-cap fa-1x" aria-hidden="true"></i>

 My Patents</h1>


    </div>



      <div class="box-container">

  

      <div class="box">

          <div class="content">
          <h3>Patent No: - 1</h3>
          <h4>CANSAT Containing Container and Glider for Measuring Atmospheric Conditions <br> | Status:Published <br> | Application No. & Date of application: 201611010075 & 16/01/2017</h4>
          
          
          <div class="card-button">

                <a href="patent1.php"><button class="btn-blue" name="update" id="button">View</button></a>

                </div>

          </div>

                

      </div>
      
  

  </div>

</section>