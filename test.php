<?php
    $n=rand(1,100);
    echo "Giá trị n được tạo ra là $n.";
    echo"<br> Các số chẵn < $n là: ";
    for($i=1;$i<=$n;$i++){
        if($i%2==0)
        echo"$i ";
    }
?>

