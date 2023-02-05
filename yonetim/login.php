

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $site_name ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/media/image/favicon.png" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="./vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="./assets/css/app.min.css" type="text/css">
</head>

<body class="form-membership">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper">

        <!-- logo -->
        <div id="logo">
            <img src="../images/logo.png" alt="image" width="160">
        </div>
        <!-- ./ logo -->


        <h5>Giris Yap</h5>
        <?php
        if ($_POST) {
            include('db/db.php');
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (isset($username) && isset($password)) {
                $getUsername = $dbh->prepare('SELECT username from admins where username = :username');
                $getUsername->execute(['username' => $username]);
                $usernameFetch = $getUsername->fetch();
                if (empty($usernameFetch) || $usernameFetch == null) { //admin username control
                    echo '<div class="alert alert-danger" role="alert">Böyle bir yönetici bulunmuyor.</div>';
                } else { //username is true. look other paramethers.
                    $getPassword = $dbh->prepare('SELECT password FROM admins where username = :username and password = :password');
                    $getPassword->execute([
                        'username' => $username,
                        'password' => md5($password)
                    ]);
                    $passwordFetch = $getPassword->fetch();
                    if ($passwordFetch == null || empty($passwordFetch)) { //invalid password
                        echo '<div class="alert alert-danger" role="alert">Girilen sifre hatali. Lutfen tekrar deneyiniz..</div>';
                        header("Refresh:3");
                    } else {
                        //successfull login.
                        //now get data from user for setting session variables
                        $getFullData = $dbh->prepare('SELECT * from admins where username = :username and password = :password');
                        $getFullData->execute([
                            'username' => $username,
                            'password' => md5($password)
                        ]);
                        $fullFetch = $getFullData->fetch();

                        //update admins table for last login at and last login ip
                        $last_login_ip = 1; //update later
                        $updateSQL = $dbh->prepare('UPDATE admins SET last_login_at = :last_login_at, last_login_ip = :last_login_ip where username = :username');
                        try {
                            $updateSQL->execute([
                                'last_login_at' => date('Y-m-d H:i:s'),
                                'last_login_ip' => $last_login_ip,
                                'username' => $username
                            ]);
                            echo '<div class="alert alert-success" role="alert">Başarıyla giriş yapıldı. Yönlendiriliyorsunuz..</div>';
                            $_SESSION['username'] = $fullFetch['username'];
                            $_SESSION['admin_email'] = $fullFetch['admin_email'];
                            $_SESSION['admin_role'] = $fullFetch['admin_role'] == 1 ? 'senior' : 'normal';
                            // var_dump($_SESSION);
                            header("Refresh:2;url=index.php");
                        } catch (PDOException $e) {
                            echo 'Bir hata ile karsilastik. Lutfen admin ile iletisime geciniz</br>';
                            echo 'Error Code : ' . $e->getMessage();
                            header("Refresh:3");
                        }
                    }
                }
            }
        }
        ?>
        <!-- form -->
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username or email" required autofocus name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required name="password">
            </div>
            <div class="form-group d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block">Sign in</button>
            <hr>
        </form>
        <!-- ./ form -->


    </div>

    <!-- Plugin scripts -->
    <script src="./vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="./assets/js/app.min.js"></script>
</body>

</html>