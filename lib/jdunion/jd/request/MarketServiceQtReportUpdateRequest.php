<?php
class MarketServiceQtReportUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.service.qt.report.update";
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
                                                        		                                    	                   			private $serviceItemCode;
    	                                                                        
	public function setServiceItemCode($serviceItemCode){
		$this->serviceItemCode = $serviceItemCode;
         $this->apiParas["service_item_code"] = $serviceItemCode;
	}

	public function getServiceItemCode(){
	  return $this->serviceItemCode;
	}

                        	                   			private $qtCode;
    	                                                            
	public function setQtCode($qtCode){
		$this->qtCode = $qtCode;
         $this->apiParas["qt_code"] = $qtCode;
	}

	public function getQtCode(){
	  return $this->qtCode;
	}

                        	                   			private $qtName;
    	                                                            
	public function setQtName($qtName){
		$this->qtName = $qtName;
         $this->apiParas["qt_name"] = $qtName;
	}

	public function getQtName(){
	  return $this->qtName;
	}

                        	                   			private $qtType;
    	                                                            
	public function setQtType($qtType){
		$this->qtType = $qtType;
         $this->apiParas["qt_type"] = $qtType;
	}

	public function getQtType(){
	  return $this->qtType;
	}

                        	                   			private $qtStandard;
    	                                                            
	public function setQtStandard($qtStandard){
		$this->qtStandard = $qtStandard;
         $this->apiParas["qt_standard"] = $qtStandard;
	}

	public function getQtStandard(){
	  return $this->qtStandard;
	}

                        	                   			private $isPassed;
    	                                                            
	public function setIsPassed($isPassed){
		$this->isPassed = $isPassed;
         $this->apiParas["is_passed"] = $isPassed;
	}

	public function getIsPassed(){
	  return $this->isPassed;
	}

                        	                   			private $spName;
    	                                                            
	public function setSpName($spName){
		$this->spName = $spName;
         $this->apiParas["sp_name"] = $spName;
	}

	public function getSpName(){
	  return $this->spName;
	}

                        	                   			private $message;
    	                        
	public function setMessage($message){
		$this->message = $message;
         $this->apiParas["message"] = $message;
	}

	public function getMessage(){
	  return $this->message;
	}

                        	                   			private $submitTime;
    	                                                            
	public function setSubmitTime($submitTime){
		$this->submitTime = $submitTime;
         $this->apiParas["submit_time"] = $submitTime;
	}

	public function getSubmitTime(){
	  return $this->submitTime;
	}

                        	                   			private $reportTime;
    	                                                            
	public function setReportTime($reportTime){
		$this->reportTime = $reportTime;
         $this->apiParas["report_time"] = $reportTime;
	}

	public function getReportTime(){
	  return $this->reportTime;
	}

                        	                   			private $expiryTime;
    	                                                            
	public function setExpiryTime($expiryTime){
		$this->expiryTime = $expiryTime;
         $this->apiParas["expiry_time"] = $expiryTime;
	}

	public function getExpiryTime(){
	  return $this->expiryTime;
	}

                        	                   			private $itemUrl;
    	                                                            
	public function setItemUrl($itemUrl){
		$this->itemUrl = $itemUrl;
         $this->apiParas["item_url"] = $itemUrl;
	}

	public function getItemUrl(){
	  return $this->itemUrl;
	}

                        	                   			private $itemDesc;
    	                                                            
	public function setItemDesc($itemDesc){
		$this->itemDesc = $itemDesc;
         $this->apiParas["item_desc"] = $itemDesc;
	}

	public function getItemDesc(){
	  return $this->itemDesc;
	}

                        	                   			private $reportUrl;
    	                                                            
	public function setReportUrl($reportUrl){
		$this->reportUrl = $reportUrl;
         $this->apiParas["report_url"] = $reportUrl;
	}

	public function getReportUrl(){
	  return $this->reportUrl;
	}

                        	                   			private $extAttr;
    	                                                            
	public function setExtAttr($extAttr){
		$this->extAttr = $extAttr;
         $this->apiParas["ext_attr"] = $extAttr;
	}

	public function getExtAttr(){
	  return $this->extAttr;
	}

                        	                   			private $numIid;
    	                                                            
	public function setNumIid($numIid){
		$this->numIid = $numIid;
         $this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid(){
	  return $this->numIid;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $itemSku;
    	                                                            
	public function setItemSku($itemSku){
		$this->itemSku = $itemSku;
         $this->apiParas["item_sku"] = $itemSku;
	}

	public function getItemSku(){
	  return $this->itemSku;
	}

                        	                   			private $itemTag;
    	                                                            
	public function setItemTag($itemTag){
		$this->itemTag = $itemTag;
         $this->apiParas["item_tag"] = $itemTag;
	}

	public function getItemTag(){
	  return $this->itemTag;
	}

                        	                   			private $itemWashingMark;
    	                                                                        
	public function setItemWashingMark($itemWashingMark){
		$this->itemWashingMark = $itemWashingMark;
         $this->apiParas["item_washing_mark"] = $itemWashingMark;
	}

	public function getItemWashingMark(){
	  return $this->itemWashingMark;
	}

                                                    	}





        
 

