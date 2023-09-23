<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 작성</title>
    <style>
        textarea {
            width: 25%;
            height: 300px;
        }
        #title {
            width: 500px;
        }
        body{
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>게시글 작성</h2>
    <form method="post" action="{{route('create_post')}}">
        @csrf
        <label>제목:</label>
        <input name="title" type="text"><br><br>
        <label>작성자:</label>
        <input name="name" type="text"><br><br>

        <input style="width: 40%; height: 40rem" name="description" type="text">

        <input type=submit value="게시글 등록">
    </form>
</body>
</html>
