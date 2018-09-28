<?php
class IsvAddisvlogRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.isv.addisvlog";
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
                                                        		                                    	                   			private $account;
    	                        
	public function setAccount($account){
		$this->account = $account;
         $this->apiParas["account"] = $account;
	}

	public function getAccount(){
	  return $this->account;
	}

                        	                   			private $clientIp;
    	                        
	public function setClientIp($clientIp){
		$this->clientIp = $clientIp;
         $this->apiParas["clientIp"] = $clientIp;
	}

	public function getClientIp(){
	  return $this->clientIp;
	}

                        	                   			private $operationTime;
    	                        
	public function setOperationTime($operationTime){
		$this->operationTime = $operationTime;
         $this->apiParas["operationTime"] = $operationTime;
	}

	public function getOperationTime(){
	  return $this->operationTime;
	}

                        	                   			private $operationContent;
    	                        
	public function setOperationContent($operationContent){
		$this->operationContent = $operationContent;
         $this->apiParas["operationContent"] = $operationContent;
	}

	public function getOperationContent(){
	  return $this->operationContent;
	}

                        	                   			private $useIsvAppkey;
    	                        
	public function setUseIsvAppkey($useIsvAppkey){
		$this->useIsvAppkey = $useIsvAppkey;
         $this->apiParas["useIsvAppkey"] = $useIsvAppkey;
	}

	public function getUseIsvAppkey(){
	  return $this->useIsvAppkey;
	}

                        	                   			private $reqjosUrl;
    	                        
	public function setReqjosUrl($reqjosUrl){
		$this->reqjosUrl = $reqjosUrl;
         $this->apiParas["reqjosUrl"] = $reqjosUrl;
	}

	public function getReqjosUrl(){
	  return $this->reqjosUrl;
	}

                        	                   			private $touchNumber;
    	                        
	public function setTouchNumber($touchNumber){
		$this->touchNumber = $touchNumber;
         $this->apiParas["touchNumber"] = $touchNumber;
	}

	public function getTouchNumber(){
	  return $this->touchNumber;
	}

                        	                   			private $touchFiles;
    	                        
	public function setTouchFiles($touchFiles){
		$this->touchFiles = $touchFiles;
         $this->apiParas["touchFiles"] = $touchFiles;
	}

	public function getTouchFiles(){
	  return $this->touchFiles;
	}

                            }





        
 

