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
    <div id="MainDiv" >
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
		
		                   <center><img src="img/Earth.png" style="height: 100px;
            width: 400px; " /></center>
			
			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Earth'";
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
			
			
			<p Style="font-size:13px; font-weight:bold; color:blue;">11 may 2018</p>
			<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Earth:</p>
					<center><img src="img/Earth.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>From Wikipedia, the free encyclopedia
This article is about the planet itself. For its human aspects, see World. For other uses, see Earth (disambiguation) or Planet Earth (disambiguation).
Earth is the third planet from the Sun and the only object in the Universe known to harbor life. According to radiometric dating and other sources of evidence, Earth formed over 4 billion years ago.[24][25][26] Earth's gravity interacts with other objects in space, especially the Sun and the Moon, Earth's only natural satellite. Earth revolves around the Sun in 365.26 days, a period known as an Earth year. During this time, Earth rotates about its axis about 366.26 times.[n 5]
Earth's axis of rotation is tilted, producing seasonal variations on the planet's surface.[27] The gravitational interaction between the Earth and Moon causes ocean tides, stabilizes the Earth's orientation on its axis, and gradually slows its rotation.[28] Earth is the densest planet in the Solar System and the largest of the four terrestrial planets.
</p>
 
        
<p Style="font-size:13px; font-weight:bold; color:blue;">17 may 2018</p>
		<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>
Surface
</p>
					<center><img src="img/Earth1.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Present-day Earth altimetry and bathymetry. Data from the National Geophysical Data Center.
The total surface area of the Earth is about 510 million km2 (197 million sq mi).[13] Of this, 70.8%, or 361.13 million km2 (139.43 million sq mi), is below sea level and covered by ocean water.[121] Below the ocean's surface are much of the continental shelf, mountains, volcanoes,[91] oceanic trenches, submarine canyons, oceanic plateaus, abyssal plains, and a globe-spanning mid-ocean ridge system. The remaining 29.2%, or 148.94 million km2 (57.51 million sq mi), not covered by water has terrain that varies greatly from place to place and consists of mountains, deserts, plains, plateaus, and other landforms. Tectonics and erosion, volcanic eruptions, flooding, weathering, glaciation, the growth of coral reefs, and meteorite impacts are among the processes that constantly reshape the Earth's surface over geological time.[122][123]
The elevation of the land surface varies from the low point of −418 m (−1,371 ft) at the Dead Sea, to a maximum altitude of 8,848 m (29,029 ft) at the top of Mount Everest. The mean height of land above sea level is about 797 m (2,615 ft).[128]
The pedosphere is the outermost layer of Earth's continental surface and is composed of soil and subject to soil formation processes. The total arable land is 10.9% of the land surface, with 1.3% being permanent cropland.[129][130] Close to 40% of Earth's land surface is used for agriculture, or an estimated 16.7 million km2 (6.4 million sq mi) of cropland and 33.5 million km2 (12.9 million sq mi) of pastureland.[131]
</p>

<p Style="font-size:13px; font-weight:bold; color:blue;">18 may 2018</p>

<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Atmosphere:</p>
					<center><img src="img/Earth2.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Satellite image of Earth cloud cover using NASA's Moderate-Resolution Imaging Spectroradiometer
The atmospheric pressure on Earth's surface averages 101.325 kPa, with a scale height of about 8.5 km.[3] It has a composition of 78% nitrogen and 21% oxygen, with trace amounts of water vapor, carbon dioxide, and other gaseous molecules. The height of the troposphere varies with latitude, ranging between 8 km at the poles to 17 km at the equator, with some variation resulting from weather and seasonal factors.[142]
Earth's biosphere has significantly altered its atmosphere. Oxygenic photosynthesis evolved 2.7 Gya, forming the primarily nitrogen–oxygen atmosphere of today.[71] This change enabled the proliferation of aerobic organisms and, indirectly, the formation of the ozone layer due to the subsequent conversion of atmospheric O2 into O3. The ozone layer blocks ultraviolet solar radiation, permitting life on land.[143] Other atmospheric functions important to life include transporting water vapor, providing useful gases, causing small meteors to burn up before they strike the surface, and moderating temperature.
</p>


