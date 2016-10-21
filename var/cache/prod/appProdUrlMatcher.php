<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/genus')) {
            // app_genus_new
            if ($pathinfo === '/genus/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\GenusController::newAction',  '_route' => 'app_genus_new',);
            }

            // app_genus_list
            if ($pathinfo === '/genus') {
                return array (  '_controller' => 'AppBundle\\Controller\\GenusController::listAction',  '_route' => 'app_genus_list',);
            }

            // genus_show
            if (preg_match('#^/genus/(?P<genusName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genus_show')), array (  '_controller' => 'AppBundle\\Controller\\GenusController::showAction',));
            }

            // genus_show_notes
            if (preg_match('#^/genus/(?P<name>[^/]++)/notes$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_genus_show_notes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genus_show_notes')), array (  '_controller' => 'AppBundle\\Controller\\GenusController::getNotesAction',));
            }
            not_genus_show_notes:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::homepageAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
