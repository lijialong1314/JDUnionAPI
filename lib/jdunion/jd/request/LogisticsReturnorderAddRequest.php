<?php
class LogisticsReturnorderAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.returnorder.add";
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
                                                        		                                    	                   			private $sellerNo;
    	                                                            
	public function setSellerNo($sellerNo){
		$this->sellerNo = $sellerNo;
         $this->apiParas["seller_no"] = $sellerNo;
	}

	public function getSellerNo(){
	  return $this->sellerNo;
	}

                        	                   			private $warehouseNo;
    	                                                            
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $inboundNo;
    	                                                            
	public function setInboundNo($inboundNo){
		$this->inboundNo = $inboundNo;
         $this->apiParas["inbound_no"] = $inboundNo;
	}

	public function getInboundNo(){
	  return $this->inboundNo;
	}

                        	                   			private $joslOutboundNo;
    	                                                                        
	public function setJoslOutboundNo($joslOutboundNo){
		$this->joslOutboundNo = $joslOutboundNo;
         $this->apiParas["josl_outbound_no"] = $joslOutboundNo;
	}

	public function getJoslOutboundNo(){
	  return $this->joslOutboundNo;
	}

                        	                   			private $expectedDate;
    	                                                            
	public function setExpectedDate($expectedDate){
		$this->expectedDate = $expectedDate;
         $this->apiParas["expected_date"] = $expectedDate;
	}

	public function getExpectedDate(){
	  return $this->expectedDate;
	}

                        	                   			private $isvSource;
    	                                                            
	public function setIsvSource($isvSource){
		$this->isvSource = $isvSource;
         $this->apiParas["isv_source"] = $isvSource;
	}

	public function getIsvSource(){
	  return $this->isvSource;
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
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $stockMark;
                              public function setStockMark($stockMark ){
                 $this->stockMark=$stockMark;
                 $this->apiParas["stock_mark"] = $stockMark;
              }

              public function getStockMark(){
              	return $this->stockMark;
              }
                                                                                                                                        	}





        
 

