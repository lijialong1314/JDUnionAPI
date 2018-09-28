<?php
class DspMaterialAddMaterialRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.material.addMaterial";
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
                                                        		                                    	                        	                        	                   			private $materialName;
    	                        
	public function setMaterialName($materialName){
		$this->materialName = $materialName;
         $this->apiParas["materialName"] = $materialName;
	}

	public function getMaterialName(){
	  return $this->materialName;
	}

                        	                   			private $effectiveDate;
    	                        
	public function setEffectiveDate($effectiveDate){
		$this->effectiveDate = $effectiveDate;
         $this->apiParas["effectiveDate"] = $effectiveDate;
	}

	public function getEffectiveDate(){
	  return $this->effectiveDate;
	}

                        	                   			private $expirationDate;
    	                        
	public function setExpirationDate($expirationDate){
		$this->expirationDate = $expirationDate;
         $this->apiParas["expirationDate"] = $expirationDate;
	}

	public function getExpirationDate(){
	  return $this->expirationDate;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $mediaId;
    	                        
	public function setMediaId($mediaId){
		$this->mediaId = $mediaId;
         $this->apiParas["mediaId"] = $mediaId;
	}

	public function getMediaId(){
	  return $this->mediaId;
	}

                        	                        	                   			private $creativeId;
    	                        
	public function setCreativeId($creativeId){
		$this->creativeId = $creativeId;
         $this->apiParas["creativeId"] = $creativeId;
	}

	public function getCreativeId(){
	  return $this->creativeId;
	}

                        	                   			private $imgSrc;
    	                        
	public function setImgSrc($imgSrc){
		$this->imgSrc = $imgSrc;
         $this->apiParas["imgSrc"] = $imgSrc;
	}

	public function getImgSrc(){
	  return $this->imgSrc;
	}

                        	                   			private $url;
    	                        
	public function setUrl($url){
		$this->url = $url;
         $this->apiParas["url"] = $url;
	}

	public function getUrl(){
	  return $this->url;
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

                            }





        
 

