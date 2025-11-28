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

    /* Navbar */
    /* ============================================ */
    nav {
      background-color: #4CAF50;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: white;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }
    nav ul li a {
      text-decoration: none;
      color: white;
      font-weight: 500;
      transition: color 0.3s;
    }
    nav ul li a:hover {
      color: #e0e0e0;
    }
    /* Responsive Navbar */
    @media (max-width: 600px) {
      nav ul {
        flex-direction: column;
        gap: 0.5rem;
        display: none;
      }

      nav ul.active {
        display: flex;
      }

      nav .menu-toggle {
        display: block;
        cursor: pointer;
        color: white;
        font-size: 1.5rem;
      }
    }
    nav .menu-toggle {
      display: none;
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

  <nav>
    <div class="logo">Luxid</div>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <ul id="nav-links">
      <li><a href="/">Home</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </nav>

  || content ||

  <script>
    function toggleMenu() {
      const nav = document.getElementById('nav-links');
      nav.classList.toggle('active');
    }
  </script>
</body>
</html>
