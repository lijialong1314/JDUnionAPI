<?php
class AscCollectionCountRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.collection.count";
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
                                    	                        	                        	                                            		                                    	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $operatePin;
    	                        
	public function setOperatePin($operatePin){
		$this->operatePin = $operatePin;
         $this->apiParas["operatePin"] = $operatePin;
	}

	public function getOperatePin(){
	  return $this->operatePin;
	}

                        	                   			private $operateNick;
    	                        
	public function setOperateNick($operateNick){
		$this->operateNick = $operateNick;
         $this->apiParas["operateNick"] = $operateNick;
	}

	public function getOperateNick(){
	  return $this->operateNick;
	}

                        	                   			private $jdInterveneFlag;
    	                        
	public function setJdInterveneFlag($jdInterveneFlag){
		$this->jdInterveneFlag = $jdInterveneFlag;
         $this->apiParas["jdInterveneFlag"] = $jdInterveneFlag;
	}

	public function getJdInterveneFlag(){
	  return $this->jdInterveneFlag;
	}

                        	                   			private $balanceFlag;
    	                        
	public function setBalanceFlag($balanceFlag){
		$this->balanceFlag = $balanceFlag;
         $this->apiParas["balanceFlag"] = $balanceFlag;
	}

	public function getBalanceFlag(){
	  return $this->balanceFlag;
	}

                        	                   			private $applyTimeBegin;
    	                        
	public function setApplyTimeBegin($applyTimeBegin){
		$this->applyTimeBegin = $applyTimeBegin;
         $this->apiParas["applyTimeBegin"] = $applyTimeBegin;
	}

	public function getApplyTimeBegin(){
	  return $this->applyTimeBegin;
	}

                        	                   			private $applyTimeEnd;
    	                        
	public function setApplyTimeEnd($applyTimeEnd){
		$this->applyTimeEnd = $applyTimeEnd;
         $this->apiParas["applyTimeEnd"] = $applyTimeEnd;
	}

	public function getApplyTimeEnd(){
	  return $this->applyTimeEnd;
	}

                        	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                            }





        
 

