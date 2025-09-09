<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
</head>
<body>

    <?php
        // PHP code here
        $email_id = "peter.prescott@zylker.com"; //Email address of Customer
        $customer_id="bfuyw3fiub3289uij"; //Unique Identifiable System ID of Customer
        $digestRaw= $email_id.$customer_id;
        $algorithm = 'sha256';
        $secret = '0e2bea370e5abadba15833b5b2dfe572'; //Secret Key
        $HMACDigest = hash_HMAC($algorithm, $digestRaw, $secret);
    ?>

</body>
</html>
