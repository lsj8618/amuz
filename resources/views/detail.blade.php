<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 디테일 페이지</title>
    <style>
        body {
            
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .post-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .post-header h1 {
            margin: 0;
        }

        .post-meta {
            margin-top: 10px;
            font-size: 0.8em;
        }

        .post-content {
            padding: 20px;
        }

        .action-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .action-buttons button {
            padding: 10px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            color: #fff;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .btn_update {
            background-color: #007bff; color: #fff;
        }

        .btn_delete {
            background-color: #d1d1d1; color: #fff;
        }
        
    </style>
</head>
<body>

<div class="post-container">
    <div class="post-header">
        <h1>{{$board->title}}</h1>
        <p class="post-meta">{{$board->user_name}}ㅣㅣ{{$board->updated_at}}</p>
    </div>

    <div class="post-content">
        <p>{{$board->description}}</p>
        
    </div>

    <div class="action-buttons">
        <a href="{{ route('edit', ['id' => $board->id]) }}" class="edit-button">
            <button class="btn_update">수정</button>
        </a>
        
        <a href="{{ route('delete', ['id' => $board->id]) }}" class="delete-button">
            <button class="btn_delete">삭제</button>
        </a>
    </div>
</div>

</body>
</html>
