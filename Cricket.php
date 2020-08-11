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
		      <center><img src="img/cricket.png" style="height: 100px;
            width: 400px; " /></center>
			
			
			
		<?php 

include('Connection.php');
mysql_select_db("ALM",$con);
$result="SELECT* FROM BanPost WHERE CatagoryName='Cricket'";
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
		
		
		
		
		                   
                           <h1 style="font-size: 30px; font-weight:bold; text-align: center;"> Bangladesh </h1>
						   
						   
						   
						   
                    
					<p Style="font-size:13px; font-weight:bold; color:blue;">11 may 2018</p>
					<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>History of cricket:</p>
					<center><img src="img/1st cricket match.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>First Grand Match of Cricket Played by Members of the Royal Amateur Society on Hampton Court Green
The sport of cricket has a known history beginning in the late 16th century. Having originated in south-east England, it became the country's national sport in the 18th century and has developed globally in the 19th and 20th centuries. International matches have been played since 1844 and Test cricket began, retrospectively recognised, in 1877. Cricket is the world's second most popular spectator sport after association football. Governance is by the International Cricket Council (ICC) which has over one hundred countries and territories in membership although only twelve play Test cricket.

</p>

<p Style="font-size:13px; font-weight:bold; color:blue;">16 may 2018</p>

<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Bangladesh History:</p>
					<center><img src="img/Bangldeshi cricketers.jpg" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Cricket has been played in India since the 18th century and it continued to be played in first Pakistan and then Bangladesh as these countries became politically independent.
Bangladesh had staged first-class and even Test cricket when it was part of Pakistan. The Bangabandhu National Stadium in Dhaka was first used for Test cricket when Pakistan played India there in January 1955. It was used for numerous important matches, including Tests, right up to the declaration of independence in 1971. 
Bangladeshi international cricket began in 1976/77 when the Marylebone Cricket Club (MCC) came to play against the Bangladesh national side. MCC played their first match against a regional team in Rajshahi with the match ending in a draw. The first unofficial Test against the MCC was played at Dhaka on 4 January 1977.
The Bangladesh national team then went on to play against teams like Sri Lanka, Deccan Blues and MCC in the later years. The first ICC trophy tournament in England was represented by Bangladesh in 1979 and also in 1982 when Bangladesh went on to play in the semi-final. Bangladesh went on to win the ICC tournament in 1997.
The national team played England A in Chittagong on 25–27 October 1999. The match was drawn. On 10–13 November 2000, Bangladesh played its inaugural Test Match v India in the Bangabandhu National Stadium.

</p>

<p Style="font-size:13px; font-weight:bold; color:blue;">14 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>One Day International (ODI)</p>
					<center><img src="img/criOdi.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					> A One Day International (ODI) is a form of limited overs cricket, played between two teams with international status, in which each team faces a fixed number of overs, usually 50. The Cricket World Cup is played in this format. One Day International matches are also called Limited Overs Internationals (LOI), although this generic term may also refer to Twenty20 International matches. They are major matches and considered the highest standard of List A, limited overs competition.
The international one-day game is a late-twentieth-century development. The first ODI was played on 5 January 1971 between Australia and England at the Melbourne Cricket Ground. When the first three days of the third Test were washed out officials decided to abandon the match and, instead, play a one-off one-day game consisting of 40 eight-ball overs per side. Australia won the game by 5 wickets. ODIs were played in white kits with a red ball.[1]
In the late 1970s, Kerry Packer established the rival World Series Cricket competition, and it introduced many of the features of One Day International cricket that are now commonplace, including coloured uniforms, matches played at night under floodlights with a white ball and dark sight screens, and, for television broadcasts, multiple camera angles, effects microphones to capture sounds from the players on the pitch, and on-screen graphics. The first of the matches with coloured uniforms was the WSC Australians in wattle gold versus WSC West Indians in coral pink, played at VFL Park in Melbourne on 17 January 1979. This led not only to Packer's Channel 9 getting the TV rights to cricket in Australia but also led to players worldwide being paid to play, and becoming international professionals, no longer needing jobs outside cricket. Matches played with coloured kits and a white ball became more commonplace over time, and the use of white flannels and a red ball in ODIs was finally abandoned in 2001.


