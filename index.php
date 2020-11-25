<?php
$coin = file_get_contents("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=1");
$coin = json_decode($coin, true);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Курс биткоина</title>
</head>
<body class="bg-light">
<div class="container">
    <h3 class="p-3 my-0 bg-success text-white">Курс биткоина</h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th>Код валюты</th>
                <th>Код основной валюты</th>
                <th>Курс покупки</th>
                <th>Курс продажи</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($coin as $val) { ?>
                <tr>
                    <?php foreach ($val as $name) { ?>
                        <td><?php echo $name ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>