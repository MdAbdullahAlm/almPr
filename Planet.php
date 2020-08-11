<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORLD OF KNOWLADGE</title>
    <link rel="icon" type="image/png" href="img/LOGO.png">
    <link type="text/css" rel="stylesheet" href="css/Home.css">

    <link type="text/css" rel="stylesheet" href="flexslider.css">
    <script type="text/javascript" src="JQuery (1).min.js"></script>
    <script type="text/javascript" src="jquery.flexslider.js"></script>
  
   

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
        .glyphicon-search {
            font-size: 17px;
        }
        
		.glyphicon-search:before {
    content: "";
}
        .btn-default {
            background: orange;
            width: auto;
			height: auto;
            padding: 0px;
        }
        
        .form-control {
            padding: 5px;
            font-size: 13px;
			width: 150px;
			float:left;
        }
        
        .btno {
		     top: 14px;
            font-family: arial;
            text-transform: uppercase;
            width: 90px;
            height: 30px;
            border-radius: 80px;
            line-height: 24px;
            text-align: center;
            border: 3px solid #009688;
            display: block;
            text-decoration: none;
			color:black;
            position: relative;
            overflow: hidden;
            background: transparent;
            transition: .8xs;
			padding:2px; 
			font-size:14px; 		  
			font: bold;
        }
    </style>
</head>

<body>
    <div id="MainDiv">
        <div id="MainHeader">
            <div id="HeaderLogo">
                <div id="LogoWork">
                    <img src="img/LOGO.png" style="height: 100px;
            width: 260px;" />
                </div>
               <div id="LogoSideWork" style="width: 600px; height: 110px;float: left;">
                   <div id="LogoSideWorkPart_one" style="width: 300px; height: 110px;float: left;">                 
				   <h1 style="margin:15px;"> <form>
                        <div class="input-group" style="  margin: 10px; float: left;">
                            <div class="searchBox" style=" float: left;">
							<input type="text" class="form-control" placeholder="Search" name="search" style="width: 200px; ">
                              </div>
						   <div class="input-group-btn" style=" float: left; margin: 0px 4px;">
                                <button class="btn btn-default" type="submit" style="height: 30px; 
								    width: 40px; background-color: lightblue;">
                                    
									<i class="glyphicon glyphicon-search"><img src="img/Search24.png" /></i>
                                    
								</button>
                            </div>
                        </div>
                    </form></h1></div>
					<div id="LogoSideWorkPart_two" style="width: 300px; height: 110px;float: left;">
                    <div id="login" style="margin: 10px; float: right;"> 
					      <a href="Post.php" class="btno" style="float: left; background-color:red;
						     margin: 0px 10px">Post</a>
					<a href="logout.php" 
					class="btno" style="float: left; margin: 0px 10px">Log Out</a>

                    </div>
                </div>
                </div>
            </div>
            <div id="HeaderMenu">
                <ul>

                    <li style="border-radius:10px 0px 0px  10px;">
             <a href="HomeLogin.php" style="border-radius:10px 0px 0px  10px;">Home</a>
                    </li>

                    <li>
                        <a href="Technology.php"> Technology</a>
                        <ul>
                            <li>
                                <a href="Computer.php">Computer</a>
                            </li>
                            <li><a href="Electronics.php">Electronics</a></li>
                            <li><a href="Science.php">Science</a>
                           </li>


                        </ul>


                    </li>

                    <li>
                        <a href="Geography.php">Geography</a>
                        <ul>
                            <li>
                                <a href="Planet.php">Planet</a></li>
                           
                            <li>
                                <a href="Earth.php">Earth</a></li>
                            
                            <li>
                                <a href="Evolution.php">Evolution </a></li>


                        </ul>

                    </li>
                    <li>
                        <a href="Tourist Place.php">Tourist Place</a>
                        <ul>
                            <li>
                                <a href="Bangladesh.php">Bangladesh </a></li>
                            <li>
                                <a href="India.php">India </a></li>


                        </ul>

                    </li>
                    <li>
                        <a href="Education.php">Education</a>
                        <ul>
                            <li>
                                <a href="Education System.php">Educa. System</a></li>
 </ul>

                    </li>
                    <li>
                        <a href="UNESCO.php">UNESCO</a>
                        <ul>
                            <li>
                                <a href="Heart Country.php">Heart Country</a></li>
                          


                        </ul>


                    </li>
                    <li>
                        <a href="Sports.php">Sports</a>
                        <ul>
                            <li>
                                <a href="Cricket.php"> Cricket</a></li>
                            <li>
                                <a href="Football.php">Football</a></li>


                        </ul>

                    </li>

                    <li style="border-radius: 0px 10px 10px  0px;">
                        <a href="Contact US.php" style="border-radius: 0px 10px 10px  0px;">Contact US</a>


                    </li>
                </ul>
            </div>
        </div>
        <div id="MainBody">
		<div id="BodyMain">
		
