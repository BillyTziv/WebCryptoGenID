<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analyzer</title>
</head>
<body>
    <p>Creates an MD5 hash code for the given website</p>
    <?php
        $c = curl_init('https://www.google.gr/');
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt(... other options you want...)

        $html = curl_exec($c);

        if (curl_error($c))
            die(curl_error($c));

        // Get the status code
        $status = curl_getinfo($c, CURLINFO_HTTP_CODE);

        curl_close($c);

        // 2nd way
        //$html = file_get_contents('http://localhost/Projects/BasicTemplate/authentication/');
        $crypto_value = md5( $html );
        echo "Crypto Value : " . $crypto_value;

    ?>
</body>
</html>