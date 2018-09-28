<?php
class VcGetReturnOrderDetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.get.return.order.detail";
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
                                                        		                                    	                   			private $returnId;
    	                        
	public function setReturnId($returnId){
		$this->returnId = $returnId;
         $this->apiParas["returnId"] = $returnId;
	}

	public function getReturnId(){
	  return $this->returnId;
	}

                        	                            }





        
 

