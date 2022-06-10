<?php
require('config.php');
$constants = get_defined_constants(true);
print_r($constants['user']);
