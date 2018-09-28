<?php
class EptWarecenterOutapiWareskuAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.outapi.waresku.add";
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

                        	                   			private $rfId;
    	                        
	public function setRfId($rfId){
		$this->rfId = $rfId;
         $this->apiParas["rfId"] = $rfId;
	}

	public function getRfId(){
	  return $this->rfId;
	}

                        	                   			private $attributes;
    	                        
	public function setAttributes($attributes){
		$this->attributes = $attributes;
         $this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes(){
	  return $this->attributes;
	}

                        	                   			private $supplyPrice;
    	                        
	public function setSupplyPrice($supplyPrice){
		$this->supplyPrice = $supplyPrice;
         $this->apiParas["supplyPrice"] = $supplyPrice;
	}

	public function getSupplyPrice(){
	  return $this->supplyPrice;
	}

                        	                   			private $amountCount;
    	                        
	public function setAmountCount($amountCount){
		$this->amountCount = $amountCount;
         $this->apiParas["amountCount"] = $amountCount;
	}

	public function getAmountCount(){
	  return $this->amountCount;
	}

                        	                   			private $lockCount;
    	                        
	public function setLockCount($lockCount){
		$this->lockCount = $lockCount;
         $this->apiParas["lockCount"] = $lockCount;
	}

	public function getLockCount(){
	  return $this->lockCount;
	}

                        	                   			private $lockStartTime;
    	                        
	public function setLockStartTime($lockStartTime){
		$this->lockStartTime = $lockStartTime;
         $this->apiParas["lockStartTime"] = $lockStartTime;
	}

	public function getLockStartTime(){
	  return $this->lockStartTime;
	}

                        	                   			private $lockEndTime;
    	                        
	public function setLockEndTime($lockEndTime){
		$this->lockEndTime = $lockEndTime;
         $this->apiParas["lockEndTime"] = $lockEndTime;
	}

	public function getLockEndTime(){
	  return $this->lockEndTime;
	}

                        	                   			private $hsCode;
    	                        
	public function setHsCode($hsCode){
		$this->hsCode = $hsCode;
         $this->apiParas["hsCode"] = $hsCode;
	}

	public function getHsCode(){
	  return $this->hsCode;
	}

                        	                   			private $upc;
    	                        
	public function setUpc($upc){
		$this->upc = $upc;
         $this->apiParas["upc"] = $upc;
	}

	public function getUpc(){
	  return $this->upc;
	}

                            }





        
 

