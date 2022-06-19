<section class="formulaire">
    <form method="POST">
        <h2>Formulaire d'inscription</h2>

        <?php if (isset($errors) && in_array(Users::FIRSTNAME_INVALID, $errors)) : ?>
            <p>Invalid firstname!</p>
        <?php endif ?>
        <input type="text" name="firstname" placeholder="Firstname">

        <?php if (isset($errors) && in_array(Users::LASTNAME_INVALID, $errors)) : ?>
            <p>Invalid lastname!</p>
        <?php endif ?>
        <input type="text" name="lastname" placeholder="Lastname">

        <?php if (isset($errors) && in_array(Users::PSEUDO_INVALID, $errors)) : ?>
            <p>Invalid pseudo!</p>
        <?php endif ?>
        <input type="text" name="pseudo" placeholder="Pseudo">
        
        <?php if (isset($errors) && in_array(Users::PASSWORD_INVALID, $errors)) : ?>
            <p>Invalid password!</p>
        <?php endif ?>
        <input type="text" name="password" placeholder="Password">

        <?php if (isset($errors) && in_array(Users::EMAIL_INVALID, $errors)) : ?>
            <p>Invalid email!</p>
        <?php endif ?>
        <input type="email" name="email" placeholder="Email">

        <input type="phone" name="phone" placeholder="Phone">
        <textarea name="biographie" cols="30" rows="10" placeholder="Tell your story."></textarea>
        <button type="submit">Submit</button>
    </form>
    <?php if (isset($sucess)) : ?>
        <div>
            <?= $sucess; ?>
        </div>
    <?php endif ?>
</section>