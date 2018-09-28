<?php
class EclpMasterQueryShipperRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.queryShipper";
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
                                    	                   			private $shipperNos;
    	                        
	public function setShipperNos($shipperNos){
		$this->shipperNos = $shipperNos;
         $this->apiParas["shipperNos"] = $shipperNos;
	}

	public function getShipperNos(){
	  return $this->shipperNos;
	}

                        	}





        
 

