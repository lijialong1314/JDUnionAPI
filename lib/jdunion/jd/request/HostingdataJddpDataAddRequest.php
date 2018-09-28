<?php
class HostingdataJddpDataAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.hostingdata.jddp.data.add";
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
                                                        		                                    	                   			private $tableName;
    	                        
	public function setTableName($tableName){
		$this->tableName = $tableName;
         $this->apiParas["tableName"] = $tableName;
	}

	public function getTableName(){
	  return $this->tableName;
	}

                        	                   			private $dataList;
    	                        
	public function setDataList($dataList){
		$this->dataList = $dataList;
         $this->apiParas["dataList"] = $dataList;
	}

	public function getDataList(){
	  return $this->dataList;
	}

                        	                            }





        
 

