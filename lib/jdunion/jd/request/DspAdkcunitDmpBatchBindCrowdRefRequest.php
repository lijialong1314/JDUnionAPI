<?php
class DspAdkcunitDmpBatchBindCrowdRefRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.dmp.batchBindCrowdRef";
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

                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                   			private $adGroupType;
    	                        
	public function setAdGroupType($adGroupType){
		$this->adGroupType = $adGroupType;
         $this->apiParas["adGroupType"] = $adGroupType;
	}

	public function getAdGroupType(){
	  return $this->adGroupType;
	}

                        	                   			private $opt;
    	                        
	public function setOpt($opt){
		$this->opt = $opt;
         $this->apiParas["opt"] = $opt;
	}

	public function getOpt(){
	  return $this->opt;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $crowdId;
                              public function setCrowdId($crowdId ){
                 $this->crowdId=$crowdId;
                 $this->apiParas["crowdId"] = $crowdId;
              }

              public function getCrowdId(){
              	return $this->crowdId;
              }
                                                                                                                                                                                                                                                                                                                                              private $isUsed;
                              public function setIsUsed($isUsed ){
                 $this->isUsed=$isUsed;
                 $this->apiParas["isUsed"] = $isUsed;
              }

              public function getIsUsed(){
              	return $this->isUsed;
              }
                                                                                                                                                                                                                                                                                                                                              private $adGroupPrice;
                              public function setAdGroupPrice($adGroupPrice ){
                 $this->adGroupPrice=$adGroupPrice;
                 $this->apiParas["adGroupPrice"] = $adGroupPrice;
              }

              public function getAdGroupPrice(){
              	return $this->adGroupPrice;
              }
                                                                                                                                        	}





        
 

