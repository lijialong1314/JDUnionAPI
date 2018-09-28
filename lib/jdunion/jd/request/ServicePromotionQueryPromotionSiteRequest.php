<?php

class ServicePromotionQueryPromotionSiteRequest {

    private $apiParas = array();

    public function getApiMethodName() {
        return "jingdong.service.promotion.queryPromotionSite";
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

    private $unionId;

    public function setUnionId($unionId) {
        $this->unionId = $unionId;
        $this->apiParas["unionId"] = $unionId;
    }

    public function getUnionId() {
        return $this->unionId;
    }

    private $key;

    public function setKey($key) {
        $this->key = $key;
        $this->apiParas["key"] = $key;
    }

    public function getKey() {
        return $this->key;
    }

    private $unionType;

    public function setUnionType($unionType) {
        $this->unionType = $unionType;
        $this->apiParas["unionType"] = $unionType;
    }

    public function getUnionType() {
        return $this->unionType;
    }

    private $pageNo;

    public function setPageNo($pageNo) {
        $this->pageNo = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageNo() {
        return $this->pageNo;
    }

    private $pageSize;

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

}
