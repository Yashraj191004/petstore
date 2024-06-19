<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: lightcyan;
        }

        .box {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 40px; 
            text-align: center;
            max-width: 500px; 
            width: 100%;
            animation: fadeInUp 0.5s ease;
        }

        h1 {
            color: black;
            margin-bottom: 20px;
        }

        button {
            background-color: lightgreen;
            color: white;
            padding: 15px 30px; 
            border: none;
            border-radius: 8px; 
            cursor: pointer;
            margin: 10px; 
            transition: all 0.3s ease;
            font-size: 18px; 
        }

        button:hover {
            background-color: darkcyan;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Login Successful!</h1>
        <button onclick="window.location.href='index.html'">Go to Main Website</button>
        <button onclick="logout()">Logout</button>
    </div>

    <script>
        function logout() {

            window.location.href = 'logout.php';
        }
    </script>
</body>
</html>
