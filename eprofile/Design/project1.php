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

    <h1 class="#">PROJECT TITLE: DESIGN AND IMPLEMENTATION OF AN INTELLIGENT SYSTEM BASED ON ML AND IOT FOR ORDINARY TO SMART REFRIGERATOR CONVERSION</h1>

    <div class="container">

        <div class="card">
            <img class="card-img-top" src="images/Projectimage1.png" alt="birthday" class="birthday" width="40%" height="40%" >
            <div class="text">
              
              <h3>ABSTRACT:</h3>
              <p class="card-text">Machine Learning has evolved with a variety of algorithms to enable state of the art 
                        computer vision applications. In particular the need for automating the process of real 
                        time food item identification, there is a huge surge of research so as to make smarter 
                        refrigerators. According to a survey by the Food and Agriculture Organization of the 
                        United Nations (FAO), it has been found that 1.3 billion tons of food is wasted by 
                        consumers around the world due to either food spoilage or expiry and large amount of 
                        food is wasted from homes and restaurants itself. Smart refrigerators have been very 
                        successful in playing a pivotal role in mitigating this problem of food wastage. But a 
                        major issue is high cost of available smart refrigerators and the lack of accurate design 
                        algorithms which can help achieve computer vision in any ordinary refrigerator. To 
                        address these issues, the current work proposes an automated identification algorithm for 
                        computer vision in smart refrigerators using VGG-16, InceptionV3 and Mobile Net
                        Convolutional Neural Network (CNN) architectures. A smart and portable module for 
                        converting any ordinary refrigerator to smart refrigerator has been designed to validate 
                        the performance of the algorithm. The designed module and algorithm has been 
                        elaborated in detail and is considerably evaluated for its accuracy using test images on 
                        standard fruits and vegetables dataset. Initially the testing using VGG-16 CNN model has 
                        been carried out and the accuracy values are noted. A total of eight test cases are 
                        considered with accuracy and training time as the performance metric using InceptionV3 
                        and MobileNetV3 CNN. The results of the work showed that the MobileNetV3 CNN 
                        clearly outperformed the InceptionV3 model in terms of training time as well as the 
                        accuracy. The finding of this work depicts that a huge amount of training time 
                        approximately 45 minutes on an average is saved with the usage of a very light CNN 
                        network i.e. MobileNetV3. Moreover a very high accuracy value of about 99.9% is 
                        achieved and that too on a bigger dataset like FRUITS360. Finally the results obtained 
                        from real time testing with fruits and vegetables clearly validate the performance of the 
                        system proposed. A Graphical User Interface (GUI) and an android application has also 
                        been designed to experimentally validate the proposed design by fitting the display 
                        screen on refrigerator for monitoring of fruits, vegetables and barcode scan items in 
                        various scenarios.</p>
<h3>OBJECTIVES:</h2>
<p class="card-text">1. To carry out parametric analysis of smart refrigerators including food scanning technique, expiry check, control and sensing module, usage of cloud platform and notification mechanism to the user.<br>
2. To study in depth about the items/equipments to be used for proposed intelligent system and to compare their performance with other existing smart/intelligent systems.<br>
3. To design and implement a smart and modular hardware setup for food item weight sensing and camera scanning using ML algorithms and providing cloud based IoT solution which can turn any ordinary refrigerator into a smart refrigerator<br>
4. To experimentally validate the proposed design by fitting the display screen on refrigerator for monitoring of fruits, vegetables and barcode scan items in various scenarios</p>
              
            </div>
            <div class="space"></div>
          </div>
    </div>

    </section>

</body>
</html>