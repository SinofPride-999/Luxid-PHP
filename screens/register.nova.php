<div class="auth_container">
    <h2>Create Account</h2>

    <?php $form = \engine\system\form\Form::begin('', "post") ?>
        <?= $form->field($entity, 'firstname') ?>
        <?= $form->field($entity, 'lastname') ?>
        <?= $form->field($entity, 'email') ?>
        <?= $form->field($entity, 'password')->passwordField() ?>
        <?= $form->field($entity, 'confirmpassword')->passwordField() ?>

        <button type="submit">Register</button>
        <p class="auth_note">Already have an account? <a href="/login">Login</a></p>
    <?php echo \engine\system\form\Form::end() ?>

    <!-- <form action="/register" method="post" class="auth_form">
        <label for="firstname">Full Name</label>
        <input
            type="text"
            id="firstname"
            name="firstname"
            placeholder="First Name"
            value="<?php echo $entity->firstname ?? '' ?>"
            class="<?= $entity->hasError('firstname') ? 'error' : '' ?>"
        >

        <div class="invalid_feedback" style="display: <?= $entity->hasError('firstname') ? 'block' : 'none' ?>;">
            <?= $entity->getFirstError('firstname') ?>
        </div>

        <label for="lastname">Last Name</label>
        <input
            type="text"
            id="lastname"
            name="lastname"
            placeholder="LastName"
        >

        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Your Email"
        >

        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Choose a Password"
        >

        <label for="confirm">Confirm Password</label>
        <input
            type="password"
            id="confirm"
            name="confirmpassword"
            placeholder="Re-type Password">

        <button type="submit">Register</button>

        <p class="auth_note">
            Already have an account? <a href="/login">Login</a>
        </p>
    </form> -->

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

    .invalid_feedback {
    font-size: 0.85rem;
    color: #e63946;
    margin-top: -8px;
    margin-bottom: 5px;
    padding-left: 2px;
    display: none;
}

input.error {
    border-color: #e63946;
    background-color: #ffe5e5;
}

input.error:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(230, 57, 70, 0.2);
}
</style>
