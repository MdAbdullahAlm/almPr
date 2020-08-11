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
		
		                   <center><img src="img/Inner Country.png" style="height: 100px;
            width: 400px; " /></center>
			
			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Education'";
$display=mysql_query($result,$con);

while($row=mysql_fetch_array($display))
{

                        echo "<div id='Post_Box'>";
						echo "<p style='color: blue;'>".$row['Date']." : </p>";
						echo "<p style='font-size: 27px; font-weight:bold;font-family:Arial Black'>".$row['Post_Heder']."</p>";
echo "<center> <img src='".$row['Post_Pic']."' style='height: 350px; width: 630px;' /> </center>";
echo "<p style='font-size: 16px; color: black;'></br>".$row['B_Post']."</p>";
      echo "</div>";
}

?>
			
			
			
			
<br><p style="color:blue;">Date:13-jun-18</p>	<p style="font-size: 22px; font-weight:bold;">Member states of UNESCO:</p>
					<center><img src="img/InnerPic.png" style="height: 350px;
            width: 630px;" /></center>
					<p style="font-size: 16px;"
					>  UNESCO member states
  UNESCO member state dependent territory with separate NOC
  UNESCO associates
  UNESCO observers
  UNESCO member states with intention to leave
As of November 2015, UNESCO members include 195 member states and 10 associate members.[1][2] Some members have additional National Organizing Committees (NOCs) for some of their dependent territories.[3] The associate members are non-independent states.
Three UNESCO member states are not UN member states: Cook Islands, Niue, and Palestine (Palestine is a non-member observer State of the United Nations General Assembly since 29 November 2012), while one UN member state (Liechtenstein) is not a UNESCO member. Kosovo was approved for membership by UNESCO's executive board in 2015,[4] but the proposal did not receive the required 2/3 of votes in favour at the general conference.[5]
Contents
  
<Pre>•	1Member States
•	2Associate members
•	3Observers
•	4See also
•	5Notes
•	6References<pre/>
</p>

 <p style="font-size: 22px; font-weight:bold;"
					>Member States:</p>
					
					<p style="font-size: 16px;"
					>The current 195 UNESCO member states with the date on which they became members:
