<?php

$result = array();
exec("cat ../data/*.php ", $result);
print_r($result);
?>