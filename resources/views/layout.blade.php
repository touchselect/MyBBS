<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>my bbs</title>
    @include('style-sheet')
</head>
<body>
    @include('nav')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
