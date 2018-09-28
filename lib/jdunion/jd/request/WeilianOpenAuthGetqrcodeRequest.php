<?php
class WeilianOpenAuthGetqrcodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.weilian.open.auth.getqrcode";
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
                                    	                        	                   			private $deviceId;
    	                                                            
	public function setDeviceId($deviceId){
		$this->deviceId = $deviceId;
         $this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId(){
	  return $this->deviceId;
	}

                        	                   			private $userIdentity;
    	                                                            
	public function setUserIdentity($userIdentity){
		$this->userIdentity = $userIdentity;
         $this->apiParas["user_identity"] = $userIdentity;
	}

	public function getUserIdentity(){
	  return $this->userIdentity;
	}

                        	                   			private $deviceName;
    	                                                            
	public function setDeviceName($deviceName){
		$this->deviceName = $deviceName;
         $this->apiParas["device_name"] = $deviceName;
	}

	public function getDeviceName(){
	  return $this->deviceName;
	}

                        	                   			private $osType;
    	                                                            
	public function setOsType($osType){
		$this->osType = $osType;
         $this->apiParas["os_type"] = $osType;
	}

	public function getOsType(){
	  return $this->osType;
	}

                        	                   			private $osVer;
    	                                                            
	public function setOsVer($osVer){
		$this->osVer = $osVer;
         $this->apiParas["os_ver"] = $osVer;
	}

	public function getOsVer(){
	  return $this->osVer;
	}

                        	                   			private $osVerName;
    	                                                                        
	public function setOsVerName($osVerName){
		$this->osVerName = $osVerName;
         $this->apiParas["os_ver_name"] = $osVerName;
	}

	public function getOsVerName(){
	  return $this->osVerName;
	}

                        	                   			private $deviceType;
    	                                                            
	public function setDeviceType($deviceType){
		$this->deviceType = $deviceType;
         $this->apiParas["device_type"] = $deviceType;
	}

	public function getDeviceType(){
	  return $this->deviceType;
	}

                        	                   			private $appName;
    	                                                            
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["app_name"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $appPackageName;
    	                                                                        
	public function setAppPackageName($appPackageName){
		$this->appPackageName = $appPackageName;
         $this->apiParas["app_package_name"] = $appPackageName;
	}

	public function getAppPackageName(){
	  return $this->appPackageName;
	}

                        	                   			private $appVersion;
    	                                                            
	public function setAppVersion($appVersion){
		$this->appVersion = $appVersion;
         $this->apiParas["app_version"] = $appVersion;
	}

	public function getAppVersion(){
	  return $this->appVersion;
	}

                        	                   			private $appChannel;
    	                                                            
	public function setAppChannel($appChannel){
		$this->appChannel = $appChannel;
         $this->apiParas["app_channel"] = $appChannel;
	}

	public function getAppChannel(){
	  return $this->appChannel;
	}

}





        
 