<center><img src="img/planet.png" style="height: 100px;
            width: 400px; " /></center>
			
			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Planet'";
$display=mysql_query($result,$con);

while($row=mysql_fetch_array($display))
{

                        echo "<div id='Post_Box'>";
						echo "<p style='color: blue;'>".$row['Date']." : </p>";
						echo "<p style='font-size: 27px; font-weight:bold;font-family:Arial Black'>".$row['Post_Heder']."</p>";
echo "<center><img src='".$row['Post_Pic']."' style='height: 350px; width: 630px;' /> </center>";
echo "<p style='font-size: 16px; color: black;'></br>".$row['B_Post']."</p>";
      echo "</div>";
}

?>
			
			
			
			<p style="color:blue;">Date:13-jun-18</p>
		<h3 style="font-size: 27px; font-weight:bold;">History Of Planet:</h3></br>
				<center>	<img src="img/Planet.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"	>
					The idea of planets has evolved over its history, from the divine lights of antiquity to the earthly objects of the scientific age. The concept has expanded to include worlds not only in the Solar System, but in hundreds of other extrasolar systems. The ambiguities inherent in defining planets have led to much scientific controversy.
The five classical planets, being visible to the naked eye, have been known since ancient times and have had a significant impact on mythology, religious cosmology, and ancient astronomy. In ancient times, astronomers noted how certain lights moved across the sky, as opposed to the "fixed stars", which maintained a constant relative position in the sky.[11] Ancient Greeks called these lights πλάνητες ἀστέρες (planētes asteres, "wandering stars") or simply πλανῆται (planētai, "wanderers"),[12] from which today's word "planet" was derived.[13][14][15] In ancient Greece, China, Babylon, and indeed all pre-modern civilizations,[16][17] it was almost universally believed that Earth was the center of the Universe and that all the "planets" circled Earth. The reasons for this perception were that stars and planets appeared to revolve around Earth each day[18] and the apparently common-sense perceptions that Earth was solid and stable and that it was not moving but at rest.
</p></br>
 
         <p style="color:blue;">Date:13-jun-18</p>
		 <h3 style="font-size: 22px; font-weight:bold;">
History Of Neptunian:</h3></br>
				<center>	<img src="img/Planet1.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>orbiting a star or stellar remnant that
