<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATEC2025 Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .form-container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px;
            width: 100%;
            max-width: 350px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        
        .logo {
            text-align: center;
            margin-bottom: 20px;
          }
          .logo img {
            max-width: 100%;
            height: auto;
          }

        
        .logo h1 {
            color: #722F37;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 2px;
        }
        
        .logo .subtitle {
            color: #888;
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .welcome {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .welcome h2 {
            color: #333;
            font-size: 18px;
            margin-bottom: 8px;
            font-weight: normal;
        }
        
        .welcome p {
            color: #666;
            font-size: 12px;
            line-height: 1.4;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            color: #666;
            font-size: 11px;
            margin-bottom: 4px;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 13px;
            background-color: white;
        }
        
        .form-group input::placeholder {
            color: #bbb;
            font-size: 11px;
        }
        
        .checkbox-group {
            margin-bottom: 15px;
        }
        
        .checkbox-group label {
            color: #666;
            font-size: 11px;
            margin-bottom: 8px;
            display: block;
        }
        
        .checkbox-item {
            display: flex;
            align-items: center;
            margin-bottom: 6px;
        }
        
        .checkbox-item input[type="checkbox"] {
            width: 14px;
            height: 14px;
            margin-right: 8px;
            accent-color: #722F37;
        }
        
        .checkbox-item span {
            color: #666;
            font-size: 10px;
        }
        
        .submit-btn {
            width: 100%;
            background-color: #d80000;
            color: white;
            padding: 12px;
            border: none;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 12px;
        }
        
        .submit-btn:hover {
            background-color: #A00D24;
        }
        
        .footer {
            text-align: center;
            color: #aaa;
            font-size: 9px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="logo">
            <img src="/assets/images/nexes_01.png" alt="NEXES Logo" class="logo-img">
        </div>
        
        <div class="welcome">
            <h2>Welcome to MATEC2025</h2>
            <p>Please fill in to your details and start the adventure</p>
        </div>
        
        <form id="registrationForm">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="fullName" placeholder="Enter your full name" required>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" name="phone" placeholder="Enter your phone number" required>
            </div>
            
            <div class="form-group">
                <label>Identification Number</label>
                <input type="text" name="idNumber" placeholder="Enter your identification number" required>
            </div>
            
            <div class="checkbox-group">
                <label>How did you find out about this event?</label>
                
                <div class="checkbox-item">
                    <input type="checkbox" id="social" name="source" value="social">
                    <span>Social Media (Facebook, X, Instagram, etc.)</span>
                </div>
                
                <div class="checkbox-item">
                    <input type="checkbox" id="newsletter" name="source" value="newsletter">
                    <span>Emails or Newsletters</span>
                </div>
                
                <div class="checkbox-item">
                    <input type="checkbox" id="calendar" name="source" value="calendar">
                    <span>Events Calendar (Online or Physical)</span>
                </div>
                
                <div class="checkbox-item">
                    <input type="checkbox" id="ads" name="source" value="ads">
                    <span>Advertisements (Online or Offline)</span>
                </div>
                
                <div class="checkbox-item">
                    <input type="checkbox" id="celebrity" name="source" value="celebrity">
                    <span>Celebrity or Influencer Endorsements</span>
                </div>
                
                <div class="checkbox-item">
                    <input type="checkbox" id="books" name="source" value="books">
                    <span>Books or Articles</span>
                </div>
                
                <div class="checkbox-item">
                    <input type="checkbox" id="friends" name="source" value="friends">
                    <span>Friend, Family or Colleague</span>
                </div>
            </div>
            
            <button type="submit" class="submit-btn">Submit</button>
        </form>
        
        <script>
            document.getElementById('registrationForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = new FormData(this);
                const data = {};
                
                // Get regular form fields
                for (let [key, value] of formData.entries()) {
                    if (key === 'source') {
                        if (!data.sources) data.sources = [];
                        data.sources.push(value);
                    } else {
                        data[key] = value;
                    }
                }
                
                console.log('Registration data:', data);
                
                window.location.href = 'thankyou.php';
            });
        </script>
        
        <div class="footer">
            Developed by Ardia Nexus Sdn. Bhd.
        </div>
    </div>
</body>
</html>