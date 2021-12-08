<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "calc.css">
    <title>結果画面</title>
</head>
<body>
    <div class="result">
    <?php
     if(isset($_POST['calculate'])){
        $HPFfrequency =$_POST["HPF_value"];
        $LPFfrequency =$_POST["LPF_value"];
    }
    //ここ要らないかも
    if(ctype_digit($HPFfrequency)){
        echo "HPFは数値で入力してください";
    }else{
        $HPFcalculate = 1.5708/(2*pi()*$HPFfrequency);
    }

    if(ctype_digit( $LPFfrequency)){
        echo "LPFは数値で入力してください";
    }else{
        $LPFcalculate = 1/(2.256*$LPFfrequency);
    }

    ?>
    <p>ハイパスフィルタ計算結果:<?php echo @$HPFcalculate; ?></p>
    <p>ローパスフィルタ計算結果:<?php echo @$LPFcalculate; ?></p>
    </div>
    <input type="button" onclick = "history.back()" value = "戻る">
</body>
</html>
