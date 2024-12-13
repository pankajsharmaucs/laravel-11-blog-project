<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Page Not Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Reset some basic styles */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f7f7f7;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                overflow: hidden;
            }

            /* Main container */
            .container {
                text-align: center;
                padding: 20px;
            }

            /* Error box styling */
            .error-box {
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                padding: 40px;
                max-width: 500px;
                width: 100%;
                animation: slideUp 0.6s ease-out;
            }

            /* Heading and text styles */
            h1 {
                font-size: 100px;
                font-weight: 700;
                color: #808080;
                margin-bottom: 20px;
            }

            h2 {
                font-size: 24px;
                font-weight: 400;
                color: #333;
                margin-bottom: 10px;
            }

            p {
                font-size: 16px;
                color: #777;
                margin-bottom: 30px;
            }

            /* Button styles */
            .home-button {
                background-color: #0788d5;
                color: white;
                padding: 10px 30px;
                border-radius: 30px;
                text-decoration: none;
                font-size: 16px;
                font-weight: 700;
                transition: background-color 0.3s ease;
            }

            .home-button:hover {
                background-color: #ff4c2b;
            }

            /* Add animation to the box */
            @keyframes slideUp {
                0% {
                    transform: translateY(50px);
                    opacity: 0;
                }
                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

    </style>
</head>
<body>
    <div class="container">
        <div class="error-box">
            <h1>404</h1>
            <h2>Oops! Page not found</h2>
            <p>The page you're looking for might have been moved or deleted.</p>
            <a href="/" class="home-button">Go to Home</a>
        </div>
    </div>
</body>
</html>
