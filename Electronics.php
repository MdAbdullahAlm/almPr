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
		#MainDiv p{
		      text-align:justify;
		}
		#BodyMain {
		    width: 900px;
     height: auto;
     float: left;
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
		
		                  <center><img src="img/Electronics.png" style="height: 100px;
            width: 400px; " /></center>
			
			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Electronics'";
$display=mysql_query($result,$con);

while($row=mysql_fetch_array($display))
{

                        echo "<div id='Post_Box'>";
						echo "<p style='color: blue;'>".$row['Date']." : </p>";
						echo "<p style='font-size: 27px; font-weight:bold;font-family:Arial Black'>".$row['Post_Heder']."</p>";
echo "<center><img src='".$row['Post_Pic']."' style='height: 350px; width: 630px;' /></center> ";
echo "<p style='font-size: 16px; color: black;'></br>".$row['B_Post']."</p>";
      echo "</div>";
}

?>
			
			<p style="font-size: 22px; font-weight:bold;"
					>Brief History of Electronics and Its Development:</p>
					<center><img src="img/Electonics3.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>In this 21st century, every day we are dealing with the electronic circuits and devices in some or the other forms because gadgets, home appliances, computers, transport systems, cell phones, cameras, TV, etc. all have electronic components and devices. Today’s world of electronics has made deep inroads in several areas, such as healthcare, medical diagnosis, automobiles, industries, electronics projects etc. and convinced everyone that without electronics, it is really In this 21st century, every day we are dealing with the electronic circuits and devices in some or the other forms because gadgets, home appliances, computers, transport systems, cell phones, cameras, TV, etc. all have electronic components and devices. Today’s world of electronics has made deep inroads in several areas, such as healthcare, medical diagnosis, automobiles, industries, electronics projects etc. and convinced everyone that without electronics, it is really impossible to work. Electronics’ actual history began with the invention of vacuum diode by J.A. Fleming, in 1897; and, after that, a vacuum triode was implemented by Lee De Forest to amplify electrical signals. This led to the introduction of tetrode and pentode tubes that dominated the world until the World War II.
Subsequently, the transistor era began with the junction transistor invention in 1948. Even though, this particular invention got a Nobel Prize, yet it was later replaced with a bulky vacuum tube that would consume high power for its operation. The use of germanium and silicon semiconductor materials made theses transistor gain the popularity and wide-acceptance usage in different electronic circuits.
The subsequent years witnessed the invention of the integrated circuits (ICs) that drastically changed the electronic circuits’ nature as the entire electronic circuit got integrated on a single chip, which resulted in low: cost, size and weight electronic devices. The years 1958 to 1975 marked the introduction of IC with enlarged capabilities of over several thousand components on a single chip such as small-scale integration, medium-large scale and very-large scale integration ICs.

</p>
 
         <p style="font-size: 22px; font-weight:bold;">Brief History of Electronics and Its Development:</p><br/>
					<center><img src="img/Electronics 1.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>Electronics’ actual history began with the invention of vacuum diode by J.A. Fleming, in 1897; and, after that, a vacuum triode was implemented by Lee De Forest to amplify electrical signals. This led to the introduction of tetrode and pentode tubes that dominated the world until the World War II.
Subsequently, the transistor era began with the junction transistor invention in 1948. Even though, this particular invention got a Nobel Prize, yet it was later replaced with a bulky vacuum tube that would consume high power for its operation. The use of germanium and silicon semiconductor materials made theses transistor gain the popularity and wide-acceptance usage in different electronic circuits.
The subsequent years witnessed the invention of the integrated circuits (ICs) that drastically changed the electronic circuits’ nature as the entire electronic circuit got integrated on a single chip, which resulted in low: cost, size and weight electronic devices. The years 1958 to 1975 marked the introduction of IC with enlarged capabilities of over several thousand components on a single chip such as small-scale integration, medium-large scale and very-large scale integration ICs.

<p style="font-size: 22px; font-weight:bold;">Electronics Projects for Electronics and Electrical Engineering Students in 2014:</p><br/>
					<center><img src="img/Electonics2.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>Earlier we have already listed out a huge list of electronics mini and major projects for electronics engineering students. They include various types of old and new electronics projects which are proposed by many professionals and are highly demanding projects in engineering discipline.
But, recently we have seen that many of the engineering students are searching for latest electronics project ideas as the competition is growing immensely. Students are also trying to concentrate only on easy electronics projects.To simplify their cause – here, in this article – we are providing a list of simple electronics projects that are helpful for them during their final semester to complete engineering successfully.
</p>

<p style="font-size: 22px; font-weight:bold;">Electronics Recycling for Pennsylvania & Delaware:</p><br/>
					<center><img src="img/recycled-electronics111.png" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>Perhaps today more than any time in history, electronic waste recycling has become more important to help curb our pollution of the planet. 
Recycling Express offers convenient and low-cost pickup and recycling service for all electronic items, including PCs, laptops, servers, printers, power supplies, fax machines, monitors and all associated cables, keyboards and equipment. 
Recycling Express can also provide hard drive destruction and asset reporting for PCs and servers. We deliver all materials to local R2 certified electronics recycling facilities and provide you with documentation for hard drive destruction and asset reporting.
Our service offerings also include document destruction and clean-outs of unwanted paper and cardboard, furniture, office supplies, and scrap metals. Recycling Express has collection routes servicing Eastern Pennsylvania and Northern Delaware from our field offices in Frazer, PA and Newport, DE.
Many electronics, especially outdated computer monitors, may house materials that are not only harmful to the environment but also can cause health issues if not disposed of properly by a recycling professional. This includes harmful contaminants like lead, cadmium, beryllium, mercury, and brominated flame retardants that leak into our air and water.
</p>

