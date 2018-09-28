<?php
class ServicePromotionContentGetcodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.content.getcode";
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
                                    	                                            		                                    	                   			private $releaseType;
    	                        
	public function setReleaseType($releaseType){
		$this->releaseType = $releaseType;
         $this->apiParas["releaseType"] = $releaseType;
	}

	public function getReleaseType(){
	  return $this->releaseType;
	}

                        	                   			private $typeId;
    	                        
	public function setTypeId($typeId){
		$this->typeId = $typeId;
         $this->apiParas["typeId"] = $typeId;
	}

	public function getTypeId(){
	  return $this->typeId;
	}

                        	                   			private $sortName;
    	                        
	public function setSortName($sortName){
		$this->sortName = $sortName;
         $this->apiParas["sortName"] = $sortName;
	}

	public function getSortName(){
	  return $this->sortName;
	}

                        	                   			private $sort;
    	                        
	public function setSort($sort){
		$this->sort = $sort;
         $this->apiParas["sort"] = $sort;
	}

	public function getSort(){
	  return $this->sort;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $unionId;
    	                        
	public function setUnionId($unionId){
		$this->unionId = $unionId;
         $this->apiParas["unionId"] = $unionId;
	}

	public function getUnionId(){
	  return $this->unionId;
	}

                        	                   			private $subUnionId;
    	                        
	public function setSubUnionId($subUnionId){
		$this->subUnionId = $subUnionId;
         $this->apiParas["subUnionId"] = $subUnionId;
	}

	public function getSubUnionId(){
	  return $this->subUnionId;
	}

                        	                   			private $webId;
    	                        
	public function setWebId($webId){
		$this->webId = $webId;
         $this->apiParas["webId"] = $webId;
	}

	public function getWebId(){
	  return $this->webId;
	}

                        	                   			private $ext1;
    	                        
	public function setExt1($ext1){
		$this->ext1 = $ext1;
         $this->apiParas["ext1"] = $ext1;
	}

	public function getExt1(){
	  return $this->ext1;
	}

                        	                   			private $protocol;
    	                        
	public function setProtocol($protocol){
		$this->protocol = $protocol;
         $this->apiParas["protocol"] = $protocol;
	}

	public function getProtocol(){
	  return $this->protocol;
	}

                        	                   			private $positionId;
    	                        
	public function setPositionId($positionId){
		$this->positionId = $positionId;
         $this->apiParas["positionId"] = $positionId;
	}

	public function getPositionId(){
	  return $this->positionId;
	}

                            }





        
 

