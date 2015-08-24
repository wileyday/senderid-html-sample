<!DOCTYPE html>
<?php
$api_key = '__YOUR_API_KEY__';
$api_secret = '__YOUR_API_SECRET__';
$timestamp = time();
$salt = uniqid();
$data = strval($timestamp) . $salt;
$signature = hash_hmac('md5', $data, $api_secret);
?>
<html lang="ko">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        </head>
        <body>
                <form method="post" action="https://api.coolsms.co.kr/senderid/1.1/register">
                        API Key: <input type="text" name="api_key" value="<?php echo $api_key ?>" /><br />
                        Timestamp: <input type="text" name="timestamp" value="<?php echo $timestamp ?>" /><br />
                        Salt: <input type="text" name="salt" value="<?php echo $salt ?>" /><br />
                        Signature: <input type="text" name="signature" value="<?php echo $signature ?>" /><br />
                        Phone number: <input type="text" name="phone" value="" /><br />
                        <input type="submit" value="Submit" />
                </form>
        </body>
</html>
