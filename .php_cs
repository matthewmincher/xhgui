<?php

/** @var ED\CS\Config\ED $config */
$config = require __DIR__ . '/vendor/glen/php-cs-fixer-config/phpcs.php';

$rules = $config->getRuleBuilder();
$finder = $config->getFinder();

return $config;

// vim:ft=php
