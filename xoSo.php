<!DOCTYPE html>
<html lang="vi">
<head>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input {
            padding: 10px;
            margin: 5px;
        }
        .error {
            color: red;
        } */
    </style>
</head>
<body>
    <?php
        $ar8 = array();    
        echo "G8 ";    
        for($i=1;$i<2;$i++){  
            $ar8[$i] = rand(0,99);
            if($ar8[$i] > 9){
                echo "$ar8[$i]";
            }
            else{
                echo "0$ar8[$i]";
            }
            echo "<br>";
        }
        
        $ar7 = array();
        echo "G7 ";    
        for($i=1;$i<2;$i++){  
            $ar7[$i] = rand(0,999);
            if($ar7[$i] < 10){
                echo "00$ar7[$i]";
            }
            else if($ar7[$i] < 100){
                echo "0$ar7[$i]";
            }
            else{
                echo "$ar7[$i]";
            }
            echo "<br>";
        }
        
        $ar6 = array();
        echo "G6 ";    
        for($i=1;$i<4;$i++){  
            $ar6[$i] = rand(0,9999);
            if($ar6[$i] < 10){
                echo "000$ar6[$i] ";
            }
            else if($ar6[$i] < 100){
                echo "00$ar6[$i] ";
            }
            else if($ar6[$i] < 1000){
                echo "0$ar6[$i] ";
            }
            else{
                echo "$ar6[$i] ";
            }
            
        }
        echo "<br>";

        $ar5 = array();
        echo "G5 ";    
        for($i=1;$i<5;$i++){  
            $ar5[$i] = rand(0,9999);
            if($ar5[$i] < 10){
                echo "000$ar5[$i] ";
            }
            else if($ar5[$i] < 100){
                echo "00$ar5[$i] ";
            }
            else if($ar5[$i] < 1000){
                echo "0$ar5[$i] ";
            }
            else{
                echo "$ar5[$i] ";
            }
            
        }
        echo "<br>";
  
        $ar4 = array();
        echo "G4 ";    
        for($i=1;$i<8;$i++){  
            $ar4[$i] = rand(0,99999);
            if($ar4[$i] < 10){
                echo "0000$ar4[$i] ";
            }
            else if($ar4[$i] < 100){
                echo "000$ar4[$i] ";
            }
            else if($ar4[$i] < 1000){
                echo "00$ar4[$i] ";
            }
            else if($ar4[$i] < 10000){
                echo "0$ar4[$i] ";
            }
            else{
                echo "$ar4[$i] ";
            }
            
        }
        echo "<br>";

        $ar3 = array();
        echo "G3 ";
        for($i=1;$i<2;$i++){  
            $ar3[$i] = rand(0,99999);
            if($ar3[$i] < 10){
                echo "0000$ar3[$i] ";
            }
            else if($ar3[$i] < 100){
                echo "000$ar3[$i] ";
            }
            else if($ar3[$i] < 1000){
                echo "00$ar3[$i] ";
            }
            else if($ar3[$i] < 10000){
                echo "0$ar3[$i] ";
            }
            else{
                echo "$ar3[$i] ";
            }
            
        }
        echo "<br>";
        
        $ar2 = array();
        echo "G2 ";
        for($i=1;$i<2;$i++){  
            $ar2[$i] = rand(0,99999);
            if($ar2[$i] < 10){
                echo "0000$ar2[$i] ";
            }
            else if($ar2[$i] < 100){
                echo "000$ar2[$i] ";
            }
            else if($ar2[$i] < 1000){
                echo "00$ar2[$i] ";
            }
            else if($ar2[$i] < 10000){
                echo "0$ar2[$i] ";
            }
            else{
                echo "$ar2[$i] ";
            }
            
        }
        echo "<br>";

        $ar1 = array();
        echo "G1 ";
        for($i=1;$i<2;$i++){  
            $ar1[$i] = rand(0,99999);
            if($ar1[$i] < 10){
                echo "00000$ar1[$i] ";
            }
            else if($ar1[$i] < 100){
                echo "0000$ar1[$i] ";
            }
            else if($ar1[$i] < 1000){
                echo "000$ar1[$i] ";
            }
            else if($ar1[$i] < 10000){
                echo "00$ar1[$i] ";
            }
            else if($ar1[$i] < 100000){
                echo "0$ar1[$i] ";
            }
            else{
                echo "$ar1[$i] ";
            }
            
        }
        echo "<br>";

    ?>
</body>
</html>