</p>


<p Style="font-size:13px; font-weight:bold; color:blue;">13 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>test cricket </p>
					<center><img src="img/criTest.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					> test cricket is the longest form of the sport of cricket and is considered its highest standard. Test matches are played between national representative teams with "Test status", as determined and conferred by the International Cricket Council (ICC). The two teams of 11 players play a four-innings match, which may last up to five days (or longer in some historical cases). It is generally considered the most complete examination of teams' playing ability and endurance. The name Test stems from the long, gruelling match being both mentally and physically testing.

</p>


<p Style="font-size:13px; font-weight:bold; color:blue;">10 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Twenty20 cricket</p>
					<center><img src="img/criT20.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Twenty20 cricket, sometimes written Twenty-20, and often abbreviated to T20, is a short form of cricket. At the professional level, it was originally introduced by the England and Wales Cricket Board (ECB) in 2003 for the inter-county competition in England and Wales. In a Twenty20 game the two teams have a single inningseach, which is restricted to a maximum of 20 overs. Together with first-class and List A cricket, Twenty20 is one of the three current forms of cricket recognised by the International Cricket Council (ICC) as being at the highest international or domestic level. A typical Twenty20 game is completed in about three hours, with each innings lasting around 90 minutes and an official 10 minute break between the innings. This is much shorter than previously-existing forms of the game, and is closer to the timespan of other popular team sports. It was introduced to create a fast-paced form of the game which would be attractive to spectators at the ground and viewers on television.
 
</p>

<p Style="font-size:13px; font-weight:bold; color:blue;">10 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>International Cricket Council </p>
					<center><img src="img/criicc.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					> The International Cricket Council (ICC) is the international governing body of cricket. It was founded as the Imperial Cricket Conference in 1909 by representatives from England, Australia and South Africa, renamed the International Cricket Conference in 1965, and took up its current name in 1989.
The ICC has 104 members: 12 Full Members that play Test matches and 92 Associate Members.] The ICC is responsible for the organisation and governance of cricket's major international tournaments, most notably the Cricket World Cup. It also appoints the umpires and referees that officiate at all sanctioned Test matches, One Day International and Twenty20 Internationals. It promulgates the ICC Code of Conduct, which sets professional standards of discipline for international cricket, and also co-ordinates action against corruption and match-fixing through its Anti-Corruption and Security Unit (ACSU). The ICC does not control bilateral fixtures between member countries (which include all Test matches), it does not govern domestic cricket in member countries, and it does not make the laws of the game, which remain under the control of the Marylebone Cricket Club.
The Chairman heads the board of directors and on 26 June 2014, N.Srinivasan, the former president of BCCI, was announced as the first chairman of the council. The role of ICC president has become a largely honorary position since the establishment of the chairman role and other changes were made to the ICC constitution in 2014. It has been claimed that the 2014 changes have handed control to the so-called 'Big Three' nations of England, India and Australia. The current ICC president is Zaheer Abbas,  who was appointed in June 2015 following the resignation of Mustafa Kamal in April 2015. Kamal, the former president of the Bangladesh Cricket Board, resigned shortly after the 2015 World Cup, claiming the organisation operated both unconstitutionally and unlawfully. The current CEO is David Richardson, who succeeded Haroon Lorgat.


</p>

<p Style="font-size:13px; font-weight:bold; color:blue;">8 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Cricket Rules</p>
					<center><img src="img/rules.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					> Welcome to the greatest game of all – Cricket. This site will help explain to an absolute beginner some of the basic rules of cricket.
Although there are many more rules in cricket than in many other sports, it is well worth your time learning them as it is a most rewarding sport.
Whether you are looking to play in the backyard with a mate or join a club Cricket-Rules will help you learn the basics and begin to enjoy one of the most popular sports in the world.
The game is ever popular, with many fans attending to watch their local and national teams, the craze is always growing. With a number of big tournaments like The Ashes, IPL League and the granddaddy of them all, the ICC World Cup Cricket 2019! The game of cricket is highly popular, and the number of cricket betting fans who place bets on their national and local teams is also growing.
Cricket is a game played with a bat and ball on a large field, known as a ground, between two teams of 11 players each.
The object of the game is to score runs when at bat and to put out, or dismiss, the opposing batsmen when in the field. The cricket rules displayed on this page here are for the traditional form of cricket which is called “Test Cricket”.
However there are other formats of the game eg. 50 over matches, Twenty20 Cricket etc where the rules differ slightly.

