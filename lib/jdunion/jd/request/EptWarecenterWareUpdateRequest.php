<?php
class EptWarecenterWareUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.ware.update";
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
                                                        		                                    	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $itemNum;
    	                        
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["itemNum"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
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





        
 

