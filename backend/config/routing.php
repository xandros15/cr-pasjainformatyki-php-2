<?php
/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-08-09
 * Time: 18:55
 */
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

/** @var $app App */
$app->get('[/]', function (Request $request, Response $response) {
    $path = $this->session->get('zalogowany') ? $this->router->pathFor('gra') : $this->router->pathFor('login.panel');

    return $response->withRedirect($path);
})->setName('home');

$app->get('/gra', function (Request $request, Response $response) {

})->setName('gra');

$app->get('/login', function (Request $request, Response $response) {
    return $this->view->render($response, '/login-panel.php', [
        'loginPath' => $this->router->pathFor('login'),
        'errors' => $this->alert->getMessage('blad')
    ]);
})->setName('login.panel');

$app->post('/sign-in', function (Request $request, Response $response) {
    /** @var $db PDO */
    $db = $this->db;
    $statement = $db->prepare('SELECT * FROM `uzytkownicy` WHERE `user` = ? limit 1');

    $statement->execute(array($request->getParam('login')));

    $user = $statement->fetch(PDO::FETCH_OBJ);

    //TODO dodanie szyfrowania hasla
    if ($user && $user->pass == $request->getParam('haslo')) {
        $this->session->set('zalogowany', true);
        $this->session->set('id', $user->id);
        $path = $this->router->pathFor('gra');
    } else {
        $this->alert->addMessage('blad', 'Błędne dane logowania.');
        $path = $this->router->pathFor('login.panel');
    }

    return $response->withRedirect($path);
})->setName('login');

$app->get('/sign-out', function (Request $request, Response $response) {
    $this->session->kill();
    return $response->withRedirect($this->router->pathFor('login.panel'));
})->setName('logout');