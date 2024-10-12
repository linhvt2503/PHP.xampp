<!DOCTYPE html>
<html>
<head>
    <style>
        table{   
            background: white;
            border: 0;

        }
        td{
            border-radius:15px;
            border: 1px solid black;
            background: red;
            color: black;
            text-align: center;
        }
        p{
            border-bottom: 1px solid black;
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
    </style>

</head>
<body>
    <?php 
    echo"<table>"; 
    for($n=1;$n<=10;$n++){
        echo"<td>"; 
        echo "<p>Bảng cửu chương $n.<br></p>";
        for($i=1;$i<=10;$i++){   
            $s = $n * $i;    
        echo "$n * $i = $s.<br>";
        }        
    }
    ?>
</html>
