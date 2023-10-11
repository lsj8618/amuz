<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        h1 {
            color: black;
            padding: 10px;
            border-radius: 5px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #createBtn {
            left: 38%;
            position: relative;
            background-color: black;
            color: white;
            border: 1px solid black;
            border-radius: 15px;
            padding: 2px 10px;
            text-decoration:none;
        }
    </style>
</head>
<body>
    {{$board[0]->title}}
    <h1>게시판</h1>
    <a id='createBtn' href="{{ route('create') }}">글작성</a>
    <table>
        <tr>
            <th>글 번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성 시간</th>
        </tr>
        <!-- 예시 게시물 -->
        @foreach ($boards as $board)
            <p>This is board {{ $board->id }}</p>
        <tr>
            <td>{{$board[0]->id}}1</td>
            <td><a href="post1.html" style="text-decoration: none; color: #0078d4;">{{$board[0]->title}}</a></td>
            <td>{{$board[0]->user_name}}</td>
            <td>{{$board[0]->created_at}}</td>
        </tr>
        @endforeach
        <!-- 더 많은 게시물 추가 -->
    </table>
</body>
</html>
