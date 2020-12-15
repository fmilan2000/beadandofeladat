<?php
class RegistrationActions {
    public function doIndex() {
        FrontController::show('registration/index');
    }
    public function doRegister() {

        $stmt = Database::$db->prepare('INSERT INTO felhasznalok (username, firstname, lastname, email, password) VALUES (:username, :firstname, :lastname, :email, :password)');
        $stmt->execute(array(
            ':username' => $_POST['username'],
            ':firstname' => $_POST['firstname'],
            ':lastname' => $_POST['lastname'],
            ':email' => $_POST['email'],
            ':password' => $_POST['password']
        ));

        FrontController::alert('Sikeres regisztráció', 'success');
        FrontController::show('registration/index');
    }
}