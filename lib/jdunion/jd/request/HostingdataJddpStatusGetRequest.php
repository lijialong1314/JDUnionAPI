<?php
class HostingdataJddpStatusGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.hostingdata.jddp.status.get";
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
                                                        		                                    	                   			private $parameter;
    	                        
	public function setParameter($parameter){
		$this->parameter = $parameter;
         $this->apiParas["parameter"] = $parameter;
	}

	public function getParameter(){
	  return $this->parameter;
	}

                        	                            }





        
 

