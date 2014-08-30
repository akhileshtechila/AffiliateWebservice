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

        // affiliate_webservices_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliate_webservices_homepage')), array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\DefaultController::indexAction',));
        }

        // affiliate_webservices_LoginService
        if ($pathinfo === '/LoginService') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\LoginServiceController::indexAction',  '_route' => 'affiliate_webservices_LoginService',);
        }

        // affiliate_webservices_sign_up_user
        if ($pathinfo === '/SignUpUser') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\SignUpUserController::SignUpUserAction',  '_route' => 'affiliate_webservices_sign_up_user',);
        }

        // affiliate_webservices_edit_user_info
        if ($pathinfo === '/EditUserInfo') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditUserInfoController::EditUserInfoAction',  '_route' => 'affiliate_webservices_edit_user_info',);
        }

        if (0 === strpos($pathinfo, '/Members')) {
            // affiliate_webservices_members_listing
            if ($pathinfo === '/MembersListing') {
                return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\MembersListingController::MembersListingAction',  '_route' => 'affiliate_webservices_members_listing',);
            }

            // affiliate_webservices_members_info_add
            if ($pathinfo === '/MembersInfoAdd') {
                return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\MembersInfoController::MembersInfoAddAction',  '_route' => 'affiliate_webservices_members_info_add',);
            }

        }

        // affiliate_webservices_edit_members_info
        if ($pathinfo === '/EditMembersInfo') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditMembersInfoController::EditMembersInfoAction',  '_route' => 'affiliate_webservices_edit_members_info',);
        }

        if (0 === strpos($pathinfo, '/De')) {
            // affiliate_webservices_delete_members_info
            if ($pathinfo === '/DeleteMember') {
                return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditMembersInfoController::DeleteMemberAction',  '_route' => 'affiliate_webservices_delete_members_info',);
            }

            if (0 === strpos($pathinfo, '/Deal')) {
                // affiliate_webservices_deal
                if ($pathinfo === '/Deal') {
                    return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\DealController::DealAction',  '_route' => 'affiliate_webservices_deal',);
                }

                // affiliate_webservices_deal_listing
                if ($pathinfo === '/DealListing') {
                    return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\DealListingController::DealListingAction',  '_route' => 'affiliate_webservices_deal_listing',);
                }

            }

        }

        // affiliate_webservices_edit_deal
        if ($pathinfo === '/EditDeal') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditDealController::EditDealAction',  '_route' => 'affiliate_webservices_edit_deal',);
        }

        // affiliate_webservices_delete_deal
        if ($pathinfo === '/DeleteDeal') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditDealController::DeleteDealAction',  '_route' => 'affiliate_webservices_delete_deal',);
        }

        // affiliate_webservices_affiliate_deal
        if ($pathinfo === '/AffiliateDeal') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\AffiliateDealController::AffiliateDealAction',  '_route' => 'affiliate_webservices_affiliate_deal',);
        }

        // affiliate_webservices_edit_affiliate_deal
        if ($pathinfo === '/EditAffiliateDeal') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditAffiliateDealController::EditAffiliateDealAction',  '_route' => 'affiliate_webservices_edit_affiliate_deal',);
        }

        // affiliate_webservices_delete_affiliate_deal
        if ($pathinfo === '/DeleteAffiliateDeal') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditAffiliateDealController::DeleteAffiliateDealAction',  '_route' => 'affiliate_webservices_delete_affiliate_deal',);
        }

        // affiliate_webservices_listing_affiliate_deal
        if ($pathinfo === '/ListingAffiliateDeal') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\ListingAffiliateDealController::ListingAffiliateDealAction',  '_route' => 'affiliate_webservices_listing_affiliate_deal',);
        }

        // affiliate_webservices_admin_payment_request
        if ($pathinfo === '/AdminPaymentRequest') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\AdminPaymentRequestController::AdminPaymentRequestAction',  '_route' => 'affiliate_webservices_admin_payment_request',);
        }

        // affiliate_webservices_edit_admin_payment_request
        if ($pathinfo === '/EditAdminPaymentRequest') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditAdminPaymentRequestController::EditAdminPaymentRequestAction',  '_route' => 'affiliate_webservices_edit_admin_payment_request',);
        }

        // affiliate_webservices_delete_admin_payment_request
        if ($pathinfo === '/DeleteAdminPaymentRequest') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditAdminPaymentRequestController::DeleteAdminPaymentRequestAction',  '_route' => 'affiliate_webservices_delete_admin_payment_request',);
        }

        // affiliate_webservices_listing_admin_pay_req
        if ($pathinfo === '/ListingAdminPayReq') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\ListingAdminPayReqController::ListingAdminPayReqAction',  '_route' => 'affiliate_webservices_listing_admin_pay_req',);
        }

        // affiliate_webservices_affiliate_payment_request
        if ($pathinfo === '/AffiliatePaymentRequest') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\AffiliatePaymentRequestController::AffiliatePaymentRequestAction',  '_route' => 'affiliate_webservices_affiliate_payment_request',);
        }

        // affiliate_webservices_edit_affiliate_payment_request
        if ($pathinfo === '/EditAffiliatePaymentRequest') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditAffiliatePaymentRequestController::EditAffiliatePaymentRequestAction',  '_route' => 'affiliate_webservices_edit_affiliate_payment_request',);
        }

        // affiliate_webservices_delete_affiliate_payment_request
        if ($pathinfo === '/DeleteAffiliatePaymentRequest') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\EditAffiliatePaymentRequestController::DeleteAffiliatePaymentRequestAction',  '_route' => 'affiliate_webservices_delete_affiliate_payment_request',);
        }

        // affiliate_webservices_listing_affiliate_payment_request
        if ($pathinfo === '/ListingAffiliatePaymentRequest') {
            return array (  '_controller' => 'Affiliate\\WebservicesBundle\\Controller\\ListingAffiliatePaymentRequestController::ListingAffiliatePaymentRequestAction',  '_route' => 'affiliate_webservices_listing_affiliate_payment_request',);
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
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userinfo_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\UserinfoController::deleteAction',));
            }

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
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\DealController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/affiliate')) {
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
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiliatepayreq_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\AffiliatePayReqController::deleteAction',));
                    }

                }

            }

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

        }

        if (0 === strpos($pathinfo, '/membersinfo')) {
            // membersinfo
            if (rtrim($pathinfo, '/') === '/membersinfo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'membersinfo');
                }

                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\MembersinfoController::indexAction',  '_route' => 'membersinfo',);
            }

            // membersinfo_show
            if (preg_match('#^/membersinfo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membersinfo_show')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\MembersinfoController::showAction',));
            }

            // membersinfo_new
            if ($pathinfo === '/membersinfo/new') {
                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\MembersinfoController::newAction',  '_route' => 'membersinfo_new',);
            }

            // membersinfo_create
            if ($pathinfo === '/membersinfo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_membersinfo_create;
                }

                return array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\MembersinfoController::createAction',  '_route' => 'membersinfo_create',);
            }
            not_membersinfo_create:

            // membersinfo_edit
            if (preg_match('#^/membersinfo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membersinfo_edit')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\MembersinfoController::editAction',));
            }

            // membersinfo_update
            if (preg_match('#^/membersinfo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_membersinfo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membersinfo_update')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\MembersinfoController::updateAction',));
            }
            not_membersinfo_update:

            // membersinfo_delete
            if (preg_match('#^/membersinfo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membersinfo_delete')), array (  '_controller' => 'Affiliate\\AffiliateManagementBundle\\Controller\\MembersinfoController::deleteAction',));
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
