<?php session_start();
require_once __DIR__ . '/Facebook/autoload.php';

$AppID = "701186623425807";
$AppSecret = "0bcdba41ce97a194c86203d306e6727c";

$fb = new Facebook\Facebook([
  'app_id' => $AppID, // Replace {app-id} with your app id
  'app_secret' => $AppSecret,
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = []; //Optional

function UrlAtual(){
    $dominio= $_SERVER['HTTP_HOST'];
    $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
    return $url;
}

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
