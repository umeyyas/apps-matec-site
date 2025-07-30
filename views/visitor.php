<?php
// You can add PHP logic here if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATEC2024 Welcome</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            background-color: #000;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .logo-img {
        max-width: 180px;
        margin-bottom: 20px;
        }


        .container {
            background-color: #f0f0f0;
            border-radius: 15px;
            padding: 40px 30px;
            width: 350px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
          }

        .tagline {
            font-size: 12px;
            color: #666;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .welcome-title {
            font-size: 24px;
            color: #666;
            margin-bottom: 10px;
            font-weight: normal;
        }

        .subtitle {
            font-size: 14px;
            color: #999;
            margin-bottom: 40px;
        }

        .button {
            display: block;
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
        }

        .button-active {
            background-color: #d80000;
        }

        .button-active:hover {
            background-color: #A00D24;
            transform: translateY(-2px);
        }

        .button-disabled {
            background-color: #999;
            cursor: not-allowed;
            opacity: 0.6;
        }

        .button-disabled:hover {
            transform: none;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #5e5a5aff;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
        }

        .modal h2 {
            color: #8B1538;
            margin-bottom: 20px;
        }

        .close-btn {
            background-color: #d32f2f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .close-btn:hover {
            background-color: #b71c1c;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/assets/images/nexes_01.png" alt="NEXES Logo" class="logo-img">


        
        <div class="welcome-title">Welcome to MATEC2025</div>
        <div class="subtitle">Please select</div>
        
        <button class="button button-active" onclick="openIndexPage()">
            Public Visitor (B2C)
        </button>
        
        <button class="button button-disabled">
            Trade Visitor (B2B)
        </button>
        
        <button class="button button-disabled">
            International Visitor (B2C & B2B)
        </button>
        
        <div class="footer">
            Developed by Ardia Nexus Sdn. Bhd.
        </div>
    </div>

    <!-- Modal for Public Visitor -->
    <div id="publicModal" class="modal">
        <div class="modal-content">
            <h2>Public Visitor (B2C)</h2>
            <p>Welcome to the Public Visitor section!</p>
            <p>This would typically redirect to the public visitor registration or information page.</p>
            <button class="close-btn" onclick="closeModal()">Close</button>
        </div>
    </div>

    <script>
        function openIndexPage() {
            window.location.href = 'visitor-register-form.php';
        }

        function closeModal() {
            document.getElementById('publicModal').style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modal = document.getElementById('publicModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>
</html>