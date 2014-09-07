<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'spx_main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'spx_main_produits' => array (  0 =>   array (    0 => 'modele',  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::produitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'modele',    ),    1 =>     array (      0 => 'text',      1 => '/produits',    ),  ),  4 =>   array (  ),),
        'spx_main_habillages' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::habillagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    1 =>     array (      0 => 'text',      1 => '/habillages',    ),  ),  4 =>   array (  ),),
        'spx_main_securite' => array (  0 =>   array (    0 => 'item',  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::securiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'item',    ),    1 =>     array (      0 => 'text',      1 => '/securite',    ),  ),  4 =>   array (  ),),
        'spx_main_galerie_fonctionnement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::fonctionnementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/galerie/fonctionnement',    ),  ),  4 =>   array (  ),),
        'spx_main_galerie_photos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::photosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/galerie/photos',    ),  ),  4 =>   array (  ),),
        'spx_main_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),),
        'spx_main_commander' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::commanderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nous-trouver',    ),  ),  4 =>   array (  ),),
        'spx_main_mention' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::mentionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mention-legale',    ),  ),  4 =>   array (  ),),
        'spx_main_reglementation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Spx\\MainBundle\\Controller\\DefaultController::reglementationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reglementation',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