<p Style="font-size:13px; font-weight:bold; color:blue;">1 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Continent </p>
					<center><img src="img/contents.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>A continent is one of several very large landmasses of the world. Generally identified by convention rather than any strict criteria, up to seven regions are commonly regarded as continents. Ordered from largest in size to smallest, they are: Asia, Africa, North America, South America, Antarctica, Europe, and Australia. 
Geologically, the continents largely correspond to areas of continental crust that are found on the continental plates. However, some areas of continental crust are regions covered with water not usually included in the list of continents. Zealandia is one such area (see submerged continents below).
Islands are frequently grouped with a neighbouring continent to divide all the world's land into geopolitical regions. Under this scheme, most of the island countries and territories in the Pacific Ocean are grouped together with the continent of Australia to form a geopolitical region called Oceania.
<br>Name of the Continent:</br>
1.North America.</br>
2.South America.</br>
3.Antarctica.</br>
4.Europe.</br>
5.Asia.</br>
6.Africa.</br>
7.Australia.</br>

</p>


<p Style="font-size:13px; font-weight:bold; color:blue;">11 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Asia</p>
					<center><img src="img/asiapic.PNG" style="height: 350px;
            width: 630px;" /><center></br>
					<p style="font-size: 16px;"
					>

Asia is Earth's largest and most populous continent, located primarily in the Eastern and Northern Hemispheres. It shares the continental landmass of Eurasia with the continent of Europe and the continental landmass of Afro-Eurasia with both Europe and Africa. Asia covers an area of 44,579,000 square kilometres (17,212,000 sq mi), about 30% of Earth's total land area and 8.7% of the Earth's total surface area. The continent, which has long been home to the majority of the human population, was the site of many of the first civilizations. Asia is notable for not only its overall large size and population, but also dense and large settlements, as well as vast barely populated regions. Its 4.5 billion people constitute roughly 60% of the world's population.
In general terms, Asia is bounded on the east by the Pacific Ocean, on the south by the Indian Ocean and on the north by the Arctic Ocean. The western boundary with Europe is a historical and cultural construct, as there is no clear physical and geographical separation between them. The most commonly accepted boundaries place Asia to the east of the Suez Canal, the Ural River, and the Ural Mountains, and south of the Caucasus Mountains and the Caspian and Black Seas. 
China and India alternated in being the largest economies in the world from 1 to 1800 CE. China was a major economic power and attracted many to the east and for many the legendary wealth and prosperity of the ancient culture of India personified Asia,] attracting European commerce, exploration and colonialism. The accidental discovery of a trans-Atlantic route from Europe to America by Columbus while in search for a route to India demonstrates this deep fascination. The Silk Road became the main East-West trading route in the Asian hinterlands while the Straits of Malacca stood as a major sea route. Asia has exhibited economic dynamism (particularly East Asia) as well as robust population growth during the 20th century, but overall population growth has since fallen. Asia was the birthplace of most of the world's mainstream religions including Christianity, Islam, Judaism, Hinduism, Buddhism, Confucianism, Taoism, Jainism, Sikhism, Zoroastrianism, as well as many other religions.
Given its size and diversity, the concept of Asia—a name dating back to classical antiquity—may actually have more to do with human geography than physical geography. Asia varies greatly across and within its regions with regard to ethnic groups, cultures, environments, economics, historical ties and government systems. It also has a mix of many different climates ranging from the equatorial south via the hot desert in the Middle East, temperate areas in the east and the continental centre to vast subarctic and polar areas in Siberia.
<p><a href="https://en.wikipedia.org/wiki/Asia">more</a>
</p>

	<p Style="font-size:13px; font-weight:bold; color:blue;">1 may 2018</p>
					
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Europe</p>
					<center><img src="img/europe.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Europe is a continent located entirely in the Northern Hemisphere and mostly in the Eastern Hemisphere. It is bordered by the Arctic Ocean to the north, the Atlantic Ocean to the west, and the Mediterranean Sea to the south. It comprises the westernmost part of Eurasia.
