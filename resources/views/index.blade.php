<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>select</title>
</head>
<body >
        @foreach ($db1 as $namelist)
            <p>
            {{ $namelist->id }}
            {{ $namelist->name }}

            </p>
        @endforeach
</body>
</html>