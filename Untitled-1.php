<?php
    // $a = 5;
    // echo"Giá trị của a là $a. <br>";
    // echo'Giá trị của a là $a. <br>';
    // echo'Giá trị của a là ' .$a;
    
    // $a = 1;
    // function Test(){
    //     $a = 10;
    //     echo $a;
    // }
    // Test();
    // echo $a;

    // $a = 1;
    // $b = 2;
    // function Sum(){
    //     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    // }
    // Sum();
    // echo $b;

    // function Test(){
    //     static $a = 0; //có static
    //     echo $a;
    //     $a++;
    // }
    // Test(); //0
    // Test(); //1
    // Test(); //2

    // $str1= "laptrinhwebphp";
    // $str2 = &$str1;
    // echo $str1; //laptrinhwebphp
    // echo $str2; //laptrinhwebphp

    // $a = 5;
    // $b = "5";
    // if($a === $b) // == xét giá trị ..... === vừa kiểu vừa giá trị
    //     echo "Y";
    // else
    //     echo "N";

    $s = 1;
    while($s <= 10){
        echo "$s<br>"; //\n, "$s <br>", $s "<br>"
        $s++;
    }

    $tong = 0;
    for($i=1; $i<=10; $i++){
        if($i%2 == 0)
            continue;
        $tong = $tong + $i;
    }
    echo $tong;
?>