Since around 1850, Europe is most commonly considered as separated from Asia by the watershed divides of the Ural and Caucasus Mountains, the Ural River, the Caspian and Black Seas, and the waterways of the Turkish Straits. Though the term "continent" implies physical geography, the land border is somewhat arbitrary and has moved since its first conception in classical antiquity. The division of Eurasia into two continents reflects East-West cultural, linguistic, and ethnic differences, some of which vary on a spectrum rather than with a sharp dividing line. The border does not follow political boundaries, with Turkey and Russia being transcontinental countries.
Europe covers about 10,180,000 square kilometres (3,930,000 sq mi), or 2% of the Earth's surface (6.8% of land area). Politically, Europe is divided into about fifty sovereign states of which the Russian Federation is the largest and most populous, spanning 39% of the continent and comprising 15% of its population. Europe had a total population of about 741 million (about 11% of world population) as of 2016. The European climate is largely affected by warm Atlantic currents that temper winters and summers on much of the continent, even at latitudes along which the climate in Asia and North America is severe. Further from the sea, seasonal differences are more noticeable than close to the coast.
Europe, in particular Italy[ and ancient Greece, was the birthplace of Western civilization. The fall of the Western Roman Empire during the Migration Period marked the end of ancient history and the beginning of an era known as the Middle Ages. Renaissance Humanism, exploration, art, and science led to the modern era. From the Age of Discovery onwards, Europe played a predominant role in global affairs. Between the 16th and 20th centuries, European powers controlled at various times the Americas, most of Africa, Oceania, and the majority of Asia.
The Age of Enlightenment, the subsequent French revolution and the Napoleonic wars shaped the continent culturally, politically, and economically from the end of the 17th century till the first half of the 19th century. The Industrial Revolution, which began in Great Britain at the end of the 18th century, gave rise to radical economic, cultural, and social change in Western Europe, and eventually the wider world. Both world wars took place for the most part in Europe, contributing to a decline in Western European dominance in world affairs by the mid-20th century as the Soviet Union and the United States took prominence.] During the Cold War, Europe was divided along the Iron Curtain between NATO in the west and the Warsaw Pact in the east, until the revolutions of 1989 and fall of the Berlin Wall.
In 1955, the Council of Europe was formed in Strasbourg following a speech by Sir Winston Churchill, with the idea of unifying Europe to achieve common goals. It includes all states except for Belarus, Kazakhstan and Vatican City. Further European integration by some states led to the formation of the European Union, a separate political entity that lies between a confederationand a federation. The EU originated in Western Europe but has been expanding eastward since the fall of the Soviet Union in 1991. The currency of most countries of the European Union, the euro, is the most commonly used among Europeans; and the EU's Schengen Area abolishes border and immigration controls among most of its member states. The European Anthem is "Ode to Joy" and states celebrate peace and unity on Europe Day.

</p>
					
<p Style="font-size:13px; font-weight:bold; color:blue;">8 may 2018</p>	
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>North America</p>
					<center><img src="img/northamerica.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>North America is a continent entirely within the Northern Hemisphere and almost all within the Western Hemisphere; it is also considered by some to be a northern subcontinent of the Americas. It is bordered to the north by the Arctic Ocean, to the east by the Atlantic Ocean, to the west and south by the Pacific Ocean, and to the southeast by South America and the Caribbean Sea.
North America covers an area of about 24,709,000 square kilometers (9,540,000 square miles), about 16.5% of the earth's land area and about 4.8% of its total surface. North America is the third largest continent by area, following Asia and Africa, and the fourth by population after Asia, Africa, and Europe.  In 2013, its population was estimated at nearly 565 million people in 23 independent states, or about 7.5% of the world's population, if nearby islands (most notably the Caribbean) are included.
North America was reached by its first human populations during the last glacial period, via crossing the Bering land bridge approximately 40,000 to 17,000 years ago. The so-called Paleo-Indian period is taken to have lasted until about 10,000 years ago (the beginning of the Archaic or Meso-Indian period). The Classic stage spans roughly the 6th to 13th centuries. The Pre-Columbian era ended in 1492, and the transatlantic migrations—the arrival of European settlers during the Age of Discovery and the Early Modern period. Present-day cultural and ethnic patterns reflect different kinds of interactions between European colonists, indigenous peoples, African slaves and their descendants.
European influences are strongest in the northern parts of the continent while indigenous and African influences are relatively stronger in the south. Because of the history of colonialism, most North Americans speak English, Spanish or French and societies and states commonly reflect Western traditions.

