<?php
include 'n2.php';

if(isset($_POST['post'])){

    if(($_POST['name']=="") || ($_POST['p_cmnt']=="")){
        echo "<script>alert('No fields can be empty');</script>";
    }
    else{
        $name2=$_POST['name'];
        $comment2=$_POST['p_cmnt'];
    
        $sql = "INSERT INTO cmnt (name, p_cmnt)
        VALUES ('$name2', '$comment2')";
         
        if ($conn->query($sql) === TRUE) {
            echo "";
        } 
        else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        www.KalyaniRiceExports.com
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .fa {
                padding: 15px 20px;
                font-size: 30px;
                max-inline-size:  50px;
                text-align: center;
                text-decoration: none;
                margin: 20px 80px;
            }

        .fa-facebook{
            background:#3B5998;
            color:white;  
        }    

        .fa-whatsapp{
            background:lightgreen;
            color:white;
        }

        .fa-envelope{
            background:red;
            color:white;
        }

        .fa-phone{
            background:#bbb;
            color:white;
        }


        div{
            font-size: 25px;
        }

        #Home{
            background-image: url(https://lh3.googleusercontent.com/a1k-PMIkROzCk2byeePlx3MbiUoIGJ9RZtRd8iilAUVnnHtf5yLuCwDa-J1dh6OCpBNNuSh1o3924vfcJyehcQ=w1280-h1280-c-rj-v1-e365);
            background-repeat: no-repeat;
            background-size: 20% 106%;
            background-position-x: center;
        }

        #Services{
            background-color:bisque;
        }

        #Location{
            background-color:azure;
        }

        #About{
            background-color:bisque;
        }

        #Contact{
            background-color:azure;
        }

        #Comments{
            background-color:bisque;
        }


* {box-sizing:content-box;}
body {font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-inline-size: 1000px;
  position: relative;
  margin: auto;
}


/* Number text (1/5 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 30px 265px;
  position:absolute;
  inset-block-start: 0;
}

/* The dots/bullets/indicators */
.dot {
  block-size: 10px;
  inline-size: 10px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-inline-size: 300px) {
  .text {font-size: 11px}
}

a:hover{
    padding:9px 4px 5px 5px; 
    background-color:	#FFB6C1;

}

.content{
    margin-top: -5px;
    text-align:center;
    background:#F7F9F9;
    color:black;
    margin-block-start:5px;
    padding:5px;
    inline-size:300px;
    border-radius:3px;
}

.content h4{
    margin-top: 1px;
    margin-bottom: -15px;
}

.content p{
    margin-bottom: 1px;
}



</style>
</head>

<body>
    <table id="header" width="1500px" cellpadding="3" bgcolor="#FF0066" style="position:fixed; border-radius: 3px; inset-block-start: 0; z-index: 1;">
                <tr>
                    <td width="1%"></td>
                    <td>
                        <a style="text-decoration:none " href="#Home"><font face="Rockwell" color="White"
                         size="5">Home</font>   
                        </a>
                    </td>
                    </td>
                    <td width="12%"></td>
                    <td>
                        <a style="text-decoration:none; " href="#Services"><font face="Rockwell" color="white"
                        size="5">Services</font>
                    </a>
                    </td>
                    <td width="12%"></td>
                    <td>
                        <a style="text-decoration:none" href="#Location"><font face="Rockwell" color="White"
                         size="5">Location</font>   
                        </a>
                    </td>
                    <td width="12%"></td>
                    <td>
                        <a style="text-decoration:none" href="#About"><font face="Rockwell" color="White"
                         size="5">About</font>   
                        </a>
                    </td>
                    <td width="12%"></td>
                    <td>
                        <a style="text-decoration:none" href="#Contact"><font face="Rockwell" color="White"
                         size="5">Contacts</font>   
                        </a>
                    </td>

                    <td width="12%"></td>
                    <td>
                        <a style="text-decoration:none" href="#Comments"><font face="Rockwell" color="White"
                         size="5">Comments</font>   
                        </a>
                    </td>
                </tr>
    </table>

