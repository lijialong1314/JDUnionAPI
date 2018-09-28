<?php
class CmpMonitordataRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.cmp.monitordata";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $devCode;
                              public function setDevCode($devCode ){
                 $this->devCode=$devCode;
                 $this->apiParas["devCode"] = $devCode;
              }

              public function getDevCode(){
              	return $this->devCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $time;
                              public function setTime($time ){
                 $this->time=$time;
                 $this->apiParas["time"] = $time;
              }

              public function getTime(){
              	return $this->time;
              }
                                                                                                                                                                                                                                                                                                                                              private $devMac;
                              public function setDevMac($devMac ){
                 $this->devMac=$devMac;
                 $this->apiParas["devMac"] = $devMac;
              }

              public function getDevMac(){
              	return $this->devMac;
              }
                                                                                                                                                                                                                                                                                                                                              private $dataType;
                              public function setDataType($dataType ){
                 $this->dataType=$dataType;
                 $this->apiParas["dataType"] = $dataType;
              }

              public function getDataType(){
              	return $this->dataType;
              }
                                                                                                                                                                                                                                                                                                                                              private $val;
                              public function setVal($val ){
                 $this->val=$val;
                 $this->apiParas["val"] = $val;
              }

              public function getVal(){
              	return $this->val;
              }
                                                                                                                                                                                                                                                                                                                                              private $longitude;
                              public function setLongitude($longitude ){
                 $this->longitude=$longitude;
                 $this->apiParas["longitude"] = $longitude;
              }

              public function getLongitude(){
              	return $this->longitude;
              }
                                                                                                                                                                                                                                                                                                                                              private $latitude;
                              public function setLatitude($latitude ){
                 $this->latitude=$latitude;
                 $this->apiParas["latitude"] = $latitude;
              }

              public function getLatitude(){
              	return $this->latitude;
              }
                                                                                                                                                                                                                                                                                                                                              private $battery;
                              public function setBattery($battery ){
                 $this->battery=$battery;
                 $this->apiParas["battery"] = $battery;
              }

              public function getBattery(){
              	return $this->battery;
              }
                                                                                                                                                                                                                                                                                                                                              private $status;
                              public function setStatus($status ){
                 $this->status=$status;
                 $this->apiParas["status"] = $status;
              }

              public function getStatus(){
              	return $this->status;
              }
                                                                                                                }





        
 

