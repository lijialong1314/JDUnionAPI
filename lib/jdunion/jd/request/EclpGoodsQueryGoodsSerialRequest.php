<?php
class EclpGoodsQueryGoodsSerialRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.goods.queryGoodsSerial";
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
                                    	                   			private $bizNo;
    	                        
	public function setBizNo($bizNo){
		$this->bizNo = $bizNo;
         $this->apiParas["bizNo"] = $bizNo;
	}

	public function getBizNo(){
	  return $this->bizNo;
	}

                        	}





        
 

