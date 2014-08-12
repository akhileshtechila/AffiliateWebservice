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

        // affiliate_affiliate_management_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliate_affiliate_management_homepage')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/userinfo')) {
            // userinfo
            if (rtrim($pathinfo, '/') === '/userinfo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'userinfo');
                }

                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\UserinfoController::indexAction',  '_route' => 'userinfo',);
            }

            // userinfo_show
            if (preg_match('#^/userinfo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userinfo_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\UserinfoController::showAction',));
            }

            // userinfo_new
            if ($pathinfo === '/userinfo/new') {
                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\UserinfoController::newAction',  '_route' => 'userinfo_new',);
            }

            // userinfo_create
            if ($pathinfo === '/userinfo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_userinfo_create;
                }

                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\UserinfoController::createAction',  '_route' => 'userinfo_create',);
            }
            not_userinfo_create:

            // userinfo_edit
            if (preg_match('#^/userinfo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userinfo_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\UserinfoController::editAction',));
            }

            // userinfo_update
            if (preg_match('#^/userinfo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_userinfo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userinfo_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\UserinfoController::updateAction',));
            }
            not_userinfo_update:

            // userinfo_delete
            if (preg_match('#^/userinfo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_userinfo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userinfo_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\UserinfoController::deleteAction',));
            }
            not_userinfo_delete:

        }

        if (0 === strpos($pathinfo, '/deal')) {
            // deal
            if (rtrim($pathinfo, '/') === '/deal') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'deal');
                }

                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DealController::indexAction',  '_route' => 'deal',);
            }

            // deal_show
            if (preg_match('#^/deal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DealController::showAction',));
            }

            // deal_new
            if ($pathinfo === '/deal/new') {
                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DealController::newAction',  '_route' => 'deal_new',);
            }

            // deal_create
            if ($pathinfo === '/deal/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_deal_create;
                }

                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DealController::createAction',  '_route' => 'deal_create',);
            }
            not_deal_create:

            // deal_edit
            if (preg_match('#^/deal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DealController::editAction',));
            }

            // deal_update
            if (preg_match('#^/deal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_deal_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DealController::updateAction',));
            }
            not_deal_update:

            // deal_delete
            if (preg_match('#^/deal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_deal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DealController::deleteAction',));
            }
            not_deal_delete:

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/affiliate')) {
                if (0 === strpos($pathinfo, '/affiliateinfo')) {
                    // affiliateinfo
                    if (rtrim($pathinfo, '/') === '/affiliateinfo') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'affiliateinfo');
                        }

                        return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateinfoController::indexAction',  '_route' => 'affiliateinfo',);
                    }

                    // affiliateinfo_show
                    if (preg_match('#^/affiliateinfo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliateinfo_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateinfoController::showAction',));
                    }

                    // affiliateinfo_new
                    if ($pathinfo === '/affiliateinfo/new') {
                        return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateinfoController::newAction',  '_route' => 'affiliateinfo_new',);
                    }

                    // affiliateinfo_create
                    if ($pathinfo === '/affiliateinfo/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_affiliateinfo_create;
                        }

                        return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateinfoController::createAction',  '_route' => 'affiliateinfo_create',);
                    }
                    not_affiliateinfo_create:

                    // affiliateinfo_edit
                    if (preg_match('#^/affiliateinfo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliateinfo_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateinfoController::editAction',));
                    }

                    // affiliateinfo_update
                    if (preg_match('#^/affiliateinfo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_affiliateinfo_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliateinfo_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateinfoController::updateAction',));
                    }
                    not_affiliateinfo_update:

                    // affiliateinfo_delete
                    if (preg_match('#^/affiliateinfo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_affiliateinfo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliateinfo_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateinfoController::deleteAction',));
                    }
                    not_affiliateinfo_delete:

                }

                if (0 === strpos($pathinfo, '/affiliatedeal')) {
                    // affiliatedeal
                    if (rtrim($pathinfo, '/') === '/affiliatedeal') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'affiliatedeal');
                        }

                        return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateDealController::indexAction',  '_route' => 'affiliatedeal',);
                    }

                    // affiliatedeal_show
                    if (preg_match('#^/affiliatedeal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatedeal_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateDealController::showAction',));
                    }

                    // affiliatedeal_new
                    if ($pathinfo === '/affiliatedeal/new') {
                        return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateDealController::newAction',  '_route' => 'affiliatedeal_new',);
                    }

                    // affiliatedeal_create
                    if ($pathinfo === '/affiliatedeal/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_affiliatedeal_create;
                        }

                        return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateDealController::createAction',  '_route' => 'affiliatedeal_create',);
                    }
                    not_affiliatedeal_create:

                    // affiliatedeal_edit
                    if (preg_match('#^/affiliatedeal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatedeal_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateDealController::editAction',));
                    }

                    // affiliatedeal_update
                    if (preg_match('#^/affiliatedeal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_affiliatedeal_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatedeal_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateDealController::updateAction',));
                    }
                    not_affiliatedeal_update:

                    // affiliatedeal_delete
                    if (preg_match('#^/affiliatedeal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_affiliatedeal_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatedeal_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliateDealController::deleteAction',));
                    }
                    not_affiliatedeal_delete:

                }

                if (0 === strpos($pathinfo, '/affiliatepayre')) {
                    if (0 === strpos($pathinfo, '/affiliatepayreq')) {
                        // affiliatepayreq
                        if (rtrim($pathinfo, '/') === '/affiliatepayreq') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'affiliatepayreq');
                            }

                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayReqController::indexAction',  '_route' => 'affiliatepayreq',);
                        }

                        // affiliatepayreq_show
                        if (preg_match('#^/affiliatepayreq/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayreq_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayReqController::showAction',));
                        }

                        // affiliatepayreq_new
                        if ($pathinfo === '/affiliatepayreq/new') {
                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayReqController::newAction',  '_route' => 'affiliatepayreq_new',);
                        }

                        // affiliatepayreq_create
                        if ($pathinfo === '/affiliatepayreq/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_affiliatepayreq_create;
                            }

                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayReqController::createAction',  '_route' => 'affiliatepayreq_create',);
                        }
                        not_affiliatepayreq_create:

                        // affiliatepayreq_edit
                        if (preg_match('#^/affiliatepayreq/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayreq_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayReqController::editAction',));
                        }

                        // affiliatepayreq_update
                        if (preg_match('#^/affiliatepayreq/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_affiliatepayreq_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayreq_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayReqController::updateAction',));
                        }
                        not_affiliatepayreq_update:

                        // affiliatepayreq_delete
                        if (preg_match('#^/affiliatepayreq/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_affiliatepayreq_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayreq_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayReqController::deleteAction',));
                        }
                        not_affiliatepayreq_delete:

                    }

                    if (0 === strpos($pathinfo, '/affiliatepayrel')) {
                        // affiliatepayrel
                        if (rtrim($pathinfo, '/') === '/affiliatepayrel') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'affiliatepayrel');
                            }

                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayRelController::indexAction',  '_route' => 'affiliatepayrel',);
                        }

                        // affiliatepayrel_show
                        if (preg_match('#^/affiliatepayrel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayrel_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayRelController::showAction',));
                        }

                        // affiliatepayrel_new
                        if ($pathinfo === '/affiliatepayrel/new') {
                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayRelController::newAction',  '_route' => 'affiliatepayrel_new',);
                        }

                        // affiliatepayrel_create
                        if ($pathinfo === '/affiliatepayrel/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_affiliatepayrel_create;
                            }

                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayRelController::createAction',  '_route' => 'affiliatepayrel_create',);
                        }
                        not_affiliatepayrel_create:

                        // affiliatepayrel_edit
                        if (preg_match('#^/affiliatepayrel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayrel_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayRelController::editAction',));
                        }

                        // affiliatepayrel_update
                        if (preg_match('#^/affiliatepayrel/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_affiliatepayrel_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayrel_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayRelController::updateAction',));
                        }
                        not_affiliatepayrel_update:

                        // affiliatepayrel_delete
                        if (preg_match('#^/affiliatepayrel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_affiliatepayrel_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayrel_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayRelController::deleteAction',));
                        }
                        not_affiliatepayrel_delete:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                // admin
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

                // admin_show
                if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminController::showAction',));
                }

                // admin_new
                if ($pathinfo === '/admin/new') {
                    return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
                }

                // admin_create
                if ($pathinfo === '/admin/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_create;
                    }

                    return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminController::createAction',  '_route' => 'admin_create',);
                }
                not_admin_create:

                // admin_edit
                if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminController::editAction',));
                }

                // admin_update
                if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminController::updateAction',));
                }
                not_admin_update:

                // admin_delete
                if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminController::deleteAction',));
                }
                not_admin_delete:

                if (0 === strpos($pathinfo, '/adminpayre')) {
                    if (0 === strpos($pathinfo, '/adminpayreq')) {
                        // adminpayreq
                        if (rtrim($pathinfo, '/') === '/adminpayreq') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'adminpayreq');
                            }

                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayReqController::indexAction',  '_route' => 'adminpayreq',);
                        }

                        // adminpayreq_show
                        if (preg_match('#^/adminpayreq/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpayreq_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayReqController::showAction',));
                        }

                        // adminpayreq_new
                        if ($pathinfo === '/adminpayreq/new') {
                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayReqController::newAction',  '_route' => 'adminpayreq_new',);
                        }

                        // adminpayreq_create
                        if ($pathinfo === '/adminpayreq/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_adminpayreq_create;
                            }

                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayReqController::createAction',  '_route' => 'adminpayreq_create',);
                        }
                        not_adminpayreq_create:

                        // adminpayreq_edit
                        if (preg_match('#^/adminpayreq/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpayreq_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayReqController::editAction',));
                        }

                        // adminpayreq_update
                        if (preg_match('#^/adminpayreq/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_adminpayreq_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpayreq_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayReqController::updateAction',));
                        }
                        not_adminpayreq_update:

                        // adminpayreq_delete
                        if (preg_match('#^/adminpayreq/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_adminpayreq_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpayreq_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayReqController::deleteAction',));
                        }
                        not_adminpayreq_delete:

                    }

                    if (0 === strpos($pathinfo, '/adminpayrel')) {
                        // adminpayrel
                        if (rtrim($pathinfo, '/') === '/adminpayrel') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'adminpayrel');
                            }

                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayRelController::indexAction',  '_route' => 'adminpayrel',);
                        }

                        // adminpayrel_show
                        if (preg_match('#^/adminpayrel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpayrel_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayRelController::showAction',));
                        }

                        // adminpayrel_new
                        if ($pathinfo === '/adminpayrel/new') {
                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayRelController::newAction',  '_route' => 'adminpayrel_new',);
                        }

                        // adminpayrel_create
                        if ($pathinfo === '/adminpayrel/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_adminpayrel_create;
                            }

                            return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayRelController::createAction',  '_route' => 'adminpayrel_create',);
                        }
                        not_adminpayrel_create:

                        // adminpayrel_edit
                        if (preg_match('#^/adminpayrel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpayrel_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayRelController::editAction',));
                        }

                        // adminpayrel_update
                        if (preg_match('#^/adminpayrel/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_adminpayrel_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpayrel_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayRelController::updateAction',));
                        }
                        not_adminpayrel_update:

                        // adminpayrel_delete
                        if (preg_match('#^/adminpayrel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_adminpayrel_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminpayrel_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AdminPayRelController::deleteAction',));
                        }
                        not_adminpayrel_delete:

                    }

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

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
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
