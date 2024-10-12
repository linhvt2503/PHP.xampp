<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập số tự nhiên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input {
            padding: 10px;
            margin: 5px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Nhập hai số tự nhiên m và n (từ 2 đến 5)</h2>
    <form method="post">
        <label for="m">Nhập m:</label>
        <input type="number" id="m" name="m" min="2" max="5" required>
        <br>
        <label for="n">Nhập n:</label>
        <input type="number" id="n" name="n" min="2" max="5" required>
        <br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $m = intval($_POST['m']);
        $n = intval($_POST['n']);
        
        // Kiểm tra giá trị
        if (!($m >= 2 && $m <= 5 && $n >= 2 && $n <= 5)) {
            echo "<p class='error'>Vui lòng nhập các số trong khoảng từ 2 đến 5.</p>";
        } 
        else {
           
            //tạo ma trận
            $matrix = array();
            for($i=0;$i<$m;$i++){
                $row = array();
                for($j=0;$j<$n;$j++){
                    $row = rand(-100,100);
                }
                $matrix[] = $row;
            }
            for($i=0;$i<$m;$i++){
                for($j=0;$j<$n;$j++){
                    echo "$matrix[$i][$j]";
                }
            }
        }
    }
    ?>
</body>
</html>
