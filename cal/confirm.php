<?php require_once('filter-cal.php') ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="result">
    <?php
     if(isset($_POST['calculate'])){
        $HPFfrequency =$_POST['HPF_value'];
        $LPFfrequency =$_POST['LPF_value'];
    }
    
    @$HPFcalculate = floor(1.5708/(2*pi()*$HPFfrequency));
    @$LPFcalculate = floor(1/(2.256*$LPFfrequency));

    ?>
    <p>ハイパスフィルタ計算結果:<?php echo @$HPFcalculate?></p>
    <p>ローパスフィルタ計算結果:<?php echo @$LPFcalculate?></p>
    </div>
</body>
</html>