<?php FrontController::show("layouts/header") ?>

<section>
    <h4>Főoldal</h4>
    <article>
        Hi, I'm Fajth Milán from Újhartyán. I currently work as a quality auditor for
        Sealed Air Hungary Ltd. and I learn in a Janos Neumann University.
        If you have any further questions, please feel free to contact me on the "Kapcsolat"
		page.
    </article>
    <article class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image map waves-effect waves-block waves-light">
                    <div class="activator"></div>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Térkép
                    </span>
                    <p><a href=/?page=map>Tovább</a></p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image contact waves-effect waves-block waves-light">
                    <div class="activator"></div>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Kontakt
                    </span>
                    <p><a href=/?page=contact>Tovább</a></p>
                </div>
            </div>
        </div>
    </article>
</section>

<?php FrontController::show("layouts/footer") ?>
