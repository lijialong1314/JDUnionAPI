<?php
class DspKcAdUpdatestatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.kc.ad.updatestatus";
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
                                                        		                                    	                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $id;
                              public function setId($id ){
                 $this->id=$id;
                 $this->apiParas["id"] = $id;
              }

              public function getId(){
              	return $this->id;
              }
                                                                                                                                        	                            }





        
 

