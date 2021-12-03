<?php FrontController::show("layouts/header") ?>

<section>
    <h4>Galéria</h4>
    <div class="row">
        <article class="col m12 gallery-section">
            <h4>Képek</h4>
            <div class="upload-images">
                <form action="/?page=gallery&action=upload" method="post" enctype="multipart/form-data">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Tallózás</span>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Egy vagy több kép feltöltése">
                        </div>
                    </div>
                    <input type="submit" class="btn" value="Fájlok feltöltése" name="submit">
                </form>
            </div>
            <div class="row">
                <?php define('IMAGEPATH', 'assets/uploads/') ?>

                <?php foreach (glob(IMAGEPATH.'*') as $filename) : ?>
                <div class="col m4">
                    <div class="card">
                        <div class="card-image">
                            <div class="gallery-img"
                                 style="background-image: url('assets/uploads/<?=basename($filename)?>') ">
                            </div>
                        </div>
                        <div class="card-content">
                            <span><?=basename($filename)?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach ;?>
            </div>
        </article>
        <article class="col m12 gallery-section">
            <h4>YouTube video:</h4>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MYn7cB1sgFY?controls=1" frameborder="0" allow="accelerometer;
			autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
			</iframe>
        </article>
        <article class="col m12 gallery-section">
            <h4>Helyi HTML5 video:</h4>
            <video width="560" height="315" controls>
                <source src="/assets/video/LEGO Boost.mp4" type="video/mp4">
                A böngésző nem támogatja a HTML5 videókat.
            </video>
        </article>
    </div>
</section>

<?php FrontController::show("layouts/footer") ?>
