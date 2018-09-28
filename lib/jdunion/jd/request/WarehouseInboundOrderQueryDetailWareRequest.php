<?php
class WarehouseInboundOrderQueryDetailWareRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warehouse.inbound.order.query.detail.ware";
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
                                                        		                                    	                        	                   			private $docNo;
    	                        
	public function setDocNo($docNo){
		$this->docNo = $docNo;
         $this->apiParas["docNo"] = $docNo;
	}

	public function getDocNo(){
	  return $this->docNo;
	}

                            }





        
 

