<?php
class ServicePromotionPidGetPidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.pid.getPid";
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
                                                        		                                    	                   			private $unionId;
    	                        
	public function setUnionId($unionId){
		$this->unionId = $unionId;
         $this->apiParas["unionId"] = $unionId;
	}

	public function getUnionId(){
	  return $this->unionId;
	}

                        	                   			private $sonUnionId;
    	                        
	public function setSonUnionId($sonUnionId){
		$this->sonUnionId = $sonUnionId;
         $this->apiParas["sonUnionId"] = $sonUnionId;
	}

	public function getSonUnionId(){
	  return $this->sonUnionId;
	}

                        	                   			private $mediaName;
    	                        
	public function setMediaName($mediaName){
		$this->mediaName = $mediaName;
         $this->apiParas["mediaName"] = $mediaName;
	}

	public function getMediaName(){
	  return $this->mediaName;
	}

                        	                   			private $positionName;
    	                        
	public function setPositionName($positionName){
		$this->positionName = $positionName;
         $this->apiParas["positionName"] = $positionName;
	}

	public function getPositionName(){
	  return $this->positionName;
	}

                        	                   			private $promotionType;
    	                        
	public function setPromotionType($promotionType){
		$this->promotionType = $promotionType;
         $this->apiParas["promotionType"] = $promotionType;
	}

	public function getPromotionType(){
	  return $this->promotionType;
	}

                            }





        
 

