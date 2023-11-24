<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        h1 {
            color: #007bff;
            padding: 10px;
            border-radius: 5px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 10px; 
            overflow: hidden; 
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #createBtn {
            left: 38%;
            position: relative;
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
            border-radius: 15px;
            padding: 2px 10px;
            text-decoration:none;
        }
        .login-signup {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            gap: 10px;
        }
        .login-signup button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 2px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>게시판</h1>
    <div class="login-signup">
        <button onclick="location.href='{{route('login')}}'">Login</button>
        <button onclick="location.href='{{route('register')}}'">Register</button>
    </div>
    <a id='createBtn' href="{{ route('create') }}">글작성</a>
    <div>
        <table>
            <tr>
                <th>글 번호</th>
                <th>제목</th>
                <th>작성자</th>
                <th>작성 시간</th>
            </tr>
            
            @if(!is_null($boards))
            @foreach ($boards as $board)
            <tr> 
                <td>{{ ($boards->currentPage() - 1) * $boards->perPage() + $loop->iteration }}</td>
                <td><a href={{route("detail_post",$board->id)}} style="text-decoration: none; color: #0078d4;">{{$board->title}}</a></td>
                <td>{{$board->user_name}}</td>
                <td>{{$board->created_at}}</td>

            </tr>
            @endforeach
            @endif
        </table>
    </div>
    
    <div style=" width:1000px; height:350px; display:flex; flex-direction:row; margin:auto;" > {{ $boards->links() }}</div>
</body>
</html>
