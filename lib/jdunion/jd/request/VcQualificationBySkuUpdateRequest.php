<?php
class VcQualificationBySkuUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.qualification.by.sku.update";
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
         $this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                                              private $applicant;
                              public function setApplicant($applicant ){
                 $this->applicant=$applicant;
                 $this->apiParas["applicant"] = $applicant;
              }

              public function getApplicant(){
              	return $this->applicant;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $qcCode;
                              public function setQcCode($qcCode ){
                 $this->qcCode=$qcCode;
                 $this->apiParas["qc_code"] = $qcCode;
              }

              public function getQcCode(){
              	return $this->qcCode;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $endDate;
                              public function setEndDate($endDate ){
                 $this->endDate=$endDate;
                 $this->apiParas["end_date"] = $endDate;
              }

              public function getEndDate(){
              	return $this->endDate;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $fileKeyList;
                              public function setFileKeyList($fileKeyList ){
                 $this->fileKeyList=$fileKeyList;
                 $this->apiParas["file_key_list"] = $fileKeyList;
              }

              public function getFileKeyList(){
              	return $this->fileKeyList;
              }
                                                                                                                }





        
 

