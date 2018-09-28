<?php
class DspAdkcunitAdgroupAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.adgroup.add";
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
                                                        		                                    	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $newAreaId;
    	                        
	public function setNewAreaId($newAreaId){
		$this->newAreaId = $newAreaId;
         $this->apiParas["newAreaId"] = $newAreaId;
	}

	public function getNewAreaId(){
	  return $this->newAreaId;
	}

                        	                        	                   			private $feeStr;
    	                        
	public function setFeeStr($feeStr){
		$this->feeStr = $feeStr;
         $this->apiParas["feeStr"] = $feeStr;
	}

	public function getFeeStr(){
	  return $this->feeStr;
	}

                        	                   			private $inSearchFeeStr;
    	                        
	public function setInSearchFeeStr($inSearchFeeStr){
		$this->inSearchFeeStr = $inSearchFeeStr;
         $this->apiParas["inSearchFeeStr"] = $inSearchFeeStr;
	}

	public function getInSearchFeeStr(){
	  return $this->inSearchFeeStr;
	}

                        	                   			private $mobilePriceCoef;
    	                        
	public function setMobilePriceCoef($mobilePriceCoef){
		$this->mobilePriceCoef = $mobilePriceCoef;
         $this->apiParas["mobilePriceCoef"] = $mobilePriceCoef;
	}

	public function getMobilePriceCoef(){
	  return $this->mobilePriceCoef;
	}

                        	                                                    	}





        
 

