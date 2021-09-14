<?php
    $fonts = "verdana";
    $bgcolor = "#444";
    $fontcolor = "#fff";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntex </title>
    <style>
        body{font-family: <?php echo $fonts;?>}
        h1,h2,h3,h4,h5,h6, p, a, .phpcoding, .headeroption, .midcontent, .footeroption{
            margin: 0px;
            padding: 0px;
        }
        .phpcoding{
            background: <?php echo $bgcolor; ?>;
            height: 600px;
            width: 1000px;
            margin: 0 auto;
        
        }
        .headeroption{
            background: #333;
            height: 50px;
            width: 100%;
        }
        .midcontent{
            background: <?php echo "#07b8bd";?>;
            height: 500px;
            width: 80%;
            margin: 0 auto;
            overflow: scroll;
        }
        .footeroption{
            background: #333;
            height: 50px;
            width: 100%;
        }
        h1, h2, h3, h4, h5, h6{
            text-align: center;
            color: <?php echo $fontcolor;?>;
        }
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption"><h2>PHP Fundamentals Bangla Tutorial</h2></section>


        <section class="midcontent">
            <h2>
                
            <hr> PHP Multi Dimansional array <hr>
                <?php
                     $cars = array(
                         array("BMW", 15, "Nice"),
                         array("Vlovo", 20, 5),
                         array("Saab", 25, 30),
                         array("Audi", 21, 35),
                     );

                     for($row = 0; $row < 4; $row++){
                         echo "<p>Row Number $row </p>";
                         echo "<ol>";
                            for ($col=0; $col<3; $col++){
                               echo "<li>" . $cars[$row][$col] . "</li>";
                            }
                         echo "</ol>";
                     }
                
                     ?>
                

                <hr> PHP assosiative array <hr>
                <?php
                    $age = array(
                        "Hasib"=>"27",
                        "Sakib"=>"23",
                        "Rafin"=> "19"                
                    );
                    
                    // $ages["Hasib"] = "27";
                    // $ages["Sakib"] = "23";
                    // $ages["Rafin"] = "19";
                    
                    foreach($age as $x => $vlue){
                        echo "Kye = " . $x . ", Value = " . $vlue . "<br/>";
                    }

                
                ?>
                <hr> PHP array with for Loops <hr>
                <?php
 
                    $x = array(5, 6, 9, 7, 11,17);
                    $length = count($x);

                    for($i = 0; $i < $length; $i++){
                        echo "Number $i =" . $x[$i];
                        echo "<br/>";
                    }

                    
                 
                ?>
            </h2>
        </section>


        <section class="footeroption"><h2>http://symbolicteam.com/</h2></section>

    </div>
    
</body>
</html>