•	is massive enough to be rounded by its own gravity,
•	is not massive enough to cause thermonuclear fusion, and
•	has cleared its neighbouring region of planetesimals.[a][1][2]
The term planet is ancient, with ties to history, astrology, science, mythology, and religion. Several planets in the Solar System can be seen with the naked eye. These were regarded by many early cultures as divine, or as emissaries of deities. As scientific knowledge advanced, human perception of the planets changed, incorporating a number of disparate objects. In 2006, the International Astronomical Union (IAU) officially adopted a resolution defining planets within the Solar System. This definition is controversial because it excludes many objects of planetary mass based on where or what they orbit. Although eight of the planetary bodies discovered before 1950 remain "planets" under the modern definition, some celestial bodies, such as Ceres, Pallas, Juno and Vesta (each an object in the solar asteroid belt), and Pluto (the first trans-Neptunian object discovered), that were once considered planets by the scientific community, are no longer viewed as such.
</p></br>
<p style="color:blue;">Date:13-jun-18</p>
<h3 style="font-size: 27px; font-weight:bold;">
Greco-Roman astronomy:</h3></br>

				<center>	<img src="img/Planet2.jpg" style="height: 350px;
            width: 630px;" /></br>
			</center>
					<p style="font-size: 16px;"
					>The ancient Greeks initially did not attach as much significance to the planets as the Babylonians. The Pythagoreans, in the 6th and 5th centuries BC appear to have developed their own independent planetary theory, which consisted of the Earth, Sun, Moon, and planets revolving around a "Central Fire" at the center of the Universe. Pythagoras or Parmenides is said to have been the first to identify the evening star (Hesperos) and morning star (Phosphoros) as one and the same (Aphrodite, Greek corresponding to Latin Venus).[26] In the 3rd century BC, Aristarchus of Samos proposed a heliocentric system, according to which Earth and the planets revolved around the Sun. The geocentric system remained dominant until the Scientific Revolution.
