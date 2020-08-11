<html>
<head>
<title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href=""> 
<style>

#MainDiv {
     /*background-color: #898cca;*/
     width: auto;
     height: auto;
     padding: 0px 0px 0px 0px;
 }
#FirstDiv{
	 width: auto;
     height: 165px;
}
#SecondDiv {
	width: auto;
     height: auto;
	 align: center;
	  float: center;
	  padding: 30px 300px;
}
body{
	
	
	
}
* {
     margin: 0px;
     padding: 0px;
 }
 
 #MainDivHeader {
     /*background-color: #898cca;*/
     width: auto;
     height: auto;
	
padding: 0 0px 0 35px ;
     
 }
 
 #MainHeader {
     /* background-color: yellow;*/
     width: auto;
     height: 165px;
 }
 
 #HeaderLogo {
     /*background-color: yellow;*/
     
     height: 110px;
 }
 
 #LogoWork {
     /*background-color: black;*/
     width: 600px;
     height: 110px;
     float: left;
	 
 }
 
 #LogoSideWork {
     /* background-color: saddlebrown;*/
     width: 600px;
     height: 110px;
     float: left;
 }
 
 #HeaderMenu {
     /* background-color: red;*/
     width: auto;
     height: 40px;
	 
	
     /* background-color: #202c45;*/
 }
 
 #HeaderMenu ul {
     list-style: none;
     /*padding: 10px;
margin: 10px;*/
 }
 
 #HeaderMenu ul li {
     background: #202c50;
     height: 40px;
     width: 150px;
     border: 1px solid #584c4c;
     text-align: center;
     line-height: 40px;
     float: left;
     position: relative;
	
 }
 
 #HeaderMenu ul li a {
     text-decoration: none;
     font-size: 20px;
     color: #fff;
     font-weight: bold;
     display: block;
 }
 
 #HeaderMenu ul li a:hover {
     color: white;
     background: #f2184f;
 }
 
 #HeaderMenu ul ul {
     position: absolute;
     display: none;
 }
 
 #HeaderMenu ul li:hover >ul {
     display: block;
 }
 
 #HeaderMenu ul ul ul {
     left: 100%;
     top: 0;
 }
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
			width: 250px;
			float:left;
        }
        
        .btno {
		     top: 4px;
            font-family: arial;
            text-transform: uppercase;
            width: 90px;
            height: 23px;
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
		
		
td {
	padding:10px;
}
input{
	width: 500px;
}
textarea{
	width: 500px;
}

</style>
</head>
		
<body align="center">
<div id="MainHeader" style="height: 155px;">
            <div id="HeaderLogo" >
                <div id="LogoWork">
                    <img src="img/LOGO.png" style="height: 100px;
            width: 260px;" />
                </div>
               <div id="LogoSideWork" style="width: 600px; height: 110px;float: left;">
                   <h1 style="margin:15px;"> <form>
                        <div class="input-group" style="  margin: 10px; float: left;">
                            <div class="searchBox" style=" padding-top: 1px; float: left;">
							<input type="text" class="form-control" placeholder="Search" name="search" style="width: 200px; ">
                              </div>
						   <div class="input-group-btn" style=" float: left; margin: 0px 4px;">
                                <button class="btn btn-default" type="submit" style="height: 30px; 
								    width: 40px; background-color: lightblue;">
                                    
									<i class="glyphicon glyphicon-search"><img src="img/Search24.png" /></i>
                                    
								</button>
                            </div>
                        </div>
                    </form></h1>
                    <div id="login" style="margin: 10px; float: right;"> 
					      <a href="Post.php" class="btno" style="float: left; background-color:red;
						     margin: 0px 10px">Post</a>
					<a href="logout.php" 
					class="btno" style="float: left; margin: 0px 10px">Log Out</a>

                    </div>
                
                </div>
                </div>
                
                
                
            
            <div id="HeaderMenu" style=" padding: 0px 0px 0px 35px; height: 40px;">
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
	<div id="SecondDiv">
     	 
        











<div id="M_B_Header">

<div id="M_B_Header_one" style="">
		<!--<center><img src="img/BangladeshPic.jpg" style="height: 100px;
            width: 400px; " /></center></div>-->
			<div id="M_B_Header_two" style="">
			<Form action="BPAction.php" method="post" enctype="multipart/form-data">
			<center><div id="Post_Hover">
	
       <!-- <div class="post_Box"><Pre>    <img src="postPic.png" style="width:650px; height:60px;"/></pre></div> -->
       
			<div class="bt1"> 
			
			<table  style="  width: 600px; ">
			<tr><td style="padding:10px;">CatagoryName:</td>
			<td style="padding:10px;">
			    <select name="CatagoryName" style="width:500px; height:35px; ">
				    
					<option>Technology</option>
					<option>Computer</option>
					<option>Electronics</option>
					<option>Science</option>
					<option>Geography</option>
					<option>Planet</option>
					<option>Earth</option>
					<option>Evolution</option>
					<option>Tourist Place</option>
					<option>Bangladesh</option>
					<option>India</option>
					<option>Education</option>
					<option>Education System</option>
					<option>UNESCO</option>
					<option>Heart Country</option>
					<option>Sports</option>
					<option>Cricket</option>
					<option>Football</option>
					
			    </select>
				</td>
			</tr>
			<tr>
			<td>
		<label>Date of birth:</label><br></td>
			<td><input type="date" name="Date" style=" height:28px; "></td>
		</tr>
			<tr>
			<td>Title:</td>
			<td><input type="text" name="Post_Title" style=" height:50px;" ></td>
		</tr>
		<tr>
			<td>Discription</td>
			<td><textarea name="Post_Discription" style=" height:200px; " ></textarea></td>
		</tr>
		<td>Image/Video</td>
			<td><input type="file" name="Post_file"  ></td>
		</tr>
		
			<tr><td></td><td>
			<input type="submit" name="sbt" value="Post" style="float: right; height: 25px; width: 50px;"></td></tr>
</table>
			</div>
</div></center>
            </Form> 
		</div></div>

</div>



</body>
</html>
