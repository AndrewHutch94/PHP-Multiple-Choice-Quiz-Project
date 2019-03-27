<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>PHP Multiple Choice Quiz</title>
            <meta charset="utf-8">
            <!--below is how to link your CSS style elements to your main HTML document-->
            <link rel ="stylesheet" type="text/css" href="style.css">
            <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
            <script src = https://cdn.jsdelivr.net/npm/vue></script>
        </head>
        
        
        <body style= "color: yellow">

        <h1>The Harry Potter PHP Quiz!</h1>

        <h2>[Scroll down to the bottom view results after submission]</h2>

        <?php

            $questions = array(

            //In this section I map out the questions for the quiz, as well as various answer questions, 
            //and lastly the correct answer to make life simpler when tallying up the correct answers.
            // required="required" 

            '<h4> 1. What is the name of the device that Dumbledore uses when putting out the street lights on Privet Drive? </h4>
                <label><input type="radio" name="q1" value="A" />The Deluminator<br>
                <label><input type="radio" name="q1" value="B" />A Wand<br>
                <label><input type="radio" name="q1" value="C" />A Lightswitch<br>
                <label><input type="radio" name="q1" value="D" />His Fingers', //A

            '<h4> 2. What position does Harry play on the Quidditch team? </h4>
                <label><input type="radio" name="q2" value="A" />Keeper<br>
                <label><input type="radio" name="q2" value="B" />Chaser<br>
                <label><input type="radio" name="q2" value="C" />Beater<br>
                <label><input type="radio" name="q2" value="D" />Seeker', //D

            '<h4> 3. What dark wizard did Albus Dumbledore defeat in 1945? </h4>
                <label><input type="radio" name="q3" value="A" />Lucius Malfoy<br>
                <label><input type="radio" name="q3" value="B" />GreyBack<br>
                <label><input type="radio" name="q3" value="C" />Grindelwald<br>
                <label><input type="radio" name="q3" value="D" />Barty Crouch Junior', //C

            '<h4> 4. Who was flying with Mad Eye when he died? </h4>
                <label><input type="radio" name="q4" value="A" />Harry Potter<br>
                <label><input type="radio" name="q4" value="B" />Mundungus Fletcher<br>
                <label><input type="radio" name="q4" value="C" />George Weasley<br>
                <label><input type="radio" name="q4" value="D" />Fred Weasley', //B

            '<h4> 5. How did Harry and Ron get to Hogwarts their second year? </h4>
                <label><input type="radio" name="q5" value="A" />The Hogwarts Express<br>
                <label><input type="radio" name="q5" value="B" />A Flying Car<br>
                <label><input type="radio" name="q5" value="C" />They Walked<br>
                <label><input type="radio" name="q5" value="D" />Flying Broomsticks', //B

            '<h4> 6. What is Tom Riddle’s middle name? </h4>
                <label><input type="radio" name="q6" value="A" />Harry<br>
                <label><input type="radio" name="q6" value="B" />Voldemort<br>
                <label><input type="radio" name="q6" value="C" />Marvolo<br>
                <label><input type="radio" name="q6" value="D" />Bob', //C

            '<h4> 7. What breed of dragon is Hagrid’s pet? </h4>
                <label><input type="radio" name="q7" value="A" />Hungarian Horntale<br>
                <label><input type="radio" name="q7" value="B" />Chinese Fireball<br>
                <label><input type="radio" name="q7" value="C" />Swedish Short-Snout<br>
                <label><input type="radio" name="q7" value="D" />Norwegian Ridgeback Dragon', //D

            '<h4> 8. What is Snape’s Patronus? </h4>
                <label><input type="radio" name="q8" value="A" />A Doe<br>
                <label><input type="radio" name="q8" value="B" />A Snake<br>
                <label><input type="radio" name="q8" value="C" />A Stag<br>
                <label><input type="radio" name="q8" value="D" />An Otter', //A

            '<h4> 9. What is the name of the book Hermione gives to Harry before his first ever Quidditch match? </h4>
                <label><input type="radio" name="q9" value="A" />Hogwarts: A History<br>
                <label><input type="radio" name="q9" value="B" />How To Fly A Broom<br>
                <label><input type="radio" name="q9" value="C" />Quidditch Throughout The Ages<br>
                <label><input type="radio" name="q9" value="D" />Your Guide To Transfiguration', //C

            '<h4> 10. What is the name of Dumbledore’s phoenix? </h4>
                <label><input type="radio" name="q10" value="A" />Hedwig<br>
                <label><input type="radio" name="q10" value="B" />Fawkes<br>
                <label><input type="radio" name="q10" value="C" />Scabbers<br>
                <label><input type="radio" name="q10" value="D" />Crookshanks', //B

            '<h4> 11. Who was the Slytherin Quidditch captain in Harry’s first match? </h4>
                <label><input type="radio" name="q11" value="A" />Marcus Flint<br>
                <label><input type="radio" name="q11" value="B" />Draco Malfoy<br>
                <label><input type="radio" name="q11" value="C" />Cedric Diggory<br>
                <label><input type="radio" name="q11" value="D" />Oliver Wood', //A

            '<h4> 12. Who was Scabbers in his Animagus form? </h4>
                <label><input type="radio" name="q12" value="A" />Sirius Black<br>
                <label><input type="radio" name="q12" value="B" />Lord Voldemort<br>
                <label><input type="radio" name="q12" value="C" />Alister Moody<br>
                <label><input type="radio" name="q12" value="D" />Peter Pettigrew', //D

            '<h4> 13. Who/What does Harry see attacking Ron’s father in his dream? </h4>
                <label><input type="radio" name="q13" value="A" />Greyback The Werewolf<br>
                <label><input type="radio" name="q13" value="B" />Nagini The Snake<br>
                <label><input type="radio" name="q13" value="C" />Lord Voldemort<br>
                <label><input type="radio" name="q13" value="D" />A Troll', //B

            '<h4> 14. What is the name of the potion that grants good luck to whoever drinks it? </h4>
                <label><input type="radio" name="q14" value="A" />Draught of Living Death<br>
                <label><input type="radio" name="q14" value="B" />Polyjuice Potion<br>
                <label><input type="radio" name="q14" value="C" />Felix Felicis<br>
                <label><input type="radio" name="q14" value="D" />Pepperup Potion', //C

            '<h4> 15. What is the full name of Dumbledore, the headmaster of Hogwarts? </h4>
                <label><input type="radio" name="q15" value="A" />Albus Percival Wulfric Brian Dumbledore<br>
                <label><input type="radio" name="q15" value="B" />Albus Brain Wulfric Percival Dumbledore<br>
                <label><input type="radio" name="q15" value="C" />Albus Wulfric Percival Brian Dumbledore<br>
                <label><input type="radio" name="q15" value="D" />Albus Percival Brain Wulfric Dumbledore', //A

            '<h4> 16. What type of wizard is Harry’s godfather? </h4>
                <label><input type="radio" name="q16" value="A" />Dark Wizard<br>
                <label><input type="radio" name="q16" value="B" />An Animagus<br>
                <label><input type="radio" name="q16" value="C" />A Sprite<br>
                <label><input type="radio" name="q16" value="D" />A regular Wizard', //B

            '<h4> 17. What is Harry’s Father’s name? </h4>
                <label><input type="radio" name="q17" value="A" />David<br>
                <label><input type="radio" name="q17" value="B" />John<br>
                <label><input type="radio" name="q17" value="C" />Jim<br>
                <label><input type="radio" name="q17" value="D" />James', //D

            '<h4>18. What magical plant does Harry use to breathe underwater in the books? </h4>
                <label><input type="radio" name="q18" value="A" />Mandrake Leaves<br>
                <label><input type="radio" name="q18" value="B" />Dittany Roots<br>
                <label><input type="radio" name="q18" value="C" />Devils Snare<br>
                <label><input type="radio" name="q18" value="D" />Gillyweed', //D

            '<h4> 19. On what date was Harry Potter born? </h4>
                <label><input type="radio" name="q19" value="A" />18th of August 1994<br>
                <label><input type="radio" name="q19" value="B" />31st of July 1980<br>
                <label><input type="radio" name="q19" value="C" />17th of January 1988<br>
                <label><input type="radio" name="q19" value="D" />10th of December 1980', //B

            '<h4> 20. What is Harry’s house at Hogwarts?: </h4>
                <label><input type="radio" name="q20" value="A" />Gryffindor<br>
                <label><input type="radio" name="q20" value="B" />Hufflepuff<br>
                <label><input type="radio" name="q20" value="C" />Ravenclaw<br>
                <label><input type="radio" name="q20" value="D" />Slytherin' //A

            );
        ?>
