<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // spx_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'spx_main_homepage');
            }

            return array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'spx_main_homepage',);
        }

        // spx_main_produits
        if (0 === strpos($pathinfo, '/produits') && preg_match('#^/produits/(?P<modele>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'spx_main_produits')), array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::produitsAction',));
        }

        // spx_main_habillages
        if (0 === strpos($pathinfo, '/habillages') && preg_match('#^/habillages/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'spx_main_habillages')), array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::habillagesAction',));
        }

        // spx_main_securite
        if (0 === strpos($pathinfo, '/securite') && preg_match('#^/securite/(?P<item>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'spx_main_securite')), array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::securiteAction',));
        }

        if (0 === strpos($pathinfo, '/galerie')) {
            // spx_main_galerie_fonctionnement
            if ($pathinfo === '/galerie/fonctionnement') {
                return array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::fonctionnementAction',  '_route' => 'spx_main_galerie_fonctionnement',);
            }

            // spx_main_galerie_photos
            if ($pathinfo === '/galerie/photos') {
                return array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::photosAction',  '_route' => 'spx_main_galerie_photos',);
            }

        }

        if (0 === strpos($pathinfo, '/n')) {
            // spx_main_news
            if ($pathinfo === '/news') {
                return array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::newsAction',  '_route' => 'spx_main_news',);
            }

            // spx_main_commander
            if ($pathinfo === '/nous-trouver') {
                return array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::commanderAction',  '_route' => 'spx_main_commander',);
            }

        }

        // spx_main_mention
        if ($pathinfo === '/mention-legale') {
            return array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::mentionAction',  '_route' => 'spx_main_mention',);
        }

        // spx_main_reglementation
        if ($pathinfo === '/reglementation') {
            return array (  '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::reglementationAction',  '_route' => 'spx_main_reglementation',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
