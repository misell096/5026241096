<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu Utama</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .menu-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 50px;
        }

        .menu-box {
            text-align: center;
        }

        .menu-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
        }

        .menu-btn {
            width: 250px;
            padding: 15px;
            font-size: 18px;
            border-radius: 12px;
            margin: 10px;
            transition: 0.3s;
        }

        .menu-btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="menu-container">
        <div class="menu-box">
            <div class="menu-title">Menu Utama</div>
            <div>
                <a href="/pertemuan1" target="_blank" class="btn menu-btn" style="background-color:#231e8b; color:white;">
                    <b>Pertemuan 1 (Intro)</b>
                </a>
            </div>
            <div>
                <a href="/pertemuan2" target="_blank" class="btn menu-btn" style="background-color:#286334; color:white;">
                    <b>Pertemuan 2 (Robodog)</b>
                </a>
            </div>
            <div>
                <a href="/pertemuan3" target="_blank" class="btn menu-btn" style="background-color:#e8c34a; color:rgb(255, 255, 255);">
                    <b>Pertemuan 3 (Responsive)</b>
                </a>
            </div>
            <div>
                <a href="/tugaspertemuan3" target="_blank" class="btn menu-btn" style="background-color:#a3197c; color:rgb(255, 255, 255);">
                    <b>Tugas Pertemuan 3 (Berita Mudik)</b>
                </a>
            </div>
            <div>
                <a href="/pertemuan4" target="_blank" class="btn menu-btn" style="background-color:#ca4b34; color:white;">
                    <b>Pertemuan 4 (Grid)</b>
                </a>
            </div>
            <div>
                <a href="/pertemuan5" target="_blank" class="btn menu-btn" style="background-color:#922792; color:white;">
                    <b>Pertemuan 5 (Arsha)</b>
                </a>
            </div>
            <div>
                <a href="/tugaspertemuan5" target="_blank" class="btn menu-btn" style="background-color:#2e8d80; color:white;">
                    <b>Tugas Pertemuan 5 (Linktree)</b>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
