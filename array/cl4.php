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
                
            <hr> PHP  Multidimantional Array pring using print_r <hr> 
            <?php
                $name = array("Hasib", "Rakib", "OpU");
                $Department = array("CSE", "EEE", "Math");

                $combine = array_combine($name, $Department);


                print("<pre>");
                print_r($combine);
                print("</pre>");
 
 
            ?>
                
            </h2>
        </section>


        <section class="footeroption"><h2>http://symbolicteam.com/</h2></section>

    </div>
    
</body>
</html>