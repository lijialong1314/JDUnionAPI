<?php
class WarehouseOutboundOrderCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warehouse.outbound.order.create";
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
                                                        		                                    	                        	                   			private $stockOutType;
    	                        
	public function setStockOutType($stockOutType){
		$this->stockOutType = $stockOutType;
         $this->apiParas["stockOutType"] = $stockOutType;
	}

	public function getStockOutType(){
	  return $this->stockOutType;
	}

                        	                   			private $snNo;
    	                        
	public function setSnNo($snNo){
		$this->snNo = $snNo;
         $this->apiParas["snNo"] = $snNo;
	}

	public function getSnNo(){
	  return $this->snNo;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                            }





        
 

