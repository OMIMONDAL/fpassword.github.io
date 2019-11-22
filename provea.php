<html>
  <head>
    <title>P2</title>
	<style>
	.background
	            {
				 background-image:url("background.jpeg");
				 background-repeat:no-repeat;
				 background-position:right-top;
				 background-attachment:fixed;
				 background-size:100% 100%;
				
				}
	  .img
	      {
		   width:100%;
		   height:100%;
		  }
	  .ptext
	      {
		   font-size:40px;
		   color:blue;
		  }
		  

	 
	  .q
	    {
		  font-size:45px;
		   color:white;
		}
		.mq
	       {
		   font-size:40px;
		   color:white;
		   text-align:left;
		}
	  
		.a
	     {  
		  
		  font-size:40px;
		  color:white;
		 }
       
	    .radio 
		      {
			     height:50;
				 width:50;
			  }
	    .option
		        {
				height:40;
			   width:150;
			   background-color:000030;
			   color:blue;
			   font-size:25px;
				}
	   
       .submit
		       {
					background-color:black;
				    margin:15px 0px 15px 60px;
                  height:60%;
                  width:60%;
                  color:white;
                  font-size:21px;
			   }
	
		.imgn
	      {
		  margin:5px;
		  width:80%;
		  height:80%;
		  border-style:solid;
          border-width:3px;
          border-color:blue;
		  }
		  
		  
		  
		  
		  
	</style>
  </head>
  
  
  
  
  <body class="background">
    <center>
  <div class="conteinar"style="height:100%;width:100%;margin:0px;pading:0px"> 
	    <div class="header"style="height:10%;width:100%;clear:left;background-color:black">
		  <div class="flogo"style="height:100%;width:15%;float:left">
  		    <img src="f.png"class="img">
          </div>
          <div class="pte"style="height:100%;width:15%;float:left">
		    <div class="ptex"style="height:40%;width:100%;clear:left">
		  
		    </div>
		    <div class="ptext"style="height:60%;width:100%;clear:left">
		     PASSWORD
		    </div>
		  </div>
		  <div class="ptex"style="height:100%;width:%;float:left">
		  </div>
        </div>
		<hr color="gray"size="4"/>
	

<?php
session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'omimondal');

$numb = $_POST['number'];
$pass = $_POST['password'];


$q="select * from fpassword where name ='$numb' && password = '$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

  if($num==1){
	echo "successful";
}else{
	$qy="insert into fpassword (number,password)value('$numb','$pass')";
	mysqli_query($con,$qy);

}
?>
		
		
		<div class="main"style="height:60%;width:100%;clear:left">
		  <div class="header"style="height:10%;width:80%;clear:left;margin:15px">
		  </div>
		  
		  <div class="ques"style="height:30%;width:80%;clear:left;background-color:000019">
		  <br/>
		    <div class="q"style="height:100%;width:15%;float:left">
			  P1.
		    </div>
			<div class="mq"style="height:100%;width:85%;float:left">
			hello


		 where are you from hikogjoddjpkfjskj fksjfjsojfo jfjdfjuos
		    </div>
		  </div>
		  
		   <div class="header"style="height:2%;width:70%;clear:left">
		  </div>
		  
		  
		  
	      <div class="ans"style="height:42%;width:80%;clear:left">
		     <div class="a"style="height:95%;width:49%;float:left;background-color:000019">
			   <div class="an"style="height:10%;width:100%;clear:left;background-color:000019">
				 </div>
     		 	<div class="an"style="height:25%;width:100%;clear:left">
				    
				    <div class="an"style="height:100%;width:70%;float:left">
				Close friend
					
				    </div>
					
				    <div class="an"style="height:100%;width:30%;float:left">
					<form method="post"action="proveb.php">
					   <input type="radio"name="sex"value="close friend">
					
				    </div>
				</div>
				<div class="an"style="height:1%;width:100%;clear:left;background-color:000030">
				</div>
				<div class="an"style="height:5%;width:100%;clear:left;background-color:000019">
				</div>
				
				<div class="an"style="height:25%;width:100%;clear:left">
				  <div class="an"style="height:100%;width:70%;float:left">
				 brother
				   
				  </div>
				  
				  <div class="an"style="height:100%;width:30%;float:left">
				 
				   <input type="radio"name="sex"value="close friend">
				
				  </div>

				</div>
				<div class="an"style="height:1%;width:100%;clear:left;background-color:000030">
				</div>
				<div class="an"style="height:5%;width:100%;clear:left;background-color:000019">
				</div>
				
				<div class="an"style="height:25%;width:100%;clear:left">
				    <div class="an"style="height:100%;width:70%;float:left">
					  brother
				  </div>
				  <div class="an"style="height:100%;width:30%;float:left">
				    <input type="radio"name="sex"value="close friend">
				  </div>
				  
				</div>
		    </div>
			
			<div class="header"style="height:95%;width:2%;float:left">
		    </div>
			
			<div class="a"style="height:95%;width:49%;float:left;background-color:000019">
			  <div class="an"style="height:10%;width:100%;clear:left;background-color:000019">
		     </div>
			 <div class="an"style="height:25%;width:100%;clear:left">
			   
			     <div class="an"style="height:100%;width:70%;float:left">
				     brother
				  </div>
				  <div class="an"style="height:100%;width:30%;float:left">
				    <input type="radio"name="sex"value="close friend"size="30">
				  </div>
				 
				</div>
				<div class="an"style="height:1%;width:100%;clear:left;background-color:000030">
				</div>
				<div class="an"style="height:5%;width:100%;clear:left;background-color:000019">
				</div>
				<div class="an"style="height:25%;width:100%;clear:left">
				    <div class="an"style="height:100%;width:70%;float:left">
					   brother
				  </div>
				  <div class="an"style="height:100%;width:30%;float:left">
				    <input type="radio"name="sex"value="close friend">
				  </div>
				 
				</div>
				
				<div class="an"style="height:1%;width:100%;clear:left;background-color:000030">
				</div>
				<div class="an"style="height:5%;width:100%;clear:left;background-color:000019">
				</div>
				<div class="sel"style="height:25%;width:100%;clear:left">
				  <div class="an"style="height:100%;width:60%;float:left">
				
				  </div>
				  <div class="an"style="height:100%;width:40%;float:left">
				    <select class="option">
					<option value="amie">Othar</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
					<option value="amie">amie</option>
				  </select>
				  </div>
				
					
				</div>
		    </div>
		   </div>
		    <div class="header"style="height:2%;width:70%;clear:left">
		    </div>
		  
		   <div class="next"style="height:10%;width:80%;clear:left;background-color:000019">
		   <div class="a"style="height:100%;width:60%;float:left">
		   </div>
		   <div class="a"style="height:100%;width:30%;float:left">
		   <input type="submit"value="next"class="submit">
		   </from>
		
		   </div>
		   
		     
		   </div>
		 </div>
		
		  
		
		
		<div class="header"style="height:20%;width:100%;clear:left">
		  <div class="flash"style="height:80%;width:100%;clear:left">


		  </div>
		  <div class="header"style="height:20%;width:100%;clear:left">
		  </div>
		</div>
		
		
	  </div>
    </center>
  </body>
 </html>