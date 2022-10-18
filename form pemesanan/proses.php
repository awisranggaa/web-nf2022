
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?php echo $_POST["title"]; ?></h1>
    <p><?php echo $_POST["desc"]; ?></p>
    <p>Your Account Number : <?php echo $_POST["acc_number"]; ?></p>
    <p>Bank Information : <?php echo $_POST["bank"]; ?></p>
    <h4>Account Holder : <?php echo $_POST["acc_holder"]; ?></h4>
    <p>As your number  : <?php echo $_POST["number"]; ?></p>
    <p>Your Phone number : <?php echo $_POST["m_phone"]; ?></p>
    <p>Your email : <?php echo $_POST["mail"]; ?></p>
    <h2>Has been activated</h2>
</body>
</html>