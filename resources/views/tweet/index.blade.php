<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" 
            content="width=device-width, user-scalable=no, initial-scale=1.0,
            maxium-scale=1.0, minium-scale=1.0">
        <title>つぶやきアプリ</title>
    </head>
    <body>
        <h1>つぶやきアプリ</h1>
        <div>
            @foreach ($tweets as $tweet)
                <p>{{ $tweet->content }}</p>
            @endforeach
        </div>
    </body>
</html>