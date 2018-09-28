<?php
class ServicePromotionGetcodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.getcode";
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
                                    	                                            		                                    	                   			private $promotionType;
    	                        
	public function setPromotionType($promotionType){
		$this->promotionType = $promotionType;
         $this->apiParas["promotionType"] = $promotionType;
	}

	public function getPromotionType(){
	  return $this->promotionType;
	}

                        	                   			private $materialId;
    	                        
	public function setMaterialId($materialId){
		$this->materialId = $materialId;
         $this->apiParas["materialId"] = $materialId;
	}

	public function getMaterialId(){
	  return $this->materialId;
	}

                        	                   			private $unionId;
    	                        
	public function setUnionId($unionId){
		$this->unionId = $unionId;
         $this->apiParas["unionId"] = $unionId;
	}

	public function getUnionId(){
	  return $this->unionId;
	}

                        	                   			private $subUnionId;
    	                        
	public function setSubUnionId($subUnionId){
		$this->subUnionId = $subUnionId;
         $this->apiParas["subUnionId"] = $subUnionId;
	}

	public function getSubUnionId(){
	  return $this->subUnionId;
	}

                        	                   			private $siteSize;
    	                        
	public function setSiteSize($siteSize){
		$this->siteSize = $siteSize;
         $this->apiParas["siteSize"] = $siteSize;
	}

	public function getSiteSize(){
	  return $this->siteSize;
	}

                        	                   			private $siteId;
    	                        
	public function setSiteId($siteId){
		$this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
	}

	public function getSiteId(){
	  return $this->siteId;
	}

                        	                   			private $channel;
    	                        
	public function setChannel($channel){
		$this->channel = $channel;
         $this->apiParas["channel"] = $channel;
	}

	public function getChannel(){
	  return $this->channel;
	}

                        	                   			private $webId;
    	                        
	public function setWebId($webId){
		$this->webId = $webId;
         $this->apiParas["webId"] = $webId;
	}

	public function getWebId(){
	  return $this->webId;
	}

                        	                   			private $extendId;
    	                        
	public function setExtendId($extendId){
		$this->extendId = $extendId;
         $this->apiParas["extendId"] = $extendId;
	}

	public function getExtendId(){
	  return $this->extendId;
	}

                        	                   			private $ext1;
    	                        
	public function setExt1($ext1){
		$this->ext1 = $ext1;
         $this->apiParas["ext1"] = $ext1;
	}

	public function getExt1(){
	  return $this->ext1;
	}

                        	                   			private $adttype;
    	                        
	public function setAdttype($adttype){
		$this->adttype = $adttype;
         $this->apiParas["adttype"] = $adttype;
	}

	public function getAdttype(){
	  return $this->adttype;
	}

                        	                   			private $protocol;
    	                        
	public function setProtocol($protocol){
		$this->protocol = $protocol;
         $this->apiParas["protocol"] = $protocol;
	}

	public function getProtocol(){
	  return $this->protocol;
	}

                        	                   			private $pid;
    	                        
	public function setPid($pid){
		$this->pid = $pid;
         $this->apiParas["pid"] = $pid;
	}

	public function getPid(){
	  return $this->pid;
	}

                            }





        
 

