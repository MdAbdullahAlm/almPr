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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" 
integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
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
            transition: .4xs;
			padding:2px; 
			font-size:14px; 		  
			font: bold;
        }
		
			.post_Box{
}


 p{
	text-align:justify; 
 }


#Post_Hover ul {
     list-style: none;
     
 }
 
#Post_Hover ul li {
     
    background: white;
	color: black;
     text-align: center;
     line-height: 40px;
     float: left;
     position: relative;
 }
 
#Post_Hover ul li {
     text-decoration: none;
	 color: black;
     font-size: 20px;
     color: #fff;
     font-weight: bold;
     display: block;
 }
 
#Post_Hover ul li:hover {
     color: black;
     background: white;
 }
 
#Post_Hover ul ul {
     position: absolute;
     display: none;
	 color: black;
	  border: 3px solid #584c4c;
	  top: -10px;
	  
 }
 
#Post_Hover ul li:hover >ul {
     display: block;
	 color: black;
 }
 
#Post_Hover ul ul ul {
     left: 100%;
     top: 0;
 }
 
 img{
	 align: center;
 }
	
    </style>
</head>

<body>
    <div id="MainDiv">
        <div id="MainHeader" style="height: 110px;">
            <div id="HeaderLogo" >
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
                </div>
              
                
               
           
            <div id="HeaderMenu" >
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
        
       <div id="MainBody" >
		<!-- <div id="M_B_Header"><div id="M_B_Header_one" style="">
		<center><img src="img/BangladeshPic.jpg" style="height: 100px;
            width: 400px; " /></center></div>
			<div id="M_B_Header_two" style="">
			<Form action="BPAction.php" method="post" enctype="multipart/form-date">
			<center><div id="Post_Hover">
	<ul>
    <li>
        <div class="post_Box"><Pre>    <img src="postPic.png" style="width:650px; height:60px;"/></pre></div>
        <ul>
            <li><div class="bt1"> <table  style="
            width: 700px; "><tr>
			<td style="padding:10px;">Header</td>
			<td style="padding:10px;"><input type="text" name="Post_Header" style="width:500px; height:50px;" /></td>
		</tr>
		<tr>
			<td style="padding:10px;">Discription</td>
			<td style="padding:10px;"><textarea name="Bangladesh_Post" style="width:500px; height:200px; " ></textarea></td>
		</tr>
			<tr><td></td><td style="padding:10px;">
			<input type="submit" name="sbt" value="Post" style="float: right; width: 90px;"></td></tr>
</table>
			</div></li></ul>
    </li>
   

</ul>
</div></center>
            </Form> 
		</div></div> -->
			
		<div id="BodyMain">
		
		                   
			       
					<?php ?>
<!-- include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost";
$display=mysql_query($result,$con);


while($row=mysql_fetch_array($display))
{
	echo"<tr>";
	echo"<td><p style='font-size: 25px; font-weight:bold;'>".$row['Post_Heder']."</p></td>";
	echo"<td><p style='font-size: 17px;'>".$row['B_Post']."</p></td>";
	echo"</tr>";
} -->

					
					
					
					<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Bangladesh'";
$display=mysql_query($result,$con);

while($row=mysql_fetch_array($display))
{

                        echo "<div id='Post_Box'>";
						echo "<p style='color: blue;'>".$row['Date'].": </p>";
						echo "<p style='font-size: 27px; font-weight:bold;font-family:Arial Black'>".$row['Post_Heder']."</p>";
echo "<center><img src='".$row['Post_Pic']."' style='height: 350px; width: 630px;' /> </center>";
echo "<p style='font-size: 16px; color: black;'></br>".$row['B_Post']."</p>";
      echo "</div>";
}

?>
					
					
					
					<p style="font-size: 25px; font-weight:bold;"
					>Tourism in Bangladesh:</p>
					<center><img src="img/Bangladesh1.jpg" style=" align:center; height: 350px; width: 630px;" /></center>
					<p style="font-size: 16px;"
					></br>Bangladesh''s tourist attractions include historical and monuments, resorts, beaches, picnic spots, forests and 
