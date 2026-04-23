<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background-color: #232323;
            color: white;
            text-align: center;
        }

        .container {
            max-width: 550px;
            margin: 40px auto 0;
            padding: 20px;
            background-color: black;
            border-radius: 20px 20px 0 0;
            position: relative;
        }

        /* Profile */
        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 50px;
        }

        .username {
            font-size: x-large;
            font-weight: bold;
            margin-top: 10px;
        }

        .bio {
            font-size: medium;
            color: #ffffff;
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* Link card */
        .link-card {
            display: flex;
            align-items: center;
            background: #ffffff;
            color: grey;
            text-decoration: none;
            padding: 10px;
            margin: 10px 10px;
            position: relative;

        }

        .link-card:hover {
            background: #f1f0f0;
        }

        .link-card img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
        }

        .link-text {
            flex: 1;

            padding-right: 30px;
        }

        /* Icon titik tiga */
        .menu-btn {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            background: transparent;
            color: #555;
            cursor: pointer;
            border-radius: 50%;
        }

        .menu-btn:hover {
            opacity: 1;
            background: #0000001a;
        }

        /* Cabang */
        .title {
            font-weight: 500;
        }

        /* Detail lokasi */
        .desc {
            color: #bdbcbc;
            font-size: small;
            font-weight: 500;
            line-height: 1.2;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            line-clamp: 1;
        }

        /* Icon atas */
        .top-icons {
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
        }

        .icon-btn {
            position: absolute;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #ffffffb3;
            color: black;
            border: 1px solid #ffffff66;
            backdrop-filter: blur(5px);
            cursor: pointer;
            transition: 0.2s;
        }

        .icon-btn:hover {
            background: #ffffff;
        }

        .icon-btn:active {
            transform: scale(0.95);
        }

        /* Icon atas kiri */
        .icon-btn:first-child {
            left: 20px;
        }

        /* Icon atas kanan */
        .icon-btn:last-child {
            right: 20px;
        }

        /* Join Linktree */
        .cta-button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: fit-content;
            max-width: 320px;
            margin: 70px auto 30px;
            padding: 15px 15px;
            background-color: #ffffff;
            color: #000;
            border: 1px solid #ddd;
            border-radius: 9999px;
            text-decoration: none;
            font-weight: bold;
            font-size: medium;
            box-shadow: 0px 4px 8px #00000033;
            transition: all 0.2s ease-in-out;
        }

        .cta-button:hover {
            background-color: #f2f2f2;
            border-color: #ccc;
        }

        .cta-button:active {
            transform: scale(0.98);
        }

        /* Footer */
        .footer-links {
            text-align: center;
            margin-bottom: 30px;
            font-size: x-small;
            color: #ffffff;
        }

        .footer-links a {
            color: #ffffff;
            font-weight: 600;
            text-decoration: none;
            margin: 0 2px;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="top-icons">
            <!-- Icon atas kiri -->
            <div class="icon-btn">
                <svg viewBox="0 0 28 28" width="18" height="18">
                    <path
                        d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                        fill="currentColor" />
                </svg>
            </div>
            <!-- Icon atas kanan -->
            <div class="icon-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    viewBox="0 0 256 256">
                    <path
                        d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z">
                    </path>
                </svg>
            </div>
        </div>
        <!-- Profile -->
        <div class="profile">
            <img src="assets linktree/logo photoism.webp" alt="profile">
            <div class="username">@photoism_idn</div>
            <div class="bio">Photoism Indonesia Official Keep yourself alive at Photoism</div>
        </div>
        <!-- Isi -->
        <a href="https://maps.app.goo.gl/xyFtm1PGdLfzE1557" class="link-card">
            <img src="assets linktree/photoism mall taman anggrek.webp" alt="">
            <div class="link-text">
                <div class="title">Photoism Mall Taman Anggrek</div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor" />
                </svg>
            </button>
        </a>
        <a href="https://maps.app.goo.gl/Q7N15B8DXnYi4gUf6" class="link-card">
            <img src="assets linktree/photoism supermall karawaci.webp" alt="">
            <div class="link-text">
                <div class="title">Photoism Supermall Karawaci</div>
                <div class="desc">
                    <svg viewBox="0 0 32 32" width="16" height="16" style="vertical-align: middle;">
                        <path fill="currentColor"
                            d="M16 3a9 9 0 0 0-9 9c0 6.75 9 17 9 17s9-10.25 9-17a9 9 0 0 0-9-9Zm0 12.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z">
                        </path>
                    </svg>
                    Supermal Karawaci, Jl. Boulevard Diponegoro No.105, Bencongan, Kecamatan Kelapa Dua,
                    Kabupaten Tangerang, Banten 15810, Indonesia
                </div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor" />
                </svg>
            </button>
        </a>
        <a href="https://maps.app.goo.gl/b5pU9H3wkdfSHHVM6" class="link-card">
            <img src="assets linktree/photoism aeon mall deltamas.webp" alt="">
            <div class="link-text">
                <div class="title">Photoism Aeon Mall Deltamas</div>
                <div class="desc">
                    <svg viewBox="0 0 32 32" width="16" height="16" style="vertical-align: middle;">
                        <path fill="currentColor"
                            d="M16 3a9 9 0 0 0-9 9c0 6.75 9 17 9 17s9-10.25 9-17a9 9 0 0 0-9-9Zm0 12.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z">
                        </path>
                    </svg>
                    Jl. Ganesha Boulevard, Kota Deltamas, Kabupaten Bekasi
                </div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor" />
                </svg>
            </button>
        </a>
        <a href="https://maps.app.goo.gl/EpaBj7pfWzrK5gzNA" class="link-card" target="_blank">
            <img src="assets linktree/photoism bintaro xchange mall 1.webp" alt="">
            <div class="link-text">
                <div class="title">Photoism Bintaro Xchange Mall 1</div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor" />
                </svg>
            </button>
        </a>
        <a href="https://maps.app.goo.gl/kCSeGE6MvBYTpHwNA" class="link-card" target="_blank">
            <img src="assets linktree/photoism living word denpasar.webp" alt="">
            <div class="link-text">
                <div class="title">Photoism Living World Denpasar</div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor" />
                </svg>
            </button>
        </a>
        <!-- Join Linktree -->
        <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=photoismid"
            class="cta-button">
            <span>Join photoismid on Linktree</span>
        </a>
        <!-- Footer -->
        <div class="footer-links">
            <a href="#">Cookie Preferences</a>
            <span>•</span>
            <a href="#">Report</a>
            <span>•</span>
            <a href="#">Privacy</a>
            <span>•</span>
            <a href="#">Explore</a>
        </div>
    </div>
</body>

</html>
