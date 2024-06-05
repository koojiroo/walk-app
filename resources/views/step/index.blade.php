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
        <p>歩数を登録</p>
        <form action="{{ route('step.create') }}" method="post">
            @csrf
            <label for="step-content">歩数</label>
            <input id="step-content" type="number" name="step" placeholder="歩数を入力">
            @error('step')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit">登録</button>
        </form>
    </div>
</body>
</html>
