<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * @property  \Slim\Views\Twig $view
 * @property  \Slim\Router     router
 */
class HomeController extends BaseController
{
    
    /**
     * Index Page
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface      $response
     * @param                                          $args
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $dbUser = new User($this->db);
        $users = $dbUser->getAll();
        $perPage = $request->getParam('perPage', 10);
        $currentPage = $request->getParam('page', 1);
        
        $users = new LengthAwarePaginator(
            array_slice($users, ($currentPage - 1) * $perPage, $perPage),
            count($users),
            $perPage,
            $currentPage,
            $options = [
                'path'  => $request->getUri()->getPath(),
                'query' => $request->getParams(),
            ]
        );
        
//        die(dump($pagination));
        
        return $this->view->render($response, 'home.twig', compact('users'));
    }
}
