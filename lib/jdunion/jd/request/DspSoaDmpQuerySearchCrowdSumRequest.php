<?php
class DspSoaDmpQuerySearchCrowdSumRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.soa.dmp.querySearchCrowdSum";
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
                                                        		                                    	                        	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $startDay;
    	                        
	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $endDay;
    	                        
	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $isOrderOrClick;
    	                        
	public function setIsOrderOrClick($isOrderOrClick){
		$this->isOrderOrClick = $isOrderOrClick;
         $this->apiParas["isOrderOrClick"] = $isOrderOrClick;
	}

	public function getIsOrderOrClick(){
	  return $this->isOrderOrClick;
	}

                        	                   			private $isTodayOr15Days;
    	                        
	public function setIsTodayOr15Days($isTodayOr15Days){
		$this->isTodayOr15Days = $isTodayOr15Days;
         $this->apiParas["isTodayOr15Days"] = $isTodayOr15Days;
	}

	public function getIsTodayOr15Days(){
	  return $this->isTodayOr15Days;
	}

                        	                   			private $orderStatusCategory;
    	                        
	public function setOrderStatusCategory($orderStatusCategory){
		$this->orderStatusCategory = $orderStatusCategory;
         $this->apiParas["orderStatusCategory"] = $orderStatusCategory;
	}

	public function getOrderStatusCategory(){
	  return $this->orderStatusCategory;
	}

                                                    	}





        
 

