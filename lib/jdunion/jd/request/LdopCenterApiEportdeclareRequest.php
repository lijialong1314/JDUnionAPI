<?php
class LdopCenterApiEportdeclareRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.center.api.eportdeclare";
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
                                                        		                                    	                   			private $platformId;
    	                        
	public function setPlatformId($platformId){
		$this->platformId = $platformId;
         $this->apiParas["platformId"] = $platformId;
	}

	public function getPlatformId(){
	  return $this->platformId;
	}

                        	                   			private $platformName;
    	                        
	public function setPlatformName($platformName){
		$this->platformName = $platformName;
         $this->apiParas["platformName"] = $platformName;
	}

	public function getPlatformName(){
	  return $this->platformName;
	}

                        	                   			private $appType;
    	                        
	public function setAppType($appType){
		$this->appType = $appType;
         $this->apiParas["appType"] = $appType;
	}

	public function getAppType(){
	  return $this->appType;
	}

                        	                   			private $logisticsNo;
    	                        
	public function setLogisticsNo($logisticsNo){
		$this->logisticsNo = $logisticsNo;
         $this->apiParas["logisticsNo"] = $logisticsNo;
	}

	public function getLogisticsNo(){
	  return $this->logisticsNo;
	}

                        	                   			private $billSerialNo;
    	                        
	public function setBillSerialNo($billSerialNo){
		$this->billSerialNo = $billSerialNo;
         $this->apiParas["billSerialNo"] = $billSerialNo;
	}

	public function getBillSerialNo(){
	  return $this->billSerialNo;
	}

                        	                   			private $billNo;
    	                        
	public function setBillNo($billNo){
		$this->billNo = $billNo;
         $this->apiParas["billNo"] = $billNo;
	}

	public function getBillNo(){
	  return $this->billNo;
	}

                        	                   			private $freight;
    	                        
	public function setFreight($freight){
		$this->freight = $freight;
         $this->apiParas["freight"] = $freight;
	}

	public function getFreight(){
	  return $this->freight;
	}

                        	                   			private $insuredFee;
    	                        
	public function setInsuredFee($insuredFee){
		$this->insuredFee = $insuredFee;
         $this->apiParas["insuredFee"] = $insuredFee;
	}

	public function getInsuredFee(){
	  return $this->insuredFee;
	}

                        	                   			private $netWeight;
    	                        
	public function setNetWeight($netWeight){
		$this->netWeight = $netWeight;
         $this->apiParas["netWeight"] = $netWeight;
	}

	public function getNetWeight(){
	  return $this->netWeight;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $packNo;
    	                        
	public function setPackNo($packNo){
		$this->packNo = $packNo;
         $this->apiParas["packNo"] = $packNo;
	}

	public function getPackNo(){
	  return $this->packNo;
	}

                        	                   			private $worth;
    	                        
	public function setWorth($worth){
		$this->worth = $worth;
         $this->apiParas["worth"] = $worth;
	}

	public function getWorth(){
	  return $this->worth;
	}

                        	                   			private $goodsName;
    	                        
	public function setGoodsName($goodsName){
		$this->goodsName = $goodsName;
         $this->apiParas["goodsName"] = $goodsName;
	}

	public function getGoodsName(){
	  return $this->goodsName;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $shipper;
    	                        
	public function setShipper($shipper){
		$this->shipper = $shipper;
         $this->apiParas["shipper"] = $shipper;
	}

	public function getShipper(){
	  return $this->shipper;
	}

                        	                   			private $shipperAddress;
    	                        
	public function setShipperAddress($shipperAddress){
		$this->shipperAddress = $shipperAddress;
         $this->apiParas["shipperAddress"] = $shipperAddress;
	}

	public function getShipperAddress(){
	  return $this->shipperAddress;
	}

                        	                   			private $shipperTelephone;
    	                        
	public function setShipperTelephone($shipperTelephone){
		$this->shipperTelephone = $shipperTelephone;
         $this->apiParas["shipperTelephone"] = $shipperTelephone;
	}

	public function getShipperTelephone(){
	  return $this->shipperTelephone;
	}

                        	                   			private $shipperCountry;
    	                        
	public function setShipperCountry($shipperCountry){
		$this->shipperCountry = $shipperCountry;
         $this->apiParas["shipperCountry"] = $shipperCountry;
	}

	public function getShipperCountry(){
	  return $this->shipperCountry;
	}

                        	                   			private $consigneeCountry;
    	                        
	public function setConsigneeCountry($consigneeCountry){
		$this->consigneeCountry = $consigneeCountry;
         $this->apiParas["consigneeCountry"] = $consigneeCountry;
	}

	public function getConsigneeCountry(){
	  return $this->consigneeCountry;
	}

                        	                   			private $consigneeProvince;
    	                        
	public function setConsigneeProvince($consigneeProvince){
		$this->consigneeProvince = $consigneeProvince;
         $this->apiParas["consigneeProvince"] = $consigneeProvince;
	}

	public function getConsigneeProvince(){
	  return $this->consigneeProvince;
	}

                        	                   			private $consigneeCity;
    	                        
	public function setConsigneeCity($consigneeCity){
		$this->consigneeCity = $consigneeCity;
         $this->apiParas["consigneeCity"] = $consigneeCity;
	}

	public function getConsigneeCity(){
	  return $this->consigneeCity;
	}

                        	                   			private $consigneeDistrict;
    	                        
	public function setConsigneeDistrict($consigneeDistrict){
		$this->consigneeDistrict = $consigneeDistrict;
         $this->apiParas["consigneeDistrict"] = $consigneeDistrict;
	}

	public function getConsigneeDistrict(){
	  return $this->consigneeDistrict;
	}

                        	                   			private $consingee;
    	                        
	public function setConsingee($consingee){
		$this->consingee = $consingee;
         $this->apiParas["consingee"] = $consingee;
	}

	public function getConsingee(){
	  return $this->consingee;
	}

                        	                   			private $consigneeAddress;
    	                        
	public function setConsigneeAddress($consigneeAddress){
		$this->consigneeAddress = $consigneeAddress;
         $this->apiParas["consigneeAddress"] = $consigneeAddress;
	}

	public function getConsigneeAddress(){
	  return $this->consigneeAddress;
	}

                        	                   			private $consigneeTelephone;
    	                        
	public function setConsigneeTelephone($consigneeTelephone){
		$this->consigneeTelephone = $consigneeTelephone;
         $this->apiParas["consigneeTelephone"] = $consigneeTelephone;
	}

	public function getConsigneeTelephone(){
	  return $this->consigneeTelephone;
	}

                        	                   			private $buyerIdType;
    	                        
	public function setBuyerIdType($buyerIdType){
		$this->buyerIdType = $buyerIdType;
         $this->apiParas["buyerIdType"] = $buyerIdType;
	}

	public function getBuyerIdType(){
	  return $this->buyerIdType;
	}

                        	                   			private $buyerIdNumber;
    	                        
	public function setBuyerIdNumber($buyerIdNumber){
		$this->buyerIdNumber = $buyerIdNumber;
         $this->apiParas["buyerIdNumber"] = $buyerIdNumber;
	}

	public function getBuyerIdNumber(){
	  return $this->buyerIdNumber;
	}

                        	                   			private $customsId;
    	                        
	public function setCustomsId($customsId){
		$this->customsId = $customsId;
         $this->apiParas["customsId"] = $customsId;
	}

	public function getCustomsId(){
	  return $this->customsId;
	}

                            }





        
 

