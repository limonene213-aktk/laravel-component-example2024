<!DOCTYPE html>
<html>
<head>
    <title>動物カード一覧</title>
    <style>
        .animal-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>動物カード一覧</h1>

    <!-- ここにカードを置く -->
    <x-animal-card :name="'ねこ'" :description="'かわいいもふもふの動物'" />
    <x-animal-card :name="'いぬ'" :description="'おさんぽが大好き'" />

</body>
</html>
