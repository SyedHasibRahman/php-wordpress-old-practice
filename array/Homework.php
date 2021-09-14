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
                
            <hr> PHP  HomeWork <hr> 
            
               <?php 
               /*<div>/*<p>Train Suborno has 6 Bogies
               Ka has 6 sit. The sit list details are given below:
                1 is Booked
                2 is Not Booked
                3 is Booked
                4 is Not Booked
                5 is Not Booked
                6 is Not Booked
               Kha has 5 sit. The sit list details are given below:
                7 is Booked
                8 is Booked
                9 is Booked
                10 is Not Booked
               
                11 is Booked
               Ga has 6 sit. The sit list details are given below:
                12 is Booked
                13 is Not Booked
                14 is Booked
                15 is Booked
                16 is Not Booked
                17 is Not Booked
               Gha has 4 sit. The sit list details are given below:
                18 is Not Booked
                19 is Booked
                20 is Not Booked
                21 is Not Booked
               Ca has 5 sit. The sit list details are given below:
                22 is Not Booked
                23 is Not Booked
                24 is Not Booked
                25 is Not Booked
                26 is Not Booked
               Cha has 7 sit. The sit list details are given below:
                27 is Booked
                28 is Booked
                29 is Booked
                30 is Booked
                31 is Not Booked
                32 is Not Booked
                33 is Not Booked
               Between 33 sit total booked = 14 and not booked = 19</p>  </div>*/
               ?> 
                <?php
                $suborno = [
                    'Ka'=>[
                    '1'=>'Y',
                    '2'=>'N',
                    '3'=>'Y',
                    '4'=>'N',
                    '5'=>'N',
                    '6'=>'N',
                    ],
                    'Kha'=>[
                    '7'=>'Y',
                    '8'=>'Y',
                    '9'=>'Y',
                    '10'=>'N',
                    '11'=>'Y',
                    ],
                    'Ga'=>[
                    '12'=>'Y',
                    '13'=>'N',
                    '14'=>'Y',
                    '15'=>'Y',
                    '16'=>'N',
                    '17'=>'N',
                    ],
                    'Gha'=>[
                    '18'=>'N',
                    '19'=>'Y',
                    '20'=>'N',
                    '21'=>'N',
                    ],
                    'Ca'=>[
                    '22'=>'N',
                    '23'=>'N',
                    '24'=>'N',
                    '25'=>'N',
                    '26'=>'N',
                    ],
                    'Cha'=>[
                    '27'=>'Y',
                    '28'=>'Y',
                    '29'=>'Y',
                    '30'=>'Y', 
                    '31'=>'N',
                    '32'=>'N',
                    '33'=>'N',
                    ],
                    ];

                    
                $length = count($suborno);
                    echo "Train Suborno has $length Bogies </br><br>";                    
                foreach($suborno as $bogies => $value){   
                    // global $value;                 
                $length2 = count($value);                    
                    echo " <br> $bogies has $length2 Sits. The sit list details are given below:<br><br>";
                    
                    // global $bogies;
                    foreach($value as $sit => $booked){ 
                        // echo $sit . "<br>";
                        global $sit;
                        global $booked;
                        if($booked == 'Y'){
                            echo $sit . " is Booked <br>"; 
                            
                            // echo count($value). " <br>";
                        }else{
                            echo $sit . " is Not Booked <br>";
                        }
                    }      
                    }  
                    $totalArray = count($suborno,1);
                    $totalsit = $totalArray - $length;
                    echo "<br> Between $totalsit Sit total booked = 14 and not booked = 19";
                    



                    
                ?>
  
                
            </h2>
        </section>


        <section class="footeroption"><h2>http://symbolicteam.com/</h2></section>

    </div>
    
</body>
</html>