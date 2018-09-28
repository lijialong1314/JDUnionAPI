<?php

class UnionSearchGoodsParamQueryRequest {

    private $apiParas = array();

    public function getApiMethodName() {
        return "jingdong.union.search.goods.param.query";
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

    private $cat1Id;

    public function setCat1Id($cat1Id) {
        $this->cat1Id = $cat1Id;
        $this->apiParas["cat1Id"] = $cat1Id;
    }

    public function getCat1Id() {
        return $this->cat1Id;
    }

    private $owner;

    public function setOwner($owner) {
        $this->owner = $owner;
        $this->apiParas["owner"] = $owner;
    }

    public function getOwner() {
        return $this->owner;
    }

    private $pageIndex;

    public function setPageIndex($pageIndex) {
        $this->pageIndex = $pageIndex;
        $this->apiParas["pageIndex"] = $pageIndex;
    }

    public function getPageIndex() {
        return $this->pageIndex;
    }

    private $pageSize;

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    private $sortName;

    public function setSortName($sortName) {
        $this->sortName = $sortName;
        $this->apiParas["sortName"] = $sortName;
    }

    public function getSortName() {
        return $this->sortName;
    }

    private $sort;

    public function setSort($sort) {
        $this->sort = $sort;
        $this->apiParas["sort"] = $sort;
    }

    public function getSort() {
        return $this->sort;
    }

}
