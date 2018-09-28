<?php
class StoreGetPartitionWarehouseTypeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.store.getPartitionWarehouseType";
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
                                    	                        	                   			private $seqNum;
    	                                                            
	public function setSeqNum($seqNum){
		$this->seqNum = $seqNum;
         $this->apiParas["seq_num"] = $seqNum;
	}

	public function getSeqNum(){
	  return $this->seqNum;
	}

}





        
 