<!--home-->
<table id="Home" width="100%" align="center" style="padding: 55px 5px;">
            <tr>
                    <h1 align="center">
                        <p style="font-size: 50px; padding-block-start: 1px;">
                            Kalyani Rice Exports<br> Flourish
                        </p>
                    </h1>   
            
                <td>
                    <font face="Rockwell">
                        <p style="font-size: 25px; text-align: center;">
                            RIES EXPORTS PVT LTD is a rice exporter based in Kalyani, West Bengal, India.
                            RIES Exporters offers high quality rice.<br>
                            The company is committed to provide the best quality rice to its customers at competitive prices.
                        </p>
                        
                    </font>
                </td>
            </tr>    
</table>

<!--Services-->
<table id="Services" div id="Services" width="100%" cellpadding="75" cellspacing="10">
<tr>
   <td>
    <table width="85%" align="center">
        <tr>
                <td align="center" valign="middle"colspan="5">
                    <h1 align="center"> 
                        <font size="8">
                            Services by Us 
                        </font>
                        
                    </h1>
                    <br>

                    <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 5</div>
                          <img src="https://hindi.rapidleaks.com/wp-content/uploads/2019/03/rice1.jpg"
                          style="inline-size: 50%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">2 / 5</div>
                          <img src="https://media.newyorker.com/photos/5f2c85539a557880d973a759/master/w_2560%2Cc_limit/Buford-FrenchRice.jpg" 
                          style="inline-size: 50%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">3 / 5</div>
                          <img src="https://www.mashed.com/img/gallery/popular-rice-brands-ranked-worst-to-best/l-intro-1639766622.jpg" 
                          style="inline-size: 50%">
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">4 / 5</div>
                          <img src="https://blog.standardcoldpressedoil.com/wp-content/uploads/2021/09/Downloader.la-613e582781b63.jpg" 
                          style="inline-size: 50%">
                        </div>
                        
                        <div class="mySlides fade">
                            <div class="numbertext">5 / 5</div>
                            <img src="https://media.istockphoto.com/id/613884840/photo/white-rice-in-bowl-and-wooden-spoon-on-white-rice-background.jpg?s=612x612&w=0&k=20&c=8OWFBjeKIwcMlxW2aBspA3XEzxby4SzfZeM4JlzBa74=" 
                            style="inline-size: 50%">
                        </div>
                        
                        <div style="text-align:center">
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                        </div>
                        
                        <script>
                        let slideIndex = 0;
                        showSlides();
                        
                        function showSlides() {
                          let i;
                          let slides = document.getElementsByClassName("mySlides");
                          let dots = document.getElementsByClassName("dot");
                          for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                          }
                          slideIndex++;
                          if (slideIndex > slides.length) {slideIndex = 1}    
                          for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";  
                          dots[slideIndex-1].className += " active";
                          setTimeout(showSlides, 2000); // Change image every 2 seconds
                        }
                        </script><br>

                    </div>
                    <div style="width: 99%;">
                        <div style="width:33%; height:245px; float:left">
                            <h4>
                                Best Quality Basmati Rice
                            </h4>
                            A service that provides the coordiantion and management
                            of resources necessary to meet the needs of clients for 
                            exporting rice
                        </div>
                    </div> 
                    <div style="inline-size: 99%;">
                        <div style="width:33%; height:245px; float:right">
                            <h4>
                                Packaging Services
                            </h4>
                            A service that provides the packaging of rice for safe delivery and export
                        </div>
                    </div> 
                    <div style="inline-size: 99%;">
                        <div style="width:33%; height:245px; float:right">
                            <h4>
                                Quality Control
                            </h4>
                            A service that ensures rice meets quality standards and is safe for export
                        </div>
                    </div> 
                  <!--Button-->
                    <?php     
                    echo '<form method="POST" action="http://localhost/project/OurServices.php/">
                    <input type="submit" value="More Info" style="background-color:lime; border-radius: 5px; color: white; border: lime; 
                    padding: 3px; font-family:Segoe UI Semibold; cursor: pointer;"/>    
                    </form>';   
                    ?>
                    <br><br>

                </td>
            </tr>
        </table>   
   

