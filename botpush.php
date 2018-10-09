<?php



require "vendor/autoload.php";

$access_token = 'mske887ABSBZREvj7Upnq7SWyylgdrql/XELUd/kjxbWBDHAu07A6et4HjQgQitRKYma8Rotv3ZICfLK+CmmgIUzre53CQq+VCB6fEqlJg6/hCehVB04AANf4Z8lMWkIz+6YLemDZJsQrFrhZlMABAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0958274a03b4bd1cacc4a3d57f81feef';

$pushID = 'U8600dd4b4ed2639c519474226fb4f9f0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







