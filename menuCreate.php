<?php


include ('./wxModel.php');

$wxObj = new wxModel();

// $arr = json_decode($json, 1);

$arr = array(
    'button' => array(
        array(
            "type" => "click",
            "name" => urlencode("图文列表"),//文字需要转码
            "key" => "20000"
        ),
        array(
            "name" => urlencode("下拉菜单"),
            "sub_button" => array(
                array(
                    "type" => "click",
                    "name" => urlencode("联系我们"),
                    "key" => "30000"
                ),
                array(
                    "type" => "click",
                    "name" => urlencode("在线帮助"),
                    "key" => "40000"
                )
            )
        ),
        array(
            "type" => "view",
            "name" => urlencode("商城"),
            "url" => "https://h5.youzan.com/v2/showcase/homepage?alias=7r2eyx0h"
        )
    )
);

$json = urldecode(json_encode($arr));//文字解码
//{"button":[{"type":"click","name":"\u56fe\u6587\u5217\u8868","key":"20000"},{"name":"\u4e0b\u62c9\u83dc\u5355","sub_button":[{"type":"click","name":"\u4eca\u65e5\u6b4c\u66f2","key":"30000"},{"type":"click","name":"\u4eca\u65e5\u6b4c\u66f2","key":"40000"}]},{"type":"view","name":"\u641c\u7d22","url":"http:\/\/www.soso.com\/"}]}


// echo ($json);
//接口调用请求说明
//http请求方式：POST（请使用https协议） https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN

$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$wxObj->getAccessToken();//默认url

$res = $wxObj->getData($url,'POST', $json);

echo $res;

