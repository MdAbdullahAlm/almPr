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
		
		<center><img src="img/geography.jpg" style="height: 100px;
            width: 400px; " /></center>
			
			
			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Geography'";
$display=mysql_query($result,$con);

while($row=mysql_fetch_array($display))
{

                        echo "<div id='Post_Box'>";
						echo "<p style='color: blue;'>".$row['Date']." : </p>";
						echo "<p style='font-size: 27px; font-weight:bold;font-family:Arial Black'>".$row['Post_Heder']."</p>";
echo "<center> <img src='".$row['Post_Pic']."' style='height: 350px; width: 630px;' /></center> ";
echo "<p style='font-size: 16px; color: black;'></br>".$row['B_Post']."</p>";
      echo "</div>";
}

?>
			
			
			<p style="color:blue;">Date:13-jun-18</p>
		    <h3 style="font-size: 27px; font-weight:bold;">Historical geography:</h3></br>
	
					<center><img src="img/Geography1.jpg" style="height: 350px;
            width: 630px;" /></br></center></br>
					<p style="font-size: 16px;"
					>Times Higher Education ranked the Department of History 1st in the country for its performance in the latest Research Excellence Framework exercise. Meanwhile, Birmingham has a diverse Geography department, with a large number of staff with specialisms across human, physical and environmental geography.
If you want to understand the past to prepare for your future in a changing world, studying History is the way forward. Geography combines a sound academic training with an insight into practical, social, economic and environmental issues. You refine perspectives and develop skills in a degree programme that encourages the use of imagination and observation to resolve real problems affecting people and environments.
The eminent historical geographer Donald Meinig views geography and history as complementary and interdependent, “bound together by the very nature of things.” This relationship, he states, “is implied by such common terms as space and time, area and era, places and events, pairs that are fundamentally inseparable. In practice the two fields are differentiated by the proportionate emphasis each gives to these terms.” However, he warns that it is important to realize that “geography is not just a physical stage for the historical drama, not just a set of facts about the earth. It is a special way of looking at the world. Geography, like history, is an age-old and essential strategy for thinking about large and complex matters.”(1) 
The standards and indicators developed for Geography and History of the World are designed to enable students to use the geographic “way of looking at the world” to deepen their understanding of selected global themes—to learn about these themes informed by geography. Geography and History of the World is designed as a legitimate alternative to the standard World History course. 
The selection of standards for inclusion in Geography and History of the World was influenced by the work of Brian Blouet (2), Paul Gagnon (3), Geography for Life (4), The National Standards for History (5), and by the Bradley Commission on History in Schools (6). Ultimately, however, the standards were selected because they represent geographic/historical themes critical to today’s citizens. More generally, Geography and History of the World standards and the indicators, skills, and concepts associated with them are designed to nurture perceptive, responsible citizenship, encourage and support the development of critical thinking skills and lifelong learning, and to help prepare students for employment in the 21st Century. 


</p>
 
       </br><p style="color:blue;">Date:13-jun-18</p> <h3 style="font-size: 27px; font-weight:bold;">
Geographic Information Systems:</h3></br>
					<center><img src="img/Geography2.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>What is historical geography and how does it correspond to environmental history? These seemingly simple questions produce a range of answers. In a recent global review of environmental historiography, John McNeill suggests that historical geography and environmental history pursue similar questions with many of the same methodologies.[1] Craig Colten, an historical geographer, comments that the two fields are closely aligned.[2] Recent anecdotal evidence suggests that these views are basically right: doesn't William Cronon hold a chair in history, geography and environmental studies? Haven't geographers contributed to recent issues of Environmental History, and environmental historians to recent issues of the Journal of Historical Geography? Environmental history, McNeill claims, is "about as interdisciplinary as intellectual pursuits can get."[3] So why should disciplinary labels concern us? 
Perhaps they should not, but this is not a universal view. Over the past two decades, environmental historiography has been discussed in a range of geography journals and conferences. Sometimes this discussion has sought to link ideas across disciplinary boundaries; sometimes it has focused on shared research problems, theoretical work, or methodologies.[4] Other times, it has struck a more critical note, identifying weaknesses in core concepts, narrative styles and environmental historians' geographical knowledge.[5] Much of this discussion, published almost exclusively in geography journals, has gone largely unnoticed amongst environmental historians. Or at least, it has yet to receive a coherent response. Historical geographers seem to write much more about environmental history than environmental historians about historical geography.
It is entirely possible that environmental historians have had little to say about historical geography because it is difficult to encompass the field's diversity in subject matter, theoretical inspiration, and methodology. With the publication of Alan Baker's Geography and History: Bridging the Divide, this difficulty may be more easily overcome, for here is a book that promises to speak to the relationship between geography and history, and offers one chapter specifically on "Environmental Histories and Geographies." 
Readers of H-Environment will find this book to be an enormously useful introduction to a sub-discipline and body of literature that should be of concern to their work.</p>

</br><p style="color:blue;">Date:13-jun-18</p><h3 style="font-size: 27px; font-weight:bold;">
					Human Environment Interactions:</h3></br>
					<center><img src="img/Geography 3.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>The writings of Herodotus in the 5th century bce, particularly his discussion of how the Nile River delta formed, probably provide the earliest example of what would be called historical geography today. Historical geography, as the study of past geographies, remained a relatively undeveloped field of study until the 17th century, when Philipp Clüver, considered the founder of historical geography, published a historical geography of Germany, combining knowledge of the classics with knowledge of the land.
