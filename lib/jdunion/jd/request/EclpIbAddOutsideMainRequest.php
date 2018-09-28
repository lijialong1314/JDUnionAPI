<?php
class EclpIbAddOutsideMainRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.ib.addOutsideMain";
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
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $isvOutsideNo;
    	                        
	public function setIsvOutsideNo($isvOutsideNo){
		$this->isvOutsideNo = $isvOutsideNo;
         $this->apiParas["isvOutsideNo"] = $isvOutsideNo;
	}

	public function getIsvOutsideNo(){
	  return $this->isvOutsideNo;
	}

                        	                   			private $warehouseNoOut;
    	                        
	public function setWarehouseNoOut($warehouseNoOut){
		$this->warehouseNoOut = $warehouseNoOut;
         $this->apiParas["warehouseNoOut"] = $warehouseNoOut;
	}

	public function getWarehouseNoOut(){
	  return $this->warehouseNoOut;
	}

                        	                   			private $warehouseNoIn;
    	                        
	public function setWarehouseNoIn($warehouseNoIn){
		$this->warehouseNoIn = $warehouseNoIn;
         $this->apiParas["warehouseNoIn"] = $warehouseNoIn;
	}

	public function getWarehouseNoIn(){
	  return $this->warehouseNoIn;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goodsNo"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $planNum;
                              public function setPlanNum($planNum ){
                 $this->planNum=$planNum;
                 $this->apiParas["planNum"] = $planNum;
              }

              public function getPlanNum(){
              	return $this->planNum;
              }
                                                                                                                                        	}





        
 

