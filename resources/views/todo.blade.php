<!DOCTYPE html>
<html>

<head>
</head>

<body>
<div>
    <h1>Todoリスト</h1>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Todoを追加" required />
        <input type="submit" value="追加"/>
    </form>

    <div>
        {{ $todos }}
    </div>

</div>
</body>

</html>
