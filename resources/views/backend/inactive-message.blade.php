<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Activation</title>

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #e0eafc, #cfdef3) fixed;
        }

        /* Message container and box */
        .message-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }

        .message-box {
            background-color: #fff;
            padding: 30px 50px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 450px;
            position: relative;
            border: 1px solid #f0f0f0;
            animation: fadeIn 1.2s ease-in-out;
        }

        /* Title */
        .message-box h2 {
            font-size: 26px;
            color: #333;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* Message text */
        .message-box p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* Icon styling */
        .icon {
            font-size: 50px;
            color: #3498db;
            margin-top: 20px;
            animation: pulse 1.5s infinite ease-in-out;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Pulse animation for the icon */
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .message-box {
                padding: 20px 30px;
            }

            .message-box h2 {
                font-size: 22px;
            }

            .message-box p {
                font-size: 16px;
            }

            .icon {
                font-size: 40px;
            }
        }

    </style>

    <script src="https://kit.fontawesome.com/7b81d78297.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="message-container">
    <div class="message-box">
        <h2>Account Activation Pending</h2>
        <p>Your account needs to be activated. Please wait while the admin reviews your details.</p>
        <div class="icon">
            <a href="{{ route('home') }}"> <i class="fas fa-sync-alt"></i> </a>
        </div>
    </div>
</div>
</body>
</html>
