<?php

class ServicePromotionCreatePromotionSiteBatchRequest {

    private $apiParas = array();

    public function getApiMethodName() {
        return "jingdong.service.promotion.createPromotionSiteBatch";
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

    private $type;

    public function setType($type) {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType() {
        return $this->type;
    }

    private $siteId;

    public function setSiteId($siteId) {
        $this->siteId = $siteId;
        $this->apiParas["siteId"] = $siteId;
    }

    public function getSiteId() {
        return $this->siteId;
    }

    private $spaceName;

    public function setSpaceName($spaceName) {
        $this->spaceName = $spaceName;
        $this->apiParas["spaceName"] = $spaceName;
    }

    public function getSpaceName() {
        return $this->spaceName;
    }

}
