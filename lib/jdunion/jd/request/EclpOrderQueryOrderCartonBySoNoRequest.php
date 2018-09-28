<?php
class EclpOrderQueryOrderCartonBySoNoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.queryOrderCartonBySoNo";
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
                                    	                   			private $soNo;
    	                        
	public function setSoNo($soNo){
		$this->soNo = $soNo;
         $this->apiParas["soNo"] = $soNo;
	}

	public function getSoNo(){
	  return $this->soNo;
	}

}





        
 

