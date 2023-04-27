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

    .image{
        color: blue;
        padding-top: 50px;
        font-size: 25px;
        border: 3px solid #FFFDD0;
    }

    .image1{
        color: blue;
        padding: 150px 50px;
        font-size: 25px;
        border: 3px solid #FFFDD0;
    }

    </style>

    
<title> Contact Me & Personal Details</title>
    <?php include 'menu.php';?>

<section class="education" id="education">

    <div class="edu">

    <h1 class="heading"><i class="fa fa-graduation-cap fa-1x" aria-hidden="true"></i>

 Contact Me & Personal Details </h1>

    <p class="qoute">Rahul Singh Thakur</p>

    </div>

      <div class="box-container">

      <div class="box">

          <div class="image">

          <i class="fa fa-phone fa-5x"></i>

          </div>

          <div class="content">

          <h3>Permanent Address- </h3>

          <h4> MB-8 Indralok Colony, <br> Rawali Mahdood BHEL, <br> Distt-  Haridwar, 249408</h4>
          
          <div class="card-button"> 

                </div>

          </div>

      </div>

      <div class="box">

        <div class="image">

        <i class="fa fa-map-marker fa-5x"></i>

        </div>

        <div class="content">

        <h3>Correspondence Address-</h3>

        <h4>Flat number 901, Tower F1, Jasminum Apartment, Magarpatta City, Hadapsar, Pune, <br> Maharashtra-411028</h4>

        <div class="card-button">

            </div>

        </div>
      </div>

            <div class="box">

          <div class="image1">

        <i class="fa fa-user-circle-o fa-5x"></i>

          </div>

          <div class="content">
 
          <h3>Personal Details</h3>
          <h4>Mother’s Name: Rajni Rani <br> Father’s Name: Hanish Jindal<br> D.O.B.: 3rd June, 2002 <br>Mobile Number- +917217221234 <br> Email I’d-Rahul.thakur@adypu.edu.in <br>Aadhar             Number- 6760 3040 2656 3245 <br>Passport Number- CGH45678 <br>Blood Group- A+ </h4>
          <div class="card-button">

                </div>

          </div>

      </div>

            <div class="box">

          <div class="image1">

        <i class="fa fa-share-square fa-5x"></i>

          </div>

          <div class="content">

          <h3>Social Details</h3>
          <h4>LinkedIn-https://www.linkedin.com/in/rahul-Singh-729344200/ <br> GitHub-https://github.com/rahulsingh529-beep/ <br>YouTube channel- <br> Twitter Link- <br> Instagram- <br>Facebook- </h4>
          <div class="card-button">

                </div>

          </div>  

      </div>

      <div class="box">

          <div class="image">

    <i class="fa fa-language fa-5x"></i>

          </div>

          <div class="content">

          <h3>Languages Known</h3>
          <h4>English | Hindi | Marathi</h4>
          <div class="card-button">

                </div>

          </div>

      </div>

  </div>

</section>