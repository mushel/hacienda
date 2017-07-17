<?php $thisPage="Contact"; ?>
<?php include 'includes/header.php'; ?>
<div class="row">
	<div class="plain">
		<div class="six columns">
			<br>
			<h5>Drop us a message...</h5>
		
			<form id="demo-form" action="index.php" method="post" name="contactus">
		
				
				<label for="name">Name:</label> <input type="text" name="name" class="form-control"/>
				
				<label for="email">Email:</label> <input type="email" name="email" class="form-control" required=""/>
				
				<label for="comment">Message:</label><textarea name="comment" class="full-width"></textarea><br>
				
				
				<button type="submit" class="button" name="submit">Submit</button>
			</form>	
			
			
		</div>
		<div class="six columns">
			<?php
			//Send the email
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
				if(isset($_POST['submit'])){
				$to = "andrew@wearehacienda.com";
				$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
				$email = $_POST['email'];
				$comment = $_POST['comment'];
				$headers = 'From:info@wearehacienda.com' . "\r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 
				$subject = "We are Hacienda inquiry!";
			
			    $emailBody = "
					  <html>
					      <head>
					        <style>
					        </style>
					      </head>
					      <body>
					        <h1>Hacienda Inquiry</h1>
					        <h3>From:".$name."<h3>
					        <h3>Email:".$email."</h3>
					        <p>Message:".$comment."</p>
					      </body>
					  </html>";
			//mail($to, $subject, $emailBody, $headers);
			//mail('mushel@gmail.com', "New message from $name" , "$email and $name number is $phone. This is what they had to say in the comments: $comment" , "$headers" );



		//if(empty($name) || empty($email) || empty($message)) {
		//	echo "<h1>You did not fill out anything yet</h1>";
		//}
		
		if(mail($to, $subject, $emailBody, $headers)){
		  echo " ";
		}
		else{
		  echo "<h3>Sorry, something went wrong.</h3>";
		}
		}
		
		?>
		</div>
	</div>
</div>	
<?php include 'includes/footer.php'; ?>