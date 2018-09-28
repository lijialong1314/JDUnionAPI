<?php
class EclpMasterQueryShopRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.queryShop";
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
                                                        		                                    	                   			private $shopNos;
    	                        
	public function setShopNos($shopNos){
		$this->shopNos = $shopNos;
         $this->apiParas["shopNos"] = $shopNos;
	}

	public function getShopNos(){
	  return $this->shopNos;
	}

                        	                   			private $isvShopNos;
    	                        
	public function setIsvShopNos($isvShopNos){
		$this->isvShopNos = $isvShopNos;
         $this->apiParas["isvShopNos"] = $isvShopNos;
	}

	public function getIsvShopNos(){
	  return $this->isvShopNos;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                                                    	}





        
 

