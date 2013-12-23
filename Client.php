<?php
        $address="192.232.251.96";
        $port=1901;
        $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        $result = socket_connect($sock, $address, $port);
        
        //socket_bind($sock, $address, $port);
        socket_write($sock, "vimukthi", 8);
        
        
?>