•	  Afghanistan (4 May 1948)
•	  Albania (16 October 1958)
•	  Algeria (15 October 1962)
•	  Andorra (20 October 1993)
•	  Angola (11 March 1977)
•	  Antigua and Barbuda (15 July 1982)
•	  Argentina (15 September 1948)
•	  Armenia (9 June 1992)
•	  Australia (4 November 1946)
•	  Austria (13 August 1948)
•	  Azerbaijan (3 June 1992)
•	  Bahamas (23 April 1981)
•	  Bahrain (18 January 1972)
•	  Bangladesh (27 October 1972)
•	  Barbados (24 October 1968)
•	  Belarus (12 May 1954)
•	  Belgium (29 November 1946)
•	  Belize (10 May 1982)
•	  Benin (18 October 1960)
•	  Bhutan (13 April 1982)
•	  Bolivia (13 November 1946)
•	  Bosnia and Herzegovina (2 June 1993)
•	  Botswana (16 January 1980)
•	  Brazil (4 November 1946)
•	  Brunei Darussalam (17 March 2005)
•	  Bulgaria (17 May 1956)
•	  Burkina Faso (14 November 1960)
•	  Burundi (16 November 1962)
•	  Cambodia (3 July 1951)
•	  Cameroon (11 November 1960)
•	  Canada (4 November 1946)
•	  Cape Verde (15 February 1978)
•	  Central African Republic (11 November 1960)
•	  Chad (19 December 1960)
•	  Chile (7 July 1953)
•	  China[a] (4 November 1946)
•	including separate NOC for   Hong Kong
•	  Colombia (31 October 1947)
•	  Comoros (22 March 1977)
•	  Congo (24 October 1960)
•	  Cook Islands (25 October 1989)
•	  Costa Rica (19 May 1950)
•	  Côte d'Ivoire (27 October 1960)
•	  Croatia (1 June 1992)
•	  Cuba (29 August 1947)
•	  Cyprus (6 February 1961)
•	  Czech Republic (22 February 1993)
•	  Democratic Republic of the Congo (25 November 1960)
•	  Denmark[a] (4 November 1946)
•	  Djibouti (31 August 1989)
•	  Dominica (9 January 1979)
•	  Dominican Republic (4 November 1946)
•	  Ecuador (22 January 1947)
•	  Egypt (4 November 1946)
•	  El Salvador (28 April 1948)
•	  Equatorial Guinea (29 November 1979)
•	  Eritrea (2 September 1993)
•	  Estonia (14 October 1991)
•	  Ethiopia (1 July 1955)
•	  Fiji (14 July 1983)
•	  Finland (10 October 1956)
•	  France (4 November 1946)
•	  Gabon (16 November 1960)
•	  Gambia (1 August 1973)
•	  Georgia (7 October 1992)
•	  Germany (11 July 1951)
•	  Ghana (11 April 1958)
•	  Greece (4 November 1946)
•	  Grenada (17 February 1975)
•	  Guatemala (2 January 1950)
•	  Guinea (2 February 1960)
•	  Guinea-Bissau (1 November 1974)
•	  Guyana (21 March 1967)
•	  Haiti (18 November 1946)
•	  Honduras (16 December 1947)
•	  Hungary (14 September 1948)
•	  Iceland (8 June 1964)
•	  India (4 November 1946)
•	  Indonesia (27 May 1950)
•	  Iran (6 September 1948)
•	  Iraq (21 October 1948)
•	  Ireland (3 October 1961)
•	  Israel (16 September 1949)
•	  Italy (27 January 1948)
•	  Jamaica (7 November 1962)
•	  Japan (2 July 1951)
•	  Jordan (14 June 1950)
•	  Kazakhstan (22 May 1992)
•	  Kenya (7 April 1964)
•	  Kiribati (24 October 1989)
•	  North Korea (18 October 1974)
•	  South Korea (14 June 1950)
•	  Kuwait (18 November 1960)
•	  Kyrgyzstan (2 June 1992)
•	  Lao People's Democratic Republic (9 July 1951)
•	  Latvia (14 October 1991)
•	  Lebanon (4 November 1946)
•	  Lesotho (29 September 1967)
•	  Liberia (6 March 1947)
•	  Libya (27 June 1953)
•	  Lithuania (7 October 1991)
•	  Luxembourg (27 October 1947)
•	  Republic of Macedonia (28 June 1993)
•	  Madagascar (10 November 1960)
•	  Malawi (27 October 1964)
•	  Malaysia (16 June 1958)
•	  Maldives (18 July 1980)
•	  Mali (7 November 1960)
•	  Malta (10 February 1965)
•	  Marshall Islands (30 June 1995)
•	  Mauritania (10 January 1962)
•	  Mauritius (25 October 1968)
•	  Mexico (4 November 1946)
•	  Federated States of Micronesia (19 October 1999)
•	  Moldova (27 May 1992)
•	  Monaco (6 July 1949)
•	  Mongolia (1 November 1962)
•	  Montenegro (1 March 2007)[b]
•	  Morocco (7 November 1956)
•	  Mozambique (11 October 1976)
•	  Myanmar (27 June 1949)
•	  Namibia (2 November 1978)
•	  Nauru (17 October 1996)
•	    Nepal (1 May 1953)
•	  Netherlands[a] (1 January 1947)
•	  New Zealand[a] (4 November 1946)
•	  Nicaragua (22 February 1952)
•	  Niger (10 November 1960)
•	  Nigeria (14 November 1960)
•	  Niue (26 October 1993)[c]
•	  Norway (4 November 1946)
•	  Oman (10 February 1972)
•	  Pakistan (14 September 1949)
•	  Palau (20 September 1999)
•	  Palestine (23 November 2011)[d]
•	  Panama (10 January 1950)
•	  Papua New Guinea (4 October 1976)
•	  Paraguay (20 June 1955)
•	  Peru (21 November 1946)
•	  Philippines (21 November 1946)
•	  Poland (6 November 1946)
•	  Portugal (11 September 1974)[e]
•	  Qatar (27 January 1972)
•	  Romania (27 July 1956)
•	  Russian Federation (21 April 1954)
•	  Rwanda (7 November 1962)
•	  Saint Kitts and Nevis (26 October 1983)
•	  Saint Lucia (6 March 1980)
•	  Saint Vincent and the Grenadines (14 January 1983)
•	  Samoa (3 April 1981)
•	  San Marino (12 November 1974)
•	  São Tomé and Príncipe (22 January 1980)
•	  Saudi Arabia (4 November 1946)
•	  Senegal (10 November 1960)
•	  Serbia (20 December 2000)[b]
•	  Seychelles (18 October 1976)
•	  Sierra Leone (28 March 1962)
•	  Singapore (8 October 2007)[f]
•	  Slovakia (9 February 1993)
•	  Slovenia (27 May 1992)
•	  Solomon Islands (7 September 1993)
•	  Somalia (15 November 1960)
•	  South Africa (12 December 1994)[g]
•	  South Sudan (27 October 2011)[9]
•	  Spain (30 January 1953)
•	  Sri Lanka (14 November 1949)
•	  Sudan (26 November 1956)
•	  Suriname (16 July 1976)
•	  Swaziland (25 January 1978)
•	  Sweden (23 January 1950)
•	   Switzerland (28 January 1949)
•	  Syrian Arab Republic (16 November 1946)
•	  Tajikistan (6 April 1993)
•	  United Republic of Tanzania (6 March 1962)
•	  Thailand (1 January 1949)
•	  Timor-Leste (5 June 2003)
•	  Togo (17 November 1960)
•	  Tonga (29 September 1980)
•	  Trinidad and Tobago (2 November 1962)
•	  Tunisia (8 November 1956)
•	  Turkey (4 November 1946)
•	  Turkmenistan (17 August 1993)
•	  Tuvalu (21 October 1991)
•	  Uganda (9 November 1962)
•	  Ukraine (12 May 1954)
•	  United Arab Emirates (20 April 1972)
•	  United Kingdom of Great Britain and Northern Ireland[a] (1 July 1997)[h]
•	including separate NOC for   Bermuda
•	  United States of America (1 October 2003)[i][j]
•	including separate NOCs for:   Guam,   American Samoa,   Puerto Ricoand   U.S. Virgin Islands
•	  Uruguay (8 November 1947)
•	  Uzbekistan (26 October 1993)
•	  Vanuatu (10 February 1994)
•	  Venezuela (25 November 1946)
•	  Vietnam (6 July 1951)
•	  Yemen (2 April 1962)
•	  Zambia (9 November 1964)
•	  Zimbabwe (22 September 1980)

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
