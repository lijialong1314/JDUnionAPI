<?php
class ServiceGoodsQueryStuPriceGoodsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.goods.queryStuPriceGoods";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $skuIdList;
                              public function setSkuIdList($skuIdList ){
                 $this->skuIdList=$skuIdList;
                 $this->apiParas["skuIdList"] = $skuIdList;
              }

              public function getSkuIdList(){
              	return $this->skuIdList;
              }
                                                                                                                                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $stuPriceFrom;
    	                        
	public function setStuPriceFrom($stuPriceFrom){
		$this->stuPriceFrom = $stuPriceFrom;
         $this->apiParas["stuPriceFrom"] = $stuPriceFrom;
	}

	public function getStuPriceFrom(){
	  return $this->stuPriceFrom;
	}

                        	                   			private $stuPriceTo;
    	                        
	public function setStuPriceTo($stuPriceTo){
		$this->stuPriceTo = $stuPriceTo;
         $this->apiParas["stuPriceTo"] = $stuPriceTo;
	}

	public function getStuPriceTo(){
	  return $this->stuPriceTo;
	}

                        	                   			private $cid1Id;
    	                        
	public function setCid1Id($cid1Id){
		$this->cid1Id = $cid1Id;
         $this->apiParas["cid1Id"] = $cid1Id;
	}

	public function getCid1Id(){
	  return $this->cid1Id;
	}

                        	                   			private $cid2Id;
    	                        
	public function setCid2Id($cid2Id){
		$this->cid2Id = $cid2Id;
         $this->apiParas["cid2Id"] = $cid2Id;
	}

	public function getCid2Id(){
	  return $this->cid2Id;
	}

                        	                   			private $cid3Id;
    	                        
	public function setCid3Id($cid3Id){
		$this->cid3Id = $cid3Id;
         $this->apiParas["cid3Id"] = $cid3Id;
	}

	public function getCid3Id(){
	  return $this->cid3Id;
	}

                        	                   			private $owner;
    	                        
	public function setOwner($owner){
		$this->owner = $owner;
         $this->apiParas["owner"] = $owner;
	}

	public function getOwner(){
	  return $this->owner;
	}

                        	                   			private $commissionShareFrom;
    	                        
	public function setCommissionShareFrom($commissionShareFrom){
		$this->commissionShareFrom = $commissionShareFrom;
         $this->apiParas["commissionShareFrom"] = $commissionShareFrom;
	}

	public function getCommissionShareFrom(){
	  return $this->commissionShareFrom;
	}

                        	                   			private $commissionShareTo;
    	                        
	public function setCommissionShareTo($commissionShareTo){
		$this->commissionShareTo = $commissionShareTo;
         $this->apiParas["commissionShareTo"] = $commissionShareTo;
	}

	public function getCommissionShareTo(){
	  return $this->commissionShareTo;
	}

                        	                   			private $sortName;
    	                        
	public function setSortName($sortName){
		$this->sortName = $sortName;
         $this->apiParas["sortName"] = $sortName;
	}

	public function getSortName(){
	  return $this->sortName;
	}

                        	                   			private $sort;
    	                        
	public function setSort($sort){
		$this->sort = $sort;
         $this->apiParas["sort"] = $sort;
	}

	public function getSort(){
	  return $this->sort;
	}

                                                    	}





        
 

