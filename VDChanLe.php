<?php
<html>
<head>
    
//B1
    // $n = rand(1,100);
    // echo "Giá trị n là $n.<br>";
    // echo "Các số chẵn < $n là: ";
    // for($i=1;$i<=$n;$i++)
    //     if($i%2==0)
    //         echo "$i  ";

    
    // $n = rand(1,10);
    // echo "Bảng cửu chương của $n.<br>";
    // for($i=1;$i<=10;$i++){
    //     $s = $n * $i;
    //     echo "$n * $i = $s <br>";
    // }
 
//B2
    // in tất cả các bảng cửu chương
    for($n=1;$n<=10;$n++){
        echo "Bảng cửu chương của $n.<br>";
        for($i=1;$i<=10;$i++){
            $s = $n * $i;
        echo "$n * $i = $s <br>";
        }
        
    }

//B3
    // define('N',10000);
    // $n = rand(1,N);
    // if($n%2!=0)
    //     echo "$n là số nguyên tố";

    // $sum = 0;
    // for($i=11;$i<=99;$i%2==1)
    //     $sum += $i;
    // echo "Tổng các số lẻ có 2 chữ số và < $n là $sum";

    // //cho biết n có bao nhiêu chữ số
    // $dem = 0;
    // echo "<br> Số $n có $dem chữ số";
    // while($n!=0){
    //     $n =(int)$n/10;
    //     $dem++;
    // }
?>