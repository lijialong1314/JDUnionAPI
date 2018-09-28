<?php
class JcloudWmsSkuAcceptServiceHandlerCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jcloud.wms.SkuAcceptServiceHandler.create";
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
                                    	                        	                                            		                                    	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                        	                   			private $tenantId;
    	                        
	public function setTenantId($tenantId){
		$this->tenantId = $tenantId;
         $this->apiParas["tenantId"] = $tenantId;
	}

	public function getTenantId(){
	  return $this->tenantId;
	}

                        	                   			private $specification;
    	                        
	public function setSpecification($specification){
		$this->specification = $specification;
         $this->apiParas["specification"] = $specification;
	}

	public function getSpecification(){
	  return $this->specification;
	}

                        	                   			private $model;
    	                        
	public function setModel($model){
		$this->model = $model;
         $this->apiParas["model"] = $model;
	}

	public function getModel(){
	  return $this->model;
	}

                        	                   			private $ownerNo;
    	                        
	public function setOwnerNo($ownerNo){
		$this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
	}

	public function getOwnerNo(){
	  return $this->ownerNo;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $foreignName;
    	                        
	public function setForeignName($foreignName){
		$this->foreignName = $foreignName;
         $this->apiParas["foreignName"] = $foreignName;
	}

	public function getForeignName(){
	  return $this->foreignName;
	}

                        	                   			private $categoryCode;
    	                        
	public function setCategoryCode($categoryCode){
		$this->categoryCode = $categoryCode;
         $this->apiParas["categoryCode"] = $categoryCode;
	}

	public function getCategoryCode(){
	  return $this->categoryCode;
	}

                        	                   			private $brand;
    	                        
	public function setBrand($brand){
		$this->brand = $brand;
         $this->apiParas["brand"] = $brand;
	}

	public function getBrand(){
	  return $this->brand;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $barcodeType;
                              public function setBarcodeType($barcodeType ){
                 $this->barcodeType=$barcodeType;
                 $this->apiParas["barcodeType"] = $barcodeType;
              }

              public function getBarcodeType(){
              	return $this->barcodeType;
              }
                                                                                                                                                                                                                                                                                                                                              private $barcodeArr;
                              public function setBarcodeArr($barcodeArr ){
                 $this->barcodeArr=$barcodeArr;
                 $this->apiParas["barcodeArr"] = $barcodeArr;
              }

              public function getBarcodeArr(){
              	return $this->barcodeArr;
              }
                                                                                                                                        	                   			private $sizeType;
    	                        
	public function setSizeType($sizeType){
		$this->sizeType = $sizeType;
         $this->apiParas["sizeType"] = $sizeType;
	}

	public function getSizeType(){
	  return $this->sizeType;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $width;
    	                        
	public function setWidth($width){
		$this->width = $width;
         $this->apiParas["width"] = $width;
	}

	public function getWidth(){
	  return $this->width;
	}

                        	                   			private $height;
    	                        
	public function setHeight($height){
		$this->height = $height;
         $this->apiParas["height"] = $height;
	}

	public function getHeight(){
	  return $this->height;
	}

                        	                   			private $isShelfLife;
    	                        
	public function setIsShelfLife($isShelfLife){
		$this->isShelfLife = $isShelfLife;
         $this->apiParas["isShelfLife"] = $isShelfLife;
	}

	public function getIsShelfLife(){
	  return $this->isShelfLife;
	}

                        	                   			private $shelfLife;
    	                        
	public function setShelfLife($shelfLife){
		$this->shelfLife = $shelfLife;
         $this->apiParas["shelfLife"] = $shelfLife;
	}

	public function getShelfLife(){
	  return $this->shelfLife;
	}

                        	                   			private $isSerial;
    	                        
	public function setIsSerial($isSerial){
		$this->isSerial = $isSerial;
         $this->apiParas["isSerial"] = $isSerial;
	}

	public function getIsSerial(){
	  return $this->isSerial;
	}

                        	                   			private $isHighValue;
    	                        
	public function setIsHighValue($isHighValue){
		$this->isHighValue = $isHighValue;
         $this->apiParas["isHighValue"] = $isHighValue;
	}

	public function getIsHighValue(){
	  return $this->isHighValue;
	}

                        	                   			private $isLuxury;
    	                        
	public function setIsLuxury($isLuxury){
		$this->isLuxury = $isLuxury;
         $this->apiParas["isLuxury"] = $isLuxury;
	}

	public function getIsLuxury(){
	  return $this->isLuxury;
	}

                        	                   			private $isFragile;
    	                        
	public function setIsFragile($isFragile){
		$this->isFragile = $isFragile;
         $this->apiParas["isFragile"] = $isFragile;
	}

	public function getIsFragile(){
	  return $this->isFragile;
	}

                        	                   			private $memo;
    	                        
	public function setMemo($memo){
		$this->memo = $memo;
         $this->apiParas["memo"] = $memo;
	}

	public function getMemo(){
	  return $this->memo;
	}

                        	                   			private $operateUser;
    	                        
	public function setOperateUser($operateUser){
		$this->operateUser = $operateUser;
         $this->apiParas["operateUser"] = $operateUser;
	}

	public function getOperateUser(){
	  return $this->operateUser;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                        	                   			private $dangerLevel;
    	                        
	public function setDangerLevel($dangerLevel){
		$this->dangerLevel = $dangerLevel;
         $this->apiParas["dangerLevel"] = $dangerLevel;
	}

	public function getDangerLevel(){
	  return $this->dangerLevel;
	}

                        	                   			private $manufactureSkuNo;
    	                        
	public function setManufactureSkuNo($manufactureSkuNo){
		$this->manufactureSkuNo = $manufactureSkuNo;
         $this->apiParas["manufactureSkuNo"] = $manufactureSkuNo;
	}

	public function getManufactureSkuNo(){
	  return $this->manufactureSkuNo;
	}

                        	                   			private $erpSkuNo;
    	                        
	public function setErpSkuNo($erpSkuNo){
		$this->erpSkuNo = $erpSkuNo;
         $this->apiParas["erpSkuNo"] = $erpSkuNo;
	}

	public function getErpSkuNo(){
	  return $this->erpSkuNo;
	}

                            }





        
 

