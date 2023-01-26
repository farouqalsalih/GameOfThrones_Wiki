<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "falsalih@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "falsalih@u.rochester.edu";
$subject = "Lab 13 - HTML Forms";

// the following lines of code will grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY; then create a variable on the left side that
//   makes sense for the data it will hold

// these are from the text INPUT fields...
$firstname = Trim(stripslashes($_POST['firstname'])); 
$lastname = Trim(stripslashes($_POST['lastname'])); 
$email = Trim(stripslashes($_POST['email'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$music = $_POST['music']; 
$anime = $_POST['Anime']; 
$movies = $_POST['Movies']; 
$liveshows = $_POST['Live_Shows']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$radio = $_POST['rbutton']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$textarea = Trim(stripslashes($_POST['discussion'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "First Name: \n"; //...a label
$body .= $firstname;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Last Name: \n"; //...a label
$body .= $lastname;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Email: \n"; //...a label
$body .= $email;	  //...a variable
$body .= "\n\n";			  //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "Favorite Entertainment: \n"; 	 	// a heading for your checkbox section

if (isset($music)) {		// a checkbox variable
	$body .= $music . "\n";	// the same checkbox variable
}
if (isset($anime)) {		// a checkbox variable
	$body .= $anime . "\n";	// the same checkbox variable
}
if (isset($movies)) {		// a checkbox variable
	$body .= $movies . "\n";	// the same checkbox variable
}
if (isset($liveshows)) {		// a checkbox variable
	$body .= $liveshows . "\n";	// the same checkbox variable
}
$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "Favorite Genre: \n";		// a heading for your radio button section
$body .= $radio;			// the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "Discussion: \n";		// a heading for your text area
$body .= $textarea;			// the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->

<?php include "inc/html-top.php";?>

    <body>
    <div class = "container">
        <header>
            <h1>
                Game of Thrones
            </h1>
            <div>
                Thank You for Submitting!
            </div>
        </header>
        
        <?php include "inc/nav.php";?>

        <main class="full-width">
            <h2>Thank You <?php echo $name; ?></h2>
            <p>Go back to <a href="index.php">the home page</a>.</p>
        </main>

    </div>
    </body>
</html>