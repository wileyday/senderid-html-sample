<!DOCTYPE html>
<?php
$api_key = '__YOUR_API_KEY__';
$api_secret = '__YOUR_API_SECRET__';
$timestamp = time();
$salt = uniqid();
$data = strval($timestamp) . $salt;
$signature = hash_hmac('md5', $data, $api_secret);
?>
<html lang="ko" xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        </head>
        <body>
                <form method="get" action="http://rest1.coolsms.co.kr/senderid/1/list">
                        API Key: <input type="text" name="api_key" value="<?php echo $api_key ?>" /><br />
                        Timestamp: <input type="text" name="timestamp" value="<?php echo $timestamp ?>" /><br />
                        Salt: <input type="text" name="salt" value="<?php echo $salt ?>" /><br />
                        Signature: <input type="text" name="signature" value="<?php echo $signature ?>" /><br />
                        List Count : <input type="text" name="count" value="20" /><br />
                        Page: <input type="text" name="page" value="1" /><br />
                        Start: <input type="text" name="start" value="<?php echo date('Y-m-d H:i:s') ?>" /><br />
                        End: <input type="text" name="end" value="<?php echo date('Y-m-d H:i:s') ?>" /><br />
                        <input type="submit" value="Submit" />
                </form>
        </body>
</html>
