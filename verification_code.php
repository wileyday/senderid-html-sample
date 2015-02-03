?>
<html lang="ko" xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        </head>
        <body>
                <form method="post" action="http://rest1.coolsms.co.kr/senderid/1/verification_code">
                        API Key: <input type="text" name="api_key" value="<?php echo $api_key ?>" /><br />
                        Timestamp: <input type="text" name="timestamp" value="<?php echo $timestamp ?>" /><br />
                        Salt: <input type="text" name="salt" value="<?php echo $salt ?>" /><br />
                        Signature: <input type="text" name="signature" value="<?php echo $signature ?>" /><br />
                        Phone number: <input type="text" name="phone" value="" /><br />
                        <input type="submit" value="Submit" />
                </form>
        </body>
</html>
