<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website designing -K2inofocom</title>
    <!---external css ---->
    <link rel="stylesheet" href="style.css">
    <!---font awesome cdn for font icons---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <style>
        :root{
    --purple:#2F192E;
    --purple-light:#30192d;
    --dark-blue:#012677;
    --blue:#5c65c0;
    --skyblue :#00b4fc;
    --light-blue:#005bc5;
    --dark-pink:#f64c57;
    --dark-magenta:#e21b5a;
    --light-green:#61e2c2;
    --light-purple:#d9abff;
}
*{
    box-sizing: border-box;
    padding:0;
    margin:0;
    text-decoration: none;
    font-family: poppins,sans-serif;
}
body{
    background: linear-gradient(45deg, var(--purple),var(--purple-light));
}
.container{
    display: flex;
    justify-content: space-around;
    align-items: center;
    min-height: 100%;
    width: 100%;
    flex-wrap: wrap;
    position: relative;
}
.profile-card{
    background: #111;
    width:400px;
    padding: 3rem;
    border-radius: 10px;
    min-height: 400px;
    position: relative;
    color:#fff;
    margin: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
}
.profile-card .profile-pic{
    margin-top: 15px;
    overflow: hidden;
}
.profile-card .profile-pic img{
    border-radius: 10px;
}
.profile-card .profile-details{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    width:100%;
}
.profile-details .intro{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.profile-details .intro h2{
    margin-top: 20px;
}
.profile-details .intro h4{
    background: #1d1d1d;
    font-weight: 400;
    border-radius: 4px;
    padding: 5px 10px;
    margin: 8px;
}
.profile-details .intro .social{
    margin-top: 10px;
    margin-bottom: 25px;
}
.profile-details .intro .social i{
    color:#ddd;
    font-size: 16px;
    background-color:#222;
    margin: 5px;
    height: 35px;
    width:35px;
    line-height: 35px;
    text-align: center;
    border-radius: 5px;
    transition: 0.5s;
}
.profile-details .intro .social i:hover{
    transform: scale(1.2);
    border:1px solid rgba(255,255,255,0.3);
}
.profile-details .contact-info{
    background-color: #1d1d1d;
    padding: 15px;
    border-radius: 10px;
    width: 100%;
}
.profile-details .contact-info .row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    padding: 10px 0;
    margin-bottom: 10px;
}
.contact-info .row .icon{
    height: 40px;
    width: 40px;
    line-height: 40px;
    border-radius: 5px;
    background-color: #111;
    text-align: center;
    color:#fff;
    transition: 0.5s;
}
.row .icon:hover{
    transform:scale(1.2);
    border:1px solid rgba(255,255,255,0.1);
}
.row .content{
    min-width: 70%;
}
.row .content span{
    font-size: 12px;
}
.download-btn{
    background: linear-gradient(45deg, #f64c57,#e21b5a);
    color:#fff;
    padding: 1rem 3rem;
    border-radius: 30px;
    margin-top: 1.5rem;
    border:none;
}
/*****about section ****/
.about{
    background-color: #111;
    max-width: 800px;
    padding: 2rem 3rem;
    border-radius: 10px;
}
.about h1{
    color:#f2f2f2;
    margin-bottom: 1.1rem;
    position: relative;
    display: inline-block;
    font-size: 3.5rem;
}
.about h1::after{
    position: absolute;
    content: "";
    top:50%;
    right:-50%;
    width:45%;
    height: 3px;
    background: linear-gradient(45deg, #f64c57,#e21b5a);
}
.about h2{
    color:#f2f2f2;
    font-size: 2rem;
    margin:0.5rem 0;
}
.about p{
    color:#555;
    margin:1.5rem 0;
}
.about .work{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto;
}
.work .workbox{
    display: flex;
    justify-content: space-between;
    border-radius:8px;
    border:1px solid #333;
    padding: 1rem;
    margin:1rem;

}
.work .workbox .desc{
    width:75%;
    color:#555;
}
.work .workbox .desc h3{
    color:#f2f2f2;
    margin-bottom: 3px;
}
.work .workbox .desc p{
    margin:0px;
}
/***Responsive Design ***/
@media(max-width:768px)
{
    .about{
        width: 1005;
        max-width: 400px;
        padding:1rem;
        margin:1rem;

    }
    .about h1{
        font-size: 2.2rem;
    }
    .about .work{
        grid-template-columns: repeat(1,1fr);
        grid-template-rows: repeat(4,auto);
    }
}
    </style>
   <div class="container">
       <div class="profile-card"> 
            <div class="profile-pic">
                <img src="{{ URL('images/avatar.jpg')}}" alt="user avatar">
            </div>

            <div class="profile-details">
                 <div class="intro">
                    <h2>Bryl Ace Leonzon</h2>
                    <h4>Digital Illustrator</h4>
                    <div class="social">
                        <a href="https://web.facebook.com/brylace.leonzon"><i class="fab fa-facebook" style="color:var(--blue)"></i></a>
                        <a href="https://twitter.com/4nfang"><i class="fab fa-twitter"  style="color:var(--skyblue)"></i></a>
                        <a href="#"><i class="fab fa-dribbble"  style="color:var(--dark-pink)"></i></a>
                        <a href="#"><i class="fab fa-linkedin"  style="color:var(--light-blue)"></i></a>
                    </div>
                 </div>

                 <div class="contact-info">
                    <div class="row">
                         <div class="icon">
                            <i class="fa fa-phone"  style="color:var(--dark-magenta)"></i>
                         </div>
                         <div class="content">
                            <span>Phone</span>
                            <h5>+63 908 509 2467</h5>
                         </div>
                    </div>

                    <div class="row">
                        <div class="icon">
                           <i class="fa fa-envelope-open"  style="color:var(--light-green)"></i>
                        </div>
                        <div class="content">
                           <span>Email</span>
                           <h5>leonzonbrylace30@gmail.com</h5>
                        </div>
                   </div>
    
                   <div class="row">
                    <div class="icon">
                       <i class="fa fa-map-marker"  style="color:var(--light-purple)"></i>
                    </div>
                    <div class="content">
                       <span>Location</span>
                       <h5>ILocos Sur, Philippines</h5>
                    </div>
                 </div>

            </div>
               <button class="download-btn"> <i class="fa fa-download"></i> Download CV</button>
            </div>
       </div>

       <!----about section ----->
       <div class="about">
           <h1>About Me</h1>

           <p> I'm Creative Digital Artist from Santa Cruz, Ilocos Sur,  
            working in web development and print media.I enjoy turning complex problems into simple, 
            beautiful and intuitive designs.
          </p>

          <p>
            My aim is to bring across your message and identity in the most creative way. 
            I created web design for many famous brand companies.
          </p>
          <h2>What I Do !!!</h2>
          <div class="work">
             <div class="workbox">
                 <div class="icon">
                    <img src="images/ui.svg" alt="">
                 </div>
                 <div class="desc">
                    <h3>Digital Art</h3>
                    <p>Unleash your creativity by diving into the vibrant world of digital art, where imagination meets technology.</p>
                 </div>
             </div>

             <div class="workbox">
                <div class="icon">
                   <img src="images/app.svg" alt="">
                </div>
                <div class="desc">
                   <h3>Digital Illustrator</h3>
                   <p>Bring your artistic visions to life with the precision and versatility of digital illustration.</p>
                </div>
            </div>

            <div class="workbox">
                <div class="icon">
                   <img src="images/api.svg" alt="">
                </div>
                <div class="desc">
                   <h3>Graphic Designer</h3>
                   <p>Transform ideas into stunning visuals with the dynamic power of graphic design.</p>
                </div>
            </div>

            <div class="workbox">
                <div class="icon">
                   <img src="images/web.svg" alt="">
                </div>
                <div class="desc">
                   <h3>Web Design</h3>
                   <p>Craft engaging and user-friendly online experiences through innovative web design.</p>
                </div>
            </div>
          </div>
       </div>
   </div>
</body>
</html>