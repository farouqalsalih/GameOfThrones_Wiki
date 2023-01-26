

<?php 
$customCSS ='<link rel="stylesheet" href="css/forms.css">';

include "inc/html-top.php";


?>

    <body>
    <div class = "container">
        <header>
            <h1>
                Game of Thrones
            </h1>
            <div>
                Contact Us page!
            </div>
        </header>
        
        <?php include "inc/nav.php";?>

        <form method="post" action="form-processor.php" class="full-width">
            <section>
                <fieldset>
                    <legend>Complete Survey</legend>
                    <h2>Personal info</h2>
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname"><br>
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname"><br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"><br>
                </fieldset>
            </section>
            <section>
                <h2>Favorite entertainment forms:</h2>
                <input type="checkbox" id="music" name="music" value="Music">
                <label for="music">Music</label>
                <br>
                <input type="checkbox" id="Anime" name="Anime" value="Anime">
                <label for="Anime">Anime</label>
                <br>
                <input type="checkbox" id="Movies" name="Movies" value="Movies">
                <label for="Movies">Movies</label>
                <br>
                <input type="checkbox" id="Live_Shows" name="Live_Shows" value="Live_Shows">
                <label for="Live_Shows">Live Action Shows</label>
            </section>
            <section>
                <h2>Favorite Genre:</h2>
                <input type="radio" id="comedy" name="rbutton" value="comedy">
                <label for="comedy">Comedy</label>
                <br>
                <input type="radio" id="Horror" name="rbutton" value="Horror">
                <label for="Horror">Horror</label>
                <br>
                <input type="radio" id="Action" name="rbutton" value="Action">
                <label for="Action">Action</label>
                <br>
                <input type="radio" id="Drama" name="rbutton" value="Drama">
                <label for="Drama">Drama</label>
            </section>
            <section>
                <br>
                <p><label for="discussion">Discuss Your Favorite Piece of Entertainment</label></p>
                <textarea id="discussion" name="discussion" rows="20" cols="50"></textarea>
                <br>
                <input type="submit" value="Submit Survey Info">
            </section>
        </form>
        
    </div>
    <?php include "inc/scripts.php";?>

    </body>
</html>