<!DOCTYPE html>
<html>
	<base target="_blank">
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	<meta http-equiv="refresh" content="3600">
	<title>Book</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@500&display=swap" rel="stylesheet">
	
	<style type="text/css">
	/*for page*/
	.bg{
		background-image: url("bg.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}

	/*description boxes*/
	.transbox{
		background-color: lightgrey;
		width: 300px;
		border: 3px solid brown;
		padding: 10px;
		margin: 25px;
		position: relative;
		border-radius: 15px;
		text-align: center;
		display: inline-block;
	}

	/*for navbar*/
	.bg-img {
		    background-image: url("header-bg-2.png");
			min-height: 120px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		  	position: relative;
	}

	.container {
		  position: absolute;
		  margin: 20px;
		  width: auto;
	}

	.topnav {
		  overflow: hidden;
		  background-color: #333;
	}

	.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
	}

	.topnav a:hover {
		  background-color: #ddd;
		  color: black;
	}

	h1{
		color:black;
		font-size: 53px;
		text-align: center;
		background-color: #EECECD;
	}

	input[type=text]:focus {
  		background-color: lightblue;
  	}

  	table {
  		margin-left: auto;
  		margin-right: auto;
  		font-size: 20px;
  		border-spacing:0 15px;
  		width:150px;
  		padding: 5px;
	}

	span{
		background-color: #DCEAD5;
		float: right;
		font-size: 20px;
		width:150px;
		padding: 5px;
	}
</style>

<script type="text/javascript">
	/*phone validation*/
	function phonenumber(phone)
		{
		  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
		  if((phone.value.match(phoneno))
		        {
		      return true;
		        }
		      else
		        {
		        alert("Please  enter valid number.");
		        return false;
		        }
		}

	/*email validation*/	 
	function ValidateEmail(email) 
		{
		 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
		  {
		    return (true)
		  }
		    alert("You have entered an invalid email address!")
		    return (false)
		}

</script>
</head>

<body>
<div class="bg">
 <div class="bg-img">
  <div class="container">
    <div class="topnav">
    	<a href="#Home">Home</a>
    	<a href="About.php">About</a>
    	<a href="Book.php">Book</a>
		<a href="#Travel">Travel</a>
		<a href="#Package">Package</a>
    </div>
  </div>
 </div>

<section class="booking">

   <h1>Book your trip!</h1>

   <form action="bookForm.php" method="post" name= "myform">
   		<table>
   			<tr>
            	<td><span>Name :</span></td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td><input type="text" placeholder="enter your name" name="name"style="padding: 7px; width:200px"></td>
            	
            </tr>
        	<tr>&nbsp;</tr>

        	<tr>
	            <td><span>Email :</span></td>
	            <td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
	            <td><input type="text" placeholder="enter your email" name="email"style="padding: 7px;width:200px"></td>
	            
	        </tr>
            <tr>&nbsp;</tr>

         	<tr>
	            <td><span>Phone :</span></td>
	            <td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
	            <td><input type="text" placeholder="enter your number" name="phone"style="padding: 7px;"></td>
	            
	        </tr>
            <tr>&nbsp;</tr>        

        	<tr>
	            <td><span>Address :</span></td>
	            <td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
	            <td><input type="text" placeholder="enter your address" name="address"style="padding: 7px;width:200px"></td>
	            
	        </tr>
			<tr>&nbsp;</tr>

         	<tr>
	            <td><span>Where to :</span></td>
	            <td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
	            <td><input type="text" placeholder="place you want to visit" name="location" style="padding: 7px;"></td>
	            
	            
         	</tr>
         	<tr>&nbsp;</tr>

         	<tr>
	            <td><span>How many :</span></td>
	            <td>&nbsp;</td>
            	<td>&nbsp;</td><td>&nbsp;</td>
            	<td>&nbsp;</td>
	            <td><input type="number" placeholder="number of guests" name="guests"style="padding: 7px;"></td>
	            
	        </tr>
	        <tr>&nbsp;</tr>

         	<tr>
	            <td><span>Arrivals :</span></td>
	            <td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
	            <td><input type="date" name="arrivals" style="padding: 7px;"></td>
	            
         	</tr>
         	<tr>&nbsp;</tr>

         	<tr>
	            <td><span>Leaving :</span></td>
	            <td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
            	<td>&nbsp;</td>
	            <td><input type="date" name="leaving"style="padding: 7px;"></td>

         	</tr>
         	<tr>&nbsp;</tr>

         	<tr>
         		<td><input type="submit" name="Submit" style="background-color: #9DC384;padding: 8px;border-radius: 5px; width: 65px;">href= "file:///F:/Project/html-templeate-main/html-templeate-main/TRAVEL%20SL%20DOCS/Book/bookForm.php"</td>
         		<collaspan 4>
         		<td><input type="reset" name="Cancel" style="background-color: #BB271A;padding: 8px; border-radius: 5px;width:65px;"></td>
         	</tr>
    	</table>
    </form>
</section>
</body>
</html>

