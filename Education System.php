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
		
<center><img src="img/Education System.png" style="height: 100px;
            width: 400px; " /></center>	

<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Education System'";
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
			
						   <p style="font-size: 22px; font-weight:bold;"
					>Education System:</p><br/>
					<center><img src="img/Educatio System.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include storytelling, discussion, teaching, training, and directed research. Education frequently takes place under the guidance of educators, but learners may also educate themselves.[1] Education can take place in formal or informal settings and any experience that has a formative effect on the way one thinks, feels, or acts may be considered educational. The methodology of teaching is called pedagogy.
Education is commonly divided formally into such stages as preschool or kindergarten, primary school, secondary school and then college, university, or apprenticeship.
A right to education has been recognized by some governments and the United Nations.[2] In most regions, education is compulsory up to a certain age.
</p>
 
         <p style="font-size: 22px; font-weight:bold;"
					>
Education sector
:</p><br/>
					<center><img src="img/Educatio System2.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>The education sector or education system is a group of institutions (ministries of education, local educational authorities, teacher training institutions, schools, universities, etc.) whose primary purpose is to provide education to children and young people in educational settings. It involves a wide range of people (curriculum developers, inspectors, school principals, teachers, school nurses, students, etc.). These institutions can vary according to different contexts.[35]
Schools deliver education, with support from the rest of the education system through various elements such as education policies and guidelines – to which school policies can refer – curricula and learning materials, as well as pre- and in-service teacher training programmes. The school environment – both physical (infrastructures) and psychological (school climate) – is also guided by school policies that should ensure the well-being of students when they are in school.[35] The Organisation for Economic Co-operation and Developmenthas found that schools tend to perform best when principals have full authority and responsibility for ensuring that students are proficient in core subjects upon graduation. They must also seek feedback from students for quality-assurance and improvement.
</p>

  <p style="font-size: 22px; font-weight:bold;">Preschool:</p><br/>
					<center><img src="img/Parent's111.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>Preschools provide education from ages approximately three to seven, depending on the country when children enter primary education. These are also known as nursery schools and as kindergarten, except in the US, where kindergarten is a term used for primary education.[citation needed] Kindergarten "provide[s] a child-centred, preschool curriculum for three- to seven-year-old children that aim[s] at unfolding the child's physical, intellectual, and moral nature with balanced emphasis on each of them.
</p>

 <p style="font-size: 22px; font-weight:bold;">Primary:</p><br/>
					<center><img src="img/Mr._Shake_Amargosa22.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>Primary (or elementary) education consists of the first five to seven years of formal, structured education. In general, primary education consists of six to eight years of schooling starting at the age of five or six, although this varies between, and sometimes within, countries. Globally, around 89% of children aged six to twelve are enrolled in primary education, and this proportion is rising.[14] Under the Education For All programs driven by UNESCO, most countries have committed to achieving universal enrollment in primary education by 2015, and in many countries, it is compulsory. The division between primary and secondary education is somewhat arbitrary, but it generally occurs at about eleven or twelve years of age. Some education systems have separate middle schools, with the transition to the final stage of secondary education taking place at around the age of fourteen. Schools that provide primary education, are mostly referred.
</p>

 <p style="font-size: 22px; font-weight:bold;">Secondary:</p><br/>
					<center><img src="img/Ashs-teacher-and-students33.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>In most contemporary educational systems of the world, secondary education comprises the formal education that occurs during adolescence. It is characterized by transition from the typically compulsory, comprehensive primary education for minors, to the optional, selective tertiary, "postsecondary", or "higher" education (e.g. university, vocational school) for adults. Depending on the system, schools for this period, or a part of it, may be called secondary or high schools, gymnasiums, lyceums, middle schools, colleges, or vocational schools. The exact meaning of any of these terms varies from one system to another. The exact boundary between primary and secondary education also varies from country to country and even within them but is generally around the seventh to the tenth year of schooling. Secondary education occurs mainly during the teenage years. In the United States, Canada, and Australia, primary and secondary education together are sometimes referred to as K-12 education, and in New Zealand Year 1–13 is used. The purpose of secondary education can be to give common knowledge, to prepare for higher education, or to train directly in a profession.
</p>

 <p style="font-size: 22px; font-weight:bold;">Tertiary:</p><br/>
					<center><img src="img/800px-LDAI_2002444.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>Higher education, also called tertiary, third stage, or postsecondary education, is the non-compulsory educational level that follows the completion of a school such as a high school or secondary school. Tertiary education is normally taken to include undergraduate and postgraduate education, as well as vocational education and training. Colleges and universities mainly provide tertiary education. Collectively, these are sometimes known as tertiary institutions. Individuals who complete tertiary education generally receive certificates, diplomas, or academic degrees.
Higher education typically involves work towards a degree-level or foundation degree qualification. In most developed countries, a high proportion of the population (up to 50%) now enter higher education at some time in their lives. Higher education is therefore very important to national economies, both as a significant industry in its own right and as a source of trained and educated personnel for the rest of the economy.
</p>

 <p style="font-size: 22px; font-weight:bold;">Vocational:</p><br/>
					<center><img src="img/1024px-Distributed555.jpg" style="height: 350px;
            width: 630px;" /></center><br/>
					<p style="font-size: 16px;"
					>Vocational education is a form of education focused on direct and practical training for a specific trade or craft. Vocational education may come in the form of an apprenticeship or internship as well as institutions teaching courses such as carpentry, agriculture, engineering, medicine, architecture and the arts.
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
