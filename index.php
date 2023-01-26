

<?php 
$customCSS ='<link rel="stylesheet" href="sss/sss.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="css/home.css">';

include "inc/html-top.php";
?>    
    <body>
    <div class = "container">
        <header>
            <h1>
                Game of Thrones
            </h1>
            <div>
                History, Story, and Analysis Explained
            </div>
        </header>

        <?php include "inc/nav.php";?>

        <section class="lead inner-container">
            <h2 class="full-width">Welcome to The World of Game of Thrones</h2> 
            <div class="slider">
                <img src="images/jonsnow.png" alt="An image of Jon Snow">
                <img src="images/tyrion.png" alt="An image of Tyrion Lannister">
            </div>
            
            <div id="accordion">
                <h3>
                    Plot
                </h3>
                <p class="firstLetter">
                    <strong>Game of Thrones</strong> is roughly based on the storylines of the <em>A Song of Ice and Fire</em> book series by George R. R. Martin, set in the fictional Seven Kingdoms of Westeros and the continent of Essos.[5][6] The series follows several simultaneous plot lines.[7] The first story arc follows a war of succession among competing claimants for control of the Iron Throne of the Seven Kingdoms, with other noble families fighting for independence from the throne. The second concerns the exiled scion's actions to reclaim the throne; the third chronicles the threat of the impending winter, as well as the legendary creatures and fierce peoples of the North.[8]
                </p>

                <h3>
                    Themes
                </h3>
                <p class="firstLetter">
                    <span id="content">The series has been praised by both television critics and historians for what was perceived as a sort of medieval realism.[16][17][18] George R.R. Martin set out to make the story feel more like historical fiction than contemporary fantasy, with less emphasis on magic and sorcery and more on battles, political intrigue, and the characters, believing that magic should be used moderately in the epic fantasy genre.[19][20][21] Martin has said that, "the true horrors of human history derive not from orcs and Dark Lords, but from ourselves".[22] Academics have classified the series as neo-medieval which focuses on the overlapping of medieval history and popular fantasy.[23][24][25] A common theme in the fantasy genre is the battle between good and evil, which Martin says does not mirror the real world.[26] Martin explores the relationship between good and evil through the questions of redemption and character change.[27] The series allows the audience to view different characters from their perspective, unlike in many other fantasies.[21][28]</span>In early seasons, under the influence of the A Song of Ice and Fire books, main characters were regularly killed off, and this was credited with developing tension among viewers.[29] Martin stated in an interview that he wanted to depict war and violence in a realistic way, which sometimes mean the hero or main characters could be injured or killed.[30] In later seasons, critics pointed out that certain characters had developed "plot armor" to survive in unlikely circumstances and attributed this to Game of Thrones deviating from the novels to become more of a traditional television series.[29] In a 2012 study, out of 40 recent television drama shows, Game of Thrones ranked second in deaths per episode, averaging 14.[31] A scientific study conducted in 2018 stated that about 60% of the major characters died as a result violence and war.[32]
                </p>
                
            </div>
            

        </section>
    </div>

    <?php include "inc/scripts.php";?>
    <script src="sss/sss.js"></script>
    <script>
        $('.slider').sss();
    </script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $( "#accordion" ).accordion();
    </script>
    </body>
</html>