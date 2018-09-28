<?php
class LogisticsOtherOutstoreAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.otherOutstore.add";
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
                                                        		                                    	                   			private $outboundNo;
    	                                                            
	public function setOutboundNo($outboundNo){
		$this->outboundNo = $outboundNo;
         $this->apiParas["outbound_no"] = $outboundNo;
	}

	public function getOutboundNo(){
	  return $this->outboundNo;
	}

                        	                   			private $joslWareNo;
    	                                                                        
	public function setJoslWareNo($joslWareNo){
		$this->joslWareNo = $joslWareNo;
         $this->apiParas["josl_ware_no"] = $joslWareNo;
	}

	public function getJoslWareNo(){
	  return $this->joslWareNo;
	}

                        	                   			private $joslCarriersNo;
    	                                                                        
	public function setJoslCarriersNo($joslCarriersNo){
		$this->joslCarriersNo = $joslCarriersNo;
         $this->apiParas["josl_carriers_no"] = $joslCarriersNo;
	}

	public function getJoslCarriersNo(){
	  return $this->joslCarriersNo;
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

                        	                   			private $outboundType;
    	                                                            
	public function setOutboundType($outboundType){
		$this->outboundType = $outboundType;
         $this->apiParas["outbound_type"] = $outboundType;
	}

	public function getOutboundType(){
	  return $this->outboundType;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $consigneeName;
    	                                                            
	public function setConsigneeName($consigneeName){
		$this->consigneeName = $consigneeName;
         $this->apiParas["consignee_name"] = $consigneeName;
	}

	public function getConsigneeName(){
	  return $this->consigneeName;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
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

                        	                   			private $receivable;
    	                        
	public function setReceivable($receivable){
		$this->receivable = $receivable;
         $this->apiParas["receivable"] = $receivable;
	}

	public function getReceivable(){
	  return $this->receivable;
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

                        	                   			private $returnConsigneeName;
    	                                                                        
	public function setReturnConsigneeName($returnConsigneeName){
		$this->returnConsigneeName = $returnConsigneeName;
         $this->apiParas["return_consignee_name"] = $returnConsigneeName;
	}

	public function getReturnConsigneeName(){
	  return $this->returnConsigneeName;
	}

                        	                   			private $returnConsigneeAddress;
    	                                                                        
	public function setReturnConsigneeAddress($returnConsigneeAddress){
		$this->returnConsigneeAddress = $returnConsigneeAddress;
         $this->apiParas["return_consignee_address"] = $returnConsigneeAddress;
	}

	public function getReturnConsigneeAddress(){
	  return $this->returnConsigneeAddress;
	}

                        	                   			private $returnConsigneeMobile;
    	                                                                        
	public function setReturnConsigneeMobile($returnConsigneeMobile){
		$this->returnConsigneeMobile = $returnConsigneeMobile;
         $this->apiParas["return_consignee_mobile"] = $returnConsigneeMobile;
	}

	public function getReturnConsigneeMobile(){
	  return $this->returnConsigneeMobile;
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

                        	                   			private $picker;
    	                        
	public function setPicker($picker){
		$this->picker = $picker;
         $this->apiParas["picker"] = $picker;
	}

	public function getPicker(){
	  return $this->picker;
	}

                        	                   			private $pickerCell;
    	                                                            
	public function setPickerCell($pickerCell){
		$this->pickerCell = $pickerCell;
         $this->apiParas["picker_cell"] = $pickerCell;
	}

	public function getPickerCell(){
	  return $this->pickerCell;
	}

                        	                   			private $pikerId;
    	                                                            
	public function setPikerId($pikerId){
		$this->pikerId = $pikerId;
         $this->apiParas["piker_id"] = $pikerId;
	}

	public function getPikerId(){
	  return $this->pikerId;
	}

                        	                   			private $transportWay;
    	                                                            
	public function setTransportWay($transportWay){
		$this->transportWay = $transportWay;
         $this->apiParas["transport_way"] = $transportWay;
	}

	public function getTransportWay(){
	  return $this->transportWay;
	}

                        	                   			private $orderMark;
    	                                                            
	public function setOrderMark($orderMark){
		$this->orderMark = $orderMark;
         $this->apiParas["order_mark"] = $orderMark;
	}

	public function getOrderMark(){
	  return $this->orderMark;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $joslGoodNo;
                              public function setJoslGoodNo($joslGoodNo ){
                 $this->joslGoodNo=$joslGoodNo;
                 $this->apiParas["josl_good_no"] = $joslGoodNo;
              }

              public function getJoslGoodNo(){
              	return $this->joslGoodNo;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $isvGoodNo;
                              public function setIsvGoodNo($isvGoodNo ){
                 $this->isvGoodNo=$isvGoodNo;
                 $this->apiParas["isv_good_no"] = $isvGoodNo;
              }

              public function getIsvGoodNo(){
              	return $this->isvGoodNo;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $outQty;
                              public function setOutQty($outQty ){
                 $this->outQty=$outQty;
                 $this->apiParas["out_qty"] = $outQty;
              }

              public function getOutQty(){
              	return $this->outQty;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $goodStatus;
                              public function setGoodStatus($goodStatus ){
                 $this->goodStatus=$goodStatus;
                 $this->apiParas["good_status"] = $goodStatus;
              }

              public function getGoodStatus(){
              	return $this->goodStatus;
              }
                                                                                                                                        	}





        
 

