<?php
class CrmCouponActivitySearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.coupon.activity.search";
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

                        	                   			private $activityId;
    	                                                            
	public function setActivityId($activityId){
		$this->activityId = $activityId;
         $this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId(){
	  return $this->activityId;
	}

                        	                   			private $activityName;
    	                                                            
	public function setActivityName($activityName){
		$this->activityName = $activityName;
         $this->apiParas["activity_name"] = $activityName;
	}

	public function getActivityName(){
	  return $this->activityName;
	}

                        	                   			private $ativityStatus;
    	                                                            
	public function setAtivityStatus($ativityStatus){
		$this->ativityStatus = $ativityStatus;
         $this->apiParas["ativity_status"] = $ativityStatus;
	}

	public function getAtivityStatus(){
	  return $this->ativityStatus;
	}

                        	                   			private $startSendTime;
    	                                                                        
	public function setStartSendTime($startSendTime){
		$this->startSendTime = $startSendTime;
         $this->apiParas["start_send_time"] = $startSendTime;
	}

	public function getStartSendTime(){
	  return $this->startSendTime;
	}

                        	                   			private $endSendTime;
    	                                                                        
	public function setEndSendTime($endSendTime){
		$this->endSendTime = $endSendTime;
         $this->apiParas["end_send_time"] = $endSendTime;
	}

	public function getEndSendTime(){
	  return $this->endSendTime;
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





        
 

