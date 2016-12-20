<?php

require __DIR__ . '/../vendor/autoload.php';

// TODO 环境载入方案待后续调整
// 发布时替换文件
// 环境变量控制
// 支持命令行输入变更
combi()->setup(require __DIR__ . '/../config.php');
