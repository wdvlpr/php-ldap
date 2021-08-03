<?php
// Install php5-lda:
// sudo apt install php-ldap
// Reboot apache
// sudo service apache2 restart
$ldap_ip = 'ldap://IP_SERVER_LDAP:PORT'; // 'ldap://192.168.0.1:389'
$ldap = ldap_connect($ldap_ip);
$user = 'DOMINIO\USER'; // 'NET7\FCAMARA'
$password = 'PASSWORD'; // 'ABC@123'
$password = utf8_decode($password); //$password = otoxF1o
$ldap_bind = ldap_bind($ldap, $user, $password); //Now the binding is successfull and $ldap_bind = true

if ($ldap_bind) {
    echo "LDAP bind {$user} successful...";
} else {
    echo "LDAP bind {$user} failed...";
}
?>