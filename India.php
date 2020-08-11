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
		</br>
			<center><img src="img/IndiaPic.png" style="height: 100px;
            width: 400px; " /></center> 
			
			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='India'";
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
			<h3 style="font-size: 27px;  font-weight:bold;">
					 Flag Of India: </h3>
					
				 <center> <img src="img/indiaa.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					
					<p style="font-size: 16px;"
					>India (IAST: Bhārat),[19][20][21] also called the Republic of India (IAST: Bhārat Gaṇarājya),[22][23][e] is a country in South Asia. It is the seventh-largest country by area, the second-most populous country (with over 1.2 billion people), and the most populous democracy in the world. It is bounded by the Indian Ocean on the south, the Arabian Sea on the southwest, and the Bay of Bengal on the southeast. It shares land borders with Pakistan to the west;[f] China, Nepal, and Bhutan to the northeast; and Myanmar and Bangladesh to the east. In the Indian Ocean, India is in the vicinity of Sri Lanka and the Maldives. India's Andaman and Nicobar Islands share a maritime border with Thailand and Indonesia.

The Indian subcontinent was home to the urban Indus Valley Civilisation of the 3rd millennium BCE—one of the world's earliest civilisations. In the following millennium, the oldest scriptures associated with Hinduism began to be composed. Large-scale urbanisation occurred on the Ganges in the first millennium BCE leading to the Mahajanapadas, and Buddhism and Jainism arose. Early political consolidations took place under the Maurya, Satavahana and Gupta empires; the later peninsular Middle Kingdomsinfluenced cultures as far as Southeast Asia. In the medieval era, Judaism, Zoroastrianism, Christianity, and Islam arrived, and Sikhismemerged, all adding to the region's diverse culture. Much of the north fell to the Delhi sultanate; the south was united under the Vijayanagara Empire. The country was unified in the 17th century by the Mughal Empire. In the 18th century, the subcontinent came under the Maratha Empire and in the 19th under the British East India Company, later shifting to British crown rule. A nationalist movement emerged in the late 19th century, which later, under Mahatma Gandhi, was noted for nonviolent resistance and led to India's independence in 1947.


</p>
 </br>
		<p style="color:blue;">Date:13-jun-18</p>
			<h3 style="font-size: 27px; font-weight:bold;">
					Map Of India:</h3>
					
				 <center> <img src="img/varot.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					
					<p style="font-size: 16px;"
					>In 2017, the Indian economy was the world's sixth largest by nominal GDP and third largest by purchasing power parity.[16] Following market-based economic reforms in 1991, India became one of the fastest-growing major economies and is considered a newly industrialised country. However, it continues to face the challenges of poverty, corruption, malnutrition, and inadequate public healthcare. A nuclear weapons state and regional power, it has the second largest standing army in the world and ranks fifth in military expenditure among nations. India is a federal republic governed under a parliamentary system and consists of 29 states and 7 union territories. India is widely recognised for its wide cinema, rich cuisine and lush wildlife and vegetation. It is a pluralistic, multilingual and multi-ethnic society and is also home to a diversity of wildlife in a variety of protected habitats. India is a member of the ASEAN Plus 

</p>
 </br>
            
			<p style="color:blue;">Date:13-jun-18</p>
			<h3 style="font-size: 27px; font-weight:bold;">
					Manali:</h3>
					
				 <center> <img src="img/India6.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					
					<p style="font-size: 16px;"
					>Circled by towering peaks in the rich verdant valley of the Beas River, with mountain ventures waving from all directions, Manali is a year-round attraction. Travelers assemble here to hang out in the hippie villages around the main town; adventure seekers come for trekking, climbing, mountain biking, canyoning, paragliding, rafting and skiing; and much more.
