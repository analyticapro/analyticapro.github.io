<?php
// $post_request=CURL_init();
// curl_setopt($post_request, CURLOPT_URL, "https://wordpress-hash.herokuapp.com/index.php?pass=pass");
// // curl_setopt($post_request, CURLOPT_POST, true);
// // $request=12;
// // curl_setopt($post_request, CURLOPT_POSTFIELDS, $request);
// curl_setopt($post_request, CURLOPT_RETURNTRANSFER, true);
// $scrape_data=curl_exec($post_request);
// curl_close($post_request);
// echo $scrape_data;
echo file_get_contents("https://wordpress-hash.herokuapp.com/index.php?pass=pass");
?>