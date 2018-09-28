<?php
class LasImHfsReverseorderpickupPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.reverseorderpickup.push";
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
                                                        		                                    	                   			private $orderid;
    	                        
	public function setOrderid($orderid){
		$this->orderid = $orderid;
         $this->apiParas["orderid"] = $orderid;
	}

	public function getOrderid(){
	  return $this->orderid;
	}

                        	                   			private $logisticsStatus;
    	                        
	public function setLogisticsStatus($logisticsStatus){
		$this->logisticsStatus = $logisticsStatus;
         $this->apiParas["logisticsStatus"] = $logisticsStatus;
	}

	public function getLogisticsStatus(){
	  return $this->logisticsStatus;
	}

                        	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $operatorTime;
    	                        
	public function setOperatorTime($operatorTime){
		$this->operatorTime = $operatorTime;
         $this->apiParas["operatorTime"] = $operatorTime;
	}

	public function getOperatorTime(){
	  return $this->operatorTime;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                            }





        
 

