<?php
class EpsRechargeAbatementRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eps.rechargeAbatement";
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
                                                        		                                    	                   			private $deliveryNo;
    	                        
	public function setDeliveryNo($deliveryNo){
		$this->deliveryNo = $deliveryNo;
         $this->apiParas["deliveryNo"] = $deliveryNo;
	}

	public function getDeliveryNo(){
	  return $this->deliveryNo;
	}

                        	                   			private $siteNo;
    	                        
	public function setSiteNo($siteNo){
		$this->siteNo = $siteNo;
         $this->apiParas["siteNo"] = $siteNo;
	}

	public function getSiteNo(){
	  return $this->siteNo;
	}

                        	                        	                   			private $rechargeUUID;
    	                        
	public function setRechargeUUID($rechargeUUID){
		$this->rechargeUUID = $rechargeUUID;
         $this->apiParas["rechargeUUID"] = $rechargeUUID;
	}

	public function getRechargeUUID(){
	  return $this->rechargeUUID;
	}

                        	                   			private $rechargeNum;
    	                        
	public function setRechargeNum($rechargeNum){
		$this->rechargeNum = $rechargeNum;
         $this->apiParas["rechargeNum"] = $rechargeNum;
	}

	public function getRechargeNum(){
	  return $this->rechargeNum;
	}

                        	                   			private $rechargeType;
    	                        
	public function setRechargeType($rechargeType){
		$this->rechargeType = $rechargeType;
         $this->apiParas["rechargeType"] = $rechargeType;
	}

	public function getRechargeType(){
	  return $this->rechargeType;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $operator;
    	                        
	public function setOperator($operator){
		$this->operator = $operator;
         $this->apiParas["operator"] = $operator;
	}

	public function getOperator(){
	  return $this->operator;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                            }





        
 

