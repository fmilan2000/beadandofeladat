</div>
<?php FrontController::show('layouts/sidebar'); ?>
    </div>
        </main>

<footer class="page-footer royal blue">
    <div class="container">
        <div class="row">
            <div class="col l4 s12">
                <h5 class="white-text">About:</h5>
                <p class="grey-text text-lighten-4">
                    The Internet is becoming the town square for the global village of tomorrow. - Bill Gates - 
                </p>
            </div>
            <div class="col l3 offset-l2 s12">
                <h5 class="white-text">Copyright:</h5>
                <p class="grey-text text-lighten-4">
                    ©2019 The LEGO Group. and -BOOSTWeb-. All rights reserved. Use of this site signifies your agreement to the terms of use.
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
           Készítette: Fajth Milán - IDC08C
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/assets/js/materialize.js"></script>

<?php
if (!empty($_SESSION['alert'])) {
    FrontController::alert($_SESSION['alert']);
    unset($_SESSION['alert']);
}
?>


</body>
</html>