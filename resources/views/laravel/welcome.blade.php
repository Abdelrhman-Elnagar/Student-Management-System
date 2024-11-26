<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1c1c1c, #2c3e50), 
                        url('https://source.unsplash.com/1920x1080/?nature,mountains') no-repeat center center/cover;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .magic-button {
            position: relative;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
            background: transparent;
            border: 2px solid white;
            border-radius: 50px;
            cursor: pointer;
            overflow: hidden;
            transition: color 0.3s ease-in-out;
        }

        .magic-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #ff512f, #f09819, #ff512f);
            background-size: 200%;
            border-radius: 50px;
            z-index: -1;
            transition: all 0.3s ease-in-out;
            transform: scale(0);
            opacity: 0.6;
        }

        .magic-button:hover {
            color: black;
        }

        .magic-button:hover::before {
            transform: scale(1.2);
        }

        .magic-button:active {
            transform: translateY(4px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <!-- Use Laravel's route helper -->
    <button class="magic-button" onclick="window.location.href='{{ route('student.index') }}';">Go to HOme Page</button>
</body>
</html>
