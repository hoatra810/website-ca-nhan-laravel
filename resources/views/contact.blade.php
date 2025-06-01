<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Liên hệ - Trà</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #e3f2fd;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        nav {
            text-align: center;
            margin-bottom: 20px;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #0d6efd;
            font-weight: bold;
        }

        nav a.active {
            color: #1565c0;
            text-decoration: underline;
        }

        .container {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .greeting {
            text-align: center;
            margin-bottom: 30px;
        }

        .greeting h1 {
            font-size: 32px;
            color: #1e88e5;
        }

        .section {
            background-color: #f1f8ff;
            border-left: 6px solid #2196f3;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .section h2 {
            color: #1565c0;
            margin-top: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            padding: 10px;
            border: 1.5px solid #2196f3;
            border-radius: 6px;
            font-size: 16px;
            resize: vertical;
        }

        textarea {
            min-height: 100px;
        }

        button {
            background-color: #2196f3;
            color: white;
            border: none;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1565c0;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
        }

        /* Thông báo */
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 6px;
            text-align: center;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <div class="container">

        <!-- Lời chào đầu trang -->
        <div class="greeting">
            <h1>Liên hệ với tôi</h1>
            <p>Rất vui khi nhận được phản hồi từ bạn!</p>
        </div>

        <!-- Thanh điều hướng -->
        <nav>
            <a href="/" >Trang chủ</a>
            <a href="/about">Giới thiệu</a>
            <a href="/contact" class="active">Liên hệ</a>
        </nav>

        <!-- Thông báo thành công -->
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Thông báo lỗi -->
        @if($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Nội dung liên hệ -->
        <div class="section">
            <h2>📬 Gửi tin nhắn</h2>
            <form action="/contact" method="post">
                @csrf
                <label for="name">Họ và tên</label>
                <input type="text" id="name" name="name" placeholder="Nhập họ tên của bạn" required />

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required />

                <label for="message">Nội dung</label>
                <textarea id="message" name="message" placeholder="Viết tin nhắn của bạn ở đây..." required></textarea>

                <button type="submit">Gửi</button>
            </form>
        </div>

        <div class="section">
            <h2>Thông tin liên hệ</h2>
            <p><strong>Email:</strong> daothanhtra081004@gmail.com</p>
            <p><strong>Facebook:</strong> <a href="https://www.facebook.com/tea810" target="_blank">https://www.facebook.com/tea810</a></p>
            <p><strong>Số điện thoại:</strong> 0833638353</p>
        </div>

    </div>

    <footer>
        &copy; 2025 Trà - Trang web cá nhân sử dụng Laravel
    </footer>
</body>
</html>
