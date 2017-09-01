<?php

namespace App;

use Combi\{
    Helper as helper,
    Abort as abort,
    Core as core
};

core::hook()->attach(\Combi\HOOK_ACTION_BROKEN,
    function(core\Action $action, \Throwable $e)
{
    $error_info = [
        'error' => $e->getCode(),
        'msg'   => $e->getMessage(),
        'trace' => $e->getTrace(),
    ];
    $response = $action->response->withJson($error_info,
        \Combi\Web\Response::STATUS_INTERNAL_SERVER_ERROR);
    $action->respond($response);
    die(1);
});
