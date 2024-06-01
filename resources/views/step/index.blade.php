<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>歩数記録アプリ</title>
</head>
<body>
    <h1>歩数記録アプリ</h1>
    <div>
    @foreach ($steps as $step)
        <p>{{ $step->steps_count }}</p>
    @endforeach
    </div>
</body>
</html>
