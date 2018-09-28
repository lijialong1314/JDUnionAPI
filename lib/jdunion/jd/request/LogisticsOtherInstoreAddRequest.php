<?php
class LogisticsOtherInstoreAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.otherInstore.add";
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
                                                        		                                    	                   			private $instoreType;
    	                                                            
	public function setInstoreType($instoreType){
		$this->instoreType = $instoreType;
         $this->apiParas["instore_type"] = $instoreType;
	}

	public function getInstoreType(){
	  return $this->instoreType;
	}

                        	                   			private $poNo;
    	                                                            
	public function setPoNo($poNo){
		$this->poNo = $poNo;
         $this->apiParas["po_no"] = $poNo;
	}

	public function getPoNo(){
	  return $this->poNo;
	}

                        	                   			private $expectedDate;
    	                                                            
	public function setExpectedDate($expectedDate){
		$this->expectedDate = $expectedDate;
         $this->apiParas["expected_date"] = $expectedDate;
	}

	public function getExpectedDate(){
	  return $this->expectedDate;
	}

                        	                   			private $approver;
    	                        
	public function setApprover($approver){
		$this->approver = $approver;
         $this->apiParas["approver"] = $approver;
	}

	public function getApprover(){
	  return $this->approver;
	}

                        	                   			private $warehouseNo;
    	                                                            
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goods_no"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isv_goods_no"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $expectedQty;
                              public function setExpectedQty($expectedQty ){
                 $this->expectedQty=$expectedQty;
                 $this->apiParas["expected_qty"] = $expectedQty;
              }

              public function getExpectedQty(){
              	return $this->expectedQty;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $goodsStatus;
                              public function setGoodsStatus($goodsStatus ){
                 $this->goodsStatus=$goodsStatus;
                 $this->apiParas["goods_status"] = $goodsStatus;
              }

              public function getGoodsStatus(){
              	return $this->goodsStatus;
              }
                                                                                                                                        	}





        
 

