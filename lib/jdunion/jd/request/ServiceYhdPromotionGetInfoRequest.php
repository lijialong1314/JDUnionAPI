<?php
class ServiceYhdPromotionGetInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.yhd.promotion.getInfo";
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
                                    	                                            		                                    	                   			private $proCont;
    	                        
	public function setProCont($proCont){
		$this->proCont = $proCont;
         $this->apiParas["proCont"] = $proCont;
	}

	public function getProCont(){
	  return $this->proCont;
	}

                        	                   			private $materialId;
    	                        
	public function setMaterialId($materialId){
		$this->materialId = $materialId;
         $this->apiParas["materialId"] = $materialId;
	}

	public function getMaterialId(){
	  return $this->materialId;
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

                        	                   			private $positionId;
    	                        
	public function setPositionId($positionId){
		$this->positionId = $positionId;
         $this->apiParas["positionId"] = $positionId;
	}

	public function getPositionId(){
	  return $this->positionId;
	}

                        	                   			private $protocol;
    	                        
	public function setProtocol($protocol){
		$this->protocol = $protocol;
         $this->apiParas["protocol"] = $protocol;
	}

	public function getProtocol(){
	  return $this->protocol;
	}

                            }





        
 

