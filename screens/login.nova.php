<div class="auth_container">
    <h2>Welcome Back</h2>

    <form action="/login" method="post" class="auth_form">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your Password">

        <button type="submit">Login</button>

        <p class="auth_note">
            Don't have an account? <a href="/register">Register</a>
        </p>
    </form>
</div>

<style>
    .auth_container {
        max-width: 400px;
        margin: 40px auto;
        padding: 20px;
        border-radius: 8px;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 70vh;
    }

    .auth_container h2 {
        padding-bottom: 15px;
        color: #4CAF50;
    }

    .auth_form {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .auth_form input, .auth_form button {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        width: 100%;
    }

    .auth_form button {
        background: #4CAF50;
        color: #fff;
        cursor: pointer;
    }

    .auth_form button:hover {
        background: #555;
    }

    .auth_note {
        text-align: center;
        margin-top: 10px;
    }
</style>
