<?php
class NbhouseRentContractAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.nbhouse.rent.contract.add";
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
                                                        		                                    	                   			private $secondName;
    	                        
	public function setSecondName($secondName){
		$this->secondName = $secondName;
         $this->apiParas["secondName"] = $secondName;
	}

	public function getSecondName(){
	  return $this->secondName;
	}

                        	                   			private $secondCode;
    	                        
	public function setSecondCode($secondCode){
		$this->secondCode = $secondCode;
         $this->apiParas["secondCode"] = $secondCode;
	}

	public function getSecondCode(){
	  return $this->secondCode;
	}

                        	                   			private $secondPhone;
    	                        
	public function setSecondPhone($secondPhone){
		$this->secondPhone = $secondPhone;
         $this->apiParas["secondPhone"] = $secondPhone;
	}

	public function getSecondPhone(){
	  return $this->secondPhone;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $spuId;
    	                        
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spuId"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                        	                   			private $brokerStaffId;
    	                        
	public function setBrokerStaffId($brokerStaffId){
		$this->brokerStaffId = $brokerStaffId;
         $this->apiParas["brokerStaffId"] = $brokerStaffId;
	}

	public function getBrokerStaffId(){
	  return $this->brokerStaffId;
	}

                        	                   			private $contractStartTime;
    	                        
	public function setContractStartTime($contractStartTime){
		$this->contractStartTime = $contractStartTime;
         $this->apiParas["contractStartTime"] = $contractStartTime;
	}

	public function getContractStartTime(){
	  return $this->contractStartTime;
	}

                        	                   			private $contractEndTime;
    	                        
	public function setContractEndTime($contractEndTime){
		$this->contractEndTime = $contractEndTime;
         $this->apiParas["contractEndTime"] = $contractEndTime;
	}

	public function getContractEndTime(){
	  return $this->contractEndTime;
	}

                        	                   			private $depositType;
    	                        
	public function setDepositType($depositType){
		$this->depositType = $depositType;
         $this->apiParas["depositType"] = $depositType;
	}

	public function getDepositType(){
	  return $this->depositType;
	}

                        	                   			private $payRentTime;
    	                        
	public function setPayRentTime($payRentTime){
		$this->payRentTime = $payRentTime;
         $this->apiParas["payRentTime"] = $payRentTime;
	}

	public function getPayRentTime(){
	  return $this->payRentTime;
	}

                        	                   			private $rentAmt;
    	                        
	public function setRentAmt($rentAmt){
		$this->rentAmt = $rentAmt;
         $this->apiParas["rentAmt"] = $rentAmt;
	}

	public function getRentAmt(){
	  return $this->rentAmt;
	}

                        	                   			private $payType;
    	                        
	public function setPayType($payType){
		$this->payType = $payType;
         $this->apiParas["payType"] = $payType;
	}

	public function getPayType(){
	  return $this->payType;
	}

                        	                            }





        
 

