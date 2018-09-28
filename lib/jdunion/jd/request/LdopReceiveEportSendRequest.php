<?php
class LdopReceiveEportSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.receive.eport.send";
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
                                                        		                                    	                   			private $deliveryId;
    	                        
	public function setDeliveryId($deliveryId){
		$this->deliveryId = $deliveryId;
         $this->apiParas["deliveryId"] = $deliveryId;
	}

	public function getDeliveryId(){
	  return $this->deliveryId;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $packCategory;
    	                        
	public function setPackCategory($packCategory){
		$this->packCategory = $packCategory;
         $this->apiParas["packCategory"] = $packCategory;
	}

	public function getPackCategory(){
	  return $this->packCategory;
	}

                        	                   			private $cbeCode;
    	                        
	public function setCbeCode($cbeCode){
		$this->cbeCode = $cbeCode;
         $this->apiParas["cbeCode"] = $cbeCode;
	}

	public function getCbeCode(){
	  return $this->cbeCode;
	}

                        	                   			private $cbeName;
    	                        
	public function setCbeName($cbeName){
		$this->cbeName = $cbeName;
         $this->apiParas["cbeName"] = $cbeName;
	}

	public function getCbeName(){
	  return $this->cbeName;
	}

                        	                   			private $senderUserCountry;
    	                        
	public function setSenderUserCountry($senderUserCountry){
		$this->senderUserCountry = $senderUserCountry;
         $this->apiParas["senderUserCountry"] = $senderUserCountry;
	}

	public function getSenderUserCountry(){
	  return $this->senderUserCountry;
	}

                        	                   			private $transferType;
    	                        
	public function setTransferType($transferType){
		$this->transferType = $transferType;
         $this->apiParas["transferType"] = $transferType;
	}

	public function getTransferType(){
	  return $this->transferType;
	}

                        	                   			private $transferTypeinsp;
    	                        
	public function setTransferTypeinsp($transferTypeinsp){
		$this->transferTypeinsp = $transferTypeinsp;
         $this->apiParas["transferTypeinsp"] = $transferTypeinsp;
	}

	public function getTransferTypeinsp(){
	  return $this->transferTypeinsp;
	}

                        	                   			private $shipNameInsp;
    	                        
	public function setShipNameInsp($shipNameInsp){
		$this->shipNameInsp = $shipNameInsp;
         $this->apiParas["shipNameInsp"] = $shipNameInsp;
	}

	public function getShipNameInsp(){
	  return $this->shipNameInsp;
	}

                        	                   			private $shipCodeInsp;
    	                        
	public function setShipCodeInsp($shipCodeInsp){
		$this->shipCodeInsp = $shipCodeInsp;
         $this->apiParas["shipCodeInsp"] = $shipCodeInsp;
	}

	public function getShipCodeInsp(){
	  return $this->shipCodeInsp;
	}

                        	                   			private $transferRegioninsp;
    	                        
	public function setTransferRegioninsp($transferRegioninsp){
		$this->transferRegioninsp = $transferRegioninsp;
         $this->apiParas["transferRegioninsp"] = $transferRegioninsp;
	}

	public function getTransferRegioninsp(){
	  return $this->transferRegioninsp;
	}

                        	                   			private $packCategoryinsp;
    	                        
	public function setPackCategoryinsp($packCategoryinsp){
		$this->packCategoryinsp = $packCategoryinsp;
         $this->apiParas["packCategoryinsp"] = $packCategoryinsp;
	}

	public function getPackCategoryinsp(){
	  return $this->packCategoryinsp;
	}

                        	                   			private $idType;
    	                        
	public function setIdType($idType){
		$this->idType = $idType;
         $this->apiParas["idType"] = $idType;
	}

	public function getIdType(){
	  return $this->idType;
	}

                        	                   			private $idCode;
    	                        
	public function setIdCode($idCode){
		$this->idCode = $idCode;
         $this->apiParas["idCode"] = $idCode;
	}

	public function getIdCode(){
	  return $this->idCode;
	}

                        	                   			private $billMode;
    	                        
	public function setBillMode($billMode){
		$this->billMode = $billMode;
         $this->apiParas["billMode"] = $billMode;
	}

	public function getBillMode(){
	  return $this->billMode;
	}

                        	                   			private $jcborderport;
    	                        
	public function setJcborderport($jcborderport){
		$this->jcborderport = $jcborderport;
         $this->apiParas["jcborderport"] = $jcborderport;
	}

	public function getJcborderport(){
	  return $this->jcborderport;
	}

                        	                   			private $jcborderportInsp;
    	                        
	public function setJcborderportInsp($jcborderportInsp){
		$this->jcborderportInsp = $jcborderportInsp;
         $this->apiParas["jcborderportInsp"] = $jcborderportInsp;
	}

	public function getJcborderportInsp(){
	  return $this->jcborderportInsp;
	}

                        	                   			private $declareport;
    	                        
	public function setDeclareport($declareport){
		$this->declareport = $declareport;
         $this->apiParas["declareport"] = $declareport;
	}

	public function getDeclareport(){
	  return $this->declareport;
	}

                        	                   			private $applyportinsp;
    	                        
	public function setApplyportinsp($applyportinsp){
		$this->applyportinsp = $applyportinsp;
         $this->apiParas["applyportinsp"] = $applyportinsp;
	}

	public function getApplyportinsp(){
	  return $this->applyportinsp;
	}

                        	                   			private $batchCode;
    	                        
	public function setBatchCode($batchCode){
		$this->batchCode = $batchCode;
         $this->apiParas["batchCode"] = $batchCode;
	}

	public function getBatchCode(){
	  return $this->batchCode;
	}

                        	                   			private $shipName;
    	                        
	public function setShipName($shipName){
		$this->shipName = $shipName;
         $this->apiParas["shipName"] = $shipName;
	}

	public function getShipName(){
	  return $this->shipName;
	}

                        	                   			private $tradeCountry;
    	                        
	public function setTradeCountry($tradeCountry){
		$this->tradeCountry = $tradeCountry;
         $this->apiParas["tradeCountry"] = $tradeCountry;
	}

	public function getTradeCountry(){
	  return $this->tradeCountry;
	}

                        	                   			private $cbeCodeinsp;
    	                        
	public function setCbeCodeinsp($cbeCodeinsp){
		$this->cbeCodeinsp = $cbeCodeinsp;
         $this->apiParas["cbeCodeinsp"] = $cbeCodeinsp;
	}

	public function getCbeCodeinsp(){
	  return $this->cbeCodeinsp;
	}

                        	                   			private $coininsp;
    	                        
	public function setCoininsp($coininsp){
		$this->coininsp = $coininsp;
         $this->apiParas["coininsp"] = $coininsp;
	}

	public function getCoininsp(){
	  return $this->coininsp;
	}

                        	                   			private $ecpCode;
    	                        
	public function setEcpCode($ecpCode){
		$this->ecpCode = $ecpCode;
         $this->apiParas["ecpCode"] = $ecpCode;
	}

	public function getEcpCode(){
	  return $this->ecpCode;
	}

                        	                   			private $ecpName;
    	                        
	public function setEcpName($ecpName){
		$this->ecpName = $ecpName;
         $this->apiParas["ecpName"] = $ecpName;
	}

	public function getEcpName(){
	  return $this->ecpName;
	}

                        	                   			private $jcborderTime;
    	                        
	public function setJcborderTime($jcborderTime){
		$this->jcborderTime = $jcborderTime;
         $this->apiParas["jcborderTime"] = $jcborderTime;
	}

	public function getJcborderTime(){
	  return $this->jcborderTime;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $amount;
                              public function setAmount($amount ){
                 $this->amount=$amount;
                 $this->apiParas["amount"] = $amount;
              }

              public function getAmount(){
              	return $this->amount;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsName;
                              public function setGoodsName($goodsName ){
                 $this->goodsName=$goodsName;
                 $this->apiParas["goodsName"] = $goodsName;
              }

              public function getGoodsName(){
              	return $this->goodsName;
              }
                                                                                                                                                                                                                                                                                                                                              private $weight;
                              public function setWeight($weight ){
                 $this->weight=$weight;
                 $this->apiParas["weight"] = $weight;
              }

              public function getWeight(){
              	return $this->weight;
              }
                                                                                                                                                                                                                                                                                                                                              private $netWeight;
                              public function setNetWeight($netWeight ){
                 $this->netWeight=$netWeight;
                 $this->apiParas["netWeight"] = $netWeight;
              }

              public function getNetWeight(){
              	return $this->netWeight;
              }
                                                                                                                                            }





        
 