<!--Then i open my form-->
        <form role= "form" action= <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method= "post">
        <?php

    //Now i loop through the questions from the previous seciton
    
            $correctans = 0;
 



    for($x = 0; $x < count($questions); $x++) {
        echo $questions[$x];
        echo "<br>";
    }; 

    if(!empty($_POST)){
        $ques1 = $_POST["q1"]; $ques2 = $_POST["q2"]; $ques3 = $_POST["q3"]; $ques4 = $_POST["q4"]; $ques5 = $_POST["q5"]; $ques6 = $_POST["q6"];
        $ques7 = $_POST["q7"]; $ques8 = $_POST["q8"]; $ques9 = $_POST["q9"]; $ques10 = $_POST["q10"]; $ques11 = $_POST["q11"]; 
        $ques12 = $_POST["q12"]; $ques13 = $_POST["q13"]; $ques14 = $_POST["q14"]; $ques15 = $_POST["q15"]; $ques16 = $_POST["q16"];
        $ques17 = $_POST["q17"]; $ques18 = $_POST["q18"]; $ques19 = $_POST["q19"]; $ques20 = $_POST["q20"];
        
        //Time to tally up the score

        if($ques1 == "A"){ $correctans++;
        };
        if($ques2 == "D"){ $correctans++;
        };
        if($ques3 == "C"){ $correctans++;
        };
        if($ques4 == "B"){ $correctans++;
        };
        if($ques5 == "B"){ $correctans++;
        };
        if($ques6 == "C"){ $correctans++;
        };
        if($ques7 == "D"){ $correctans++;
        };
        if($ques8 == "A"){ $correctans++;
        };
        if($ques9 == "C"){ $correctans++;
        };
        if($ques10 == "B"){ $correctans++;
        };
        if($ques11 == "A"){ $correctans++;
        };
        if($ques12 == "D"){ $correctans++;
        };
        if($ques13 == "B"){ $correctans++;
        };
        if($ques14 == "C"){ $correctans++;
        };
        if($ques15 == "A"){ $correctans++;
        };
        if($ques16 == "B"){ $correctans++;
        };
        if($ques17 == "D"){ $correctans++;
        };
        if($ques18 == "D"){ $correctans++;
        };
        if($ques19 == "B"){ $correctans++;
        };
        if($ques20 == "A"){ $correctans++;
        };
    };
        
?>
<br>

<!-- A Submit button fit for a wizard -->
<input type="submit" value="Accio Results!">
</form>
<?php

    // Its time to echo out the score!

    if($correctans != 0){
        echo "<br>";
        echo "<h2>Congrats, you got ".$correctans." out of 20!! Youre A Wizard!</h2>";
 
    };

?> 



        
        </body>
    </html>