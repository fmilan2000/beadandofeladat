<?php
FrontController::show("layouts/header");
$stmt = Database::$db->prepare('SELECT * FROM messages');
$stmt->execute();
$countMessages = $stmt->rowCount();
?>

<section>
    <h4>Kapcsolat</h4>
    <article class="form-wrapper row">
        <div class="form-content col m4">
            <form action="/?page=contact&action=send" id="form" method="POST" onsubmit="return validateForm(event)" autocomplete="off">
                <div class="input-field">
                    <input id = "sender" name="sender" required
                           type = "text"
                    placeholder="Az Ön neve" />
                    <label for="sender">Feladó</label>
                </div>
                <div class="input-field">
                    <input type="text" id="email" required name="email"
                    placeholder="Az Ön e-mail címe">
                    <label for="email">E-mail</label>
                </div>
                <div class="input-field">
                    <textarea name="message"
                              required
                              class="materialize-textarea"
                              placeholder="Ide írja az üzenetet"
                              id="message"
                              cols="30"
                              rows="10"></textarea>
                    <label for="message">Üzenet</label>
                </div>
                <button type="submit" class="btn">Küldés</button>
            </form>
        </div>
        <div class="col m3 offset-m3">
            <a href="/?page=contact&action=messages" class="btn btn-block btn-large blue">
                <strong>Üzenetek<span class="round-badge"><?=$countMessages?></span></strong>
            </a>
        </div>
    </article>

    <h4>Fajth Milán</h4>
    <article>
        <div class="entry-content">
            <p>A kedves érdeklődő(-k) részére az alábbi helyeken, elérhetőségeken állok rendelkezésre:</p>
            <ul>
                <li><strong>Cím: 2367 Újhartyán, Epres u. 16</strong></li>
                <li><strong>Mobil: 70 387-9168</strong></li>
                <li><strong><a href="mailto:fajth.milan2000@gmail.com">E-mail: fajth.milan2000@gmail.com</a></strong></li>
            </ul>
            <h5><strong>Fotóm:</strong></h5>
            <p><img class="alignnone size-medium wp-image-335" src="/assets/images/milan_card.jpg" alt="Fajth Milán" width="299" height="449" sizes="(max-width: 650px) 100vw, 300px"><br>

                <b>Munkaidőm:</b></p>
            <ul>
                <li>Hétfő: 7.30-16.00</li>
                <li>Kedd: 7.30-16.00</li>
                <li>Szerda: 7.30-16.00</li>
                <li>Csütörtök: 7.30-16.00</li>
                <li>Péntek: 7.30-13.30</li>
            </ul>
            <p>&nbsp;</p>
            <table style="height: 304px;" border="0" width="687" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td class="tbl0"><b>Név</b></td>
                    <td class="tbl0"><b>Média</b></td>
                    <td class="tbl0"><b>Elérhetőség</b></td>
                </tr>
                <tr>
                    <td class="tbl3">LEGO</td>
                    <td class="tbl3">Facebook</td>
                    <td class="tbl3"><li><strong><a href="https://www.facebook.com/LEGO" target="_blank">https://www.facebook.com/LEGO</a></strong></li></td>
                </tr>
                <tr>
                    <td class="tbl2">LEGO</td>
                    <td class="tbl2">Twitter</td>
                    <td class="tbl2"><li><strong><a href="https://twitter.com/LEGO_Group" target="_blank">https://twitter.com/LEGO_Group</a></strong></li></td>
                </tr>
                <tr>
                    <td class="tbl3">LEGO</td>
                    <td class="tbl3">Instagram</td>
                    <td class="tbl3"><li><strong><a href="https://www.instagram.com/lego" target="_blank">https://www.instagram.com/lego</a></strong></li></td>
                </tr>
                <tr>
                    <td class="tbl2">LEGO</td>
                    <td class="tbl2">YouTube</td>
                    <td class="tbl2"><li><strong><a href="https://m.youtube.com/user/LEGO" target="_blank">https://m.youtube.com/user/LEGO</a></strong></li></td>
                </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </article>
</section>

<script>
    function validateForm(e) {

        var email = document.querySelector('#email'),
            emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (emailPattern.test(String(email.value).toLowerCase())) {
            if (email.classList.contains('red-text')) {
                email.classList.remove('red-text');
            }
            email.classList.add('green-text');
        } else {
            if (email.classList.contains('green-text')) {
                email.classList.remove('green-text');
            }
            email.classList.add('red-text');

            return false;
        }
    }
</script>
<?php FrontController::show("layouts/footer") ?>
