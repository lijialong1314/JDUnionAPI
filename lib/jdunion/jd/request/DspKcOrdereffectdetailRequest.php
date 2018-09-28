<?php
class DspKcOrdereffectdetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.kc.ordereffectdetail";
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
                                                        		                                    	                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                        	                   			private $mySelf;
    	                        
	public function setMySelf($mySelf){
		$this->mySelf = $mySelf;
         $this->apiParas["mySelf"] = $mySelf;
	}

	public function getMySelf(){
	  return $this->mySelf;
	}

                        	                   			private $platform;
    	                        
	public function setPlatform($platform){
		$this->platform = $platform;
         $this->apiParas["platform"] = $platform;
	}

	public function getPlatform(){
	  return $this->platform;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $retrievalType;
    	                        
	public function setRetrievalType($retrievalType){
		$this->retrievalType = $retrievalType;
         $this->apiParas["retrievalType"] = $retrievalType;
	}

	public function getRetrievalType(){
	  return $this->retrievalType;
	}

                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $clickStartDay;
    	                        
	public function setClickStartDay($clickStartDay){
		$this->clickStartDay = $clickStartDay;
         $this->apiParas["clickStartDay"] = $clickStartDay;
	}

	public function getClickStartDay(){
	  return $this->clickStartDay;
	}

                        	                   			private $clickEndDay;
    	                        
	public function setClickEndDay($clickEndDay){
		$this->clickEndDay = $clickEndDay;
         $this->apiParas["clickEndDay"] = $clickEndDay;
	}

	public function getClickEndDay(){
	  return $this->clickEndDay;
	}

                        	                   			private $orderStartDay;
    	                        
	public function setOrderStartDay($orderStartDay){
		$this->orderStartDay = $orderStartDay;
         $this->apiParas["orderStartDay"] = $orderStartDay;
	}

	public function getOrderStartDay(){
	  return $this->orderStartDay;
	}

                        	                   			private $orderEndDay;
    	                        
	public function setOrderEndDay($orderEndDay){
		$this->orderEndDay = $orderEndDay;
         $this->apiParas["orderEndDay"] = $orderEndDay;
	}

	public function getOrderEndDay(){
	  return $this->orderEndDay;
	}

                        	                   			private $realTime;
    	                        
	public function setRealTime($realTime){
		$this->realTime = $realTime;
         $this->apiParas["realTime"] = $realTime;
	}

	public function getRealTime(){
	  return $this->realTime;
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

                            }





        
 

