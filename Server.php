<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'working<br>';
        set_time_limit(100);
        $address="192.232.251.96";
        $port=19874;
        $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_bind($sock, $address, $port);
        socket_listen($sock);
        $msgsock = socket_accept($sock);
        $buf = socket_read($msgsock, 8, PHP_NORMAL_READ);
        echo $buf;
        ?>
    </body>
</html>
