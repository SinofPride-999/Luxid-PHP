<div class="auth_container">
    <h2>Create Account</h2>

    <form action="/register" method="post" class="auth_form">
        <label for="firstname">Full Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="First Name">

        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="LastName" >

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Choose a Password">

        <label for="confirm">Confirm Password</label>
        <input type="password" id="confirm" name="confirmpassword" placeholder="Re-type Password">

        <button type="submit">Register</button>

        <p class="auth_note">
            Already have an account? <a href="/login">Login</a>
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
