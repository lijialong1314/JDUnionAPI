<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/lib/unionapi.php';
require_once __DIR__ . '/lib/app_http.php';

App::$daemonize = true;
$union = new UnionController();
$app = new App("http://0.0.0.0:1234");
$app->count = 5;
$app->user = "www-data";
$app->name = 'JDUnion-Http-API';

$app->onWorkerStart = function($worker) {
};

$app->get('/favicon.ico', function($req) {
	return "";
});
$app->get('/', function($req) {
	return "加入京东联盟技术讨论群：379480469，可享受群主关爱服务~";
});

$app->get('/union/getGoodsInfo', function($req) {
        global $union;
        return $union->getGoodsInfo($req);
});

$app->get('/union/queryPreferentialGoods', function($req) {
        global $union;
        return $union->queryPreferentialGoods($req);
});

$app->get('/union/queryExplosiveGoods', function($req) {
        global $union;
        return $union->queryExplosiveGoods($req);
});
$app->get('/union/createPromotionSiteBatch', function($req) {
        global $union;
        return $union->createPromotionSiteBatch($req);
});
$app->get('/union/queryPromotionSite', function($req) {
        global $union;
        return $union->queryPromotionSite($req);
});
$app->get('/union/getWXSQCodeByUnionId', function($req) {
        global $union;
        return $union->getWXSQCodeByUnionId($req);
});
$app->get('/union/getCouponCodeByUnionId', function($req) {
        global $union;
        return $union->getCouponCodeByUnionId($req);
});
$app->get('/union/queryCouponGoods', function($req) {
        global $union;
        return $union->queryCouponGoods($req);
});
$app->get('/union/getInfo', function($req) {
        global $union;
        return $union->getInfo($req);
});
$app->get('/union/queryPinGouGoods', function($req) {
        global $union;
        return $union->queryPinGouGoods($req);
});
$app->get('/union/short2WXSQ', function($req) {
        global $union;
        return $union->short2WXSQ($req);
});
$app->get('/union/short2CouponCode', function($req) {
        global $union;
        return $union->short2CouponCode($req);
});
$app->get('/union/queryOrderListWithKey', function($req) {
        global $union;
        return $union->queryOrderListWithKey($req);
});
$app->get('/union/queryKeywordGoods', function($req) {
        global $union;
        return $union->queryKeywordGoods($req);
});
$app->get('/union/querySecKillGoods', function($req) {
        global $union;
        return $union->querySecKillGoods($req);
});
$app->get('/union/queryCategory', function($req) {
        global $union;
        return $union->queryCategory($req);
});
$app->get('/union/getGoodsDetail', function($req) {
        global $union;
        return $union->getGoodsDetail($req);
});
App::runAll();
