<?php
class WareWriteUpOrDownRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.write.upOrDown";
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
                                                        		                                    	                        	                        	                                                                        		                                                        		                                    	                   			private $note;
    	                        
	public function setNote($note){
		$this->note = $note;
         $this->apiParas["note"] = $note;
	}

	public function getNote(){
	  return $this->note;
	}

                        	                                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                                                    	                   			private $opType;
    	                        
	public function setOpType($opType){
		$this->opType = $opType;
         $this->apiParas["opType"] = $opType;
	}

	public function getOpType(){
	  return $this->opType;
	}

}





        
 

