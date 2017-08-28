<?php
if (isset($accessToken)) {
    global $url, $new_fields;
    $fields = ['id', 'name', 'gender', 'email', 'locale', 'first_name', 'link', 'picture.type(large)'];

    for ($i = 0; $i < count($fields); $i++) {
        if($i == 0){
            $new_fields = $fields[$i];
        }else{
            $new_fields .= "," . $fields[$i];
        }
    }

    $url = "https://graph.facebook.com/me?fields=$new_fields&access_token=$accessToken";
    $headers = array("Content-type: application/json");
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $st = curl_exec($ch);
    $result = json_decode($st,TRUE);

    $_SESSION['user_id'] = $result['id'];
    $_SESSION['user_name'] = $result['name'];
    $_SESSION['user_gender'] = $result['gender'];
    $_SESSION['user_link'] = $result['link'];
    $_SESSION['user_picture'] = $result['picture']['data']['url'];
    $_SESSION['fb_access_token'] = (string) $accessToken;
    $_SESSION['user_start_session'] = time();
    $_SESSION['user_expire_session'] = $_SESSION['user_start_session'] + (24 * 60 * 60);
}