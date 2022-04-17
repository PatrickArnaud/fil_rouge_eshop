<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);



        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $config = [
            'functions' => ['my_helper'],
            'functions_safe' => ['my_safe_helper'],
        ];
        $this->twig = new \Kenjis\CI4Twig\Twig($config);
    }

    public function renderTemplate(string $page = 'home', array $data = [])
    {
        if (!is_file(APPPATH . '/Views/content/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $i = strrpos($page, "/");
        $title = str_replace('-', ' ', substr($page, $i + 1));
        $data['title'] = ucwords($title);
        echo view('common/header', $data);
        echo view('content/' . $page, $data);
        echo view('common/footer', $data);
    }

    public function renderTemplateTag(string $page = 'home', array $data = [])
    {
        if (!is_file(APPPATH . '/Views/tags/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $i = strrpos($page, "/");
        $title = str_replace('-', ' ', substr($page, $i + 1));
        $data['title'] = ucwords($title);
        echo view('common/header', $data);
        echo view('tags/' . $page, $data);
        echo view('common/footer', $data);
    }
}
