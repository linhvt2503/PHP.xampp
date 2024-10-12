<!DOCTYPE html>
<html>
<head>

    <style>
        table,tr{
            border: 1px solid black;
        }
        td{
            border: 1px solid yellow;
        }
       
    </style>

</head>
<body>
    <?php
    echo "<table>";
    //a
        $n = rand(-50,50);
        if($n < 0)
            $n = -$n;
        echo "Số đối là $n <br>";

    //b
        $mang = array();
        $sum=0;
        for($i=0;$i<$n ;$i++){
            $mang[$i] = rand(-100,100);    
            echo "<td>$mang[$i]        </td>";
            if($mang[$i] % 2 == 1 )
                $sum = $sum + $mang[$i];
        }
    //c    
        echo "<br>Tổng các số lẻ: $sum";
    echo "</table>";
    ?> 
</body>
</html>