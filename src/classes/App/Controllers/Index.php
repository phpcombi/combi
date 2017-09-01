<?php

namespace App\Controllers;

use Combi\{
    Helper as helper,
    Abort as abort,
    Core as core
};

use App as inner;

use Combi\Web\{
    Request,
    Response,
    Router,
    Controller
};
use App\{
    Middlewares,
    ControllerGroups as Groups
};

class Index extends Groups\Standard
{
    public static function routes(Router $r) {
        $r->any('/', 'welcome');
        $r->prefix('/demo')
            ->get('/login', 'login')
            ->post('/signin', 'signIn')
            ->post_put('/signup', 'signUp');
    }

    protected function middlewares() {
        $this->addMiddlewares(new Middlewares\Throttle());
        parent::middlewares();
    }

    public function welcome(Request $request, Response $response) {
        $data = [
            'title' => '欢迎使用 PHP\Combi',
        ];
        return $response->withView('welcome.html', $data, $this->action->getView());
    }

    public function getList(Request $request, Response $response,
        array $path_vars)
    {
        return $response->withView('user/list.html');
    }

    public function signIn() {

    }

    public function login() {
        $data = [
            'title' => '欢迎使用 PHP\Combi',
        ];
        return $response->withView('welcome.html', $data, $this->action->getView());
    }
}
