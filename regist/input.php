<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
</head>

<body>
    <h2>会員登録</h2>
    <!-- form request -->
    <form action="confirm.php" method="post">
        <div>
            <label for="">名前</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="">パスワード</label>
            <input type="password" name="password">
        </div>

        <div>
            <button>次へ</button>
            <a href="confirm.php">次へ</a>
        </div>
    </form>
</body>

</html>