<p style="font-size: 22px; font-weight:bold;">Being an Electronic Engineer:</p><br/>
					<center><img src="img/What-is-Electronics-Engineering22.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">Being an electronic engineer will require you to always (if not mostly) work in multi-domain projects, which implies that you will be working with members who belong to other branches of engineering. An electronic engineer’s primary duty is to design and develop components, which perform according to the needs while controlling how the electricity is supplied to control the equipment.
</p>

<p style="font-size: 22px; font-weight:bold;">New Rules of Procuring Electronic Components. Are you Protected from Counterfeits?:</p>v
					<center><img src="img/th33.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">In recent years, the counterfeit component epidemic has fueled ever-changing government regulations and evolving best-practices in the world of electronics. It’s no surprise that many electronic manufacturing  companies are left feeling unsure or confused about how the new rules around procurement and testing apply to their businesses. Unfortunately, by not knowing and complying with these rules, even if unintentional, one can still be held liable, subject to penalties, and even face potential debarring from working within the government supply chain.
</p>

<p style="font-size: 22px; font-weight:bold;">Symbol and Electronic Components Symbols:</p><br/>
					<center><img src="img/electronic444.jpg" style="height: 350px;width: 630px;" /></center>v
					<p style="font-size: 16px;">Wiring Diagram Components with Electronics Components Name And Symbol Pdf
Electronics Components Name And Symbol Pdf and Electronic Components Symbols Wiring Diagram Components with Electronics Components Name And Symbol
</p>

<p style="font-size: 22px; font-weight:bold;">Artesyn- Power Electronics Laboratory :</p><br/>
					<center><img src="img/th55.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">With the aid of its industry sponsor Artesyn Embedded Technologies (then Emerson Network Power), Artesyn-PEL serves as a conducive training ground to expose students to the various fields of power electronics. Astec-PEL research areas include power supplies and converters, electric vehicle charging, electric motor drives, LED lighting, power amplifiers, battery technology, and electromagnetic compatibility. 
</p>

<p style="font-size: 22px; font-weight:bold;">Miniature Keyboard- Microcontroller-Friendly PS/2 and USB:</p><br/>
					<center><img src="img/857-0066.jpg" style="height: 350px;width: 630px;" /></center>v
					<p style="font-size: 16px;">Add a typing interface to your project with this microcontroller-friendly miniature keyboard. We found the smallest PS/2+USB keyboard available, a mere 8.75" x 4.65" x 0.6" (220mm x 118mm x 16mm)! It's small but usable to make a great accompaniment to either a microcontroller project or a computer such as the Beagle Bone or Raspberry Pi. The keyboard supports either USB or PS/2 interface and will automatically adjust to whichever its plugged into (there's an adapter included).

Comes with a full QWERTY keyboard, and has a num-lock number pad. Nearly all microcontrollers have existing PS/2 keyboard examples that would work fine with this keyboard. For Ardiuno users, we tried out PJRC's PS2_Keyboard library with great success - just check the 'simple text' example for which pins you can connect to on your 'duino (on an Uno we used digital pins 2 and 3). We suggest our PS/2 adapter cable to make the wiring easy. Start typing and you'll see the data appear in the serial terminal!

</p>

<p style="font-size: 22px; font-weight:bold;">Just good enough 10 MHz GPS reference :</p><br/>
					<center><img src="img/NEO-7M-LA3ZAmods777.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">Some time ago I noticed that the Ublox Neo-7M GPS has a 10 MHz output which is locked to the GPS system's accuracy. Most people kept saying how useless it was due to excessive jitter unless it was cleaned up with a phase locked loop of some sort.

At about the same time I installed the external reference input for my Elecraft K3. The K3EXREF enables the K3's frequency to be locked to an external 10 MHz reference. What struck me was how its function is described:
</p>

<p style="font-size: 22px; font-weight:bold;">Light Sensor using Arduino:</p><br/>
					<center><img src="img/DSCN4516888.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">Connect one pin of LDR to 5v and another pin to A0 input.This is a Light sensor using LDR and Arduino, you can make it either Shadow detector or light detector by simply changing the code given below.
Connect one pin of 10k resistor to GND and another pin to A0 input
The code below makes the arduino as a Shadow detector, to make it light detector you change the Condition statements, If Else part  change different things and get different outputs.. Enjoy
 Just copy and paste this code into your arduino program and upload it.
</p>

<p style="font-size: 22px; font-weight:bold;">Mobile Electronics workbench:</p><br/>
					<center><img src="img/th999.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">My oldest kid got a very noisy police toy and rather than just removing the batteries I decided to lower the volume instead. This however made me realize my soldering iron was packed away in bag stowed under the stairs and my hand tools where in the workshop in the shed. This meant I never got around to tinkering with this toy and didn't get to tinker much with electronics at all.
In a perfect world I would of course have a permanent electronics lab workbench where everything would be ready for small and big projects at all times. But I don't have room for that and having all those small parts around is not optimal with small kids around - So I needed another solution.

</p>
              
              
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
