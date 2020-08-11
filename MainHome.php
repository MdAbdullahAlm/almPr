
<style>
* {
     margin: 0px;
     padding: 0px;
 }
 
 #MainDivHeader {
     /*background-color: #898cca;*/
     width: auto;
     height: auto;
	
padding: 0 0 0 35px ;
     
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




<div id="MainDivHeader">
            <div id="HeaderLogo">
                <div id="LogoWork" style=" float: left;">
                    <img src="img/LOGO.png" style="float: left; height: 100px;
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
                    
                    <div id="login" style="margin: 10px; float: right;"> <a href="Login.php" 
					class="btno" style="float: left; margin: 0px 10px">Login</a>
                        <a href="reg.php" class="btno" style="float: left; margin: 0px 10px">Register</a>
                    </div>
                </div>
            </div>
			</div>
            <div id="HeaderMenu">
                <ul>

                    <li style="border-radius:10px 0px 0px  10px;">
                 <a href="Home.php" style="border-radius:10px 0px 0px  10px;">Home</a>
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

		