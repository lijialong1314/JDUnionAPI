<?php
class LogisticsOrderAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.order.add";
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

                        	                   			private $channelsOutboundNo;
    	                                                                        
	public function setChannelsOutboundNo($channelsOutboundNo){
		$this->channelsOutboundNo = $channelsOutboundNo;
         $this->apiParas["channels_outbound_no"] = $channelsOutboundNo;
	}

	public function getChannelsOutboundNo(){
	  return $this->channelsOutboundNo;
	}

                        	                   			private $warehouseNo;
    	                                                            
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $carriersId;
    	                                                            
	public function setCarriersId($carriersId){
		$this->carriersId = $carriersId;
         $this->apiParas["carriers_id"] = $carriersId;
	}

	public function getCarriersId(){
	  return $this->carriersId;
	}

                        	                   			private $expectDate;
    	                                                            
	public function setExpectDate($expectDate){
		$this->expectDate = $expectDate;
         $this->apiParas["expect_date"] = $expectDate;
	}

	public function getExpectDate(){
	  return $this->expectDate;
	}

                        	                   			private $orderNo;
    	                                                            
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["order_no"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $shopNo;
    	                                                            
	public function setShopNo($shopNo){
		$this->shopNo = $shopNo;
         $this->apiParas["shop_no"] = $shopNo;
	}

	public function getShopNo(){
	  return $this->shopNo;
	}

                        	                   			private $consigneeName;
    	                                                            
	public function setConsigneeName($consigneeName){
		$this->consigneeName = $consigneeName;
         $this->apiParas["consignee_name"] = $consigneeName;
	}

	public function getConsigneeName(){
	  return $this->consigneeName;
	}

                        	                   			private $addressProvince;
    	                                                            
	public function setAddressProvince($addressProvince){
		$this->addressProvince = $addressProvince;
         $this->apiParas["address_province"] = $addressProvince;
	}

	public function getAddressProvince(){
	  return $this->addressProvince;
	}

                        	                   			private $addressCity;
    	                                                            
	public function setAddressCity($addressCity){
		$this->addressCity = $addressCity;
         $this->apiParas["address_city"] = $addressCity;
	}

	public function getAddressCity(){
	  return $this->addressCity;
	}

                        	                   			private $addressCounty;
    	                                                            
	public function setAddressCounty($addressCounty){
		$this->addressCounty = $addressCounty;
         $this->apiParas["address_county"] = $addressCounty;
	}

	public function getAddressCounty(){
	  return $this->addressCounty;
	}

                        	                   			private $addressTown;
    	                                                            
	public function setAddressTown($addressTown){
		$this->addressTown = $addressTown;
         $this->apiParas["address_town"] = $addressTown;
	}

	public function getAddressTown(){
	  return $this->addressTown;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $zipCode;
    	                                                            
	public function setZipCode($zipCode){
		$this->zipCode = $zipCode;
         $this->apiParas["zip_code"] = $zipCode;
	}

	public function getZipCode(){
	  return $this->zipCode;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $receivable;
    	                        
	public function setReceivable($receivable){
		$this->receivable = $receivable;
         $this->apiParas["receivable"] = $receivable;
	}

	public function getReceivable(){
	  return $this->receivable;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $buyerRemark;
    	                                                            
	public function setBuyerRemark($buyerRemark){
		$this->buyerRemark = $buyerRemark;
         $this->apiParas["buyer_remark"] = $buyerRemark;
	}

	public function getBuyerRemark(){
	  return $this->buyerRemark;
	}

                        	                   			private $verifyRemark;
    	                                                            
	public function setVerifyRemark($verifyRemark){
		$this->verifyRemark = $verifyRemark;
         $this->apiParas["verify_remark"] = $verifyRemark;
	}

	public function getVerifyRemark(){
	  return $this->verifyRemark;
	}

                        	                   			private $returnConsigneeAddress;
    	                                                                        
	public function setReturnConsigneeAddress($returnConsigneeAddress){
		$this->returnConsigneeAddress = $returnConsigneeAddress;
         $this->apiParas["return_consignee_address"] = $returnConsigneeAddress;
	}

	public function getReturnConsigneeAddress(){
	  return $this->returnConsigneeAddress;
	}

                        	                   			private $returnConsigneeName;
    	                                                                        
	public function setReturnConsigneeName($returnConsigneeName){
		$this->returnConsigneeName = $returnConsigneeName;
         $this->apiParas["return_consignee_name"] = $returnConsigneeName;
	}

	public function getReturnConsigneeName(){
	  return $this->returnConsigneeName;
	}

                        	                   			private $returnConsigneePhone;
    	                                                                        
	public function setReturnConsigneePhone($returnConsigneePhone){
		$this->returnConsigneePhone = $returnConsigneePhone;
         $this->apiParas["return_consignee_phone"] = $returnConsigneePhone;
	}

	public function getReturnConsigneePhone(){
	  return $this->returnConsigneePhone;
	}

                        	                   			private $stationNo;
    	                                                            
	public function setStationNo($stationNo){
		$this->stationNo = $stationNo;
         $this->apiParas["station_no"] = $stationNo;
	}

	public function getStationNo(){
	  return $this->stationNo;
	}

                        	                   			private $stationName;
    	                                                            
	public function setStationName($stationName){
		$this->stationName = $stationName;
         $this->apiParas["station_name"] = $stationName;
	}

	public function getStationName(){
	  return $this->stationName;
	}

                        	                   			private $orderMark;
    	                                                            
	public function setOrderMark($orderMark){
		$this->orderMark = $orderMark;
         $this->apiParas["order_mark"] = $orderMark;
	}

	public function getOrderMark(){
	  return $this->orderMark;
	}

                        	                   			private $shopOrderSource;
    	                                                                        
	public function setShopOrderSource($shopOrderSource){
		$this->shopOrderSource = $shopOrderSource;
         $this->apiParas["shop_order_source"] = $shopOrderSource;
	}

	public function getShopOrderSource(){
	  return $this->shopOrderSource;
	}

                        	                   			private $shopOrderCreateTime;
    	                                                                                    
	public function setShopOrderCreateTime($shopOrderCreateTime){
		$this->shopOrderCreateTime = $shopOrderCreateTime;
         $this->apiParas["shop_order_create_time"] = $shopOrderCreateTime;
	}

	public function getShopOrderCreateTime(){
	  return $this->shopOrderCreateTime;
	}

                        	                        	                        	                        	                   			private $picker;
    	                        
	public function setPicker($picker){
		$this->picker = $picker;
         $this->apiParas["picker"] = $picker;
	}

	public function getPicker(){
	  return $this->picker;
	}

                        	                   			private $pickerCall;
    	                                                            
	public function setPickerCall($pickerCall){
		$this->pickerCall = $pickerCall;
         $this->apiParas["picker_call"] = $pickerCall;
	}

	public function getPickerCall(){
	  return $this->pickerCall;
	}

                        	                   			private $pikerId;
    	                                                            
	public function setPikerId($pikerId){
		$this->pikerId = $pikerId;
         $this->apiParas["piker_id"] = $pikerId;
	}

	public function getPikerId(){
	  return $this->pikerId;
	}

                        	                   			private $packType;
    	                                                            
	public function setPackType($packType){
		$this->packType = $packType;
         $this->apiParas["pack_type"] = $packType;
	}

	public function getPackType(){
	  return $this->packType;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goods_no"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["sku_id"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $shopGoodsNo;
                              public function setShopGoodsNo($shopGoodsNo ){
                 $this->shopGoodsNo=$shopGoodsNo;
                 $this->apiParas["shopGoodsNo"] = $shopGoodsNo;
              }

              public function getShopGoodsNo(){
              	return $this->shopGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $qty;
                              public function setQty($qty ){
                 $this->qty=$qty;
                 $this->apiParas["qty"] = $qty;
              }

              public function getQty(){
              	return $this->qty;
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





        
 

