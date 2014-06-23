<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/639620b')) {
                // _assetic_639620b
                if ($pathinfo === '/js/639620b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '639620b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_639620b',);
                }

                // _assetic_639620b_0
                if ($pathinfo === '/js/639620b_user-perspective_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '639620b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_639620b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/eaa3d1a')) {
                // _assetic_eaa3d1a
                if ($pathinfo === '/js/eaa3d1a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eaa3d1a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_eaa3d1a',);
                }

                // _assetic_eaa3d1a_0
                if ($pathinfo === '/js/eaa3d1a_homepage_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eaa3d1a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_eaa3d1a_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // lescouverts_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lescouverts_homepage');
            }

            return array (  '_controller' => 'Les\\CouvertsBundle\\Controller\\CouvertsController::indexAction',  '_route' => 'lescouverts_homepage',);
        }

        // booking_a_table
        if ($pathinfo === '/booking') {
            return array (  '_controller' => 'Les\\CouvertsBundle\\Controller\\CouvertsController::bookingAction',  '_route' => 'booking_a_table',);
        }

        if (0 === strpos($pathinfo, '/party_calendar')) {
            // party_calendar
            if ($pathinfo === '/party_calendar') {
                return array (  '_controller' => 'Les\\CouvertsBundle\\Controller\\PartyController::indexAction',  '_route' => 'party_calendar',);
            }

            // party_event_request
            if ($pathinfo === '/party_calendar_event_request') {
                return array (  '_controller' => 'Les\\CouvertsBundle\\Controller\\PartyController::eventAction',  '_route' => 'party_event_request',);
            }

        }

        // featured
        if ($pathinfo === '/featured') {
            return array (  '_controller' => 'Les\\CouvertsBundle\\Controller\\CouvertsController::featuredAction',  '_route' => 'featured',);
        }

        if (0 === strpos($pathinfo, '/booking/resto_homepage')) {
            // resto_homepage
            if (preg_match('#^/booking/resto_homepage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resto_homepage')), array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\RestaurantController::homepageAction',));
            }

            // menus
            if (0 === strpos($pathinfo, '/booking/resto_homepage/menus') && preg_match('#^/booking/resto_homepage/menus/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menus')), array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\RestaurantController::menusAction',));
            }

            // events
            if (0 === strpos($pathinfo, '/booking/resto_homepage/events') && preg_match('#^/booking/resto_homepage/events/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'events')), array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\RestaurantController::eventsAction',));
            }

            // news
            if (0 === strpos($pathinfo, '/booking/resto_homepage/news') && preg_match('#^/booking/resto_homepage/news/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news')), array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\RestaurantController::newsAction',));
            }

            // similar
            if (0 === strpos($pathinfo, '/booking/resto_homepage/similar') && preg_match('#^/booking/resto_homepage/similar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'similar')), array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\RestaurantController::similarAction',));
            }

            if (0 === strpos($pathinfo, '/booking/resto_homepage/r')) {
                // recommend
                if (0 === strpos($pathinfo, '/booking/resto_homepage/recommend') && preg_match('#^/booking/resto_homepage/recommend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recommend')), array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\RestaurantController::recommendAction',));
                }

                // rating
                if (0 === strpos($pathinfo, '/booking/resto_homepage/rating') && preg_match('#^/booking/resto_homepage/rating/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rating')), array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\RestaurantController::ratingAction',));
                }

            }

            // feedback
            if (0 === strpos($pathinfo, '/booking/resto_homepage/feedback') && preg_match('#^/booking/resto_homepage/feedback/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback')), array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\RestaurantController::feedbackAction',));
            }

        }

        if (0 === strpos($pathinfo, '/restaurant_admin')) {
            // resto_admin_index
            if (rtrim($pathinfo, '/') === '/restaurant_admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'resto_admin_index');
                }

                return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::adminAction',  '_route' => 'resto_admin_index',);
            }

            if (0 === strpos($pathinfo, '/restaurant_admin/my-')) {
                // restaurant_my_information
                if (rtrim($pathinfo, '/') === '/restaurant_admin/my-information') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restaurant_my_information');
                    }

                    return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::myInformationAction',  '_route' => 'restaurant_my_information',);
                }

                // restaurant_my_personal_information
                if (rtrim($pathinfo, '/') === '/restaurant_admin/my-personal-information') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restaurant_my_personal_information');
                    }

                    return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::myPersonalInformationAction',  '_route' => 'restaurant_my_personal_information',);
                }

                // restaurant_my_menus
                if (rtrim($pathinfo, '/') === '/restaurant_admin/my-menus') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restaurant_my_menus');
                    }

                    return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::myMenusAction',  '_route' => 'restaurant_my_menus',);
                }

                // restaurant_my_news
                if (rtrim($pathinfo, '/') === '/restaurant_admin/my-news') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restaurant_my_news');
                    }

                    return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::myNewsAction',  '_route' => 'restaurant_my_news',);
                }

                // restaurant_my_special_offers
                if (rtrim($pathinfo, '/') === '/restaurant_admin/my-special-offers') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restaurant_my_special_offers');
                    }

                    return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::mySpecialOffersAction',  '_route' => 'restaurant_my_special_offers',);
                }

                // restaurant_my_events
                if (rtrim($pathinfo, '/') === '/restaurant_admin/my-events') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restaurant_my_events');
                    }

                    return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::myEventsAction',  '_route' => 'restaurant_my_events',);
                }

                // restaurant_my_ranking
                if (rtrim($pathinfo, '/') === '/restaurant_admin/my-ranking') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restaurant_my_ranking');
                    }

                    return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::myRankingAction',  '_route' => 'restaurant_my_ranking',);
                }

                // restaurant_my_comments
                if (rtrim($pathinfo, '/') === '/restaurant_admin/my-comments') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'restaurant_my_comments');
                    }

                    return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\AdminController::myCommentsAction',  '_route' => 'restaurant_my_comments',);
                }

            }

            // booking_admin
            if (rtrim($pathinfo, '/') === '/restaurant_admin/booking_admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'booking_admin');
                }

                return array (  '_controller' => 'Les\\RestaurantBundle\\Controller\\BookingAdminController::indexAction',  '_route' => 'booking_admin',);
            }

        }

        if (0 === strpos($pathinfo, '/virutal_market')) {
            // virtual_market_index
            if (rtrim($pathinfo, '/') === '/virutal_market') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'virtual_market_index');
                }

                return array (  '_controller' => 'Les\\VirtualMarketBundle\\Controller\\VirtualMarketController::indexAction',  '_route' => 'virtual_market_index',);
            }

            // virtual_market_focus
            if (0 === strpos($pathinfo, '/virutal_market/focus') && preg_match('#^/virutal_market/focus/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'virtual_market_focus')), array (  '_controller' => 'Les\\VirtualMarketBundle\\Controller\\VirtualMarketController::focusAction',));
            }

        }

        if (0 === strpos($pathinfo, '/shop_admin')) {
            // les_shop_homepage
            if (rtrim($pathinfo, '/') === '/shop_admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'les_shop_homepage');
                }

                return array (  '_controller' => 'Les\\ShopBundle\\Controller\\ShopController::indexAction',  '_route' => 'les_shop_homepage',);
            }

            if (0 === strpos($pathinfo, '/shop_admin/my_')) {
                // shop_my_offers
                if ($pathinfo === '/shop_admin/my_offers') {
                    return array (  '_controller' => 'Les\\ShopBundle\\Controller\\ShopController::myOffersAction',  '_route' => 'shop_my_offers',);
                }

                // shop_my_information
                if ($pathinfo === '/shop_admin/my_information') {
                    return array (  '_controller' => 'Les\\ShopBundle\\Controller\\ShopController::myInformationAction',  '_route' => 'shop_my_information',);
                }

                // offer_focus
                if (0 === strpos($pathinfo, '/shop_admin/my_offers/modify') && preg_match('#^/shop_admin/my_offers/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_focus')), array (  '_controller' => 'Les\\ShopBundle\\Controller\\ShopController::focusAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/secure_area')) {
            if (0 === strpos($pathinfo, '/secure_area/connect')) {
                // hwi_oauth_service_redirect
                if (preg_match('#^/secure_area/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
                }

                // hwi_oauth_connect
                if (rtrim($pathinfo, '/') === '/secure_area/connect') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                    }

                    return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
                }

                // hwi_oauth_connect_service
                if (0 === strpos($pathinfo, '/secure_area/connect/service') && preg_match('#^/secure_area/connect/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
                }

                // hwi_oauth_connect_registration
                if (0 === strpos($pathinfo, '/secure_area/connect/registration') && preg_match('#^/secure_area/connect/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
                }

            }

            if (0 === strpos($pathinfo, '/secure_area/login/check-')) {
                // hwi_github_login
                if ($pathinfo === '/secure_area/login/check-github') {
                    return array (  '_controller' => 'Les\\CouvertsBundle\\Controller\\CouvertsController::indexAction',  '_route' => 'hwi_github_login',);
                }

                // hwi_facebook_login
                if ($pathinfo === '/secure_area/login/check-facebook') {
                    return array (  '_controller' => 'Les\\CouvertsBundle\\Controller\\CouvertsController::indexAction',  '_route' => 'hwi_facebook_login',);
                }

                // hwi_google_login
                if ($pathinfo === '/secure_area/login/check-google') {
                    return array (  '_controller' => 'Les\\CouvertsBundle\\Controller\\CouvertsController::indexAction',  '_route' => 'hwi_google_login',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
