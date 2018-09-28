<?php
class CrmCouponSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.coupon.search";
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
                                    	                        	                   			private $couponId;
    	                                                            
	public function setCouponId($couponId){
		$this->couponId = $couponId;
         $this->apiParas["coupon_id"] = $couponId;
	}

	public function getCouponId(){
	  return $this->couponId;
	}

                        	                   			private $denomination;
    	                        
	public function setDenomination($denomination){
		$this->denomination = $denomination;
         $this->apiParas["denomination"] = $denomination;
	}

	public function getDenomination(){
	  return $this->denomination;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $currentPage;
    	                                                            
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
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





        
 

