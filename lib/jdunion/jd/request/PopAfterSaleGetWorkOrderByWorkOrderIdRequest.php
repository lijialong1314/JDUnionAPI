<?php
class PopAfterSaleGetWorkOrderByWorkOrderIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afterSale.GetWorkOrderByWorkOrderId";
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
                                    	                   			private $workorderId;
    	                                                            
	public function setWorkorderId($workorderId){
		$this->workorderId = $workorderId;
         $this->apiParas["workorder_id"] = $workorderId;
	}

	public function getWorkorderId(){
	  return $this->workorderId;
	}

                        	                        	}





        
 

