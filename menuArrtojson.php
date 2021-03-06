<?php
include "./vendor/autoload.php";
$json = <<<EOT
 {
     "button":[
     {	
          "type":"click",
          "name":"今日歌曲",
          "key":"V1001_TODAY_MUSIC"
      },
      {
           "name":"菜单",
           "sub_button":[
           {	
               "type":"view",
               "name":"搜索",
               "url":"http://www.soso.com/"
            },
            {
                 "type":"miniprogram",
                 "name":"wxa",
                 "url":"http://mp.weixin.qq.com",
                 "appid":"wx286b93c14bbf93aa",
                 "pagepath":"pages/lunar/index.html"
             },
            {
               "type":"click",
               "name":"赞一下我们",
               "key":"V1001_GOOD"
            }]
       }]
 }
EOT;

// $arr = json_decode($json, 1);

$arr = array(
    'button' => array(
        array(
            "type" => "click",
            "name" => urlencode("图文列表"),
            "key" => "20000"
        ),
        array(
            "name" => urlencode("下拉菜单"),
            "sub_button" => array(
                array(
                    "type" => "click",
                    "name" => urlencode("今日歌曲"),
                    "key" => "30000"
                ),
                array(
                    "type" => "click",
                    "name" => urlencode("今日歌曲"),
                    "key" => "40000"
                )
            )
        ),
        array(
            "type" => "view",
            "name" => "商城",
            "url" => "https://h5.youzan.com/v2/showcase/homepage?alias=7r2eyx0h"
        )
    )
);

echo urldecode(json_encode($arr));
//{"button":[{"type":"click","name":"\u56fe\u6587\u5217\u8868","key":"20000"},{"name":"\u4e0b\u62c9\u83dc\u5355","sub_button":[{"type":"click","name":"\u4eca\u65e5\u6b4c\u66f2","key":"30000"},{"type":"click","name":"\u4eca\u65e5\u6b4c\u66f2","key":"40000"}]},{"type":"view","name":"\u641c\u7d22","url":"http:\/\/www.soso.com\/"}]}


dump($arr);