</p>


<p Style="font-size:13px; font-weight:bold; color:blue;">2 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Player: Official Cricket Rules</p>
					<center><img src="img/player.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Cricket is a game played between two teams made up of eleven players each. There is also a reserve player called a “twelfth man” who is used should a player be injured during play.
The twelfth man is not allowed to bowl, bat, wicket keep or captain the team. His sole duty is to act as a substitute fielder.
The original player is free to return to the game as soon as they have recovered from their injury.
To apply the law and make sure the cricket rules are upheld throughout the game there are two umpires in place during games. Umpires are responsible for making decisions and notifying the scorers of these decisions.
Two umpires are in place on the playing field while there is also a third umpire off the field who is in charge of video decisions.
This is where the call is too close for the on field umpires and they refer it to the third umpire who reviews slow motion video replays to make a decision.

</p>


<p Style="font-size:13px; font-weight:bold; color:blue;">1 may 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Game Structure</p>
					<center><img src="img/Structure.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>Test cricket is a game that spans over two innings. This means that one team needs to bowl the other team out twice and score more runs then them to win the match. Another key difference between test cricket and other forms of cricket is the length of the innings. In test cricket there is no limit to the innings length. Whereas in one day cricket & Twenty20 cricket there are a certain amount of overs per innings. The only limits in test cricket is a 5 day length. Before the game begins an official will toss a coin. The captain who guesses the correct side of the coin will then choose if they want to bat or field first. One team will then bat while the other will bowl & field. The aim of the batting team is to score runs while the aim of the fielding team is to bowl ten people out and close the batting teams’ innings. Although there are eleven people in each team only ten people need to be bowled out as you cannot have one person batting alone. Batting is done in pairs.
Once the first team has been bowled out the second team would then go into bat. Once the second team is then bowled out it would normally return to the first team batting again. However there is an exception to this in the cricket rules, it is called the follow-on. The follow-on is when the first team makes at least 200 runs more than the second team made (in a 5 day test match). This then gives the first team the option to make the second team bat again. This is particularly useful if the game is progressing slowly or affected by bad weather and there might not be enough time for both teams to play a full innings. Should this be the case the batting team’s captain also has the right to forfeit their innings at any time. This is called a declaration. Some may wonder why a captain would forfeit the opportunity for his team to bat. However if the game is coming close to a close and it looks like they will not be able to bowl the other team out again this could be an option. If one team is not bowled out twice and a winner determined in the five days of play the game is declared a draw. Therefore it may be worth declaring an innings to creat the possibility of a win rather than a draw.

</p>


<p Style="font-size:13px; font-weight:bold; color:blue;">11 April 2018</p>
<p style="font-size: 27px; font-weight:bold;font-family:Arial Black;"
					>Ways to score runs</p>
					<center><img src="img/runs.PNG" style="height: 350px;
            width: 630px;" /></center></br>
					<p style="font-size: 16px;"
					>The aim of the batsmen is to score runs. One of the main cricket rules is that for batsmen to score runs they must run to each other’s end of the pitch (from one end to the other). In doing this one run is scored. Cricket rules state they may run multiple runs per shot. As well as running they can also score runs by hitting boundaries. A boundary scores the batsmen either 4 or 6 runs. A four is scored by hitting the ball past the boundary after hitting the ground while a six is scored by hitting the ball past the boundary on the full (before it hits the ground). Cricket rules also state that once a 4 or 6 has been scored any runs physically ran by the batsman are null & void. They will only obtain the 4 or 6 runs.
