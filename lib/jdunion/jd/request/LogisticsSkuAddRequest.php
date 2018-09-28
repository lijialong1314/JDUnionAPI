<?php
class LogisticsSkuAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.sku.add";
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
                                                        		                                    	                   			private $barCode;
    	                                                            
	public function setBarCode($barCode){
		$this->barCode = $barCode;
         $this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode(){
	  return $this->barCode;
	}

                        	                   			private $skuId;
    	                                                            
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $goodsAbbreviation;
    	                                                            
	public function setGoodsAbbreviation($goodsAbbreviation){
		$this->goodsAbbreviation = $goodsAbbreviation;
         $this->apiParas["goods_abbreviation"] = $goodsAbbreviation;
	}

	public function getGoodsAbbreviation(){
	  return $this->goodsAbbreviation;
	}

                        	                   			private $categoryId;
    	                                                            
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $categoryName;
    	                                                            
	public function setCategoryName($categoryName){
		$this->categoryName = $categoryName;
         $this->apiParas["category_name"] = $categoryName;
	}

	public function getCategoryName(){
	  return $this->categoryName;
	}

                        	                   			private $brandNo;
    	                                                            
	public function setBrandNo($brandNo){
		$this->brandNo = $brandNo;
         $this->apiParas["brand_no"] = $brandNo;
	}

	public function getBrandNo(){
	  return $this->brandNo;
	}

                        	                   			private $brandName;
    	                                                            
	public function setBrandName($brandName){
		$this->brandName = $brandName;
         $this->apiParas["brand_name"] = $brandName;
	}

	public function getBrandName(){
	  return $this->brandName;
	}

                        	                   			private $format;
    	                        
	public function setFormat($format){
		$this->format = $format;
         $this->apiParas["format"] = $format;
	}

	public function getFormat(){
	  return $this->format;
	}

                        	                   			private $color;
    	                        
	public function setColor($color){
		$this->color = $color;
         $this->apiParas["color"] = $color;
	}

	public function getColor(){
	  return $this->color;
	}

                        	                   			private $size;
    	                        
	public function setSize($size){
		$this->size = $size;
         $this->apiParas["size"] = $size;
	}

	public function getSize(){
	  return $this->size;
	}

                        	                   			private $grossWeight;
    	                                                            
	public function setGrossWeight($grossWeight){
		$this->grossWeight = $grossWeight;
         $this->apiParas["gross_weight"] = $grossWeight;
	}

	public function getGrossWeight(){
	  return $this->grossWeight;
	}

                        	                   			private $netWeight;
    	                                                            
	public function setNetWeight($netWeight){
		$this->netWeight = $netWeight;
         $this->apiParas["net_weight"] = $netWeight;
	}

	public function getNetWeight(){
	  return $this->netWeight;
	}

                        	                   			private $sizeDefinition;
    	                                                            
	public function setSizeDefinition($sizeDefinition){
		$this->sizeDefinition = $sizeDefinition;
         $this->apiParas["size_definition"] = $sizeDefinition;
	}

	public function getSizeDefinition(){
	  return $this->sizeDefinition;
	}

                        	                   			private $suppliersName;
    	                                                            
	public function setSuppliersName($suppliersName){
		$this->suppliersName = $suppliersName;
         $this->apiParas["suppliers_name"] = $suppliersName;
	}

	public function getSuppliersName(){
	  return $this->suppliersName;
	}

                        	                   			private $manufacturer;
    	                        
	public function setManufacturer($manufacturer){
		$this->manufacturer = $manufacturer;
         $this->apiParas["manufacturer"] = $manufacturer;
	}

	public function getManufacturer(){
	  return $this->manufacturer;
	}

                        	                   			private $suppliersNo;
    	                                                            
	public function setSuppliersNo($suppliersNo){
		$this->suppliersNo = $suppliersNo;
         $this->apiParas["suppliers_no"] = $suppliersNo;
	}

	public function getSuppliersNo(){
	  return $this->suppliersNo;
	}

                        	                   			private $productArea;
    	                                                            
	public function setProductArea($productArea){
		$this->productArea = $productArea;
         $this->apiParas["product_area"] = $productArea;
	}

	public function getProductArea(){
	  return $this->productArea;
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

                        	                   			private $volume;
    	                        
	public function setVolume($volume){
		$this->volume = $volume;
         $this->apiParas["volume"] = $volume;
	}

	public function getVolume(){
	  return $this->volume;
	}

                        	                   			private $isSafe;
    	                                                            
	public function setIsSafe($isSafe){
		$this->isSafe = $isSafe;
         $this->apiParas["is_safe"] = $isSafe;
	}

	public function getIsSafe(){
	  return $this->isSafe;
	}

                        	                   			private $safeDate;
    	                                                            
	public function setSafeDate($safeDate){
		$this->safeDate = $safeDate;
         $this->apiParas["safe_date"] = $safeDate;
	}

	public function getSafeDate(){
	  return $this->safeDate;
	}

                                                    	}





        
 

