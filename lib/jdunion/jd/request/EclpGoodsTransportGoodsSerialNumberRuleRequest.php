<?php
class EclpGoodsTransportGoodsSerialNumberRuleRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.goods.transportGoodsSerialNumberRule";
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
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $goodsNo;
    	                        
	public function setGoodsNo($goodsNo){
		$this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
	}

	public function getGoodsNo(){
	  return $this->goodsNo;
	}

                        	                   			private $serialNumberLength;
    	                        
	public function setSerialNumberLength($serialNumberLength){
		$this->serialNumberLength = $serialNumberLength;
         $this->apiParas["serialNumberLength"] = $serialNumberLength;
	}

	public function getSerialNumberLength(){
	  return $this->serialNumberLength;
	}

                        	                   			private $serialNumberLeftvalue;
    	                        
	public function setSerialNumberLeftvalue($serialNumberLeftvalue){
		$this->serialNumberLeftvalue = $serialNumberLeftvalue;
         $this->apiParas["serialNumberLeftvalue"] = $serialNumberLeftvalue;
	}

	public function getSerialNumberLeftvalue(){
	  return $this->serialNumberLeftvalue;
	}

                        	                   			private $serialNumberLeftLength;
    	                        
	public function setSerialNumberLeftLength($serialNumberLeftLength){
		$this->serialNumberLeftLength = $serialNumberLeftLength;
         $this->apiParas["serialNumberLeftLength"] = $serialNumberLeftLength;
	}

	public function getSerialNumberLeftLength(){
	  return $this->serialNumberLeftLength;
	}

                        	                   			private $serialNumberSuffixLength;
    	                        
	public function setSerialNumberSuffixLength($serialNumberSuffixLength){
		$this->serialNumberSuffixLength = $serialNumberSuffixLength;
         $this->apiParas["serialNumberSuffixLength"] = $serialNumberSuffixLength;
	}

	public function getSerialNumberSuffixLength(){
	  return $this->serialNumberSuffixLength;
	}

                        	                   			private $suffixValue;
    	                        
	public function setSuffixValue($suffixValue){
		$this->suffixValue = $suffixValue;
         $this->apiParas["suffixValue"] = $suffixValue;
	}

	public function getSuffixValue(){
	  return $this->suffixValue;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $ruleIndex;
    	                        
	public function setRuleIndex($ruleIndex){
		$this->ruleIndex = $ruleIndex;
         $this->apiParas["ruleIndex"] = $ruleIndex;
	}

	public function getRuleIndex(){
	  return $this->ruleIndex;
	}

                        	                   			private $ruleIndexEnd;
    	                        
	public function setRuleIndexEnd($ruleIndexEnd){
		$this->ruleIndexEnd = $ruleIndexEnd;
         $this->apiParas["ruleIndexEnd"] = $ruleIndexEnd;
	}

	public function getRuleIndexEnd(){
	  return $this->ruleIndexEnd;
	}

                        	                   			private $ruleIndexValue;
    	                        
	public function setRuleIndexValue($ruleIndexValue){
		$this->ruleIndexValue = $ruleIndexValue;
         $this->apiParas["ruleIndexValue"] = $ruleIndexValue;
	}

	public function getRuleIndexValue(){
	  return $this->ruleIndexValue;
	}

                        	                   			private $manageType;
    	                        
	public function setManageType($manageType){
		$this->manageType = $manageType;
         $this->apiParas["manageType"] = $manageType;
	}

	public function getManageType(){
	  return $this->manageType;
	}

                        	                   			private $sellerSnRuleNo;
    	                        
	public function setSellerSnRuleNo($sellerSnRuleNo){
		$this->sellerSnRuleNo = $sellerSnRuleNo;
         $this->apiParas["sellerSnRuleNo"] = $sellerSnRuleNo;
	}

	public function getSellerSnRuleNo(){
	  return $this->sellerSnRuleNo;
	}

                                                    	}





        
 

