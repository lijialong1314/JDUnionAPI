<?php
class LogisticsPoAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.po.add";
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
                                                        		                                    	                   			private $channelsSellerNo;
    	                                                                        
	public function setChannelsSellerNo($channelsSellerNo){
		$this->channelsSellerNo = $channelsSellerNo;
         $this->apiParas["channels_seller_no"] = $channelsSellerNo;
	}

	public function getChannelsSellerNo(){
	  return $this->channelsSellerNo;
	}

                        	                   			private $poNo;
    	                                                            
	public function setPoNo($poNo){
		$this->poNo = $poNo;
         $this->apiParas["po_no"] = $poNo;
	}

	public function getPoNo(){
	  return $this->poNo;
	}

                        	                   			private $warehouseNo;
    	                                                            
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $expectDate;
    	                                                            
	public function setExpectDate($expectDate){
		$this->expectDate = $expectDate;
         $this->apiParas["expect_date"] = $expectDate;
	}

	public function getExpectDate(){
	  return $this->expectDate;
	}

                        	                   			private $supplierName;
    	                                                            
	public function setSupplierName($supplierName){
		$this->supplierName = $supplierName;
         $this->apiParas["supplier_name"] = $supplierName;
	}

	public function getSupplierName(){
	  return $this->supplierName;
	}

                        	                   			private $supplierNo;
    	                                                            
	public function setSupplierNo($supplierNo){
		$this->supplierNo = $supplierNo;
         $this->apiParas["supplier_no"] = $supplierNo;
	}

	public function getSupplierNo(){
	  return $this->supplierNo;
	}

                        	                   			private $approver;
    	                        
	public function setApprover($approver){
		$this->approver = $approver;
         $this->apiParas["approver"] = $approver;
	}

	public function getApprover(){
	  return $this->approver;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goods_no"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
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





        
 

