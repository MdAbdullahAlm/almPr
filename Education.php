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
		
		                  <center><img src="img/Education12.png" style="height: 100px;
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
echo "<center><img src='".$row['Post_Pic']."' style='height: 350px; width: 630px;' /></center> ";
echo "<p style='font-size: 16px; color: black;'></br>".$row['B_Post']."</p>";
      echo "</div>";
}

?>
			
			
			<p style="font-size: 22px; font-weight:bold;"
					>History of education:</p><br>
					<center> <img src="img/Education.jpg" style="height: 350px;
            width: 630px;" /></center><br>
					<p style="font-size: 16px;">
Not to be confused with the quarterly journal History of Education: Journal of the History of Education Society.
The systematic provision of learning techniques to most children, such as literacy, has been a development of the last 150 or 200 years,[1] or even last 50 years in some countries. Schools for the young have historically been supplemented with advanced training for priests, bureaucrats and specialists.[2]
</p>
 
         <p style="font-size: 22px; font-weight:bold;">History:</p><br>
					<center><img src="img/Education1.jpg" style="height: 350px;
            width: 630px;" /></center><br>
					<p style="font-size: 16px;"
					>Education began in prehistory, as adults trained the young in the knowledge and skills deemed necessary in their society. In pre-literate societies, this was achieved orally and through imitation. Story-telling passed knowledge, values, and skills from one generation to the next. As cultures began to extend their knowledge beyond skills that could be readily learned through imitation, formal education developed. Schools existed in Egypt at the time of the Middle Kingdom.[4]</p>

<p style="font-size: 22px; font-weight:bold;"
					>Formal educationr:</p><br>
					<center><img src="img/Educatio System1.jpg" style="height: 350px;
            width: 630px;" /></center><br>
					<p style="font-size: 16px;"
					>Formal education occurs in a structured environment whose explicit purpose is teaching students. Usually, formal education takes place in a school environment with classrooms of multiple students learning together with a trained, certified teacher of the subject. Most school systems are designed around a set of values or ideals that govern all educational choices in that system. Such choices include curriculum, organizational models, design of the physical learning spaces (e.g. classrooms), student-teacher interactions, methods of assessment, class size, educational activities, and more.[11][12]</p>
					
					<p style="font-size: 22px; font-weight:bold;"
					>When the Going Gets Tough, These Kids Find Their Way:</p><br>
					<center><img src="img/15KIDS1-jumbo66666.jpg" style="height: 350px;
            width: 630px;" /></center><br>
					<p style="font-size: 16px;"
					>"Fiction gives children a chance to encounter loss gently, on the page, and to see how different characters find their way forward."
Reading a middle-grade novel can feel like opening Pandora’s box. Devastating storms. Racial injustice. Violence, divorce, bullying, class conflict, depression, displacement, illness, grief, homophobia, abandonment, isolation, money worries and suicide attempts. That swarm of afflictions — all of them released from these four new books — might seem extreme, but the world doesn’t always spare children. The students of Parkland, Fla., know this well. In my daughters’ school, children are mourning a beloved first grader who died from complications of the flu. Her friends are 5, 6, 7 — too young to face such grief, we think helplessly, except that suddenly they must.
Fiction gives children a chance to encounter loss gently, on the page, and to see how different characters find their way forward. Some measure of a book’s success, then, might be how deftly it explores that pain — and what small winged creatures it might offer young readers alongside it, in the form of solace, courage, strength, patience, pride, resistance and hope.
</p>

<p style="font-size: 22px; font-weight:bold;"
					>Three of the best ways to read books to kids, backed by science:</p><br/>
					<center><img src="img/world-book-day-e1524586988701555.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>“According to overwhelming scientific consensus, shared reading—when young kids join in on reading a book, guided and supported by an adult—gets kids engaged in books and makes them better readers in the long term.”From timeless classics like Goodnight Moon to contemporary favorites like Don’t Let the Pigeon Drive the Bus, one of the best things that parents can do for their kids is cuddle up together with a book. It’s not just the one-on-one time that matters—story time helps develop children’s reading skills and vocabulary development, which in turn predict later academic performance.
According to overwhelming scientific consensus, shared reading—when young kids join in on reading a book, guided and supported by an adult—gets kids engaged in books and makes them better readers in the long term. That’s especially true of picture books. Adults can engage with children by showing them photos and illustrations to help them understand the story, even if they don’t know all of the words.
If you’re eager to practice shared reading with your kids, a recent study from the American Psychological Association can help you figure out the best way to go about it. Three researchers at the University of Sussex conducted a meta-analysis of 38 studies involving 2,455 children to understand why, and how, shared reading benefits kids’ word comprehension. Some of the answers they found surprised them, and may surprise you too. Here’s a partial list of the habits that help kids, and the factors that don’t seem to make a big difference.
</p>
     <p style="font-size: 22px; font-weight:bold;"
					>Speaking Truth, Beautifully, to Shattered Young People:</p><br/>
					<center><img src="img/merlin_88.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					> By sharing poetry with young people, we are holding a seashell up to their ears. We are giving them an entire ocean of voices, of experiences and possibilities, in a tiny, but beautiful, package. Sometimes, those voices might seem far off and hard to decipher; other times they might sound like home. But they need to be heard. Here are four new books of verse for young readers that should not be ignored.Kwame Alexander brings his signature verse to It’s the summer of 1988 and 12-year-old Charlie Bell struggles to find his footing after his father’s death. (“Rebound” is the prequel to Alexander’s Newbery Medal-winning “The Crossover.”) When “soaring above / the sorrow and grief / seemed impossible,” Charlie retreats from his mother and friends into the world of comic books. As his relationship with his mother grows strained, and Charlie is caught stealing from a neighbor, he is shipped off to his grandparents for the summer. There, he spends his days doing chores for his “hustle and grind, peace of mind” Granddad, and tagging along while Granddad volunteers at the Boys and Girls Club. There, his basketball-loving cousin, Roxie, gets him back into the game. As Charlie allows himself to enjoy the things he once shared with his father, he begins to pick up the pieces of his shattered universe.
