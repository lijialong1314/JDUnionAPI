<?php
class EptWarecenterWareAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.ware.add";
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
                                                        		                                    	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                        	                   			private $wareStatus;
    	                        
	public function setWareStatus($wareStatus){
		$this->wareStatus = $wareStatus;
         $this->apiParas["wareStatus"] = $wareStatus;
	}

	public function getWareStatus(){
	  return $this->wareStatus;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $rfId;
    	                        
	public function setRfId($rfId){
		$this->rfId = $rfId;
         $this->apiParas["rfId"] = $rfId;
	}

	public function getRfId(){
	  return $this->rfId;
	}

                        	                   			private $itemNum;
    	                        
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["itemNum"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $hsCode;
    	                        
	public function setHsCode($hsCode){
		$this->hsCode = $hsCode;
         $this->apiParas["hsCode"] = $hsCode;
	}

	public function getHsCode(){
	  return $this->hsCode;
	}

                        	                   			private $transportId;
    	                        
	public function setTransportId($transportId){
		$this->transportId = $transportId;
         $this->apiParas["transportId"] = $transportId;
	}

	public function getTransportId(){
	  return $this->transportId;
	}

                        	                   			private $attributes;
    	                        
	public function setAttributes($attributes){
		$this->attributes = $attributes;
         $this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes(){
	  return $this->attributes;
	}

                        	                   			private $SupplyPrice;
    	                        
	public function setSupplyPrice($SupplyPrice){
		$this->SupplyPrice = $SupplyPrice;
         $this->apiParas["SupplyPrice"] = $SupplyPrice;
	}

	public function getSupplyPrice(){
	  return $this->SupplyPrice;
	}

                        	                   			private $amountCount;
    	                        
	public function setAmountCount($amountCount){
		$this->amountCount = $amountCount;
         $this->apiParas["amountCount"] = $amountCount;
	}

	public function getAmountCount(){
	  return $this->amountCount;
	}

                        	                   			private $lockCount;
    	                        
	public function setLockCount($lockCount){
		$this->lockCount = $lockCount;
         $this->apiParas["lockCount"] = $lockCount;
	}

	public function getLockCount(){
	  return $this->lockCount;
	}

                        	                   			private $lockStartTime;
    	                        
	public function setLockStartTime($lockStartTime){
		$this->lockStartTime = $lockStartTime;
         $this->apiParas["lockStartTime"] = $lockStartTime;
	}

	public function getLockStartTime(){
	  return $this->lockStartTime;
	}

                        	                   			private $lockEndTime;
    	                        
	public function setLockEndTime($lockEndTime){
		$this->lockEndTime = $lockEndTime;
         $this->apiParas["lockEndTime"] = $lockEndTime;
	}

	public function getLockEndTime(){
	  return $this->lockEndTime;
	}

                        	                   			private $imgByte;
    	                        
	public function setImgByte($imgByte){
		$this->imgByte = $imgByte;
         $this->apiParas["imgByte"] = $imgByte;
	}

	public function getImgByte(){
	  return $this->imgByte;
	}

                        	                   			private $recommendTpid;
    	                        
	public function setRecommendTpid($recommendTpid){
		$this->recommendTpid = $recommendTpid;
         $this->apiParas["recommendTpid"] = $recommendTpid;
	}

	public function getRecommendTpid(){
	  return $this->recommendTpid;
	}

                        	                   			private $customTpid;
    	                        
	public function setCustomTpid($customTpid){
		$this->customTpid = $customTpid;
         $this->apiParas["customTpid"] = $customTpid;
	}

	public function getCustomTpid(){
	  return $this->customTpid;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $deliveryDays;
    	                        
	public function setDeliveryDays($deliveryDays){
		$this->deliveryDays = $deliveryDays;
         $this->apiParas["deliveryDays"] = $deliveryDays;
	}

	public function getDeliveryDays(){
	  return $this->deliveryDays;
	}

                        	                   			private $keywords;
    	                        
	public function setKeywords($keywords){
		$this->keywords = $keywords;
         $this->apiParas["keywords"] = $keywords;
	}

	public function getKeywords(){
	  return $this->keywords;
	}

                        	                   			private $description;
    	                        
	public function setDescription($description){
		$this->description = $description;
         $this->apiParas["description"] = $description;
	}

	public function getDescription(){
	  return $this->description;
	}

                        	                   			private $packInfo;
    	                        
	public function setPackInfo($packInfo){
		$this->packInfo = $packInfo;
         $this->apiParas["packInfo"] = $packInfo;
	}

	public function getPackInfo(){
	  return $this->packInfo;
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

                        	                   			private $packLong;
    	                        
	public function setPackLong($packLong){
		$this->packLong = $packLong;
         $this->apiParas["packLong"] = $packLong;
	}

	public function getPackLong(){
	  return $this->packLong;
	}

                        	                   			private $packWide;
    	                        
	public function setPackWide($packWide){
		$this->packWide = $packWide;
         $this->apiParas["packWide"] = $packWide;
	}

	public function getPackWide(){
	  return $this->packWide;
	}

                        	                   			private $packHeight;
    	                        
	public function setPackHeight($packHeight){
		$this->packHeight = $packHeight;
         $this->apiParas["packHeight"] = $packHeight;
	}

	public function getPackHeight(){
	  return $this->packHeight;
	}

                        	                   			private $upc;
    	                        
	public function setUpc($upc){
		$this->upc = $upc;
         $this->apiParas["upc"] = $upc;
	}

	public function getUpc(){
	  return $this->upc;
	}

                            }





        
 

