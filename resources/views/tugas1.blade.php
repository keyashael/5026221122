<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@Aesthete Yourlife</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Space Mono', sans-serif;
            background-color: #E0F6FF;
            position: relative;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .profile-pic {
            border-radius: 50%;
            width: 96px;
            height: 96px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 20px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 10px;
        }

        p {
            font-size: 14px;
            color: #33333381;
            margin-bottom: 30px;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0px;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        a.button {
            background-color: #E0F6FF;
            color: #333333;
            text-decoration: none;
            padding: 15px;
            border: 0.5px solid #bdbdbd;
            border-radius: 25px;
            font-size: 14px;
            transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 100%;
            width: calc(100% - 40px);
            margin: 0 auto 10px;
            position: relative;
            user-select: none;
        }

        @media (max-width: 600px) {
            a.button {
                width: calc(100% - 30px);
            }
            .share-profile {
                top: 120px;
                right: 10px;
            }
        }

        a.button .share-icon {
            position: absolute;
            top: 55%;
            right: 10px;
            transform: translateY(-50%);
        }

        a.button:hover {
            transform: scale(1.05);
        }

        .share-profile {
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            position: fixed;
            top: 20px;
            right: 20px;
            left: auto;
            cursor: pointer;
            background-color: rgba(26, 26, 26, 0.35);
            transition: all 0.5s ease-in-out;
            opacity: 100%;
            font-size: 14px;
            color: #ffffff;
        }

        .share-profile:hover {
            background-color: rgba(26, 26, 26, 0.25);
        }

        .share-profile:active {
            background-color: #808080;
        }

        .share-profile:focus {
            outline: none;
            border-color: #D2D2D2;
        }

        .footer {
            margin-top: 40px;
            font-family: 'Sans-Serif', sans-serif;
        }

        .footer-cta {
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.75);
            padding: 10px;
            border-radius: 25px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 8px;
            width: fit-content;
            margin: 0 auto;
            font-family: 'Sans-Serif', sans-serif;
        }

        .footer-content {
            font-family: 'Sans-Serif', sans-serif;
            display: flex;
            align-items: center;
        }

        .footer-text {
            margin-left: 10px;
            font-size: 14px;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://ugc.production.linktr.ee/zfnakHDtRR2Ent4RkvBF_PrzJN4nSPOgebqWl?io=true&size=avatar-v3_0" alt="Aesthete Yourlife" class="profile-pic">
        <h1>@ Aesthete Yourlife</h1>
        <p>Your life will be colorful & aesthetic with us</p>

        <div class="button-container">
            <a href="https://shope.ee/40E0fN5lPE?share_channel_code=1" class="button" target="_blank">Shopee Aesthete Yourlife
            </a>
            <a href="https://www.tiktok.com/@aesthete.yourlife?lang=en" class="button" target="_blank">Tiktok Aesthete Yourlife
            </a>
            <a href="https://www.instagram.com/aesthete.yourlife?igsh=MW9menpkYmsxNmx" class="button" target="_blank">Instagram Aesthete Yourlife
            </a>
            <a href="https://s.lazada.co.id/l.13mA" class="button" target="_blank">Lazada
            </a>
        </div>
    </div>
</body>
</html>
