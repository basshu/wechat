<?php


include ('./wxModel.php');

$wxObj = new wxModel();

$city = '北京';

if (substr($keyword, 0, 6) == '天气') {

    $city = substr($keyword, 6, strlen($keyword));
    // $str = $this->getWeather($city);
    $textTpl = "<xml>
            <ToUserName><![CDATA[%s]]></ToUserName>
            <FromUserName><![CDATA[%s]]></FromUserName>
            <CreateTime>%s</CreateTime>
            <MsgType><![CDATA[%s]]></MsgType>
            <Content><![CDATA[%s]]></Content>
            <FuncFlag>0</FuncFlag>
            </xml>";

    $time = time();
    $msgtype = 'text';
    $content = $city;
    $retStr = sprintf($textTpl, $fromusername, $tousername, $time, $msgtype, $content);
    echo $retStr;
}



