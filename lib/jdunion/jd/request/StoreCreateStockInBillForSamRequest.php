<?php
class StoreCreateStockInBillForSamRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.store.createStockInBillForSam";
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
                                                        		                                    	                        	                   			private $samBillId;
    	                                                                        
	public function setSamBillId($samBillId){
		$this->samBillId = $samBillId;
         $this->apiParas["sam_bill_id"] = $samBillId;
	}

	public function getSamBillId(){
	  return $this->samBillId;
	}

                        	                   			private $arrivalDay;
    	                        
	public function setArrivalDay($arrivalDay){
		$this->arrivalDay = $arrivalDay;
         $this->apiParas["arrivalDay"] = $arrivalDay;
	}

	public function getArrivalDay(){
	  return $this->arrivalDay;
	}

                        	                   			private $clubId;
    	                                                            
	public function setClubId($clubId){
		$this->clubId = $clubId;
         $this->apiParas["club_id"] = $clubId;
	}

	public function getClubId(){
	  return $this->clubId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $itemId;
                              public function setItemId($itemId ){
                 $this->itemId=$itemId;
                 $this->apiParas["item_id"] = $itemId;
              }

              public function getItemId(){
              	return $this->itemId;
              }
                                                                                                                                                                                                                                                                                                                                              private $num;
                              public function setNum($num ){
                 $this->num=$num;
                 $this->apiParas["num"] = $num;
              }

              public function getNum(){
              	return $this->num;
              }
                                                                                                                                                                                                                                                                                                                                              private $remark;
                              public function setRemark($remark ){
                 $this->remark=$remark;
                 $this->apiParas["remark"] = $remark;
              }

              public function getRemark(){
              	return $this->remark;
              }
                                                                                                                                        	                   			private $samStoreType;
    	                        
	public function setSamStoreType($samStoreType){
		$this->samStoreType = $samStoreType;
         $this->apiParas["samStoreType"] = $samStoreType;
	}

	public function getSamStoreType(){
	  return $this->samStoreType;
	}

                                                    	}





        
 

