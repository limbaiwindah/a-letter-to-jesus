<!DOCTYPE html>
<html>
<head>
    <title>All Letters</title>
</head>
<body>
    <h1>All Letters</h1>
    @foreach ($letters as $letter)
        <div style="border:1px solid #ccc; margin-bottom: 10px; padding: 10px;">
            <p>{{ $letter->content }}</p>
            @if ($letter->sender)
                <small>— {{ $letter->sender }}</small>
            @endif
        </div>
    @endforeach
</body>
</html>
