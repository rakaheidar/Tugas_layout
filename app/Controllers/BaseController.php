<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 *
 * Extend this class in any new controllers:
 * ```
 *     class Home extends BaseController
 * ```
 *
 * For security, be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */

    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Load here all helpers you want to be available in your controllers that extend BaseController.
        // Caution: Do not put the this below the parent::initController() call below.
        helper(['form', 'url']);

        // Caution: Do not edit this line.
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        // $this->session = service('session');
    }

    protected function generateTitle()
    {
        $uri = uri_string();
        if (empty($uri) || $uri == '/') {
            return 'Dashboard';
        }
        return url_title($uri, ' ', true);
    }

    protected function generateBreadcrumb()
    {
        $uri = uri_string();
        if (empty($uri) || $uri == '/') {
            return [['title' => 'Dashboard', 'active' => true]];
        }

        $segments = explode('/', $uri);
        $breadcrumb = [];
        $url = '';

        foreach ($segments as $segment) {
            if (!empty($segment)) {
                $url .= '/' . $segment;
                $breadcrumb[] = [
                    'title' => url_title($segment, ' ', true),
                    'url' => base_url($url),
                ];
            }
        }

        if (!empty($breadcrumb)) {
            $breadcrumb[count($breadcrumb) - 1]['active'] = true;
            unset($breadcrumb[count($breadcrumb) - 1]['url']);
        }

        return $breadcrumb;
    }
}
