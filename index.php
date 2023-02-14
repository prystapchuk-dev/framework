<?php

include_once('init.php');
include_once('vendor/autoload.php');


use System\ModulesDispatcher;
const BASE_URL = '/lavrik/framework';

const DB_HOST = 'localhost';
const DB_NAME = 'demo';
const DB_USER = 'root';
const DB_PASSWORD = '';

$modules = new ModulesDispatcher();