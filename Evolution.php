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
		
<center><img src="img/Evolution.png" style="height: 100px;
            width: 400px; " /></center>	

			<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Evolution'";
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
			
						   <p style="font-size: 22px; font-weight:bold;">Evolution:</p><br/>
					<center><img src="img/Evolution.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>This article is about evolution in biology. For related articles, see Outline of evolution. For other uses, see Evolution (disambiguation).
For a more accessible and less technical introduction to this topic, see Introduction to evolution.
Evolution is change in the heritable characteristics of biological populations over successive generations.[1][2] Evolutionary processes give rise to biodiversity at every level of biological organisation, including the levels of species, individual organisms, and molecules.[3]
Repeated formation of new species (speciation), change within species (anagenesis), and loss of species (extinction) throughout the evolutionary history of life on Earth are demonstrated by shared sets of morphological and biochemical traits, including shared DNA sequences.[4] These shared traits are more similar among species that share a more recent common ancestor, and can be used to reconstruct a biological "tree of life" based on evolutionary relationships (phylogenetics), using both existing species and fossils. 
</p><br/>
 
         <p style="font-size: 22px; font-weight:bold;"
					>
Evolution by natural selection
:</p><br/>
					<center><img src="img/Evolution1.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>The fossil record includes a progression from early biogenic graphite,[5] to microbial mat fossils,[6][7][8] to fossilised multicellular organisms. Existing patterns of biodiversity have been shaped both by speciation and by extinction.[9]
In the mid-19th century, Charles Darwin formulated the scientific theory of evolution by natural selection, published in his book On the Origin of Species (1859). Evolution by natural selection is a process demonstrated by the observation that more offspring are produced than can possibly survive, along with three facts about populations: 1) traits vary among individuals with respect to morphology, physiology, and behaviour (phenotypic variation), 2) different traits confer different rates of survival and reproduction (differential fitness), and 3) traits can be passed from generation to generation (heritability of fitness).[10] Thus, in successive generations members of a population are replaced by progeny of parents better adapted to survive and reproduce in the biophysical environment in which natural selection takes place.
</p><br/>

<p style="font-size: 22px; font-weight:bold;">History of evolutionary thought:</p><br/>
					<center><img src="img/Evolution2.jpg" style="height: 350px; width: 630px;" /></center><br/>
					<p style="font-size: 16px;">The proposal that one type of organism could descend from another type goes back to some of the first pre-Socratic Greek philosophers, such as Anaximander and Empedocles.[38] Such proposals survived into Roman times. The poet and philosopher Lucretius followed Empedocles in his masterwork De rerum natura (On the Nature of Things).[39][40]
Medieval
In contrast to these materialistic views, Aristotelianism considered all natural things as actualisations of fixed natural possibilities, known as forms.[41][42] This was part of a medieval teleological understanding of nature in which all things have an intended role to play in a divine cosmic order. Variations of this idea became the standard understanding of the Middle Ages and were integrated into Christian learning, but Aristotle did not demand that real types of organisms always correspond one-for-one with exact metaphysical forms and specifically gave examples of how new types of living things could come to be.
</p><br/>

				 <p style="font-size: 22px; font-weight:bold;">Evolutionary history of plants:</p><br/>
					<center><img src="img/Trilete_spores3333.png" style="height: 350px; width: 630px;" /></center><br/>
					<p style="font-size: 16px;">The evolution of plants has resulted in a wide range of complexity, from the earliest algal mats, through multicellular marine and freshwater green algae, terrestrial bryophytes, lycopods and ferns, to the complex gymnosperms and angiosperms of today. While many of the earliest groups to appear continue to thrive, as exemplified by red and green algae in marine environments, more recently derived groups have displaced previously ecologically dominant ones, e.g. the ascendance of flowering plants over gymnosperms in terrestrial environments.There is evidence that cyanobacteria and multicellular photosynthetic eukaryotes lived in freshwater communities on land as early as 1 billion years ago,[7] and that communities of complex, mutilcellular photosynthesizing organisms existed on land in the late Precambrian, around 850 million years ago.[8]</p><br/>
					
					 <p style="font-size: 22px; font-weight:bold;">Evolution of life cycles:</p><br/>
					<center><img src="img/Angiosperm_life_cycle44444.svg.png" style="height: 350px; width: 630px;" /></center><br/>
					<p style="font-size: 16px;">All multicellular plants have a life cycle comprising two generations or phases. The gametophyte phase has a single set of chromosomes (denoted 1n), and produces gametes (sperm and eggs). The sporophyte phase has paired chromosomes (denoted 2n), and produces spores. The gametophyte and sporophyte phases may be homomorphic, appearing identical  in some algae, such as Ulva lactuca, but are very different  in all modern land plants, a condition known as heteromorphy.The pattern in plant evolution has been a shift from homomorphy to heteromorphy. The algal ancestors of land plants were almost certainly haplobiontic, being haploid for all their life cycles, with a unicellular zygote providing the 2N stage. All land plants (i.e. embryophytes) are diplobiontic – that is, both the haploid and diploid stages are multicellular.[6] Two trends are apparent: bryophytes (liverworts, mosses and hornworts) have developed the gametophyte as the dominant phase of the life cycle, with the sporophyte becoming almost entirely dependent on it; vascular plants have developed the sporophyte as the dominant phase, with the gametophytes being particularly reduced in the seed plants.</p><br/>
	
	
	
				

		<p style="font-size: 22px; font-weight:bold;">Common descent:</p><br/>
					<center><img src="img/Ape_skeletons11.png" style="height: 350px; width: 630px;" /></center><br/>
					<p style="font-size: 16px;">All organisms on Earth are descended from a common ancestor or ancestral gene pool.[214][288] Current species are a stage in the process of evolution, with their diversity the product of a long series of speciation and extinction events.[289] The common descent of organisms was first deduced from four simple facts about organisms: First, they have geographic distributions that cannot be explained by local adaptation. Second, the diversity of life is not a set of completely unique organisms, but organisms that share morphological similarities. Third, vestigial traits with no clear purpose resemble functional ancestral traits and finally, that organisms can be classified using these similarities into a hierarchy of nested groups—similar to a family tree.[290] However, modern research has suggested that, due to horizontal gene transfer, this "tree of life" may be more complicated than a simple branching tree since some genes have spread independently between distantly related species.
