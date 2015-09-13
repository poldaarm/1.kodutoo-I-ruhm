<?php 
    // user_form.php
    
    // jutumärkide vahele input elemendi NAME
    //echo $_POST["email"];
    //echo $_POST["password"];
    
    $email_error = "";
    $password_error = "";
    
    // kontrolli ainult siis kui kasutaja vajutab logi sisse nuppu
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        //Kontrollime kasutaja e-posti, et see ei ole tühi
        if(empty($_POST["email"])) {
            $email_error = "Ei saa olla tühi";
        }
        
        // Kontrollime parooli
        if(empty($_POST["password"])) {
            $password_error = "Ei saa olla tühi";
        } else {
            
            // parool ei ole tühi, kontrollime pikkust
            if(strlen($_POST["password"]) < 8 ){
                
                $password_error = "Peab olema vähemalt 8 sümbolit pikk";
                
            }
            
        }
 	//ega nimi ei ole tÃ¼hi
		if (empty($_POST["eesnimi"])) {
			$eesnimi_error = "Palun sisesta eesnimi";
		}       
   }
?>
<html>
	<head>
		<title>User login page</title>
	</head>
	<body>
	
		<h2>Sign up</h2>
		<form action="user_form.php" method="post">
			<input name="email" type= "email"  placeholder="E-post" >* <?php echo $email_error; ?> <br> <br>
			<input name="password" type= "password"  placeholder="Parool" >* <?php echo $password_error; ?> <br> <br>
		
			<input type="submit" value= "Logi sisse"> 
		</form>
		
		<h2>Loo kasutaja</h2>
		<form action="user_form.php" method="post">
			Sisesta e-posti aadres: <input name="email" type= "email"  placeholder="E-post" >* <?php echo $email_error; ?> <br> <br>
			Sisesta parool: <input name="password" type= "password"  placeholder="Parool" >* <?php echo $password_error; ?> <br> <br>
			
		<input type="submit" value= "Loo kasutaja"> 
		</form>
		
		<h4>Hetkel olen veel ideetu ja üritan alguses ratta veerema saada, aga üritan kiiresti ka mingi visiooni paika panna. :)</h4>
		
	
	</body>
</html>