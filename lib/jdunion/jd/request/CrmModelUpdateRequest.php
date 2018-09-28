<?php
class CrmModelUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.model.update";
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
                                    	                        	                   			private $modelId;
    	                                                            
	public function setModelId($modelId){
		$this->modelId = $modelId;
         $this->apiParas["model_id"] = $modelId;
	}

	public function getModelId(){
	  return $this->modelId;
	}

                        	                   			private $modelName;
    	                                                            
	public function setModelName($modelName){
		$this->modelName = $modelName;
         $this->apiParas["model_name"] = $modelName;
	}

	public function getModelName(){
	  return $this->modelName;
	}

                        	                   			private $grade;
    	                        
	public function setGrade($grade){
		$this->grade = $grade;
         $this->apiParas["grade"] = $grade;
	}

	public function getGrade(){
	  return $this->grade;
	}

                        	                   			private $minLastTradeTime;
    	                                                                                    
	public function setMinLastTradeTime($minLastTradeTime){
		$this->minLastTradeTime = $minLastTradeTime;
         $this->apiParas["min_last_trade_time"] = $minLastTradeTime;
	}

	public function getMinLastTradeTime(){
	  return $this->minLastTradeTime;
	}

                        	                   			private $maxLastTradeTime;
    	                                                                                    
	public function setMaxLastTradeTime($maxLastTradeTime){
		$this->maxLastTradeTime = $maxLastTradeTime;
         $this->apiParas["max_last_trade_time"] = $maxLastTradeTime;
	}

	public function getMaxLastTradeTime(){
	  return $this->maxLastTradeTime;
	}

                        	                   			private $minTradeCount;
    	                                                                        
	public function setMinTradeCount($minTradeCount){
		$this->minTradeCount = $minTradeCount;
         $this->apiParas["min_trade_count"] = $minTradeCount;
	}

	public function getMinTradeCount(){
	  return $this->minTradeCount;
	}

                        	                   			private $maxTradeCount;
    	                                                                        
	public function setMaxTradeCount($maxTradeCount){
		$this->maxTradeCount = $maxTradeCount;
         $this->apiParas["max_trade_count"] = $maxTradeCount;
	}

	public function getMaxTradeCount(){
	  return $this->maxTradeCount;
	}

                        	                   			private $avgPrice;
    	                                                            
	public function setAvgPrice($avgPrice){
		$this->avgPrice = $avgPrice;
         $this->apiParas["avg_price"] = $avgPrice;
	}

	public function getAvgPrice(){
	  return $this->avgPrice;
	}

                        	                   			private $minTradeAmount;
    	                                                                        
	public function setMinTradeAmount($minTradeAmount){
		$this->minTradeAmount = $minTradeAmount;
         $this->apiParas["min_trade_amount"] = $minTradeAmount;
	}

	public function getMinTradeAmount(){
	  return $this->minTradeAmount;
	}

}





        
 

