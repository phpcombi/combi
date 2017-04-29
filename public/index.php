<?php

use Combi\Core\Runtime as rt;
use Combi\Package as core;
use Combi\Package as inner;
use Combi\Core\Helper as helper;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/test_p/bootstrap.php';

var_dump($_SERVER);

// TODO 环境载入方案待后续调整
// 发布时替换文件
// 环境变量控制
// 支持命令行输入变更
combi()->ready('app', require __DIR__ . '/../config.php');

combi()->app->my_provider()->send();

tris::du(combi()->test_p->config('abc')->raw());




$abort = tris::abort(new \RuntimeException('oh no', 202, new \Exception('ooooowwwww')))
    // ->set('sampless', true)
    ->set('primary', 1830000000999)
    ->set('other', 'wweeddff');


// Combi\Tris::log('info', 'hello, {name}!', ['name' => 'Triss']);
// Combi\Log::abort($abort);

tris::du(combi()->core->dict('error', 20010));