Other ways runs can be scored according to the cricket rules include no balls, wide balls, byes & leg byes. Cricket rules state that all runs scored by these methods are awarded to the batting team but not the individual batters.
</br>•	A “No Ball” can be declared for many reasons: If the bowler bowls the ball from the wrong place, the ball is declared dangerous (often happens when bowled at the batsmen’s body on the full), bounces more than twice or rolls before reaching the batsman or if fielders are standing in illegal positions. The batsman can hit a no ball and score runs off it but cannot be out from a no ball except if they are ran out, hit the ball twice, handle the ball or obstruct the field. The batsman gains any runs scored off the no ball for his shot while the team also gains one run for the no ball itself.
</br>•	A “Wide Ball” will be declared if the umpire thinks the batsman did not have a reasonable opportunity to score off the delivery. However if the delivery is bowled over the batsmen’s head it will not be declared a wide but a no ball. Umpires are much stricter on wide deliveries in the shorter format of the game while being much more relaxed in test cricket. A wide delivery will add one run to the batting team and any runs scored by the batsman. The batsman is not able to get out off a wide delivery except if they are stumped, run out, handle the ball, hit their wicket or obstruct the field.
</br>•	A “Bye” is where a ball that isn’t a no ball or wide passes the striking batsman and runs are scored without the batsman hitting the ball.
</br>•	A “Leg Bye” is where runs are scored by hitting the batsman, but not the bat and the ball is not a no ball or wide. However no runs can be scored if the striking batsman didn’t attempt to play a shot or if he was avoiding the ball.
Ways Batsmen can be given out according to cricket rules
There are a number of different ways a batsman can be given out in the game of cricket. When a bowler gets a batsman out it is said that the bowler gets a “wicket”. Following are the different ways a batsman can be given out according to the rules of cricket:
</br>•	Bowled – Cricket rules state that if the ball is bowled and hits the striking batsman’s wickets the batsman is given out (as long as at least one bail is removed by the ball). It does not matter whether the ball has touched the batsman’s bat, gloves, body or any other part of the batsman. However the ball is not allowed to have touched another player or umpire before hitting the wickets.
</br>•	Caught – Cricket rules state that if a batsman hits the ball or touches the ball at all with his bat or hand/glove holding the bat then the batsman can be caught out. This is done by the fielders, wicket keeper or bowler catching the ball on the full (before it bounces). If this is done then cricket rules state the batsman is out.
</br>•	Leg Before Wicket (LBW) – If the ball is bowled and it hits the batsman first without the bat hitting it then an LBW decision is possible. However for the umpire to give this out he must first look at some of the factors stated in the cricket rules. The first thing the umpire need to decide is would the ball have hit the wickets if the batsman was not there. If his answer to this is yes and the ball was not pitched on the leg side of the wicket he can safely give the batsman out. However if the ball hits the batsman outside the line of off stump while he was attempting to play a stroke then he is not out.
</br>•	Stumped – A batsman can be given out according to cricket rules when the wicketkeeper puts down his wicket while he is out of his crease and not attempting a run (if he is attempting a run it would be a runout).
</br>•	Run Out – Cricket rules state that a batsman is out if no part of his bat or body is grounded behind the popping crease while the ball is in play and the wicket is fairly put down by the fielding side.
</br>•	Hit Wicket – Cricket rules specify that if a batsman hits his wicket down with his bat or body after the bowler has entered his delivery stried and the ball is in play then he is out. The striking batsman is also out if he hits his wicket down while setting off for his first run.
</br>•	Handled The Ball – Cricket rules allow the batsman to be given out if he willingly handles the ball with the hand that is not touching the bat without the consent of the opposition.
</br>•	Timed Out – An incoming batsman must be ready to face a ball or be at the non strikers end with his partner within three minutes of the outgoing batsman being dismissed. If this is not done the incoming batsman can be given out.
</br>•	Hit The Ball Twice – Cricket rules state that if a batsman hits a ball twice other than for the purpose of protecting his wicket or with consent from the opposition he is out.
</br>•	Obstructing The Field – A batsman is out if he willingly obstructs the opposition by word or action
There are many other cricket rules. However these are most of the basics and will get you well on your way to playing the game. Many of the more advanced rules & laws can be learned along the way and are not vital to general play.

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
