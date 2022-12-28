<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');
$routes->get('policy', 'Home::policy');
$routes->get('status_link', 'Deposit::getStatus_link');

$routes->get('qrCancel', 'Deposit::cancelPromptPayQR');
$routes->post('qrCreate', 'Deposit::generatePromptPayQR');
$routes->group('api', ['namespace' => 'App\Controllers\api'], function ($routes) {
    $routes->group('deposit', function ($routes) {
        /**
         * ฝากเงิน Auto SMS สำหรับ PromptPay Kbank
         * ex. https://domain.com/api/deposit/sms-promptpay-kbank?bank_account_no=เลขบัญชีฝากที่ลงทะเบียนไว้ในระบบ&tag=TAGที่ลงทะเบียนบัญชี&sender=(:any:sender)&message=(:any:message)
         */
        $routes->get('sms-promptpay-kbank', 'Deposit::promptpayKbank'); // ฝากเงิน Auto SMS สำหรับ PromptPay Kbank

    });
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