There are plenty tourist attractions surrounding the town like Rohtang Pass, Solang Valley, Beas Kund (Chandratal Lake), Chandrakhani Pass, Pandoh Dam in Kullu, Great Himalayan National Park and much more which would be an ideal for Indian families and honeymooners to experience the cool mountain air and a taste of snow.
Places to visit: Best places to visit around Manali
Places to stay: Best resorts in Manali
Packages: Sightseeing, Camping and Adventure Activities, Topmost Manali Tour Packages

</p>
 </br>
        <p style="color:blue;">Date:13-jun-18</p>
			<h3 style="font-size: 27px; font-weight:bold;">
					Tajmohol:</h3>
					
				 <center> <img src="img/tajmohol.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					
					<p style="font-size: 16px;"
					>The earliest authenticated human remains in South Asia date to about 30,000 years ago.[36] Nearly contemporaneous Mesolithic rock art sites have been found in many parts of the Indian subcontinent, including at the Bhimbetka rock shelters in Madhya Pradesh.[37] Around 7000 BCE, one of the first known Neolithic settlements appeared on the subcontinent in Mehrgarh and other sites in the subcontinent.[38] These gradually developed into the Indus Valley Civilisation,[39] the first urban culture in South Asia;[40] it flourished during 2500–1900 BCE in northeast Afghanistan to Pakistan and northwest India.[41] Centred around cities such as Mohenjo-daro, Harappa, Dholavira, and Kalibangan, and relying on varied forms of subsistence, the civilisation engaged robustly in crafts production and wide-ranging trade.[40]

</p>
 </br>
		<p style="color:blue;">Date:13-jun-18</p>
		<h3 style="font-size: 27px; font-weight:bold;">
		
Shimla:

</h3>
</br>
					
					<center><img src="img/India2.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Chained along a 12km hill, with sheer forested hills dropping away in all directions, the Himachal capital is a good appetite for an inspiring mountain vacation. Shimla is one of renowned Indian tourist place, whirring with a sparkling flow of Indian tourists and full of reverberations of its former role as the summer capital of British India. As the city is surrounded with stunning views of the majestic Himalayan mountain and popular attractions like Summer Hills, Indian Institute of Advanced Studies, Annandale. The Scandal Point, Ridge, The Shimla State Museum, Naldehra and Shaily Peak, Chadwick falls, Kufri ,Chail and much more.
					</br>
					</br>
		<p style="color:blue;">Date:13-jun-18</p>
	<h3 style="font-size: 27px; font-weight:bold;">
Kasol:</h3>
		</br>
				
					<center><img src="img/India3.jpg" style="height: 350px;
            width: 630px;" /></center</br>
					
					<p style="font-size: 16px;"
					>Spread along the beautiful Parvati River and with mountain panoramas to the northeast, Kasol is the main traveler destination in the valley. It’s a small hamlet but almost infested with bakeries, reggae bars, and affordable guesthouses catering to a wide hipster Israeli crowd. It’s also a venue for trance parties emigrated from Goa and at any time an easy base for traversing the forested valley or just hanging out. Picturesque spots around this surreal town have some delightful tourist destinations like  Kullu, Parvati River, Malana Village, Kheer Ganga Peak, Bhuntar Town, Manali and these are considered as the best tourist places in India.
Places to visit: Best Places to Visit in Kasol
Packages: Sightseeing, Camping and Adventure Activities
</br>

<p style="color:blue;">Date:13-jun-18</p>
	<h3 style="font-size: 27px; font-weight:bold;">
Kashmir:</h3>
				 <center><img src="img/india.jpg" style="height: 350px;
            width: 630px;" /></center</br>
					
					<p style="font-size: 16px;"
					>
					
