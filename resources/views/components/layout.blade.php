<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title></title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class=" bg-gray-100">

    {{$slot}}

</body>
</html>