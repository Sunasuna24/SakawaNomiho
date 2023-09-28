<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン | 酒笑</title>
</head>
<body>
    <main>
        <form action="{{ route('login.login') }}" method="post">
            <p>ログインする</p>
            @csrf
            <label for="email">メールアドレス</label>
            <input type="text" name="email" id="email">
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password">
            <button type="submit">ログインする</button>
        </form>
    </main>
</body>
</html>