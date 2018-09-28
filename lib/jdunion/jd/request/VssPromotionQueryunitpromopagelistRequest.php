<?php
class VssPromotionQueryunitpromopagelistRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vss.promotion.queryunitpromopagelist";
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
                                                        		                                    	                        	                   			private $wareId;
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $promoId;
    	                                                            
	public function setPromoId($promoId){
		$this->promoId = $promoId;
         $this->apiParas["promo_id"] = $promoId;
	}

	public function getPromoId(){
	  return $this->promoId;
	}

                        	                   			private $promoName;
    	                                                            
	public function setPromoName($promoName){
		$this->promoName = $promoName;
         $this->apiParas["promo_name"] = $promoName;
	}

	public function getPromoName(){
	  return $this->promoName;
	}

                        	                   			private $createTimeBegin;
    	                                                                        
	public function setCreateTimeBegin($createTimeBegin){
		$this->createTimeBegin = $createTimeBegin;
         $this->apiParas["create_time_begin"] = $createTimeBegin;
	}

	public function getCreateTimeBegin(){
	  return $this->createTimeBegin;
	}

                        	                   			private $createTimeEnd;
    	                                                                        
	public function setCreateTimeEnd($createTimeEnd){
		$this->createTimeEnd = $createTimeEnd;
         $this->apiParas["create_time_end"] = $createTimeEnd;
	}

	public function getCreateTimeEnd(){
	  return $this->createTimeEnd;
	}

                        	                   			private $beginTime;
    	                                                            
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $promoState;
    	                                                            
	public function setPromoState($promoState){
		$this->promoState = $promoState;
         $this->apiParas["promo_state"] = $promoState;
	}

	public function getPromoState(){
	  return $this->promoState;
	}

                        	                   			private $auditState;
    	                                                            
	public function setAuditState($auditState){
		$this->auditState = $auditState;
         $this->apiParas["audit_state"] = $auditState;
	}

	public function getAuditState(){
	  return $this->auditState;
	}

                        	                   			private $pageIndex;
    	                                                            
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

