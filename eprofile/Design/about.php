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

   color: black!important;

}
.text h3{
    color: blue;
}
    </style>

    <section class="dashcontent">

    <h1 class="#">ABOUT ME...!</h1>

    <div class="container">

        <div class="card">
            <img class="card-img-top" src="images/rahul.jpeg" alt="birthday" class="birthday">
            <div class="text">
              <h2>Hello Thanks !!! </h2>
              <h3>For Knowing About Me & My Professional Summary</h3>
            
              <p class="card-text">Rahul Singh Thakur is an ambitious undergraduate student at Ajeenkya D Y Patil University, Pune, with a keen analytical mindset, a passion for innovation, and a strong work ethic. With a desire to achieve his goals, Rahul is dedicated to learning and growing both personally and professionally.<br>

Rahul has a strong foundation in full-stack development, and he possesses a decent command of several programming languages such as C, C++, Python, and JavaScript. His ability to learn and adapt quickly is a testament to his dedication to his craft, and he is always looking for opportunities to expand his knowledge and skillset.<br>

As a natural leader, Rahul is eager to gain experience working with the best professionals in a growth-oriented, employee-centric company. He is driven to succeed and is excited about the prospect of working in an entry-level software engineering program, where he can apply his skills and learn from experienced mentors.<br>

Overall, Rahul Singh Thakur is a motivated and driven individual with a passion for software development. His analytical mindset, technical skills, and dedication to success make him a valuable asset to any team or organization.</p>
              
            </div>
            <div class="space"></div>
          </div>
    </div>

    </section>

</body>
</html>