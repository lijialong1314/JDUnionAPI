<?php
class EptWarecenterWaredetailimgUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.waredetailimg.update";
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

                        	                   			private $index;
    	                        
	public function setIndex($index){
		$this->index = $index;
         $this->apiParas["index"] = $index;
	}

	public function getIndex(){
	  return $this->index;
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





        
 

