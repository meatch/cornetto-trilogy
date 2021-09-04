<?php
require_once('global.php');
/*---------------------------
| cURL tests request to the other servers
| 
---------------------------*/
function getJson($url) {

    error_log('HELLO: ' . $url);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // !IMPORTANT: Do not use in Production
    // When using Self-Signed Certs we need to bypass this verification
    // Better to use valid certs and turn these off
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $data = curl_exec($ch);

    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        print_r($error_msg);
    }
    
    curl_close($ch);
    echo $data;
}
?>
<section>
    <h2>JSON Request</h2>
    <table class="jsonRequest">
        <tr>
            <th>Website</th>
            <th>https (443 SSL)</th>
        </tr>
        <?php foreach($siteContainers as $url) : ?>
        <tr>
            <th><?php echo $url; ?></th>
            <td><?php getJson('https://' . $url . '/assets/data/sample.json'); ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</section>