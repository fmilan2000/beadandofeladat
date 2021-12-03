<?php
$logged_in = FrontController::is_logged_in();
?>

<nav class="blue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="/assets/images/logo_card.png" alt="LEGO" align="bottom" width="254" height="70">
        <ul class="right hide-on-med-and-down">
            <li><a href="/">Főoldal</a></li>
            <li><a href="/?page=members">Partnerek</a></li>
            <li><a href="/?page=gallery">Galéria</a></li>
            <li><a href="/?page=map">Térkép</a></li>
            <li><a href="/?page=contact">Kapcsolat</a></li>
            <?php if ($logged_in): ?>
                <li><a href="/?page=login&action=logout" class="btn red">Kilépés</a></li>
            <?php else: ?>
                <li><a href="/?page=login" class="btn green">Belépés</a></li>
            <?php endif; ?>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">Mobil</i></a>
    </div>
</nav>
<?php if ($logged_in): ?>
<div class="secondary-nav blue lighten-4">
    <div class="container">
        <strong class="right">
            <i class="material-icons icon">person</i>
            Bejelentkezett:
            <?=
            $_SESSION['lastname'] . ' ' . $_SESSION['firstname'] . ' ' .
            '('. $_SESSION['username'] . ')'
            ?>

        </strong>
    </div>
</div>
<?php endif; ?>