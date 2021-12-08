
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "calc.css">
    <title>TOP</title>
</head>
<body>
    <div class="title">
        <?='デジタルフィルタの設計'?><br/>
    </div>
    <div class="about">
        <?='ここではLPF,HPFの値設定または、値から周波数を求めます。'?><br />
    </div>

    <form action="confirm.php" method = "post">
        <div class="HPF">
            <p>HPF</p>
            <input type="number" step = "0.01" name="HPF_value" pattern = "^[0-9]+$" min = "0" name="HPF_value"  size="15" required>
            <div class = "error">※入力してください</div>
        </div>
        <div class="LPF">
            <p>LPF</p>
            <input type="number" step = "0.01" name="LPF_value" pattern = "^[0-9]+$" min = "0" size="15" required>
            <div class = "error">※入力してください</div>
        </div>
    
    <div class="button">
        <input onclick = "location.href = './confirm.php'" type="submit" name = "calculate" value="計算">
    </div>
    
</body>
</html>