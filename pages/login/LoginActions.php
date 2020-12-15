<?php
class LoginActions {
    public function doIndex() {
        FrontController::show('login/index');
    }

    public function doLogin() {
        session_start();
        if ( ! empty( $_POST ) ) {
            if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
                // Getting submitted user data from database

                $stmt = Database::$db->prepare("SELECT * FROM felhasznalok WHERE username = :username");
                $stmt->execute(array(
                   ':username' => $_POST['username'],
                ));
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verify user password and set $_SESSION
                if ( $_POST['password'] == $user["password"] ) {
                    $_SESSION['user_id'] = $user["id"];
                    $_SESSION['username'] = $user["username"];
                    $_SESSION['firstname'] = $user["firstname"];
                    $_SESSION['lastname'] = $user["lastname"];
                    $_SESSION['logged_in'] = true;
                    $_SESSION['alert'] = "Sikeres bejelentkezés";
                } else {
                    $_SESSION['alert'] = "Rossz felhasználónév vagy jelszó";
					echo "Rossz felhasználónév vagy jelszó";
                }
            }
        }

        header("Location: /");
    }

    public function doLogout() {
        session_start();
        session_destroy();

        header("Location: /?page=login");
    }
}