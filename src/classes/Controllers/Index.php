<?php

namespace App\Controllers;

use Combi\{
    Helper as helper,
    Abort as abort,
    Runtime as rt
};

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
        $r->any('/[{nickname}]', 'welcome');
        $r->prefix('/demo')
            ->get('/login', 'login')
            ->post('/signin', 'signIn')
            ->post_put('/signup', 'signUp');
    }

    protected function middlewares() {
        $this->addMiddlewares(new Middlewares\Throttle());
        parent::middlewares();
    }

    public function welcome(Request $request, Response $response, array $path_vars) {
        $nickname = isset($path_vars['nickname']) ? " [{$path_vars['nickname']}]" : '';
        $data = [
            'title' => "Welcome to choose PHP\Combi$nickname",
        ];
        return $response->withView('welcome.html', $data);
    }

    public function signUp(Request $request, Response $response)
    {
    }

    public function signIn(Request $request, Response $response) {
        $nickname = $request['nickname'];
        return $response->withRedirect("/$nickname");
    }

    public function login(Request $request, Response $response) {
        $data = [
            'title' => 'Login Demo',
        ];
        return $response->withView('demo/login.html', $data);
    }
}
