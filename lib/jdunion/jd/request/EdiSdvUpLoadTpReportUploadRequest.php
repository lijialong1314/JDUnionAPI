<?php
class EdiSdvUpLoadTpReportUploadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.sdv.upLoadTpReport.upload";
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
                                                        		                                    	                   			private $serialNo;
    	                        
	public function setSerialNo($serialNo){
		$this->serialNo = $serialNo;
         $this->apiParas["serialNo"] = $serialNo;
	}

	public function getSerialNo(){
	  return $this->serialNo;
	}

                        	                   			private $ckBusId;
    	                        
	public function setCkBusId($ckBusId){
		$this->ckBusId = $ckBusId;
         $this->apiParas["ckBusId"] = $ckBusId;
	}

	public function getCkBusId(){
	  return $this->ckBusId;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $barCode;
    	                        
	public function setBarCode($barCode){
		$this->barCode = $barCode;
         $this->apiParas["barCode"] = $barCode;
	}

	public function getBarCode(){
	  return $this->barCode;
	}

                        	                   			private $fileName;
    	                        
	public function setFileName($fileName){
		$this->fileName = $fileName;
         $this->apiParas["fileName"] = $fileName;
	}

	public function getFileName(){
	  return $this->fileName;
	}

                        	                   			private $imageData;
    	                        
	public function setImageData($imageData){
		$this->imageData = $imageData;
         $this->apiParas["imageData"] = $imageData;
	}

	public function getImageData(){
	  return $this->imageData;
	}

                        	                   			private $jdUsername;
    	                        
	public function setJdUsername($jdUsername){
		$this->jdUsername = $jdUsername;
         $this->apiParas["jdUsername"] = $jdUsername;
	}

	public function getJdUsername(){
	  return $this->jdUsername;
	}

                            }





        
 

