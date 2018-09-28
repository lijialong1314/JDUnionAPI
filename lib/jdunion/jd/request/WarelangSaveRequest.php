<?php
class WarelangSaveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.warelang.save";
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

                        	                   			private $langId;
    	                        
	public function setLangId($langId){
		$this->langId = $langId;
         $this->apiParas["langId"] = $langId;
	}

	public function getLangId(){
	  return $this->langId;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $seoKeywords;
    	                        
	public function setSeoKeywords($seoKeywords){
		$this->seoKeywords = $seoKeywords;
         $this->apiParas["seoKeywords"] = $seoKeywords;
	}

	public function getSeoKeywords(){
	  return $this->seoKeywords;
	}

                        	                   			private $extPackInfo;
    	                        
	public function setExtPackInfo($extPackInfo){
		$this->extPackInfo = $extPackInfo;
         $this->apiParas["extPackInfo"] = $extPackInfo;
	}

	public function getExtPackInfo(){
	  return $this->extPackInfo;
	}

                        	                   			private $description;
    	                        
	public function setDescription($description){
		$this->description = $description;
         $this->apiParas["description"] = $description;
	}

	public function getDescription(){
	  return $this->description;
	}

                        	                   			private $appDescription;
    	                        
	public function setAppDescription($appDescription){
		$this->appDescription = $appDescription;
         $this->apiParas["appDescription"] = $appDescription;
	}

	public function getAppDescription(){
	  return $this->appDescription;
	}

                            }





        
 

