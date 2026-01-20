<?php
if($_POST['name'] == 'streamkey1')
{
header("Location: rtmp://127.0.0.1/stream/live");
http_response_code(302);
}
else if($_POST['name'] == 'streamkey2')
{
header("Location: rtmp://127.0.0.1/stream/low");
http_response_code(302);
}
else
{
http_response_code(411);
}