</p>
					
	<p Style="font-size:13px; font-weight:bold; color:blue;">7 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>South America</p>
					<center><img src="img/southamerica.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>South America is a continent located in the Western Hemisphere, mostly in the Southern Hemisphere, with a relatively small portion in the Northern Hemisphere. It may also be considered a subcontinent of the Americas, which is how it is viewed in the Spanish and Portuguese-speaking regions of the Americas. The reference to South America instead of other regions (like Latin America or the Southern Cone) has increased in the last decades due to changing geopolitical dynamics (in particular, the rise of Brazil). 
It is bordered on the west by the Pacific Ocean and on the north and east by the Atlantic Ocean; North America and the Caribbean Sea lie to the northwest. It includes twelve sovereign states (Argentina, Bolivia, Brazil, Chile, Colombia, Ecuador, Guyana, Paraguay, Peru, Suriname, Uruguay, and Venezuela), a part of France (French Guiana), and a non-sovereign area (the Falkland Islands, a British Overseas Territory though this is disputed by Argentina). In addition to this, the ABC islands of the Kingdom of the Netherlands, Trinidad and Tobago, and Panamamay also be considered part of South America.
South America has an area of 17,840,000 square kilometers (6,890,000 sq mi). Its population as of 2016 has been estimated at more than 420 million. South America ranks fourth in area (after Asia, Africa, and North America) and fifth in population (after Asia, Africa, Europe, and North America). Brazil is by far the most populous South American country, with more than half of the continent's population, followed by Colombia, Argentina, Venezuela and Peru. In recent decades Brazil has also concentrated half of the region's GDP and has become a first regional power. 
Most of the population lives near the continent's western or eastern coasts while the interior and the far south are sparsely populated. The geography of western South America is dominated by the Andes mountains; in contrast, the eastern part contains both highland regions and large lowlands where rivers such as the Amazon, Orinoco, and Paraná flow. Most of the continent lies in the tropics.
The continent's cultural and ethnic outlook has its origin with the interaction of indigenous peoples with European conquerors and immigrants and, more locally, with African slaves. Given a long history of colonialism, the overwhelming majority of South Americans speak Portuguese or Spanish, and societies and states reflect Western traditions.

</p>
					
					
	<p Style="font-size:13px; font-weight:bold; color:blue;">1 may 2018</p>				
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Africa</p>
					<center><img src="img/africa.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Africa is the world's second largest and second most-populous continent (the first being Asia in both categories). At about 30.3 million km2 (11.7 million square miles) including adjacent islands, it covers 6% of Earth's total surface area and 20% of its total land area. With 1.2 billion people as of 2016, it accounts for about 16% of the world's human population. The continent is surrounded by the Mediterranean Sea to the north, the Isthmus of Suez and the Red Sea to the northeast, the Indian Ocean to the southeast and the Atlantic Ocean to the west. The continent includes Madagascar and various archipelagos. It contains 54 fully recognised sovereign states (countries), nine territories and two de facto independent states with limited or no recognition. The majority of the continent and its countries are in the Northern Hemisphere, with a substantial portion and number of countries in the Southern Hemisphere.
Africa's average population is the youngest amongst all the continents; the median age in 2012 was 19.7, when the worldwide median age was 30.4. Algeria is Africa's largest country by area, and Nigeria is its largest by population. Africa, particularly central Eastern Africa, is widely accepted as the place of origin of humans and the Hominidae clade (great apes), as evidenced by the discovery of the earliest hominids and their ancestors as well as later ones that have been dated to around 7 million years ago, including Sahelanthropus tchadensis, Australopithecus africanus, A. afarensis, Homo erectus, H. habilis and H. ergaster—with the earliest Homo sapiens (modern human) found in Ethiopia being dated to circa 200,000 years ago. Africa straddles the equator and encompasses numerous climate areas; it is the only continent to stretch from the northern temperate to southern temperate zones. 
Africa hosts a large diversity of ethnicities, cultures and languages. In the late 19th century, European countries colonised almost all of Africa; most present states in Africa originated from a process of decolonisation in the 20th century. African nations cooperate through the establishment of the African Union, which is headquartered in Addis Ababa.

