<?php
FrontController::show("layouts/header");

$stmt = Database::$db->prepare('SELECT * FROM messages');
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section>
    <h4>Üzenetek</h4>
    <article class="row" id="contact-messages">
        <?php if($messages): ?>
        <table class="striped">
            <thead>
            <tr>
                <th>Feladó</th>
                <th>E-mail</th>
                <th>Üzenet</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($messages as $message): ?>
                <tr>
                    <td><?=$message['sender']?></td>
                    <td><?=$message['email']?></td>
                    <td><?=$message['message']?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <div class="m6 col">
            <h5>Nincs elküldött üzenet!</h5>
        </div>
        <?php endif; ?>

        <br>
        <a href="/?page=contact" class="btn blue">Vissza</a>
    </article>
</section>

<?php FrontController::show("layouts/footer") ?>
