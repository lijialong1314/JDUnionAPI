<?php
class EptWarecenterSkuPictureQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.skuPicture.query";
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

                        	                   			private $attrValueId;
    	                        
	public function setAttrValueId($attrValueId){
		$this->attrValueId = $attrValueId;
         $this->apiParas["attrValueId"] = $attrValueId;
	}

	public function getAttrValueId(){
	  return $this->attrValueId;
	}

                            }





        
 

