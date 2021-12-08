
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tytle">
        <?='デジタルフィルタの設計'?><br />
    </div>
    <div class="about">
        <?='ここではLPF,HPFの値設定または、値から周波数を求めます。'?><br />
    </div>

    <form action="confirm.php" method = "post">
        <div class="HPF">
            <?='HPF'?> 
            <input type="number" value="HPF_value" size="15">
        </div>
        <div class="LPF">
            <?='LPF'?>
            <input type="number"  value="LPF_value" size="15">
        </div>

        <div class="button">
            <input type="submit"  value="計算">
        </div>
    </form>
    
</body>
</html>