</p>
					
					
<p Style="font-size:13px; font-weight:bold; color:blue;">4 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Australia</p>
					<center><img src="img/australia.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Australia, sometimes known in technical contexts by the names Sahul, Australinea or Meganesia, to distinguish it from the country of Australia, is a continent comprising mainland Australia, Tasmania, New Guinea, New Britain, and small neighbouring islands (such as Misool and Waigeo, just to the northeast of Maluku Islands at the edge of its continental shelf). Situated in the geographical region of Oceania, it is the smallest of the seven traditional continents in the English conception. Countries within the continent include Australia, Papua New Guinea and, partially, Indonesia. 
The continent lies on a continental shelf overlain by shallow seas which divide it into several landmasses—the Arafura Sea and Torres Strait between mainland Australia and New Guinea, and Bass Strait between mainland Australia and Tasmania. When sea levels were lower during the Pleistocene ice age, including the Last Glacial Maximum about 18,000 BC, they were connected by dry land. During the past 10,000 years, rising sea levels overflowed the lowlands and separated the continent into today's low-lying arid to semi-arid mainland and the two mountainous islands of New Guinea and Tasmania. 
New Zealand is not part of the continent of Australia, but of the separate, submerged continent of Zealandia. New Zealand and Australia are both part of the Oceanian sub-region known as Australasia, with New Guinea being in Melanesia. The term Oceania is often used to denote the region encompassing the Australian continent, Zealandia and various islands in the Pacific Ocean that are not included in the seven-continent model. 
Papua New Guinea, a country within the continent, is one of the most culturally and linguistically diverse countries in the world. It is also one of the most rural, as only 18 percent of its people live in urban centres. West Papua is home to an estimated 44 uncontacted tribal groups. Australia, the largest landmass in the continent, is highly urbanised, and has the world's 13th-largest economy with the second-highest human development index globally. Australia also has the world's 9th largest immigrant population. The first settlers of Australia, New Guinea, and the large islands just to the east arrived between 50,000 and 30,000 years ago

</p>
					
<p Style="font-size:13px; font-weight:bold; color:blue;">7 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Antarctica</p>
					<center><img src="img/antarctica.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Antarctica  is Earth's southernmost continent. It contains the geographic South Pole and is situated in the Antarctic region of the Southern Hemisphere, almost entirely south of the Antarctic Circle, and is surrounded by the Southern Ocean. At 14,000,000 square kilometres (5,400,000 square miles), it is the fifth-largest continent. For comparison, Antarctica is nearly twice the size of Australia. About 98% of Antarctica is covered by ice that averages 1.9 km (1.2 mi; 6,200 ft) in thickness, which extends to all but the northernmost reaches of the Antarctic Peninsula.
Antarctica, on average, is the coldest, driest, and windiest continent, and has the highest average elevation of all the continents. Antarctica is a desert, with annual precipitation of only 200 mm (8 in) along the coast and far less inland.[7] The temperature in Antarctica has reached −89.2 °C (−128.6 °F) (or even −94.7 °C as measured from space), though the average for the third quarter (the coldest part of the year) is −63 °C (−81 °F). Anywhere from 1,000 to 5,000 people reside throughout the year at research stations scattered across the continent. Organisms native to Antarctica include many types of algae, bacteria, fungi, plants, protista, and certain animals, such as mites, nematodes, penguins, seals and tardigrades. Vegetation, where it occurs, is tundra.
Although myths and speculation about a Terra Australis ("Southern Land") date back to antiquity, Antarctica is noted as the last region on Earth in recorded history to be discovered, unseen until 1820 when the Russian expedition of Fabian Gottlieb von Bellingshausen and Mikhail Lazarev on Vostok and Mirny sighted the Fimbul ice shelf. The continent, however, remained largely neglected for the rest of the 19th century because of its hostile environment, lack of easily accessible resources, and isolation. In 1895, the first confirmed landing was conducted by a team of Norwegians.
Antarctica is a de facto condominium, governed by parties to the Antarctic Treaty System that have consulting status. Twelve countries signed the Antarctic Treaty in 1959, and thirty-eight have signed it since then. The treaty prohibits military activities and mineral mining, prohibits nuclear explosions and nuclear waste disposal, supports scientific research, and protects the continent's ecozone. Ongoing experiments are conducted by more than 4,000 scientists from many nations.

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
