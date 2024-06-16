<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>歩数記録アプリ</title>
</head>
<body>
    <h1>歩数を編集する</h1>
    <div>
        <a href="{{ route('step.index') }}">戻る</a>
        <p>歩数を編集</p>
        <form action="{{ route('step.update.put', ['stepId' => $step->id]) }}" method="post">
            @method('PUT')
            @csrf
            <label for="step-content">歩数</label>
            <input id="step-content" type="number" name="step" placeholder="歩数を入力">
                {{ $step->steps_count }}
            </input>
            @error('step')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit">登録</button>
        </form>
    </div>
</body>
</html>
