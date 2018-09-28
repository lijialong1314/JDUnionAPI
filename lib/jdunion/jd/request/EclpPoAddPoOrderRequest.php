<?php
class EclpPoAddPoOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.po.addPoOrder";
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
                                                        		                                    	                   			private $spPoOrderNo;
    	                        
	public function setSpPoOrderNo($spPoOrderNo){
		$this->spPoOrderNo = $spPoOrderNo;
         $this->apiParas["spPoOrderNo"] = $spPoOrderNo;
	}

	public function getSpPoOrderNo(){
	  return $this->spPoOrderNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $whNo;
    	                        
	public function setWhNo($whNo){
		$this->whNo = $whNo;
         $this->apiParas["whNo"] = $whNo;
	}

	public function getWhNo(){
	  return $this->whNo;
	}

                        	                   			private $supplierNo;
    	                        
	public function setSupplierNo($supplierNo){
		$this->supplierNo = $supplierNo;
         $this->apiParas["supplierNo"] = $supplierNo;
	}

	public function getSupplierNo(){
	  return $this->supplierNo;
	}

                        	                   			private $orderMark;
    	                        
	public function setOrderMark($orderMark){
		$this->orderMark = $orderMark;
         $this->apiParas["orderMark"] = $orderMark;
	}

	public function getOrderMark(){
	  return $this->orderMark;
	}

                        	                   			private $billType;
    	                        
	public function setBillType($billType){
		$this->billType = $billType;
         $this->apiParas["billType"] = $billType;
	}

	public function getBillType(){
	  return $this->billType;
	}

                        	                   			private $acceptUnQcFlag;
    	                        
	public function setAcceptUnQcFlag($acceptUnQcFlag){
		$this->acceptUnQcFlag = $acceptUnQcFlag;
         $this->apiParas["acceptUnQcFlag"] = $acceptUnQcFlag;
	}

	public function getAcceptUnQcFlag(){
	  return $this->acceptUnQcFlag;
	}

                        	                   			private $boxFlag;
    	                        
	public function setBoxFlag($boxFlag){
		$this->boxFlag = $boxFlag;
         $this->apiParas["boxFlag"] = $boxFlag;
	}

	public function getBoxFlag(){
	  return $this->boxFlag;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $boxNo;
                              public function setBoxNo($boxNo ){
                 $this->boxNo=$boxNo;
                 $this->apiParas["boxNo"] = $boxNo;
              }

              public function getBoxNo(){
              	return $this->boxNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $boxGoodsNo;
                              public function setBoxGoodsNo($boxGoodsNo ){
                 $this->boxGoodsNo=$boxGoodsNo;
                 $this->apiParas["boxGoodsNo"] = $boxGoodsNo;
              }

              public function getBoxGoodsNo(){
              	return $this->boxGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $boxGoodsQty;
                              public function setBoxGoodsQty($boxGoodsQty ){
                 $this->boxGoodsQty=$boxGoodsQty;
                 $this->apiParas["boxGoodsQty"] = $boxGoodsQty;
              }

              public function getBoxGoodsQty(){
              	return $this->boxGoodsQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $boxSerialNo;
                              public function setBoxSerialNo($boxSerialNo ){
                 $this->boxSerialNo=$boxSerialNo;
                 $this->apiParas["boxSerialNo"] = $boxSerialNo;
              }

              public function getBoxSerialNo(){
              	return $this->boxSerialNo;
              }
                                                                                                                                        	                   			private $poReturnMode;
    	                        
	public function setPoReturnMode($poReturnMode){
		$this->poReturnMode = $poReturnMode;
         $this->apiParas["poReturnMode"] = $poReturnMode;
	}

	public function getPoReturnMode(){
	  return $this->poReturnMode;
	}

                        	                   			private $customsInfo;
    	                        
	public function setCustomsInfo($customsInfo){
		$this->customsInfo = $customsInfo;
         $this->apiParas["customsInfo"] = $customsInfo;
	}

	public function getCustomsInfo(){
	  return $this->customsInfo;
	}

                        	                   			private $poType;
    	                        
	public function setPoType($poType){
		$this->poType = $poType;
         $this->apiParas["poType"] = $poType;
	}

	public function getPoType(){
	  return $this->poType;
	}

                        	                   			private $billOfLading;
    	                        
	public function setBillOfLading($billOfLading){
		$this->billOfLading = $billOfLading;
         $this->apiParas["billOfLading"] = $billOfLading;
	}

	public function getBillOfLading(){
	  return $this->billOfLading;
	}

                        	                   			private $receiveLevel;
    	                        
	public function setReceiveLevel($receiveLevel){
		$this->receiveLevel = $receiveLevel;
         $this->apiParas["receiveLevel"] = $receiveLevel;
	}

	public function getReceiveLevel(){
	  return $this->receiveLevel;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $deptGoodsNo;
                              public function setDeptGoodsNo($deptGoodsNo ){
                 $this->deptGoodsNo=$deptGoodsNo;
                 $this->apiParas["deptGoodsNo"] = $deptGoodsNo;
              }

              public function getDeptGoodsNo(){
              	return $this->deptGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $numApplication;
                              public function setNumApplication($numApplication ){
                 $this->numApplication=$numApplication;
                 $this->apiParas["numApplication"] = $numApplication;
              }

              public function getNumApplication(){
              	return $this->numApplication;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsStatus;
                              public function setGoodsStatus($goodsStatus ){
                 $this->goodsStatus=$goodsStatus;
                 $this->apiParas["goodsStatus"] = $goodsStatus;
              }

              public function getGoodsStatus(){
              	return $this->goodsStatus;
              }
                                                                                                                                                                                                                                                                                                                                              private $barCodeType;
                              public function setBarCodeType($barCodeType ){
                 $this->barCodeType=$barCodeType;
                 $this->apiParas["barCodeType"] = $barCodeType;
              }

              public function getBarCodeType(){
              	return $this->barCodeType;
              }
                                                                                                                                                                                                                                                                                                                                              private $sidCheckout;
                              public function setSidCheckout($sidCheckout ){
                 $this->sidCheckout=$sidCheckout;
                 $this->apiParas["sidCheckout"] = $sidCheckout;
              }

              public function getSidCheckout(){
              	return $this->sidCheckout;
              }
                                                                                                                                                                                                                                                                                                                       private $qualityCheckRate;
                              public function setQualityCheckRate($qualityCheckRate ){
                 $this->qualityCheckRate=$qualityCheckRate;
                 $this->apiParas["qualityCheckRate"] = $qualityCheckRate;
              }

              public function getQualityCheckRate(){
              	return $this->qualityCheckRate;
              }
                                                                                                                                        	}





        
 

