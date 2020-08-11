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
		
<center><img src="img/science.png" style="height: 100px;
            width: 400px; " /></center>
			
			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Science'";
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
			
			
			
		<p style="font-size: 22px; font-weight:bold;">Astronomers Skeptical Over "Planet X" Claims:</p>
					<img src="img/Science3.jpg" style="height: 350px;
            width: 630px;" />
					<p style="font-size: 16px;"
					>Even a dwarf planet can harbor big surprises.
Ever since it was discovered floating between Mars and Jupiter in 1801, Ceres has perplexed astronomers and defied easy categorization. Telescopic studies over the years showed it was roughly the size of Texas, with up to a third of its weight in water—too small to be a true planet, too wet and icy to be an asteroid and too big and rocky to be a comet. Astronomers chalked up Ceres’s oddities to its being a relic from an early, formative epoch of our solar system, when planets coalesced from many Ceres-like objects caroming around the sun. For lack of any better ideas, they also chose to include Ceres in the “dwarf planet” category they created for Pluto in 2006.
Now, new results from NASA’s Dawn spacecraft, which has been orbiting Ceres since March, hint that the body may have much more in common with its diminutive dwarf-planet cousin Pluto than once thought. Dawn co-investigator Maria Cristina De Sanctis of the National Institute of Astrophysics in Rome, Italy and colleagues report their detection of abundant ammonia-rich minerals on Ceres’s surface, suggesting that it was born closer to the vicinity of Pluto even though it now orbits in the Asteroid Belt. Separately, a team led by Andreas Nathues of the Max Planck Institute for Solar System Research in Germany, has found what appears to be cloud-like hazes of water vapor emanating from one of the mysterious bright spots that dot Ceres’s asphalt-dark surface.
</p>
 
         <p style="font-size: 22px; font-weight:bold;"
					>
Archaeologists Survey Seaplanes Sunk During Pearl Harbor Attack
:</p>
					<img src="img/Science 2.jpg" style="height: 350px;
            width: 630px;" />
					<p style="font-size: 16px;"
					>
For the first time, archaeologists have been able to map and image the sunken fleet of seaplanes destroyed in a prelude to the Pearl Harbor attack 74 years ago. To commemorate the anniversary, the National Oceanic and Atmospheric Administration (NOAA) and the University of Hawaii (U.H.) have released rare images of one of the sunken planes today.
The Empire of Japan’s attack on the U.S. naval base in Pearl Harbor, Hawaii, killed 2,403 U.S. personnel, destroyed 169 aircraft and sunk 19 ships. Although, the harbor’s sunken ships, where a rainbowlike sheen of ever-leaking oil reflects off the water’s surface, mark a unique memorial themselves, many forget that remnants of the attack also lurk in a nearby bay.
Minutes before attacking Pearl Harbor, Japanese aircraft bombed the nearby U.S. Naval Air Station on the east coast of Oahu, about 20 kilometers from Pearl Harbor. The Japanese air force successfully destroyed 27 and damaged six Catalina PBY-5 aircraft—common seaplanes used during World War II—on the ground and in Kneohe Bay. It was a significant loss for the U.S. military because the station had lost all its long-range bombers capable of following the attackers. In fact, damages were so extensive that only three aircraft out on patrol were fit to fly by the end of the attack.
</p>

<p style="font-size: 22px; font-weight:bold;"
					>
The Most Important Number in Climate Change
:</p>
					<img src="img/Science 3.jpg" style="height: 350px;
            width: 630px;" />
					<p style="font-size: 16px;"
					>The furious majesty of a thunderstorm defies computer simulation. In a world divided up into 10,000 square kilometer grids to make the 510 million square kilometer Earth digestible to a computer, a thundercloud that rains over two square kilometers remains too small to properly calculate in a climate simulation—as does even a hurricane like Sandy that sprawled over 280 kilometers of ocean and land in 2012.
Clouds control climate. Even if they could be correctly accounted for in computer simulations, there are all the complexities in the types of clouds, their height in the atmosphere, even the composition and shape of droplets in the cloud. Climate models struggle to simulate hurricanes, some of the biggest cloud systems, let alone lonely streaks of cirrus or a dense, billowing cumulonimbus. How low cooling clouds might form or if such clouds might disappear all together as the climate warms have major impacts on overall global warming.
Among all the numbers commonly bandied about global warming, the most important one in climate change is not 400 (parts-per-million CO2 in the atmosphere), two degrees Celsius (average warming of global temperatures), one trillion tons (of carbon budget), or even $100 billion (in climate adaptation funding per year). It's not even a single number, it's a range: 1.5 degree C to 4.5 degree C, according to the most recent effort of the United Nations Intergovernmental Panel on Climate Change, the Nobel Peace Prize-winning IPCC.

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
