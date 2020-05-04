<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Auth::routes();


Route::group(["prefix" => "goex/admin"], function () {

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/', 'HomeController@index')->name('home');

        Route::get('/module/search/{module}/{path}/{viewFile}/{mainPath?}', 'BaseController@getModuleSearch')->name('getModuleSearch');
        Route::post('/post-module', 'BaseController@postModuleStatus')->name('postModuleStatus');
        Route::post('/module/delete', 'BaseController@postModuleDelete')->name('postModuleDelete');
        //users
        Route::get("/users", "UserController@usersList")->name("usersList");
        Route::get("/user-add", "UserController@getUserAdd")->name("getUserAdd");
        Route::post("/user-add", "UserController@postUserAdd")->name("postUserAdd");
        Route::get("/user-edit/{id}", "UserController@getUserEdit")->name("getUserEdit");
        Route::post("/user-edit/{id}", "UserController@postUserEdit")->name("postUserEdit");
        Route::post("/user-password-edit/{id}", "UserController@postUserPasswordEdit")->name("postUserPasswordEdit");

        //roles and permissions
        Route::resource('/permission-role', 'RoleController');
        Route::post('/permission-edit', 'RoleController@postPermissionEdit')->name("permissionForm");
        Route::post('/role-edit', 'RoleController@postRoleEdit')->name('role_form');


        //customers
        Route::get("/customer/{type}", "CustomerController@getCustomer")->name("getCustomer");
        Route::get("/customer-profile/{id}", "CustomerController@getCustomerProfile")->name("getCustomerProfile");
        Route::post("/customer-profile", "CustomerController@postCustomerProfile")->name("postCustomerProfile");

        //setting
        Route::get("/settings", "SettingController@getSettings")->name("getSettings");

        Route::get("/order-list", "HomeController@order_list")->name("orderList");
        Route::get("/order-applies", "HomeController@order_applies")->name("orderApplies");


        Route::get("/accounting", "HomeController@accounting")->name("accounting");
        Route::get("/balance", "HomeController@balance")->name("balance");

        Route::get("/history", "HomeController@history")->name("history");
        Route::get("/priority", "HomeController@priority")->name("priority");
        Route::get("/corporative", "HomeController@corporative")->name("corporative");
        Route::get("/customer-edit", "HomeController@customer_edit")->name("customerEdit");
        Route::get("/customer-add", "HomeController@customer_form")->name("customerAdd");
        Route::get("/customer-edit", "HomeController@customer_form")->name("customerEdit");
        Route::get("/priorty-add", "HomeController@priorty_form")->name("priortyAdd");
        Route::get("/priorty-edit", "HomeController@priorty_form")->name("priortyEdit");
        Route::get("/balance-add", "HomeController@balance_form")->name("balanceAdd");
        Route::get("/balance-edit", "HomeController@balance_form")->name("balanceEdit");

        //sms shablonu
        Route::get("/sms-template", "SmsTemplateController@getSmsTemplate")->name("getSmsTemplate");
        Route::get("/sms-template-edit/{id}", "SmsTemplateController@getSmsTemplateEdit")->name("getSmsTemplateEdit");
        Route::post("/sms-template-edit/{id}", "SmsTemplateController@postSmsTemplateEdit")->name("postSmsTemplateEdit");

        //sms
        Route::get("/sms", "SmsController@getSms")->name("getSms");
        Route::get("/sms/{id}", "SmsController@getSmsEdit")->name("getSmsEdit");
        Route::post("/sms/{id}", "SmsController@postSmsEdit")->name("postSmsEdit");
        Route::post("/sms-customer-with-code", "SmsController@getCustomerWithCode")->name("getCustomerWithCode");

        //kampaniyalar
        Route::get("/componies", "CompanyController@getComponies")->name("getComponies");
        Route::get("/componies-edit/{id}", "CompanyController@getCompanyEdit")->name("getCompanyEdit");
        Route::post("/componies-edit/{id}", "CompanyController@postCompanyEdit")->name("postCompanyEdit");

        //tariff
        Route::get("/tariffes", "TariffController@getTariffes")->name("getTariffes");
        Route::get("/tariffes-edit/{id}", "TariffController@getTariffesEdit")->name("getTariffesEdit");
        Route::post("/tariffes-edit/{id}", "TariffController@postTariffesEdit")->name("postTariffesEdit");

        //stock
        Route::get("/stocks/{type}", "StockController@getStocks")->name("getStocks");
        Route::get("/stock-edit/{id}", "StockController@getStockEdit")->name("getStockEdit");
        Route::post("/stock-edit/{id}", "StockController@postStockEdit")->name("postStockEdit");

        //section
        Route::get("/sections", "SectionController@getSections")->name("getSections");
        Route::get("/section-edit/{id}", "SectionController@getSectionEdit")->name("getSectionEdit");
        Route::post("/section-edit/{id}", "SectionController@postSectionEdit")->name("postSectionEdit");

        //subSection
        Route::get("/sub-section", "SubSectionController@getSubSections")->name("getSubSections");
        Route::get("/sub-section-edit/{id}", "SubSectionController@getSubSectionEdit")->name("getSubSectionEdit");
        Route::post("/sub-section-edit/{id}", "SubSectionController@postSubSectionEdit")->name("postSubSectionEdit");

        Route::get("/sacks/{position?}", "SackController@getSacks")->name("getSacks");
        Route::get("/sack-edit/{id}", "SackController@getSackEdit")->name("getSackEdit");
        Route::post("/sack-edit/{id}", "SackController@postSackEdit")->name("postSackEdit");
        Route::get("/sack-view/{id}", "SackController@getSackView")->name("getSackView");

        //site - admin
        Route::get("/site-admin", "SiteAdminController@getAdmin")->name("getAdmin");

        //SERVICES
        Route::get("/services", "ServiceController@getServices")->name("getServices");
        Route::get("/service-edit/{id}", "ServiceController@getServiceEdit")->name("getServiceEdit");
        Route::post("/service-edit/{id}", "ServiceController@postServiceEdit")->name("postServiceEdit");


        //About
        Route::get("/about-edit", "AboutController@getAboutEdit")->name("getAboutEdit");
        Route::post("/about-edit/{id}", "AboutController@postAboutEdit")->name("postAboutEdit");


        //Faq
        Route::get("/faq", "FaqController@getFaq")->name("getFaq");
        Route::get("/faq-edit/{id}", "FaqController@getFaqEdit")->name("getFaqEdit");
        Route::post("/faq-edit/{id}", "FaqController@postFaqEdit")->name("postFaqEdit");


        //condition
        Route::get("/condition-edit", "ConditionController@getConditionEdit")->name("getConditionEdit");
        Route::post("/condition-edit/{id}", "ConditionController@postConditionEdit")->name("postConditionEdit");


        //slider
        Route::get("/slider", "SliderController@getSlider")->name("getSlider");
        Route::get("/slider-edit/{id}", "SliderController@getSliderEdit")->name("getSliderEdit");
        Route::post("/slider-edit/{id}", "SliderController@postSliderEdit")->name("postSliderEdit");

        //forbiddenProduct
        Route::get("/forbidden-product", "ForbiddenProductController@getForbiddenProduct")->name("getForbiddenProduct");
        Route::get("/forbidden-product-edit/{id}", "ForbiddenProductController@getForbiddenProductEdit")->name("getForbiddenProductEdit");
        Route::post("/forbidden-product-edit/{id}", "ForbiddenProductController@postForbiddenProductEdit")->name("postForbiddenProductEdit");


        //annotation
        Route::get("/annotation", "AnnotationController@getAnnotation")->name("getAnnotation");
        Route::get("/annotation-edit/{id}", "AnnotationController@getAnnotationEdit")->name("getAnnotationEdit");
        Route::post("/annotation-edit/{id}", "AnnotationController@postAnnotationEdit")->name("postAnnotationEdit");

        //information
        Route::get("/information", "InformationController@getInformation")->name("getInformation");
        Route::get("/information-edit/{id}", "InformationController@getInformationEdit")->name("getInformationEdit");
        Route::post("/information-edit/{id}", "InformationController@postInformationEdit")->name("postInformationEdit");

        //shop
        Route::get("/shop", "ShopController@getShop")->name("getShop");
        Route::get("/shop-edit/{id}", "ShopController@getEditShop")->name("getEditShop");
        Route::post("/shop-edit/{id}", "ShopController@postEditShop")->name("postEditShop");

        //category
        Route::get("/category", "CategoryController@getCategory")->name("getCategory");
        Route::get("/category-edit/{id}", "CategoryController@getCategoryEdit")->name("getCategoryEdit");
        Route::post("/category-edit/{id}", "CategoryController@postCategoryEdit")->name("postCategoryEdit");

        //address
        Route::get("/address", "AddressController@getAddress")->name("getAddress");
        Route::get("/address-edit/{id}", "AddressController@getAddressEdit")->name("getAddressEdit");
        Route::post("/address-edit/{id}", "AddressController@postAddressEdit")->name("postAddressEdit");


        //contact
        Route::get("/contact-edit", "ContactController@getContactEdit")->name("getContactEdit");
        Route::post("/contact-edit/{id}", "ContactController@postContactEdit")->name("postContactEdit");


        //sorakce
        Route::get("/dictionary", "DictionaryController@getDictionary")->name("getDictionary");

        Route::get("/country-edit/{id}", "DictionaryController@getCountryEdit")->name("getCountryEdit");
        Route::post("/country-edit/{id}", "DictionaryController@postCountryEdit")->name("postCountryEdit");

        Route::get("/category-edit/{id}", "DictionaryController@getCategoryEdit")->name("getCategoryEdit");
        Route::post("/category-edit/{id}", "DictionaryController@postCategoryEdit")->name("postCategoryEdit");


    });

    Route::get("/", "HomeController@index");

});


