<?php 
$postStr = <<<EOT
<xml>
 <ToUserName><![CDATA[隔壁老王]]></ToUserName>
 <FromUserName><![CDATA[fromUser]]></FromUserName>
 <CreateTime>1348831860</CreateTime>
 <MsgType><![CDATA[image]]></MsgType>
 <PicUrl><![CDATA[this is a url]]></PicUrl>
 <MediaId><![CDATA[media_id]]></MediaId>
 <MsgId>1234567890123456</MsgId>
 </xml>
EOT;

var_dump($postStr);

file_put_contents('data.txt', time()."+++++++++++++++++".$postStr."\n", FILE_APPEND);