<?php
class DspAdunitAdgroupAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adunit.adgroup.add";
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

                        	                        	                   			private $position;
    	                        
	public function setPosition($position){
		$this->position = $position;
         $this->apiParas["position"] = $position;
	}

	public function getPosition(){
	  return $this->position;
	}

                        	                   			private $inFee;
    	                        
	public function setInFee($inFee){
		$this->inFee = $inFee;
         $this->apiParas["inFee"] = $inFee;
	}

	public function getInFee(){
	  return $this->inFee;
	}

                        	                   			private $outFee;
    	                        
	public function setOutFee($outFee){
		$this->outFee = $outFee;
         $this->apiParas["outFee"] = $outFee;
	}

	public function getOutFee(){
	  return $this->outFee;
	}

                        	                   			private $adOptimize;
    	                        
	public function setAdOptimize($adOptimize){
		$this->adOptimize = $adOptimize;
         $this->apiParas["adOptimize"] = $adOptimize;
	}

	public function getAdOptimize(){
	  return $this->adOptimize;
	}

                        	                                                    	                        	                   			private $adDevice;
    	                        
	public function setAdDevice($adDevice){
		$this->adDevice = $adDevice;
         $this->apiParas["adDevice"] = $adDevice;
	}

	public function getAdDevice(){
	  return $this->adDevice;
	}

                        	}





        
 

