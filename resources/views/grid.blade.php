<html>

<head>
    <title>Pricing Plan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            letter-spacing: 3px;
        }

        .pricing-card {
            background: white;
            padding: 20px;
            border: 2px solid #79767658;
            text-align: center;
            min-height: 470px;
            max-width: 280px;
            margin: auto;
        }

        .plan-name {
            font-weight: bold;
            font-size: 24px;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin-top: 60px;
        }

        .feature-list li {
            margin: 8px 0;
            color: #555;
        }

        .btn-plan {
            margin-top: 35px;
            border-radius: 0;
            width: 170px;
            padding: 10px 0;
            letter-spacing: 1px;
        }

        .btn-secondary {
            background-color: #bbbaba;
            border-color: #bbbaba;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="section-title">
            <h2><b>SELECT A PLAN</b></h2>
            <p class="text-muted">Start for free and upgrade anytime based on your needs</p>
        </div>
        <div class="row">
            <!-- Canva Free -->
            <div class="col-4">
                <div class="pricing-card">
                    <div class="plan-name">CANVA FREE</div>
                    <p class="text-muted">$0.00/year</p>
                    <button class="btn btn-secondary btn-plan">YOUR PLAN</button>
                    <ul class="feature-list">
                        <li>Drag-and-drop design editor</li>
                        <li>250,000+ free templates</li>
                        <li>100+ design formats</li>
                        <li>1 million photos and graphics</li>
                        <li>Invite friends to collaborate</li>
                        <li>5GB cloud storage</li>
                    </ul>
                </div>
            </div>
            <!-- Canva Pro -->
            <div class="col-4">
                <div class="pricing-card">
                    <div class="plan-name">CANVA PRO</div>
                    <p class="text-muted">$119.99/year</p>
                    <button class="btn btn-danger btn-plan">START PRO TRIAL</button>
                    <ul class="feature-list">
                        <li>100+ million premium stock photos</li>
                        <li>Unlimited premium templates</li>
                        <li>Brand kits for logos and colors</li>
                        <li>Magic Resize tool</li>
                        <li>Background remover</li>
                        <li>Unlimited folders</li>
                    </ul>
                </div>
            </div>
            <!-- Canva Teams -->
            <div class="col-4">
                <div class="pricing-card">
                    <div class="plan-name">CANVA FOR TEAMS</div>
                    <p class="text-muted">$149.90/year (5 people)</p>
                    <button class="btn btn-danger btn-plan">START TEAM TRIAL</button>
                    <ul class="feature-list">
                        <li>All Canva Pro features</li>
                        <li>Team collaboration tools</li>
                        <li>Brand control</li>
                        <li>Approval workflows</li>
                        <li>Shared team folders</li>
                        <li>Team templates</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
