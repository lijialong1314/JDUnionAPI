<?php
class CrmCouponActivityCancelRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.coupon.activity.cancel";
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
                                    	                        	                   			private $activityId;
    	                                                            
	public function setActivityId($activityId){
		$this->activityId = $activityId;
         $this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId(){
	  return $this->activityId;
	}

}





        
 

