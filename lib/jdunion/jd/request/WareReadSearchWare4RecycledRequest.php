<?php
class WareReadSearchWare4RecycledRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.read.searchWare4Recycled";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                    	                        	                        	                                                                        		                                    	                        	                   			private $searchKey;
    	                        
	public function setSearchKey($searchKey){
		$this->searchKey = $searchKey;
         $this->apiParas["searchKey"] = $searchKey;
	}

	public function getSearchKey(){
	  return $this->searchKey;
	}

                        	                   	                    		private $searchField;
    	                        
	public function setSearchField($searchField){
		$this->searchField = $searchField;
         $this->apiParas["searchField"] = $searchField;
	}

	public function getSearchField(){
	  return $this->searchField;
	}

                        	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $shopCategoryIdLevel1;
    	                        
	public function setShopCategoryIdLevel1($shopCategoryIdLevel1){
		$this->shopCategoryIdLevel1 = $shopCategoryIdLevel1;
         $this->apiParas["shopCategoryIdLevel1"] = $shopCategoryIdLevel1;
	}

	public function getShopCategoryIdLevel1(){
	  return $this->shopCategoryIdLevel1;
	}

                        	                   			private $shopCategoryIdLevel2;
    	                        
	public function setShopCategoryIdLevel2($shopCategoryIdLevel2){
		$this->shopCategoryIdLevel2 = $shopCategoryIdLevel2;
         $this->apiParas["shopCategoryIdLevel2"] = $shopCategoryIdLevel2;
	}

	public function getShopCategoryIdLevel2(){
	  return $this->shopCategoryIdLevel2;
	}

                        	                   			private $templateId;
    	                        
	public function setTemplateId($templateId){
		$this->templateId = $templateId;
         $this->apiParas["templateId"] = $templateId;
	}

	public function getTemplateId(){
	  return $this->templateId;
	}

                        	                   			private $promiseId;
    	                        
	public function setPromiseId($promiseId){
		$this->promiseId = $promiseId;
         $this->apiParas["promiseId"] = $promiseId;
	}

	public function getPromiseId(){
	  return $this->promiseId;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $featureKey;
                              public function setFeatureKey($featureKey ){
                 $this->featureKey=$featureKey;
                 $this->apiParas["featureKey"] = $featureKey;
              }

              public function getFeatureKey(){
              	return $this->featureKey;
              }
                                                                                                                                                                                                                                                                                                                                              private $featureValue;
                              public function setFeatureValue($featureValue ){
                 $this->featureValue=$featureValue;
                 $this->apiParas["featureValue"] = $featureValue;
              }

              public function getFeatureValue(){
              	return $this->featureValue;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $wareStatusValue;
                              public function setWareStatusValue($wareStatusValue ){
                 $this->wareStatusValue=$wareStatusValue;
                 $this->apiParas["wareStatusValue"] = $wareStatusValue;
              }

              public function getWareStatusValue(){
              	return $this->wareStatusValue;
              }
                                                                                                                                        	                   			private $itemNum;
    	                        
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["itemNum"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $barCode;
    	                        
	public function setBarCode($barCode){
		$this->barCode = $barCode;
         $this->apiParas["barCode"] = $barCode;
	}

	public function getBarCode(){
	  return $this->barCode;
	}

                        	                   			private $colType;
    	                        
	public function setColType($colType){
		$this->colType = $colType;
         $this->apiParas["colType"] = $colType;
	}

	public function getColType(){
	  return $this->colType;
	}

                        	                   			private $startCreatedTime;
    	                        
	public function setStartCreatedTime($startCreatedTime){
		$this->startCreatedTime = $startCreatedTime;
         $this->apiParas["startCreatedTime"] = $startCreatedTime;
	}

	public function getStartCreatedTime(){
	  return $this->startCreatedTime;
	}

                        	                   			private $endCreatedTime;
    	                        
	public function setEndCreatedTime($endCreatedTime){
		$this->endCreatedTime = $endCreatedTime;
         $this->apiParas["endCreatedTime"] = $endCreatedTime;
	}

	public function getEndCreatedTime(){
	  return $this->endCreatedTime;
	}

                        	                   			private $startJdPrice;
    	                        
	public function setStartJdPrice($startJdPrice){
		$this->startJdPrice = $startJdPrice;
         $this->apiParas["startJdPrice"] = $startJdPrice;
	}

	public function getStartJdPrice(){
	  return $this->startJdPrice;
	}

                        	                   			private $endJdPrice;
    	                        
	public function setEndJdPrice($endJdPrice){
		$this->endJdPrice = $endJdPrice;
         $this->apiParas["endJdPrice"] = $endJdPrice;
	}

	public function getEndJdPrice(){
	  return $this->endJdPrice;
	}

                        	                   			private $startOnlineTime;
    	                        
	public function setStartOnlineTime($startOnlineTime){
		$this->startOnlineTime = $startOnlineTime;
         $this->apiParas["startOnlineTime"] = $startOnlineTime;
	}

	public function getStartOnlineTime(){
	  return $this->startOnlineTime;
	}

                        	                   			private $endOnlineTime;
    	                        
	public function setEndOnlineTime($endOnlineTime){
		$this->endOnlineTime = $endOnlineTime;
         $this->apiParas["endOnlineTime"] = $endOnlineTime;
	}

	public function getEndOnlineTime(){
	  return $this->endOnlineTime;
	}

                        	                   			private $startModifiedTime;
    	                        
	public function setStartModifiedTime($startModifiedTime){
		$this->startModifiedTime = $startModifiedTime;
         $this->apiParas["startModifiedTime"] = $startModifiedTime;
	}

	public function getStartModifiedTime(){
	  return $this->startModifiedTime;
	}

                        	                   			private $endModifiedTime;
    	                        
	public function setEndModifiedTime($endModifiedTime){
		$this->endModifiedTime = $endModifiedTime;
         $this->apiParas["endModifiedTime"] = $endModifiedTime;
	}

	public function getEndModifiedTime(){
	  return $this->endModifiedTime;
	}

                        	                   			private $startOfflineTime;
    	                        
	public function setStartOfflineTime($startOfflineTime){
		$this->startOfflineTime = $startOfflineTime;
         $this->apiParas["startOfflineTime"] = $startOfflineTime;
	}

	public function getStartOfflineTime(){
	  return $this->startOfflineTime;
	}

                        	                   			private $endOfflineTime;
    	                        
	public function setEndOfflineTime($endOfflineTime){
		$this->endOfflineTime = $endOfflineTime;
         $this->apiParas["endOfflineTime"] = $endOfflineTime;
	}

	public function getEndOfflineTime(){
	  return $this->endOfflineTime;
	}

                        	                   			private $startStockNum;
    	                        
	public function setStartStockNum($startStockNum){
		$this->startStockNum = $startStockNum;
         $this->apiParas["startStockNum"] = $startStockNum;
	}

	public function getStartStockNum(){
	  return $this->startStockNum;
	}

                        	                   			private $endStockNum;
    	                        
	public function setEndStockNum($endStockNum){
		$this->endStockNum = $endStockNum;
         $this->apiParas["endStockNum"] = $endStockNum;
	}

	public function getEndStockNum(){
	  return $this->endStockNum;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderField;
                              public function setOrderField($orderField ){
                 $this->orderField=$orderField;
                 $this->apiParas["orderField"] = $orderField;
              }

              public function getOrderField(){
              	return $this->orderField;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderType;
                              public function setOrderType($orderType ){
                 $this->orderType=$orderType;
                 $this->apiParas["orderType"] = $orderType;
              }

              public function getOrderType(){
              	return $this->orderType;
              }
                                                                                                                                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                                                    	                   	                    		private $field;
    	                        
	public function setField($field){
		$this->field = $field;
         $this->apiParas["field"] = $field;
	}

	public function getField(){
	  return $this->field;
	}

}





        
 