tribal people, wildlife of various species. Activities for tourists include angling, water skiing, river cruising, 
hiking, rowing, yachting, and sea bathing. 
In the northern part, comprising the Rajshahi division, there are archaeological sites, including the temple city Puthia in Rajshahi; the 
largest and most ancient archaeological site, Mahasthangarh in Bogra; the single largest Buddhist monastery, Paharpur in Naogaon; the most 
ornamental terracota Hindu temple, Kantaji Temple, and many rajbaris or palaces of old zamindars.
In the south-eastern part, which is the Chittagong Division, there are natural and hilly areas like Chittagong Hill Tracts, along with 
sandy sea beaches. The most notable beach, in Cox's Bazar, is a contender for the title of longest unbroken sandy sea beach in the world. 

In the south-western part, mainly the Khulna Division, there is the Sundarbans, the largest mangrove forest of the world with royal Bengal 
tiger and spotted deer. The historically and architecturally important sixty domed mosque in Bagerhat is a notable site. In the 
north-eastern part, Sylhet division, there is a green carpet of tea plants on small hillocks. Natural reserved forests are great 
attractions. Migratory birds in winter, particularly in the haor areas, are also very attractive in this area.
Ministry of Tourism and The Civil Aviation Ministry designs national policies for the development and promotion of tourism. The Ministry 
also maintains the Beautiful Bangladesh campaign. Bangladesh Government has formed Tourist Police unit to better protect local and foreign 
tourists as well as look after the nature and wildlife in the tourist spots.
</p>
 
         <p style="font-size: 22px; font-weight:bold;"
					>
St. Martin's Island
:</p>
					<center><img src="img/Bangladesh4.jpg" style="height: 350px;
            width: 630px;" /></center>
					<p style="font-size: 16px;"
					></br>Dead corals at St. Martin's Island
St. Martin's Island (Bengali: সেন্ট মার্টিন্‌স দ্বীপ) is a small island (area only 8 km2) in the northeastern part of the Bay of Bengal, about 9 km 
south of the tip of the Cox's Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island 
that is separated at high tide, called Chhera island. It is about 8 km west of the northwest coast of Myanmar, at the mouth of the Naf 
River. The first settlement started just 250 years ago by some Arabian sailors who named the island 'Zajira'. During British occupation the 
island was named St. Martin Island. The local names of the island are "Narical Gingira", also spelled "Narikel Jinjira/Jinjera", which 
means 'Coconut Island' in Bengali, and "Daruchini Dip". It is the only coral island in Bangladesh.
The city of Chittagong has many high end, private hotels such as the Hotel Agrabad, the Hotel Well Park Residence, The Peninsula 
Chittagong, the Hotel Harbour View, the Hotel Meridian, and Avenue Hotels and Suites.
The JW Marriott, Westin and Radisson Blu are among the upcoming five-star hotels in Chittagong city.[
</p>

<p style="font-size: 22px; font-weight:bold;"
					>Cox's Bazar:</p>
					<center><img src="img/Bangladesh.jpg" style="height: 350px;
            width: 630px;" /></center>
					<p style="font-size: 16px;"
					></br>TCox's Bazar (Bengali: কক্সবাজার Kaksbajar) is a seaside town, a fishing port and district headquarters in 
Bangladesh. It is known for its wide and long sandy beach, which is considered by many as the world's longest natural 
sandy sea beach.[3][5] The beach in Cox's Bazar is an unbroken 125 kilometres (78 mi) sandy sea beach with a gentle 
slope. It is located 152 kilometres (94 mi) south of the Chittagong Seaport. Cox's Bazar is also known by the name 
Panowa, whose literal translation means "yellow flower". Its other old name was "Palongkee".</p>
       
                           
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