/** web-site route  start**/

Route::get('/', 'Site\PageController@getHome')->name('getSiteHome');
Route::get('/home', 'Site\PageController@getHome')->name('getSiteHome');
Route::get('/about', 'Site\PageController@getAbout')->name('getSiteAbout');
Route::get('/services', 'Site\PageController@getServices')->name('getSiteServices');
Route::get('/carriage', 'Site\PageController@getCarriage')->name('getSiteCarriage');
Route::get('/contact', 'Site\PageController@getContact')->name('getSiteContact');
Route::get('/faq', 'Site\PageController@getFaq')->name('getSiteFaq');
Route::get('/forbidden', 'Site\PageController@getForbidden')->name('getSiteForbidden');
Route::get('/information', 'Site\PageController@getInformation')->name('getSiteInformation');
Route::get('/shops', 'Site\PageController@getShop')->name('getSiteShop');
Route::post('/shops', 'Site\PageController@postSiteShop')->name('postSiteShop');
Route::get('/country', 'Site\PageController@getCountry')->name('getSiteCountry');
Route::post('/country', 'Site\PageController@postSiteCountry')->name('postSiteCountry');
Route::get('/account', 'Site\AccountController@getAccount')->name('getSiteAccount');
Route::post('/account/{id}', 'Site\AccountController@postSitePrivate')->name('postSitePrivate');
Route::post('/account/password/{id}', 'Site\AccountController@postPassword')->name('postPassword');
Route::post('/calculate', 'Site\CalculateController@postCalculate')->name('postCalculate');
Route::post('/contact','Site\PageController@postContact')->name('postContact');



Route::post('/site-login', 'AuthSite\CustomerLoginController@postSiteLogin')->name('postSiteLogin');
Route::post('/site-register', 'AuthSite\CustomerRegisterController@postSiteRegister')->name('postSiteRegister');
Route::get('/logout', 'AuthSite\CustomerLoginController@getSiteLogout')->name('getSiteLogout');

Route::get('/forgot', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('showLinkRequestForm');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('showResetForm');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('reset');



