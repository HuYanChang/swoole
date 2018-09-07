<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/7
 * Time: 16:52
 */
$app = new swoole_http_server('*.*.*.*',8081);

$app->on('request',function (\Swoole\Http\Request $request,\Swoole\Http\Response $response){
    $response->end("hello world");
});

return $app;