<?php
require_once('global.php');
/*---------------------------
| cURL tests request to the other servers
---------------------------*/
function makeCurl($url) {
    $ch = curl_init($url);

    if (!curl_errno($ch)) {
        $info = curl_getinfo($ch);
        echo 'Took ', $info['total_time'], ' seconds to send a request to ', $info['url'], "\n";
    }
    curl_close($ch);
}
?>
<section>
    <h2>URL Check</h2>
    <table class="urlCheck">
        <tr>
            <th>Website</th>
            <th>http (80 Standard)</th>
            <th>https (443 SSL)</th>
        </tr>
        <?php foreach($siteURLS as $url) : ?>
        <tr>

            <th><?php echo $url; ?></th>
            <td><?php makeCurl('http://' . $url); ?></td>
            <td><?php makeCurl('https://' . $url); ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</section>