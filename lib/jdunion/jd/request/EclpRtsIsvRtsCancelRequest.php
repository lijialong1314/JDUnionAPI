<?php
class EclpRtsIsvRtsCancelRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.rts.isvRtsCancel";
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
                                                        		                                    	                   			private $eclpRtsNo;
    	                        
	public function setEclpRtsNo($eclpRtsNo){
		$this->eclpRtsNo = $eclpRtsNo;
         $this->apiParas["eclpRtsNo"] = $eclpRtsNo;
	}

	public function getEclpRtsNo(){
	  return $this->eclpRtsNo;
	}

                        	                   			private $isvRtsNum;
    	                        
	public function setIsvRtsNum($isvRtsNum){
		$this->isvRtsNum = $isvRtsNum;
         $this->apiParas["isvRtsNum"] = $isvRtsNum;
	}

	public function getIsvRtsNum(){
	  return $this->isvRtsNum;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $deliveryMode;
    	                        
	public function setDeliveryMode($deliveryMode){
		$this->deliveryMode = $deliveryMode;
         $this->apiParas["deliveryMode"] = $deliveryMode;
	}

	public function getDeliveryMode(){
	  return $this->deliveryMode;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $supplierNo;
    	                        
	public function setSupplierNo($supplierNo){
		$this->supplierNo = $supplierNo;
         $this->apiParas["supplierNo"] = $supplierNo;
	}

	public function getSupplierNo(){
	  return $this->supplierNo;
	}

                        	                   			private $receiver;
    	                        
	public function setReceiver($receiver){
		$this->receiver = $receiver;
         $this->apiParas["receiver"] = $receiver;
	}

	public function getReceiver(){
	  return $this->receiver;
	}

                        	                   			private $receiverPhone;
    	                        
	public function setReceiverPhone($receiverPhone){
		$this->receiverPhone = $receiverPhone;
         $this->apiParas["receiverPhone"] = $receiverPhone;
	}

	public function getReceiverPhone(){
	  return $this->receiverPhone;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $town;
    	                        
	public function setTown($town){
		$this->town = $town;
         $this->apiParas["town"] = $town;
	}

	public function getTown(){
	  return $this->town;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $deptGoodsNo;
                              public function setDeptGoodsNo($deptGoodsNo ){
                 $this->deptGoodsNo=$deptGoodsNo;
                 $this->apiParas["deptGoodsNo"] = $deptGoodsNo;
              }

              public function getDeptGoodsNo(){
              	return $this->deptGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                       private $goodsName;
                              public function setGoodsName($goodsName ){
                 $this->goodsName=$goodsName;
                 $this->apiParas["goodsName"] = $goodsName;
              }

              public function getGoodsName(){
              	return $this->goodsName;
              }
                                                                                                                                                                                                                                                                                                                       private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                                                                                                                                                                                                                       private $realQuantity;
                              public function setRealQuantity($realQuantity ){
                 $this->realQuantity=$realQuantity;
                 $this->apiParas["realQuantity"] = $realQuantity;
              }

              public function getRealQuantity(){
              	return $this->realQuantity;
              }
                                                                                                                                                                                                                                                                                                                       private $goodsStatus;
                              public function setGoodsStatus($goodsStatus ){
                 $this->goodsStatus=$goodsStatus;
                 $this->apiParas["goodsStatus"] = $goodsStatus;
              }

              public function getGoodsStatus(){
              	return $this->goodsStatus;
              }
                                                                                                                                                                    	}





        
 

