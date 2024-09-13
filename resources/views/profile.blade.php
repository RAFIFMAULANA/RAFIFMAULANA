<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            margin-top: 15px;
        }

        .profile-info p {
            margin: 10px 0;
            padding: 10px;
            border-radius: 8px;
            color: #fff;
        }

        .name {
            background-color: #333333;
            font-size: 18px;
            font-weight: bold;
        }

        .kelas {
            background-color: #333333;
            font-size: 16px;
            font-weight: bold;
        }

        .npm {
            background-color: #333333;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-img">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/8f/Shunkosai_Hokuei_Obake.jpg">
        </div>
        <div class="profile-info">
            <p class="name">Rafif Maulana</p>
            <p class="kelas">D</p>
            <p class="npm">2217051023</p>
        </div>
    </div>
</body>
</html>
