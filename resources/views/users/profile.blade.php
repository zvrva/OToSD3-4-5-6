<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
</head>
<body>
    <h1>Профиль пользователя</h1>
    <h2>Ваши токены:</h2>
    <ul>
        @foreach($tokens as $token)
            <li>{{ $token->id }} - {{ $token->name }}</li>
        @endforeach
    </ul>
</body>
</html>