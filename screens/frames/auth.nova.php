<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxid Framework</title>
  <style>
    /* Reset defaults */
    /* ============================================ */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    body {
      background-color: #f9f9f9;
      color: #333;
    }
    /* ============================================ */

    /* Home */
    /* ============================================ */
    .home_container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .home_container h1 {
      text-align: center;
      margin-bottom: 1rem;
      color: #4CAF50;
    }
    .home_container p {
      line-height: 1.6;
      text-align: center;
      font-size: 1.1rem;
    }
    /* ============================================ */

    /* Contact */
    /* ============================================ */
    .contact_container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .contact_container h2 {
      margin-bottom: 1rem;
      text-align: center;
      color: #4CAF50;
    }
    .contact_form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    .contact_form label {
      font-weight: bold;
    }
    .contact_form input,
    .contact_form textarea {
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      font-size: 1rem;
    }
    .contact_form button {
      padding: 0.75rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .contact_form button:hover {
      background-color: #45a049;
    }
    /* ============================================ */
  </style>
</head>
<body>

  || content ||

  <script>
    function toggleMenu() {
      const nav = document.getElementById('nav-links');
      nav.classList.toggle('active');
    }
  </script>
</body>
</html>
