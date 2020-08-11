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
		
<center><img src="img/football.png" style="height: 100px;width: 400px; " /></center>	

         <?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Football'";
$display=mysql_query($result,$con);

while($row=mysql_fetch_array($display))
{

                        echo "<div id='Post_Box'>";
						echo "<p style='color: blue;'>".$row['Date']." : </p>";
						echo "<p style='font-size: 27px; font-weight:bold;font-family:Arial Black'>".$row['Post_Heder']."</p>";
echo "<center><img src='".$row['Post_Pic']."' style='height: 350px; width: 630px;' /></center>";
echo "<p style='font-size: 16px; color: black;'></br>".$row['B_Post']."</p>";
      echo "</div>";
}

?>      




		<p style="font-size: 22px; font-weight:bold;">BRAZIL national football team:</p><br/>
					<center><img src="img/JAsqwZw1111.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">You don’t have to be Brazilian to appreciate the samba style of play and you can show your support for Neymar and co by getting your very own 100% authentic, Nike Brazil kit! The bright yellow top with the blue shorts is a sight we have seen on our TV for decades during International tournaments. You can also get your favourite samba star’s name and number printed on the back of your Brasil football shirts with our specialised printing service. Available in adult and kids sizes with matching shorts and socks in the home and away kits. We also sell training kit including polo shirts, tracksuits, jackets and more. We ship worldwide.</p>
					
					<p style="font-size: 22px; font-weight:bold;">Argentina national football team:</p><br/>
					<center><img src="img/c5e033268f018a66d99a0b47e96b4ca6222.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">The Argentina national football team (Spanish: Selección de fútbol de Argentina) represents Argentina in football and is controlled by the Argentine Football Association (AFA), the governing body for football in Argentina. Argentina's home stadium is Estadio Monumental Antonio Vespucio Liberti in Buenos Aires.
La Selección (national team), also known as the Albicelestes , has appeared in five World Cup finals, including the first final in 1930, which they lost 4–2 to Uruguay. Argentina won in their next final appearance in 1978, beating the Netherlands at extra time, 3–1. Argentina, led by Diego Maradona won again in 1986, a 3–2 victory over West Germany. They again made the World Cup finals in 1990, and lost 1–0 to West Germany following a controversial penalty call in the 87th minute. Argentina, led by Lionel Messi made their fifth appearance in a World Cup final in 2014, again losing to Germany, 1–0 during extra-time. Argentina's World Cup winning managers are César Luis Menotti in 1978, and Carlos Bilardo in 1986.
Argentina has been very successful in the Copa América, winning it 14 times and also winning the 'extra' South American Championships in 1941, 1945 and 1946. The team also won the 1992 FIFA Confederations Cup and the 1993 Artemio Franchi Trophy. The Argentine olympic team won the Olympics football tournaments in Athens 2004 and Beijing 2008.[2]
Argentina, Brazil, Germany[note 2] and France are the only national teams that have won the three most important men's titles recognized by FIFA: the World Cup, the Confederations Cup, and the Olympic tournament. They have also won their respective continental championship (Copa América for Argentina and Brazil, and UEFA European Championship for Germany and France.</p>

<p style="font-size: 22px; font-weight:bold;">A friendly between the national teams of Chile and Romania has been confirmed:</p><br/>
					<center><img src="img/team-chile_033.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">The Chilean national team will bid farewell to their fans on May 30 in a friendly against Romania, before traveling to Brazil for the World Cup which starts on June 12, reported on Wednesday the local Football Federation.
"The Chilean Football Federation and its equivalent from Romania have agreed today, Wednesday, January 8th, that their national teams will meet in a friendly match in Chile on May 30. The stadium and time to be announced," said an official statement.
Romania, led by coach Victor Piturca, is not qualified for the WC, as it was eliminated by Greece in the European playoffs.
The last time Chile and Romania met was in 1982 with a 3-2 win for the Europeans.
Chile starts their preparation for the World Cup with a friendly against Costa Rica on January 22 in the city of Coquimbo, in northern Chile, while on March 5 they visit Germany in Stuttgart.
For the WC Chile is in Group 3 with Spain, the Netherlands and Australia.
.</p>

<p style="font-size: 22px; font-weight:bold;">German national football team:</p><br/>
					<center><img src="img/dfb-team44.jpeg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">The championship has been awarded every four years since the inaugural tournament in 1930, except in 1942 and 1946 when it was not held because of the Second World War. The current champion is Germany, which won its fourth title at the 2014 tournament in Brazil.
The current format of the competition involves a qualification phase, which currently takes place over the preceding three years, to determine which teams qualify for the tournament phase, which is often called the World Cup Finals. 32 teams, including the automatically qualifying host nation(s), compete in the tournament phase for the title at venues within the host nation(s) over a period of about a month.
</p>
					
					<p style="font-size: 22px; font-weight:bold;">Barcelona Football Club History:</p><br/>
					<center><img src="img/th6555.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">FC Barcelona - also known as Barça, is a sports club in Barcelona, Catalonia, Spain which has clubs in several branches of sport, but most notably football.
