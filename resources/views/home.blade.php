<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ - Giới thiệu bản thân</title>
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

        .profile {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        .profile img {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .profile-info {
            flex: 1;
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
            <h1>Xin chào! Tôi là Thanh Trà</h1>
            <p>Sinh viên Công nghệ Thông tin, đam mê lập trình web.</p>
        </div>

        <!-- Thanh điều hướng -->
        <nav>
            <a href="/">Trang chủ</a>
            <a href="/about">Giới thiệu</a>
            <a href="/contact">Liên hệ</a>
        </nav>

        <!-- Phần thông tin cá nhân -->
        <div class="profile">
            <img src="{{ asset('image/avatar.jpg') }}" alt="Avatar">

            <div class="profile-info">

                <div class="section">
                    <h2>🎯 Giới thiệu</h2>
                    <p>Tôi hiện đang là sinh viên năm 3 ngành Công Nghệ Thông Tin.</p>
                    <p>Tôi mong muốn phát triển sự nghiệp theo hướng lập trình web và học sâu hơn về backend.</p>
                </div>

                <div class="section">
                    <h2>🛠️ Kỹ năng</h2>
                    <ul>
                        <li>Ngôn ngữ: HTML, CSS, JavaScript, PHP, Python</li>
                        <li>Frameworks: Laravel, Bootstrap, Tailwind</li>
                        <li>Công cụ khác: Git, Figma, Canva</li>
                        <li>Cơ bản về WordPress, OpenCV xử lý ảnh</li>
                        <li>Làm việc nhóm, thuyết trình, viết báo cáo kỹ thuật</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>📞 Liên hệ</h2>
                    <p><strong>Email:</strong> daothanhtra081004@gmail.com</p>
                    <p><strong>Facebook:</strong> https://www.facebook.com/tea810</p>
                    <p><strong>Số Điện Thoại:</strong> 0833638353</p>
                </div>

            </div>
        </div>
    </div>

    <footer>
        &copy; 2025 Trà - Trang web cá nhân sử dụng Laravel
    </footer>
</body>
</html>
