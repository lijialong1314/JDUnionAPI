<?php
class MarketChargeCycleListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.charge.cycle.list.get";
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
                                    	                   			private $itemCode;
    	                                                            
	public function setItemCode($itemCode){
		$this->itemCode = $itemCode;
         $this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode(){
	  return $this->itemCode;
	}

                        	                   			private $itemId;
    	                                                            
	public function setItemId($itemId){
		$this->itemId = $itemId;
         $this->apiParas["item_id"] = $itemId;
	}

	public function getItemId(){
	  return $this->itemId;
	}

}





        
 

