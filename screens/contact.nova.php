<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>
  <style>
    /* Reset some defaults */
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

    /* Navbar */
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

    /* Responsive Navbar for small screens */
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

    /* Contact Section */
    .contact-container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .contact-container h2 {
      margin-bottom: 1rem;
      text-align: center;
      color: #4CAF50;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .contact-form label {
      font-weight: bold;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      font-size: 1rem;
    }

    .contact-form button {
      padding: 0.75rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .contact-form button:hover {
      background-color: #45a049;
    }

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">Luxid</div>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <ul id="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <!-- Contact Form -->
  <div class="contact-container">
    <h2>Contact Us</h2>
    <form class="contact-form">
      <label for="name">Name</label>
      <input type="text" id="name" placeholder="Your Name" required>

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Your Email" required>

      <label for="message">Message</label>
      <textarea id="message" rows="5" placeholder="Your Message" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>

  <script>
    function toggleMenu() {
      const nav = document.getElementById('nav-links');
      nav.classList.toggle('active');
    }
  </script>

</body>
</html>
