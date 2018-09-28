<?php
class CrmCouponAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.coupon.add";
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
                                    	                        	                   			private $couponName;
    	                                                            
	public function setCouponName($couponName){
		$this->couponName = $couponName;
         $this->apiParas["coupon_name"] = $couponName;
	}

	public function getCouponName(){
	  return $this->couponName;
	}

                        	                   			private $couponAmount;
    	                                                            
	public function setCouponAmount($couponAmount){
		$this->couponAmount = $couponAmount;
         $this->apiParas["coupon_amount"] = $couponAmount;
	}

	public function getCouponAmount(){
	  return $this->couponAmount;
	}

                        	                   			private $condition;
    	                        
	public function setCondition($condition){
		$this->condition = $condition;
         $this->apiParas["condition"] = $condition;
	}

	public function getCondition(){
	  return $this->condition;
	}

                        	                   			private $denomination;
    	                        
	public function setDenomination($denomination){
		$this->denomination = $denomination;
         $this->apiParas["denomination"] = $denomination;
	}

	public function getDenomination(){
	  return $this->denomination;
	}

                        	                   			private $startTime;
    	                                                            
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

}





        
 

