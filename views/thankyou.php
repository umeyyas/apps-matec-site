<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <style>
    body {
  font-family: 'Segoe UI', sans-serif;
  background: #000000;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

.container {
  background: white;
  padding: 40px 30px;
  border-radius: 15px;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
  width: 330px;
}

.logo {
  display: block;
  margin: 0 auto 10px;
  max-width: 160px;
}

h2 {
  text-align: center;
  margin-bottom: 8px;
  color: #333;
}

.subtitle {
  text-align: center;
  color: #777;
  font-size: 14px;
  margin-bottom: 25px;
}

label {
  display: block;
  margin-top: 15px;
  font-size: 14px;
  color: #444;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 6px;
  margin-top: 5px;
  font-size: 14px;
}

.tags {
  display: flex;
  flex-direction: column;
  gap: 5px;
  margin-top: 10px;
}

.tags span {
  background: #f5f5f5;
  border-radius: 999px;
  padding: 5px 12px;
  font-size: 13px;
  color: #555;
}

.boxed-button {
  width: 100px;
  height: 30px;
  background-color: #d80000;
  color: white;
  border: none;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s ease;
  text-align: center;
  vertical-align: middle;
}

.boxed-button:hover {
  background-color: #b30000;
}


footer {
  margin-top: 20px;
  text-align: center;
  font-size: 12px;
  color: #aaa;
}

    .container {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>🎉 Thank You for Registering!</h2>
    <p>We've received your details and look forward to seeing you at MATEC2025.</p>
      <a href="visitor.php">
        <button class="boxed-button" type="button">Go Back</button>
      </a>
  </div>
</body>
</html>