Founded in 1899 by 12 football players from Switzerland, Britain, and Spain under the leadership of Joan Gasper. FC Barcelona has the motto "Barca is not just a club" (El Barça, es mes que un club) and has a hymn, entitled "El Cannot del Barca" created by Jaume Picas and Josep Maria Espinàs. Unlike club soccer in general, FC Barcelona is really owned and operated by its supporters. The main stadium at Camp Nou, Barcelona.
The club entered into participants Primera División (Primary Division) since 1928, and together with Real Madrid and Athletic Bilbao to be a team that was never relegated to the Segunda División (Second Division). The club was also a club that won the Spanish league first. By offering 20 Spanish League titles, 25 Copa del Rey titles, 7 Spanish Super Cup, 3 European Champions League titles, 4 UEFA Cup, 2 European Super Cup, FC Barcelona became one of the most successful team in Spain, Europe, and the world . The most obvious evidence in 2009 when FC Barcelona managed to become the first Spanish club won the title TREBLE (champions of La Liga, Copa del Rey and Champions League). Followed by Raihan Spanish Super Cup, European Super Cup and FIFA Club World Cup to complete his title became SEXTUPLE achievement. FC Barcelona is the first football club in the world has ever done this achievement. Barca fans are also often called Cules.</p>

					<p style="font-size: 22px; font-weight:bold;">Real Madrid Named Most Valuable Football Team In The World:</p><br/>
					<center><img src="img/real_madrid66.jpg" style="height: 350px;width: 630px;" /></center><br/>
					<p style="font-size: 16px;">Real Madrid and Atletico Madrid will go head-to-head later this month to decide which football club is the finest in Europe but, when it comes to the money, there is only one winner-Real Madrid.The city rivals will battle it out in the Champions League final on May 24 in Lisbon, but Atletico look to have their work cut out given the financial disparity between the two clubs.Nine-time champions of Europe Real top a Forbes list of the world’s most valuable football teams, with Los Blancos reportedly worth $3.44 billion.The Santiago Bernabeu stadium team, which boasts the talents of FIFA Ballon d’Or winner Cristiano Ronaldo, posted a revenue of $675 million for 2012-13, with an operating income of $172m.In contrast, Atletico is way down the the financial pecking order, with Forbes ranking Atletico 17th, valuing Los Rojiblancos at $328m.Even so Atletico are punching above their weight in the Spanish league title and with two matches two go, Diego Simeone’s Atletico team is top of the table — three points ahead of second-placed Barcelona and four points clear of Real in third.Atletico have surprised many with an impressive run to the final of Europe’s premier club competition — the first time the club has reached this stage of the competition in 40 years.Barcelona are ranked second by Forbes, valued at $3.28 billion, with Manchester United worth an estimated $2.81 billion in third spot.</p>
						

		         
						  <p style="font-size: 22px; font-weight:bold;">Football:</p>
					<center><img src="img/football.jpg" style="height: 350px;width: 630px;" /></center>
					<p style="font-size: 16px;">This article is about the overall concept of games called football. For the game most commonly referred to as football, see Association football. For specific versions of the game, the balls themselves and other uses of the term, see Football (disambiguation).Several codes of football. Images, from top to down, left to right: association football(soccer), Australian rules football, international rules football, a rugby union scrum, rugby league, and American football.
Football is a family of team sports that involve, to varying degrees, kicking a ball with a foot to score a goal. Unqualified, the word football is understood to refer to whichever form of football is the most popular in the regional context in which the word appears. Sports commonly called 'football' in certain places include: association football (known as soccer in some countries); gridiron football(specifically American football or Canadian football); Australian rules football; rugby football (either rugby league or rugby union); and Gaelic football.[1][2] These different variations of football are known as football codes.
</p>

 <p style="font-size: 22px; font-weight:bold;">Clubs:</p>
					<img src="img/club.jpg" style="height: 350px;width: 630px;" />
					<p style="font-size: 16px;">Main article: Oldest football clubs
Sports clubs dedicated to playing football began in the 18th century, for example London's Gymnastic Society which was founded in the mid-18th century and ceased playing matches in 1796.[51][52]
The first documented club to bear in the title a reference to being a 'football club' were called "The Foot-Ball Club" who were located in Edinburgh, Scotland, during the period 1824–41.[53][54] The club forbade tripping but allowed pushing and holding and the picking up of the ball.[54]
In 1845, three boys at Rugby school were tasked with codifying the rules then being used at the school. These were the first set of written rules (or code) for any form of football.[55]This further assisted the spread of the Rugby game.</p>


                </div>
		
		
		
		
		
		</div>
		<div id="BodySection">
                <p>Global Warming (National Geographic)</p><br/>
                <video width="265px" height="220PX" controls>
                    <source src="video/Global Warming .mp4" type="video/mp4">
                </video><br/><br/>
                <p>EducationSystem</p><br/>
                <video width="265px" height="220PX" controls>
                    <source src="video/EducationSystem.mp4" type="video/mp4">
                </video><br/><br/>
                <p>Latest news technology</p><br/>
                <video width="265px" height="220PX" controls>
                    <source src="video/Latest news technology.mp4" type="video/mp4">
                </video><br/><br/>
                <p>BSC Electronics Technology</p><br/>
                <video width="265px" height="220PX" controls>
                    <source src="video/BSC Electronics Technology.mp4" type="video/mp4">
                </video><br/><br/>
                <p>3 WORLD WAR IN 3 MIN</p><br/>
                <video width="265px" height="220PX" controls>
                    <source src="video/3 WORLD WAR IN 3 MIN.mp4" type="video/mp4">
                </video><br/><br/>
                <p>Sports Science- Baseball Vs. Cricket</p><br/>
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
