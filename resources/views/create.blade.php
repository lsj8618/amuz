<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 작성</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 20px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #007bff;
            padding: 10px;
            border-radius: 5px;
        }
        form {
            width: 60%;
            margin: 20px auto;
            text-align: left;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #0078d4;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>

<body>
    <h2>게시글 작성</h2>
    <form method="post" action="{{route('create_post')}}">
        @csrf
        <label for="title">제목:</label>
        <input type="text" id="title" name="title" required>

        <label for="author">작성자:</label>
        <input type="text" id="author" name="user_name" required>

        <label for="password">비밀번호:</label>
        <input type="password" id="password" name="password" required>

        <label for="content">내용:</label>
        <textarea id="description" name="description" rows="5" required></textarea>

        <input type="submit" value="글 작성">
    </form>
</body>
</html>
