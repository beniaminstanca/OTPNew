<!DOCTYPE html>
<html>

<head>
    <mrta charset="utf-8">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/jquery-3.5.1.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Check OTP</h3>
                </div>
                <div class="card-body">
                    <form action="verifyOtpCookie.php" method="POST" autocomplete="off">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user">User-ID</i></span>
                            </div>
                            <input type="text" class="form-control" name="userId" value="<?= $_REQUEST['userId'] ?>">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user">OTP</i></span>
                            </div>
                            <input type="text" class="form-control" name="otpPassword" value="<?= $_COOKIE['otpCookie'] ?>">

                        </div>
                        <div class="form-group">
                            <input type="submit" value="Check OTP" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>