</p>     

<p style="font-size: 22px; font-weight:bold;"
					>How To Raise Brilliant Children, According To Science:</p><br/>
					<center><img src="img/angelkid_sl444.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					> ’What we do with little kids today will matter in 20 years,’ she says. If you don't get it right, you will have an unlivable environment. That's the crisis I see. When a child asks you a question like this, you have a few options. You can shut her down with a "Just because." You can explain: "Red is for stop and green is for go." Or, you can turn the question back to her and help her figure out the answer with plenty of encouragement.
No parent, teacher or caregiver has the time or patience to respond perfectly to all of the many, many, many opportunities like these that come along. But a new book, Becoming Brilliant: What Science Tells Us About Raising Successful Children, is designed to get us thinking about the magnitude of these moments.
"What we do with little kids today will matter in 20 years," she says. "If you don't get it right, you will have an unlivable environment. That's the crisis I see."
Hirsh-Pasek, a professor at Temple University and a senior fellow at the Brookings Institution, is a distinguished developmental psychologist with decades of experience, as is her co-author, Roberta Golinkoff at the University of Delaware. And with this book, the two are putting forward a new framework, based on the science of learning and development, to help parents think about cultivating the skills people really need to succeed.
</p>   

<p style="font-size: 22px; font-weight:bold;"
					>8 ways to teach kids to see the best in others:</p><br>
					<center><img src="img/WHS5DE333.JPG" style="height: 350px;
            width: 630px;" /></center><br>
					<p style="font-size: 16px;"
					> "This mindset allows us to treat others with more courtesy and empathy as we focus not on ourselves, but on the other person." When my oldest daughter was in kindergarten, she was convinced a classmate didn’t like her because he would knock her book off the table and bump into her several times each day. The teacher observed that the boy wasn’t being deliberately mean — he simply liked Naomi and was rather clumsy, as so many kindergartners can be.
My daughter’s confusion wasn’t unusual. “When we are young, we are more concerned with ourselves,” says Melissa Divaris Thompson, a licensed marriage and family therapist and co-founder of Honest Mamas. “We learn through time to be more polite and regard others and their feelings.”
Every child — and adult — struggles with how to interpret others’ motives, often assuming the worst. It’s natural to think everything is personal, but we need to step back and look objectively, says Lynn R. Zakeri, a clinical therapist. Zakeri uses the example of someone cutting us off in traffic. Rather than simply assigning negative motives, she says, “we have to go that extra step to say the person might be running late or did not see me in his blind spot. Being a victim can become a habit.
</p>     

<p style="font-size: 22px; font-weight:bold;"
					>One Ohio School’s Quest to Rethink Bad Behavior:</p><br/>
					<center><img src="img/lead_960_222.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					> "If the focus is on what the adults are doing, that’s where you get the bang for your buck. We can control what the adults do."
					In education, initiatives tend to roll down from above. A district buys a new curriculum, or gets funding for a new program, and principals receive their marching orders, which they in turn hand down to teachers below.That’s not the case at Ohio Avenue Elementary School in Columbus, Ohio.The 19th-century corniced brick building is perhaps an unlikely home for experimental methods of nurturing children’s developing brains. The surrounding streets are lined with abandoned buildings, pawn shops, cash-advance outlets, and dollar stores. A large house with a boarded-up door sits directly across from the school’s playground. In Ohio Avenue’s zip code, half of the families with children under 18 live in poverty, as compared with 25 percent across Columbus and 17 percent nationally.</p>                   
  <p style="font-size: 22px; font-weight:bold;"
					>In Lullabies, a Chance for Parent and Child to Bond:</p><br/>
					<center><img src="img/merlin_5111.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					> When you sing a lullaby to your baby, you convey love and language and dreams of the future — and also, of course, you are trying to help your baby to a more immediate future of being asleep.
Singing helps calm both the baby and the parent, experts say, and creates a bedtime ritual to signal a transition from the day’s activities.
Carnegie Hall’s Weill Music Institute created a lullaby project to help mothers bond with their babies. Tiffany Ortiz, the manager of the project, said it started in 2011 with a pilot at Jacobi Medical Center in the Bronx, where staff members noticed that some teenage parents were having trouble attaching to their children. It has expanded across New York City, with artists working with parents at different sites, including high schools, hospitals, clinics, shelters and the Rikers Island jail, and is now being replicated nationally and internationally.
Teaching artists work with parents, who draft a letter which speaks to their hopes and dreams for the child, Ms. Ortiz said, and the lyrics emerge from those messages. “Then there’s a discussion about the musical side of it, how they want it to sound,” she said. “Usually, parents will start to hum.” After the lullaby is created, it is recorded for the parent to keep, to refer to, to sing again and again.
“I am surprised by how rich and complicated parenting is, and how much music making in parenting is that way too,” said Emily Eagen, a musician and songwriter who has been a teaching artist in the program since 2011.
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
