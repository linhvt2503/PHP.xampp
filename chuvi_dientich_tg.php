    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>tinh dien tich HCN</title>
        <style type="text/css">
            body {  
                background-color: #d24dff;
            }
            table{
                background: #ffd94d;
                border: 0 solid yellow;
            }
            thead{
                background: #fff14d;    
            }
            td {
                color: blue;
            }
            h3{
                font-family: verdana;
                text-align: center;
            /* text-anchor: middle; */
                color: #ff8100;
                font-size: medium;
            }
        </style>
    </head>
    <body>
    <?php 
    if(isset($_POST['canha']))  
        $canha=trim($_POST['canha']); 
    else $canha="";
    if(isset($_POST['canhb'])) 
        $canhb=trim($_POST['canhb']); 
    else $canhb="";
    if(isset($_POST['canhc'])) 
        $canhc=trim($_POST['canhc']); 
    else $canhc="";
    if(isset($_POST['tinh'])){
        if (is_numeric($canha) && is_numeric($canhb) && is_numeric($canhc)){
            $chuvi=$canha + $canhb + $canhc;
            $p=$chuvi / 2;
            $dientich=sqrt($p*($p - $canha)*($p - $canhb)*($p - $canhc));
        }
        else{
            echo "<font color='red'>Vui lòng nhập vào số dương! </font>";
            $chuvi="";
            $dientich="";
        }
            
    }       
    else {
        $chuvi="";
        $dientich="";
        
    }
    ?>
    <form align='center' action="" method="post">
    <table>
        <thead>
            <th colspan="2" align="center"><h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3></th>
        </thead>
        <tr><td>Cạnh a:</td>
        <td><input type="text" name="canha" value="<?php  echo $canha;?> "/></td>
        </tr>
        <tr><td>Cạnh b:</td>
        <td><input type="text" name="canhb" value="<?php  echo $canhb;?> "/></td>
        </tr>
        <tr><td>Cạnh c:</td>
        <td><input type="text" name="canhc" value="<?php  echo $canhc;?> "/></td>
        </tr>
        <tr><td>Chu vi:</td>
        <td><input type="text" name="chuvi" disabled="disabled" value="<?php  echo $chuvi;?> "/></td>
        </tr>
        <tr><td>Diện tích:</td>
        <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
        </tr>
        <tr>
        <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
        </tr>
    </table>
    </form>
    </body>
    </html>