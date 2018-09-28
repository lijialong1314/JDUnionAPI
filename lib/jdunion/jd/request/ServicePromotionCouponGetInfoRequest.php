<?php

class ServicePromotionCouponGetInfoRequest {

    private $apiParas = array();

    public function getApiMethodName() {
        return "jingdong.service.promotion.coupon.getInfo";
    }

    public function getApiParas() {
        return json_encode($this->apiParas);
    }

    public function check() {

    }

    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    private $couponUrl;

    public function setCouponUrl($couponUrl) {
        $this->couponUrl = $couponUrl;
        $this->apiParas["couponUrl"] = $couponUrl;
    }

    public function getCouponUrl() {
        return $this->couponUrl;
    }

}