In the 19th century the importance of geography as the basis for understanding history was taught in many universities, particularly in Great Britain. Geography as the basis for understanding history changed to the geographic influence upon historical events in the early 20th century. The work of Ellen Churchill Semple used this environmental deterministic interpretation of history. From the 1930s, historical geography gained prominence through the valuable studies in sequent occupance—i.e., the study of the human occupation of a specific region over intervals of historic time—initiated by Derwent S. Whittlesey and Carl O. Sauer. The establishment of the Journal of Historical Geography (1975) and historical-geography research groups by the Institute of British Geographers (1973) and the Association of American Geographers (1979) served to vindicate the historical approach in geography.
</p>
<p style="color:blue;">Date:13-jun-18</p> <h3 style="font-size: 27px; font-weight:bold;">
Geographic Information Systems:</h3></br>
					<center><img src="img/zz.png" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Cartography studies the representation of the Earth's surface with abstract symbols (map making). Although other subdisciplines of geography rely on maps for presenting their analyses, the actual making of maps is abstract enough to be regarded separately. Cartography has grown from a collection of drafting techniques into an actual science.
Cartographers must learn cognitive psychology and ergonomics to understand which symbols convey information about the Earth most effectively, and behavioural psychology to induce the readers of their maps to act on the information. They must learn geodesy and fairly advanced mathematics to understand how the shape of the Earth affects the distortion of map symbols projected onto a flat surface for viewing. It can be said, without much controversy, that cartography is the seed from which the larger field of geography grew. Most geographers will cite a childhood fascination with maps as an early sign they would end up in the field.
.</p>

</br>
<p style="color:blue;">Date:13-jun-18</p> <h3 style="font-size: 27px; font-weight:bold;">
Geographic information:</h3></br>
					<center><img src="img/11.png" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Geographic information systems (GIS) deal with the storage of information about the Earth for automatic retrieval by a computer, in an accurate manner appropriate to the information's purpose. In addition to all of the other subdisciplines of geography, GIS specialists must understand computer science and database systems. GIS has revolutionized the field of cartography: nearly all mapmaking is now done with the assistance of some form of GIS software. GIS also refers to the science of using GIS software and GIS techniques to represent, analyse, and predict the spatial relationships. In this context, GIS stands for geographic information science.</p>

</br>
<p style="color:blue;">Date:13-jun-18</p> <h3 style="font-size: 27px; font-weight:bold;">
Remote sensing:</h3></br>
					<center><img src="img/17.png" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Remote sensing is the science of obtaining information about Earth features from measurements made at a distance. Remotely sensed data comes in many forms, such as satellite imagery, aerial photography, and data obtained from hand-held sensors. Geographers increasingly use remotely sensed data to obtain information about the Earth's land surface, ocean, and atmosphere, because it: (a) supplies objective information at a variety of spatial scales (local to global), (b) provides a synoptic view of the area of interest, (c) allows access to distant and inaccessible sites, (d) provides spectral information outside the visible portion of the electromagnetic spectrum, and (e) facilitates studies of how features/areas change over time. Remotely sensed data may be analysed either independently of, or in conjunction with other digital data layers (e.g., in a geographic information system)..</p>

</br>
<p style="color:blue;">Date:13-jun-18</p> <h3 style="font-size: 27px; font-weight:bold;">
Quantitative methods:</h3></br>
					<center><img src="img/12.png" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Geostatistics deal with quantitative data analysis, specifically the application of statistical methodology to the exploration of geographic phenomena. Geostatistics is used extensively in a variety of fields, including hydrology, geology, petroleum exploration, weather analysis, urban planning, logistics, and epidemiology. The mathematical basis for geostatistics derives from cluster analysis, linear discriminant analysis and non-parametric statistical tests, and a variety of other subjects. Applications of geostatistics rely heavily on geographic information systems, particularly for the interpolation (estimate) of unmeasured points. Geographers are making notable contributions to the method of quantitative techniques..</p>

</br>
<p style="color:blue;">Date:13-jun-18</p> <h3 style="font-size: 27px; font-weight:bold;">
Qualitative methods:</h3></br>
					<center><img src="img/13.png" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Geographic qualitative methods, or ethnographical research techniques, are used by human geographers. In cultural geography there is a tradition of employing qualitative researchtechniques, also used in anthropology and sociology. Participant observation and in-depth interviews provide human geographers with qualitative data..</p>

</br>
<p style="color:blue;">Date:13-jun-18</p> <h3 style="font-size: 27px; font-weight:bold;">
Cartography:</h3></br>
					<center><img src="img/14.png" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Cartography studies the representation of the Earth's surface with abstract symbols (map making). Although other subdisciplines of geography rely on maps for presenting their analyses, the actual making of maps is abstract enough to be regarded separately. Cartography has grown from a collection of drafting techniques into an actual science.
Cartographers must learn cognitive psychology and ergonomics to understand which symbols convey information about the Earth most effectively, and behavioural psychology to induce the readers of their maps to act on the information. They must learn geodesy and fairly advanced mathematics to understand how the shape of the Earth affects the distortion of map symbols projected onto a flat surface for viewing. It can be said, without much controversy, that cartography is the seed from which the larger field of geography grew. Most geographers will cite a childhood fascination with maps as an early sign they would end up in the field.
.</p>

</br>
<p style="color:blue;">Date:13-jun-18</p> <h3 style="font-size: 27px; font-weight:bold;">
Techniques:</h3></br>
					<center><img src="img/16.png" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>As spatial interrelationships are key to this synoptic science, maps are a key tool. Classical cartography has been joined by a more modern approach to geographical analysis, computer-based geographic information systems (GIS).
In their study, geographers use four interrelated approaches:
•	Systematic — Groups geographical knowledge into categories that can be explored globally.
•	Regional — Examines systematic relationships between categories for a specific region or location on the planet.
•	Descriptive — Simply specifies the locations of features and populations.
•	Analytical — Asks why we find features and populations in a specific geographic area.
</p>

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
