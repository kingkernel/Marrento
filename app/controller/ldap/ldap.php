<?php
class ldap {
	public $ldapserver;
	public $domain;
	public $user;
	public $pass;
	public $port;
	public function index(){

$ldap_server = '192.168.25.2';
$dominio = '@infraacerta'; //Dominio local ou global
$user = 'ti'.$dominio;
$ldap_porta = '389';
$ldap_pass   = '123#';
$ldapcon = ldap_connect($ldap_server, $ldap_porta) or die("Could not connect to LDAP server.");

$info = ldap_get_entries($ldapcon, []);
print_r($info);

if ($ldapcon){

// binding to ldap server
//$ldapbind = ldap_bind($ldapconn, $user, $ldap_pass);

	$bind = ldap_bind($ldapcon, $user, $ldap_pass);

// verify binding
if ($bind) {
echo "LDAP bind successful…";
} else {
echo "LDAP bind failed…";
}

} 
/*
}
*/
}
}
?>