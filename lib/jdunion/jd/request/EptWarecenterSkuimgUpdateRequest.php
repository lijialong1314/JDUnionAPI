<?php
class EptWarecenterSkuimgUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.skuimg.update";
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

                        	                   			private $saleAttrValue;
    	                        
	public function setSaleAttrValue($saleAttrValue){
		$this->saleAttrValue = $saleAttrValue;
         $this->apiParas["saleAttrValue"] = $saleAttrValue;
	}

	public function getSaleAttrValue(){
	  return $this->saleAttrValue;
	}

                        	                   			private $img;
    	                        
	public function setImg($img){
		$this->img = $img;
         $this->apiParas["img"] = $img;
	}

	public function getImg(){
	  return $this->img;
	}

}





        
 

