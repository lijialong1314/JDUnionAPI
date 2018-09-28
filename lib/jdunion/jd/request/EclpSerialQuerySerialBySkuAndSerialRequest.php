<?php
class EclpSerialQuerySerialBySkuAndSerialRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.serial.querySerialBySkuAndSerial";
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
                                                        		                                    	                   			private $goodsNo;
    	                        
	public function setGoodsNo($goodsNo){
		$this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
	}

	public function getGoodsNo(){
	  return $this->goodsNo;
	}

                        	                   			private $goodsSID;
    	                        
	public function setGoodsSID($goodsSID){
		$this->goodsSID = $goodsSID;
         $this->apiParas["goodsSID"] = $goodsSID;
	}

	public function getGoodsSID(){
	  return $this->goodsSID;
	}

                                                    	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

}





        
 

