<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/7
 * Time: 16:52
 */
//$app = new swoole_http_server('127.0.0.1',8081);
$app = new swoole_server(string '127.0.0.1', int $port = 9051, int $mode = SWOOLE_PROCESS,
    int $sock_type = SWOOLE_SOCK_TCP);


$app->on('request',function (\Swoole\Http\Request $request,\Swoole\Http\Response $response){
    $response->end("hello world");
});

return $app;
