<?php
class EclpRtwAddRtwOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.rtw.addRtwOrder";
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
                                                        		                                    	                   			private $eclpSoNo;
    	                        
	public function setEclpSoNo($eclpSoNo){
		$this->eclpSoNo = $eclpSoNo;
         $this->apiParas["eclpSoNo"] = $eclpSoNo;
	}

	public function getEclpSoNo(){
	  return $this->eclpSoNo;
	}

                        	                   			private $eclpRtwNo;
    	                        
	public function setEclpRtwNo($eclpRtwNo){
		$this->eclpRtwNo = $eclpRtwNo;
         $this->apiParas["eclpRtwNo"] = $eclpRtwNo;
	}

	public function getEclpRtwNo(){
	  return $this->eclpRtwNo;
	}

                        	                   			private $isvRtwNum;
    	                        
	public function setIsvRtwNum($isvRtwNum){
		$this->isvRtwNum = $isvRtwNum;
         $this->apiParas["isvRtwNum"] = $isvRtwNum;
	}

	public function getIsvRtwNum(){
	  return $this->isvRtwNum;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $reson;
    	                        
	public function setReson($reson){
		$this->reson = $reson;
         $this->apiParas["reson"] = $reson;
	}

	public function getReson(){
	  return $this->reson;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $packageNo;
    	                        
	public function setPackageNo($packageNo){
		$this->packageNo = $packageNo;
         $this->apiParas["packageNo"] = $packageNo;
	}

	public function getPackageNo(){
	  return $this->packageNo;
	}

                        	                   			private $isvSoNo;
    	                        
	public function setIsvSoNo($isvSoNo){
		$this->isvSoNo = $isvSoNo;
         $this->apiParas["isvSoNo"] = $isvSoNo;
	}

	public function getIsvSoNo(){
	  return $this->isvSoNo;
	}

                        	                   			private $orderMark;
    	                        
	public function setOrderMark($orderMark){
		$this->orderMark = $orderMark;
         $this->apiParas["orderMark"] = $orderMark;
	}

	public function getOrderMark(){
	  return $this->orderMark;
	}

                        	                   			private $shipperName;
    	                        
	public function setShipperName($shipperName){
		$this->shipperName = $shipperName;
         $this->apiParas["shipperName"] = $shipperName;
	}

	public function getShipperName(){
	  return $this->shipperName;
	}

                        	                   			private $ownerNo;
    	                        
	public function setOwnerNo($ownerNo){
		$this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
	}

	public function getOwnerNo(){
	  return $this->ownerNo;
	}

                        	                   			private $orderInType;
    	                        
	public function setOrderInType($orderInType){
		$this->orderInType = $orderInType;
         $this->apiParas["orderInType"] = $orderInType;
	}

	public function getOrderInType(){
	  return $this->orderInType;
	}

                        	                   			private $receiveLevel;
    	                        
	public function setReceiveLevel($receiveLevel){
		$this->receiveLevel = $receiveLevel;
         $this->apiParas["receiveLevel"] = $receiveLevel;
	}

	public function getReceiveLevel(){
	  return $this->receiveLevel;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $planQty;
                              public function setPlanQty($planQty ){
                 $this->planQty=$planQty;
                 $this->apiParas["planQty"] = $planQty;
              }

              public function getPlanQty(){
              	return $this->planQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsLevel;
                              public function setGoodsLevel($goodsLevel ){
                 $this->goodsLevel=$goodsLevel;
                 $this->apiParas["goodsLevel"] = $goodsLevel;
              }

              public function getGoodsLevel(){
              	return $this->goodsLevel;
              }
                                                                                                                                                                                                                                                                                                                                              private $productionDate;
                              public function setProductionDate($productionDate ){
                 $this->productionDate=$productionDate;
                 $this->apiParas["productionDate"] = $productionDate;
              }

              public function getProductionDate(){
              	return $this->productionDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $packageBatchNo;
                              public function setPackageBatchNo($packageBatchNo ){
                 $this->packageBatchNo=$packageBatchNo;
                 $this->apiParas["packageBatchNo"] = $packageBatchNo;
              }

              public function getPackageBatchNo(){
              	return $this->packageBatchNo;
              }
                                                                                                                                        	}





        
 

