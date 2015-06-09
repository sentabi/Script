<?php
// walaupun ancur tapi jalan ;)

$file = file_get_contents('http://link.ke.situs.torrent/index.html');
libxml_use_internal_errors(true);
// jadiin DOM
$dom = new DOMDocument;
$dom->loadHTML($file);
$dom->preserveWhiteSpace = true;
echo "<pre>";
// proses pecah belah
foreach ($dom->getElementsByTagName('a') as $node) {
$data =  $node->getAttribute( 'href' );
$data1 = explode('magnet',$data);
    if (isset($data1[1])) {
    // hasil
    echo 'magnet' .$data1[1] . '<br>';
    }
} // end foreach

// contoh data output
// magnet:?xt=urn:btih:xxxx
// magnet:?xt=urn:btih:xxxx
// magnet:?xt=urn:btih:xxxx
// tinggal di olah, dan di kirim ke deluge (atau client lainnya) biar di download ;)
?>
