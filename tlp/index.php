<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntex </title>
    <style>
        h1,h2,h3,h4,h5,h6, p, a, .phpcoding, .headeroption, .midcontent, .footeroption{
            margin: 0px;
            padding: 0px;
        }
        .phpcoding{
            background: #ddd;
            height: 500px;
            width: 1000px;
            margin: 0 auto; 
        
        }
        .headeroption{
            background: #333;
            height: 50px;
            width: 100%
        }
        .midcontent{
            background: <?php echo "#07b8bd";?>; 
            width: 80%;
            color: #333;
            margin: 0 auto;
        }
        .footeroption{
            background: #333;
            height: 50px;
            width: 100%
        }
        h1, h2, h3, h4, h5, h6{
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption"><h2>PHP Fundamentals Bangla Tutorial</h2></section>


        <section class="midcontent">
            <h2>
                <?php 
                    $name = array(
                        array("Hasib", "Fahim", "Miraz", "Shahin"),
                        array("Alif", "Parvej", "Mizbah", "Rafin"),
                        array("Tazmim", "Humayra", "Zannatul", "Nusrat"),
                        array("Nadia", "Zannatul", "Fahim", "Miraz")
                    );
                    for ( $row = 0; $row < 4; $row++){
                    echo "<p>Name is $row</p>";
                    echo "<ol>";
                        for($col = 0; $col < 4; $col++){
                            echo "<li>". $name[$row][$col] ."</li>";
                        } 
                        echo "</ol>";
                }

                    

                ?>
            </h2>
        </section>


        <section class="footeroption"><h2>http://symbolicteam.com/</h2></section>

    </div>
    
</body>
</html>