<!--Location-->
<table id="Location" div id="Location" width="100%" cellpadding="75" cellspacing="5">
    <tr>
       <td>
        <table width="85%" align="center">
            <tr>
                    <td align="center" valign="middle"colspan="5">
                        <h1 align="center"> 
                            <font size="8">
                               Our Location 
                            </font>
                        </h1>
                        <iframe width="858" height="599" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" 
                        id="gmap_canvas" src="https://maps.google.com/maps?width=858&amp;height=599&amp;hl=en&amp;q=haringhata%20simhat%20Kalyani+()&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href='https://maps-generator.com/'>Maps Generator</a>


                </td>   
            </tr>
        </table>
    </td>
    </tr>  
    </table>   

<!--About Us-->
    <table id="About" div id="About" width="100%" cellpadding="75" cellspacing="5">
        <tr>
           <td>
            <table width="85%" cellpadding="15" cellspacing="9" align="center">
                <tr>

                    <td>
                        <p>
                           <img src="https://images.unsplash.com/photo-1640583818579-740430212d27?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" 
                           width="350px" height="400px" style="padding: 0 2px;">
                           <br> <p style="font-family: Bradley Hand ITC; color: black; font-size:20px"> Sanjay Paul</p>                            
                        </p>
                    
                    </td>

                        <td align="center" valign="middle"colspan="5">
                            <h1 align="center"> 
                                <font size="8">
                                    About Us 
                                </font>
                            </h1>

                            <font face="Rockwell" size="4" align="center">
                                <p>
                                    Hello, I am Sanjay Paul and I feel very glad to announce the launch of RIES EXPORTS PVT LTD, a rice exporter 
                                    based in Kalyani, West Bengal, India! We specialize in sourcing and exporting 
                                    high quality rice to all parts of the world. Our team of experienced professionals
                                    are commited to providing our customers with the highest qaulity product at competitive
                                    prices. We have a wide variety of rice to choose from, including long grains, short grains
                                    and basmati. We also offer customized packaging solutions.
                                    <br><br>
                                    We are dedicated to providing our customers with the best customers service
                                    experience possible. We are always available to answer quetions and provide advice 
                                    on the best rice for your needs. Our team is highly knowledgeable and expericenced in
                                    the rice industry and we strive to provide our customers with the best possible experience.
                                    We look forward to working with you and hope to become your trusted source for superior
                                    quality rice!
                                    

                                </p>
                                
                            </font>

                        </td>
                        
                </tr>
            </table>
        </td>
    </tr>  
</table>

<!--Contact-->
        <table id="Contact" div id="Contact" width="100%" cellpadding="75" cellspacing="5">
            <tr>
               <td>
                <table width="85%" align="center">
                    <tr>
                            <td align="center" valign="middle" colspan="5">
                                <h1 align="center"> 
                                    <font size="8">
                                       Contact Us
                                    </font>
                                </h1>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="https://wa.me/qr/IVCBQVOOZNCWI1" class="fa fa-whatsapp"></a>
                                <a href="#" class="fa fa-envelope"></a>
                            </td>   
                        
                    </tr>
                </table>
            </td>
        </tr>  
    </table>        

<!--Comments-->
    <table id="Comments" div id="Comments" width="100%" cellpadding="75" cellspacing="5">
        <tr>
           <td>
            <table width="85%" align="center">
                <tr>
                        <td align="center" valign="middle" colspan="5">
                            <h1 align="center"> 
                                <font size="8">
                                   Comments
                                </font>
                            </h1>

                                
                            <form action="" method="post" class="form">
                                <input type="text" name="name" placeholder="name" style="inline-size: 300px; block-size: 45px;
                                padding: 0 20px;  border-radius: 5px; border: 1px solid #86b0b6;"><br><br>
                                        
                                <textarea name="p_cmnt" placeholder="comment" style="inline-size: 300px; block-size: 65px;
                                padding: 10px 20px; border-radius: 5px; border: 1px solid #86b0b6;"></textarea><br>

                                <button type="submit" name="post" style="background:lime; font-size: 15px; font-family: Segoe UI Semibold; 
                                border-radius: 5px; color:white; border:white; padding: 5px 7px; cursor: pointer; display:block">Post</button><br>    
                            </form>

                            <div class="content">
                            <?php
                            $sql = "SELECT * FROM cmnt";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            ?>
                            <h4><?php echo $row['name'];?></h4>
                            <p><?php echo $row['p_cmnt'];?></p>
                            <?php
                            }} ?>
                            </div>

                        </td>   
                </tr>
            </table>
        </td>
    </tr>  
</table>   

</body>
</html>