</p><br/>
	
	
    <p style="font-size: 22px; font-weight:bold;">Social and cultural responses:</p><br/>
					<center><img src="img/Editorial_cartoon22222.jpg" style="height: 350px; width: 630px;" /></center><br/>
					<p style="font-size: 16px;">As evolution became widely accepted in the 1870s, caricatures of Charles Darwin with an ape or monkey body symbolised evolution. In the 19th century, particularly after the publication of On the Origin of Species in 1859, the idea that life had evolved was an active source of academic debate centred on the philosophical, social and religious implications of evolution. Today, the modern evolutionary synthesis is accepted by a vast majority of scientists.[74] However, evolution remains a contentious concept for some theists. While various religions and denominations have reconciled their beliefs with evolution through concepts such as theistic evolution, there are creationists who believe that evolution is contradicted by the creation myths found in their religions and who raise various objections to evolution. As had been demonstrated by responses to the publication of Vestiges of the Natural History of Creation in 1844, the most controversial aspect of evolutionary biology is the implication of human evolution that humans share common ancestry with apes and that the mental and moral faculties of humanity have the same types of natural causes as other inherited traits in animals.[338] In some countries, notably the United States, these tensions between science and religion have fuelled the current creation–evolution controversy, a religious conflict focusing on politics and public education.[339] While other scientific fields such as cosmology[340] and Earth science[341] also conflict with literal interpretations of many religious texts, evolutionary biology experiences significantly more opposition from religious literalists.
</p><br/>

					 <p style="font-size: 22px; font-weight:bold;">Evolution of secondary metabolism:</p><br/>
					<center><img src="img/Azadirachtin5555.png" style="height: 350px; width: 630px;" /></center><br/>
					<p style="font-size: 16px;">Structure of Azadirachtin, a terpenoid produced by the Neem plant, which helps ward off microbes and insects. Many secondary metabolites have complex structures. Secondary metabolites are essentially low molecular weight compounds, sometimes having complex structures, that are not essential for the normal processes of growth, development, or reproduction. They function in processes as diverse as immunity, anti-herbivory, pollinator attraction, communication between plants, maintaining symbiotic associations with soil flora, or enhancing the rate of fertilization, and hence are significant from the evo-devo perspective. Secondary metabolites are structurally and functionally diverse, and it is estimated that hundreds of thousands of enzymes might be involved in the process of producing them, with about 15–25% of the genome coding for these enzymes, and every species having its unique arsenal of secondary metabolites.[142] Many of these metabolites, such as salicylic acid are of medical significance to humans.
</p><br/>


				 <p style="font-size: 22px; font-weight:bold;">Evolution of herbivory:</p><br/>
					<center><img src="img/ViburnumFossil666.jpg" style="height: 350px; width: 630px;" /></center><br/>
					<p style="font-size: 16px;">Our understanding of herbivory in geological time comes from three sources: fossilized plants, which may preserve evidence of defence (such as spines), or herbivory-related damage; the observation of plant debris in fossilised animal faeces; and the construction of herbivore mouthparts. Although herbivory was long thought to be a Mesozoic phenomenon, fossils have shown that within less than 20 million years after the first land plants evolved, plants were being consumed by arthropods.[11] Insects fed on the spores of early Devonian plants, and the Rhynie chert also provides evidence that organisms fed on plants using a "pierce and suck" technique.[10]
During the next 75 million years[citation needed], plants evolved a range of more complex organs, such as roots and seeds. There is no evidence of any organism being fed upon until the middle-late Mississippian, 330.9 million years ago. 
</p><br/>
					
				 <p style="font-size: 22px; font-weight:bold;">Evolution of plant morphology:</p><br/>
					<center><img src="img/Illustration_Isoetes8888.jpg" style="height: 350px; width: 630px;" /></center><br/>
					<p style="font-size: 16px;">Leaves certainly evolved more than once. Based on their structure, they are classified into two types: microphylls, which lack complex venation and may have originated as spiny outgrowths known as enations, and megaphylls, which are large and have complex venation that may have arisen from the modification of groups of branches. It has been proposed that these structures arose independently.[51] Megaphylls, according to Walter Zimmerman's telome theory,[52] have evolved from plants that showed a three-dimensional branching architecture, through three transformations—overtopping, which led to the lateral position typical of leaves, planation, which involved formation of a planar architecture, webbing or fusion, which united the planar branches, thus leading to the formation of a proper leaf lamina. All three steps happened multiple times in the evolution of today's leaves.[53]
</p><br/>
					
			
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
