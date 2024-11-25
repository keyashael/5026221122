<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #888;
            margin-bottom: 50px;
        }

        .plans {
            display: flex;
            justify-content: space-around;
        }

        .plan {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            width: 30%;
            margin: 0 10px;
        }

        .plan h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .plan p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .plan ul {
            list-style-type: none;
            padding: 0;
        }

        .plan ul li {
            margin-bottom: 10px;
            color: #555;
        }

        .plan ul li strong {
            font-weight: bold;
        }

        .price {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff5c5c;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .btn.disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .btn.upgrade {
            background-color: #ff5c5c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Pick Your Cloud Storage Plan</h1>
        <p>Secure your files with flexible plans. Find the perfect plan for you.</p>

        <div class="plans">
            <!-- Individual Plan -->
            <div class="plan">
                <h2>Individual</h2>
                <p class="price">$8/Month</p>
                <a href="#" class="btn disabled">Current Plan</a>
                <ul>
                    <li><strong>Access</strong> to basic features</li>
                    <li><strong>5GB</strong> cloud storage</li>
                    <li><strong>Email</strong> support</li>
                    <li><strong>Weekly</strong> updates</li>
                    <li><strong>Community</strong> access</li>
                </ul>
            </div>

            <!-- Premium Plan -->
            <div class="plan">
                <h2>Premium</h2>
                <p class="price">$15/Month</p>
                <a href="#" class="btn upgrade">Upgrade</a>
                <ul>
                    <li><strong>Access</strong> to all features</li>
                    <li><strong>50GB</strong> cloud storage</li>
                    <li><strong>Priority</strong> email support</li>
                    <li><strong>Daily</strong> updates</li>
                    <li><strong>Community</strong> access + forums</li>
                </ul>
            </div>

            <!-- Gold Plan -->
            <div class="plan">
                <h2>Gold</h2>
                <p class="price">$25/Month</p>
                <a href="#" class="btn upgrade">Upgrade</a>
                <ul>
                    <li><strong>All</strong> features unlocked</li>
                    <li><strong>Unlimited</strong> cloud storage</li>
                    <li><strong>24/7</strong> customer support</li>
                    <li><strong>Real-time</strong> updates</li>
                    <li><strong>Exclusive</strong> events access</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
