<?php

require 'src/facebook-sdk-v5/autoload.php';

session_start();

$fb = new Facebook\Facebook([
  'app_id' => '189702971366432',
  'app_secret' => '2ca0ad0e117c18e4b97272f1bc773fbd',
  'default_graph_version' => 'v2.2',
  ]);