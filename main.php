<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome | Event Management</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body, html {
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
    }
    .hero {
      height: 100vh;
      background: url('https://images.unsplash.com/photo-1524985069026-dd778a71c7b4?fit=crop&w=1950&q=80') no-repeat center center/cover;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 0 2px 6px rgba(0, 0, 0, 0.6);
      text-align: center;
      padding: 0 20px;
    }
    .hero h1 {
      font-size: 3em;
      margin-bottom: 0.3em;
    }
    .hero p {
      font-size: 1.2em;
      margin-bottom: 1.5em;
    }
    .hero a.button {
      padding: 12px 30px;
      background-color: #007BFF;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-size: 1.1em;
      transition: background 0.3s ease;
    }
    .hero a.button:hover {
      background-color: #0056b3;
    }

    @media (max-width: 600px) {
      .hero h1 {
        font-size: 2em;
      }
      .hero p {
        font-size: 1em;
      }
    }
  </style>
</head>
<body>

  <div class="hero">
    <h1>Welcome to EVENT MANAGEMENT</h1>
    <p>Expertly Crafted Events That Make Lasting Impressions</p>
    <a href="event.php" class="button">Visit Events</a>
  </div>

</body>
</html>