By the 1st century BC, during the Hellenistic period, the Greeks had begun to develop their own mathematical schemes for predicting the positions of the planets. These schemes, which were based on geometry rather than the arithmetic of the Babylonians, would eventually eclipse the Babylonians' theories in complexity and comprehensiveness, and account for most of the astronomical movements observed from Earth with the naked eye. These theories would reach their fullest expression in the Almagest written by Ptolemy in the 2nd century CE. So complete was the domination of Ptolemy's model that it superseded all previous works on astronomy and remained the definitive astronomical text in the Western world for 13 centuries.[19][27] To the Greeks and Romans there were seven known planets, each presumed to be circling Earth according to the complex laws laid out by Ptolemy. They were, in increasing order from Earth (in Ptolemy's order): the Moon, Mercury, Venus, the Sun, Mars, Jupiter, and Saturn. </p>
				 </br> <p style="color:blue;">Date:13-jun-18</p>
		 <h3 style="font-size: 27px; font-weight:bold;">
Pythagoreans:</h3></br>
				<center>	<img src="img/Planet4.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>A planet is an astronomical body orbiting a star or stellar remnant that is massive enough to be rounded by its own gravity, is not massive enough to cause thermonuclear fusion, and has cleared its neighbouring region of planetesimals
The term planet is ancient, with ties to history, astrology, science, mythology, and religion. Several planets in the Solar System can be seen with the naked eye. These were regarded by many early cultures as divine, or as emissaries of deities. As scientific knowledge advanced, human perception of the planets changed, incorporating a number of disparate objects. In 2006, the International Astronomical Union (IAU) officially adopted a resolution defining planets within the Solar System. This definition is controversial because it excludes many objects of planetary mass based on where or what they orbit. Although eight of the planetary bodies discovered before 1950 remain .
</p></br>
  <p style="color:blue;">Date:13-jun-18</p>
		<h3 style="font-size: 27px; font-weight:bold;">
Trans-Neptunian:</h3></br>
				<center>	<img src="img/planet5.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>
Planets under the modern definition, some celestial bodies, such as Ceres, Pallas, Juno and Vesta (each an object in the solar asteroid belt),
 and Pluto (the first trans-Neptunian object discovered), that were once considered planets by the scientific community, are no longer viewed as such.
The planets were thought by Ptolemy to orbit Earth in deferent and epicycle motions. Although the idea that the planets orbited the Sun had been 
suggested many times, it was not until the 17th century that this view was supported by evidence from the first telescopic astronomical observations,
 performed by Galileo Galilei. At about the same time, by careful analysis of pre-telescopic observation data collected by Tycho Brahe, Johannes Kepler found the planets' orbits were not circular but elliptical. As observational tools improved, astronomers saw that, like Earth,.

</p></br>
  <p style="color:blue;">Date:13-jun-18</p>
		<h3 style="font-size: 27px; font-weight:bold;">
Giant planets:</h3></br>
				<center>	<img src="img/planet6.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>The planets rotated around tilted axes, and some shared such features as ice caps and seasons. Since the dawn of the Space Age, close observation by space probes has found that Earth and the other planets share characteristics such as volcanism, hurricanes, tectonics, and even hydrology.

Planets are generally divided into two main types: large low-density giant planets, and smaller rocky terrestrials. Under IAU definitions, there are eight planets in the Solar System. In order of increasing distance from the Sun, they are the four terrestrials, Mercury, Venus, Earth, and Mars, then the four giant planets, Jupiter, Saturn, Uranus, and Neptune. Six of the planets are orbited by one or more natural satellites.
</p></br>
  <p style="color:blue;">Date:13-jun-18</p>
		<h3 style="font-size: 27px; font-weight:bold;">
Extrasolar planets:</h3></br>
				<center>	<img src="img/planet7.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>
Several thousands of planets around other stars ("extrasolar planets" or "exoplanets") have been discovered in the Milky Way. 
As of 1 May 2018, 3,767 known extrasolar planets in 2,816 planetary systems (including 628 multiple planetary systems), ranging in size 
from just above the size of the Moon to gas giants about twice as large as Jupiter have been discovered, out of which more than 100 planets are 
the same size as Earth, nine of which are at the same relative distance from their star as Earth from the Sun, i.e. in the habitable zone.[3][4] 
On December 20, 2011,
</p></br>
  <p style="color:blue;">Date:13-jun-18</p>
	<h3 style="font-size: 27px; font-weight:bold;">
Telescope:</h3></br>
				<center>	<img src="img/planet8.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>The Kepler Space Telescope team reported the discovery of the first Earth-sizedextrasolar planets, Kepler-20e[5] and Kepler-20f,[6] orbiting a Sun-like star, Kepler-20.[7][8][9] A 2012 study, analyzing gravitational microlensing data, estimates an average of at least 1.6 bound planets for every star in the Milky Way.[10]
					Around one in five Sun-like[b] stars is thought to have an Earth-sized[c] planet in its habitable[d] zone.</p></br>
  <p style="color:blue;">Date:13-jun-18</p>
		<h3 style="font-size: 27px; font-weight:bold;">
Incorporated Earth</h3></br>
				<center>	<img src="img/planet9.jpg" style="height: 350px;
            width: 630px;" /></center>
					<p style="font-size: 16px;"
					>In 499 CE, the Indian astronomer Aryabhata propounded a planetary model that explicitly incorporated Earth's rotation about its axis, which he explains as the cause of what appears to be an apparent westward motion of the stars. He also believed that the orbits of planets are elliptical.[29] Aryabhata's followers were particularly strong in South India, where his principles of the diurnal rotation of Earth,
					among others, were followed and a number of secondary works were based on them.[30]</p></br>
  <p style="color:blue;">Date:13-jun-18</p>
		 <h3 style="font-size: 27px; font-weight:bold;">
Planetary model :</h3></br>
				<center>	<img src="img/planet10.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>In 1500, Nilakantha Somayaji of the Kerala school of astronomy and mathematics, in his Tantrasangraha, 
					revised Aryabhata's model.[31] In his Aryabhatiyabhasya, a commentary on Aryabhata's Aryabhatiya, he developed a planetary model 
					where Mercury, Venus, Mars, Jupiter and Saturn orbit the Sun, which in turn orbits Earth, similar to the Tychonic systemlater proposed by Tycho Brahe in the late 16th century. Most astronomers of the Kerala 
					school who followed him accepted his planetary model.[31][32]</p></br>
			   </div>
		
		
		
		
		
		</div>
		<div id="BodySection">
                <p>Global Warming (National Geographic)</p>
                <video width="265px" height="220PX" controls>
                    <source src="video/Global Warming .mp4" type="video/mp4">
                </video>
                <p>EducationSystem</p>
                <video width="265px" height="220PX" controls>
                    <source src="video/EducationSystem.mp4" type="video/mp4">
                </video>
                <p>Latest news technology</p>
                <video width="265px" height="220PX" controls>
                    <source src="video/Latest news technology.mp4" type="video/mp4">
                </video>
                <p>BSC Electronics Technology</p>
                <video width="265px" height="220PX" controls>
                    <source src="video/BSC Electronics Technology.mp4" type="video/mp4">
                </video>
                <p>3 WORLD WAR IN 3 MIN</p>
                <video width="265px" height="220PX" controls>
                    <source src="video/3 WORLD WAR IN 3 MIN.mp4" type="video/mp4">
                </video>
                <p>Sports Science- Baseball Vs. Cricket</p>
                <video width="265px" height="220PX" controls>
                    <source src="video/Sports Science-  Baseball Vs. Cricket.mp4" type="video/mp4">
                </video>

            </div>

        
        <div id="MainFooter" style="background-image:url('img/almFooter2.png'); background-repeat:repeat-x;">
            <div id="footerHeader" style="">
                <table border="0" cellspacing="15" width="auto">
                    <tr>
                        <td style="width: 500px;">
                            <img src="img/LOGO.png" style="height: 100px; width: 300px;" />
                        </td>
                        <td style="
    width: 750px; 
">
                            <ul style="width: 250px;">
                                <li style="padding-right: 40px;">
                                    <a href=""><img src="img/j.png" style="height: 25px;
            width: 25px;" /> </a>
                                </li>
                                <li style="padding-right: 40px;">
                                    <a href=""><img src="img/google.jpg" style="height: 25px;
            width: 25px;" /> </a>
                                </li>
                                <li style="padding-right: 40px;">
                                    <a href=""> <img src="img/Instrogram.png" style="height: 25px;
            width: 25px;" /></a>
                                </li>
                                <li style="padding-right: 40px;">
                                    <a href=""> <img src="img/twter.png" style="height: 25px;
            width: 25px;" /> </a>
                                </li>
                                <li style="padding-right: 40px;">
                                    <a href=""><img src="img/youtube.png" style="height: 25px;
            width: 25px;" /></a>
                                </li>
                                <li style="padding-right: 40px;">
                                    <a href=""><img src="img/whats app.png" style="height: 25px;
            width: 25px;" /></a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="footerBoby">
               <table border="0" cellspacing="15" style="
    width: auto;
	height: auto;

">
                    <tr>

                        <td style="
    width: 250px;
	height:auto;
	text-align: center;
">
                            <ul style="padding: 0px 140px;">
                        <li><a href="HomeLogin.php">Home</a>
                                </li>
                                <li><a href="Technology.php">Technology</a>
                                </li>
                                <li> <a href="Computer.php">Computer</a>
                                </li>
                            </ul>
                        </td>
                        <td style="
    width: 250px;
	height:auto;
	text-align: center;
">
                            <ul style="padding: 0px 10px;">
                                <li> <a href="Geography.php">Geography</a>
                                </li>
                                <li> <a href="Evolution.php">Evolution</a>
                                </li>
                                <li> <a href="Bangladesh.php">Bangladesh</a>

                                </li>
                            </ul>
                        </td>
                        <td style="
    width: 250px;
	height:auto;
	text-align: center;
">
                            <ul style="padding: 0px 10px;">
                                <li> <a href="Tourist Place.php">Tourist Place</a>
                                </li>
                                <li> <a href="Sports.php">Sports</a>
                                </li>
                                <li> <a href="Cricket.php">Cricket</a>
                                </li>
                            </ul>
                        </td>
                        <td style="
    width: 250px;
	height:auto;
	text-align: center;
">
                            <ul style="padding: 0px 30px;">
                                <li> <a href="UNESCO.php">UNESCO</a>
                                </li>
                                <li> <a href="Education.php">Education</a>
                                </li>
                                <li> <a href="Contact US.php">Contact US</a>

                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
                copyright : RainbowGroup,,... abdullahmamun108187@gmail.com
            </div>

        </div>
    </div>
</body>

</html>
