<?php
class EclpGoodsDeleteGoodsSerialNumberRuleRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.goods.deleteGoodsSerialNumberRule";
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

                        	                   			private $snNo;
    	                        
	public function setSnNo($snNo){
		$this->snNo = $snNo;
         $this->apiParas["snNo"] = $snNo;
	}

	public function getSnNo(){
	  return $this->snNo;
	}

                        	                   			private $delReason;
    	                        
	public function setDelReason($delReason){
		$this->delReason = $delReason;
         $this->apiParas["delReason"] = $delReason;
	}

	public function getDelReason(){
	  return $this->delReason;
	}

                                                    	}





        
 

