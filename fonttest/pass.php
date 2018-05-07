<?php

$password=base64_encode(strip_tags('abcd1234'));
//$password = 'abcd1234';

echo md5(base64_encode("sbc2011cibd_".base64_decode($password))); ?>