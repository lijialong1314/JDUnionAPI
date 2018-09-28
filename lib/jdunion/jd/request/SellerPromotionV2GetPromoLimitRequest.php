<?php
class SellerPromotionV2GetPromoLimitRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.promotion.v2.getPromoLimit";
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
                                                        		                                    	                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $port;
    	                        
	public function setPort($port){
		$this->port = $port;
         $this->apiParas["port"] = $port;
	}

	public function getPort(){
	  return $this->port;
	}

                        	                                                                        		                                    	                        	                   			private $categoryId;
    	                                                            
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
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





        
 