During the period 2000–500 BCE, in terms of culture, many regions of the subcontinent transitioned from the Chalcolithic to the Iron Age.[42] The Vedas, the oldest scriptures associated with Hinduism,[43] were composed during this period,[44] and historians have analysed these to posit a Vedic culture in the Punjab region and the upper Gangetic Plain.[42]Most historians also consider this period to have encompassed several waves of Indo-Aryan migration into the subcontinent from the north-west.[43] The caste system, which created a hierarchy of priests, warriors, and free peasants, but which excluded indigenous peoples by labeling their occupations impure, arose during this period.[45] On the Deccan Plateau, archaeological evidence from this period suggests the existence of a chiefdom stage of political organisation.[42] In South India, a progression to sedentary life is indicated by the large number of megalithic monuments dating from this period,[46] as well as by nearby traces of agriculture, irrigation tanks, and craft traditions.[46]

</p>
<p style="color:blue;">Date:13-jun-18</p>
			<h3 style="font-size: 27px; font-weight:bold;">
					Metro Train:</h3>
					
				 <center> <img src="img/metro.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					
					<p style="font-size: 16px;"
					>In the late Vedic period, around the 6th century BCE, the small states and chiefdoms of the Ganges Plain and the north-western regions had consolidated into 16 major oligarchies and monarchies that were known as the mahajanapadas.[47][48] The emerging urbanisation gave rise to non-Vedic religious movements, two of which became independent religions. Jainism came into prominence during the life of its exemplar, Mahavira.[49]Buddhism, based on the teachings of Gautama Buddha, attracted followers from all social classes excepting the middle class; chronicling the life of the Buddha was central to the beginnings of recorded history in India.[50][51][52] In an age of increasing urban wealth, both religions held up renunciation as an ideal,[53] and both established long-lasting monastic traditions. Politically, by the 3rd century BCE, the kingdom of Magadha had annexed or reduced other states to emerge as the Mauryan Empire.[54] The empire was once thought to have controlled most of the subcontinent excepting the far south, but its core regions are now thought to have been separated by large autonomous areas.[55][56] The Mauryan kings are known as much for their empire-building and determined management of public life as for Ashoka's renunciation of militarism and far-flung advocacy of the Buddhist dhamma.[57][58]

</p>
 </br>
 <p style="color:blue;">Date:13-jun-18</p>
			<h3 style="font-size: 27px; font-weight:bold;">
					Time Squre of Mumbai:</h3>
					
				 <center> <img src="img/time.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					
					<p style="font-size: 16px;"
					>Many Indian species descend from taxa originating in Gondwana, from which the Indian plate separated more than 105 million years before present.[151] Peninsular India's subsequent movement towards and collision with the Laurasian landmass set off a mass exchange of species. Epochal volcanism and climatic changes 20 million years ago forced a mass extinction.[152] Mammals then entered India from Asia through two zoogeographical passes flanking the rising Himalaya.[150] Thus, while 45.8% of reptiles and 55.8% of amphibians are endemic, only 12.6% of mammals and 4.5% of birds are.[147] Among them are the Nilgiri leaf monkey and Beddome's toad of the Western Ghats. India contains 172 IUCN-designated threatened animal species, or 2.9% of endangered forms.[153] These include the Asiatic lion, the Bengal tiger, the snow leopard and the Indian white-rumped vulture, which, by ingesting the carrion of diclofenac-laced cattle, nearly became extinct.

</p>
 </br>
 <p style="color:blue;">Date:13-jun-18</p>
			<h3 style="font-size: 27px; font-weight:bold;">
					Colors of India:</h3>
					
				 <center> <img src="img/color.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					
					<p style="font-size: 16px;"
					>The pervasive and ecologically devastating human encroachment of recent decades has critically endangered Indian wildlife. In response, the system of national parks and protected areas, first established in 1935, was substantially expanded. In 1972, India enacted the Wildlife Protection Act[154] and Project Tiger to safeguard crucial wilderness; the Forest Conservation Act was enacted in 1980 and amendments added in 1988.[155] India hosts more than five hundred wildlife sanctuaries and thirteen biosphere reserves,[156] four of which are part of the World Network of Biosphere Reserves; twenty-five wetlands are registered under the Ramsar Convention.[157]

</p>
 </br>
 </br>

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
