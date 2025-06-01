<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Giới thiệu - Trà</title>
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
            max-width: 1000px;
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

        ul {
            padding-left: 20px;
            text-align: left;
        }

        .section ul li {
            margin-bottom: 10px;
            line-height: 1.6;
        }


        footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">

        <!-- Lời chào đầu trang -->
        <div class="greeting">
            <h1>Chào mừng bạn đến với trang giới thiệu của tôi!</h1>
            <p>Một chút về hành trình học tập và đam mê công nghệ của mình.</p>
        </div>

        <!-- Thanh điều hướng -->
        <nav>
            <a href="/" >Trang chủ</a>
            <a href="/about" class="active">Giới thiệu</a>
            <a href="/contact">Liên hệ</a>
        </nav>

        <!-- Nội dung giới thiệu -->
        <div class="section">
            <h2>🌱 Hành trình học tập</h2>
            <p>Tôi sinh ra và lớn lên tại Bình Thuận - vùng đất đầy nắng và gió miền Trung Việt Nam.</p>
            <p>Năm 2022, tôi bắt đầu theo học ngành Công nghệ Thông tin tại Đại học Tây Nguyên, nơi tôi được tiếp xúc với nhiều kiến thức chuyên sâu và môi trường học tập năng động.</p>
            <p>Qua từng ngày, tôi càng yêu thích lập trình và mong muốn phát triển sự nghiệp trong lĩnh vực này.</p>
        </div>

        <div class="section">
            <h2>💡 Đam mê & Mục tiêu</h2>
            <ul>
                <li>Yêu thích tạo ra các ứng dụng web thân thiện, hiệu quả và dễ sử dụng.</li>
                <li>Tham gia các dự án nhóm để nâng cao kỹ năng làm việc cộng tác.</li>
                <li>Khám phá thêm về xử lý ảnh và trí tuệ nhân tạo trong công nghệ.</li>
                <li>Luôn cố gắng học hỏi, không ngừng nâng cao kỹ năng và kiến thức.</li>
            </ul>
        </div>

        <div class="section">
            <h2>📚 Sở thích học tập & hoạt động</h2>
            <p>Bên cạnh việc học lập trình, tôi rất thích đọc sách công nghệ và tìm hiểu về xu hướng mới trong ngành IT.</p>
            <p>Tôi cũng tham gia các câu lạc bộ công nghệ trong trường để kết nối và chia sẻ kinh nghiệm với các bạn cùng đam mê.</p>
            <p>Tham gia các dự án thực tế giúp tôi vận dụng kiến thức đã học và nâng cao kỹ năng làm việc nhóm.</p>
        </div>

    </div>

    <footer>
        &copy; 2025 Trà - Trang web cá nhân sử dụng Laravel
    </footer>
</body>
</html>
