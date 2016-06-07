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
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'user_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UtilisateurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/client/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_utilisateur_warning' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UtilisateurController::warningAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/suppression',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_utilisateur_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UtilisateurController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/suppression/valider',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_admin_listclient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\AdminController::listClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/listeClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_admin_listdevis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\AdminController::listDevisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/listeDevis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_devis_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/devis/suppression',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_devis_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/devis/mondevis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_plaque_single' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::singleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/plaques/maplaque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_plaque_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/plaques/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_plaque_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/plaques/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteplaque_plaque_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/plaques/suppression',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accueil_platform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\AccueilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plaque_platform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/plaques',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plaque_single' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::singleAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/plaques/maplaque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plaque_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::editAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/plaques/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plaque_creation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/plaques/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plaque_succes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::succesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/plaques/ajoutvalide',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plaque_supprime' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::deleteAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/plaques/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'plaque_supprime_valide' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::deletevalideAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/plaques/suppressionvalide',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'devis_platform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'devis_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::viewAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/devis/mondevis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'devis_ajout' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/devis/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'devis_supprime' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::deleteAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/devis/suppression',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'devis_supprime_valide' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::deletevalideAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis/suppressionvalide',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_listeUser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\AdminController::listUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/listeClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_listedevis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SitePlaqueBundle\\Controller\\AdminController::listDevisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/listeDevis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_warning' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UtilisateurController::warningAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/suppression',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UtilisateurController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/suppression/valider',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
