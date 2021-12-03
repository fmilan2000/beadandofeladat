<?php
FrontController::show("layouts/header");
if (FrontController::is_logged_in()) {
    header("Location: /");
}
?>

<section id="registration">
    <h4>Regisztráció</h4>
    <article class="registration-form-wrapper">
        <div class="registration-form">
            <form action="/?page=registration&action=register" method="POST" autocomplete="off">
                <div class="input-field">
                    <input id = "username" name="username" required
                           type = "text" />
                    <label for = "comments">Felhasználónév</label>
                </div>
                <div class="input-field">
                    <input id = "lastname" name="lastname" required
                           type = "text" />
                    <label for = "comments">Vezetéknév</label>
                </div>
                <div class="input-field">
                    <input id = "firstname" name="firstname" required
                           type = "text" />
                    <label for = "comments">Keresztnév</label>
                </div>
                <div class="input-field">
                    <input id = "email" name="email" required
                           type = "email" />
                    <label for = "comments">E-mail</label>
                </div>
                <div class="input-field">
                    <input id = "password" name="password" required type = "password" />
                    <label for = "comments">Jelszó</label>
                </div>
                <button type="submit" class="btn">Küldés</button>
            </form>
        </div>
    </article>
</section>

<?php FrontController::show("layouts/footer") ?>
