<?php
class EclpMasterReceiveCommunityRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.receiveCommunity";
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
                                                        		                                    	                   			private $communityNo;
    	                        
	public function setCommunityNo($communityNo){
		$this->communityNo = $communityNo;
         $this->apiParas["communityNo"] = $communityNo;
	}

	public function getCommunityNo(){
	  return $this->communityNo;
	}

                        	                   			private $communityName;
    	                        
	public function setCommunityName($communityName){
		$this->communityName = $communityName;
         $this->apiParas["communityName"] = $communityName;
	}

	public function getCommunityName(){
	  return $this->communityName;
	}

                        	                   			private $country;
    	                        
	public function setCountry($country){
		$this->country = $country;
         $this->apiParas["country"] = $country;
	}

	public function getCountry(){
	  return $this->country;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $street;
    	                        
	public function setStreet($street){
		$this->street = $street;
         $this->apiParas["street"] = $street;
	}

	public function getStreet(){
	  return $this->street;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $routeNo;
    	                        
	public function setRouteNo($routeNo){
		$this->routeNo = $routeNo;
         $this->apiParas["routeNo"] = $routeNo;
	}

	public function getRouteNo(){
	  return $this->routeNo;
	}

                        	                   			private $building;
    	                        
	public function setBuilding($building){
		$this->building = $building;
         $this->apiParas["building"] = $building;
	}

	public function getBuilding(){
	  return $this->building;
	}

                        	                   			private $unit;
    	                        
	public function setUnit($unit){
		$this->unit = $unit;
         $this->apiParas["unit"] = $unit;
	}

	public function getUnit(){
	  return $this->unit;
	}

                        	                   			private $floor;
    	                        
	public function setFloor($floor){
		$this->floor = $floor;
         $this->apiParas["floor"] = $floor;
	}

	public function getFloor(){
	  return $this->floor;
	}

                        	                   			private $room;
    	                        
	public function setRoom($room){
		$this->room = $room;
         $this->apiParas["room"] = $room;
	}

	public function getRoom(){
	  return $this->room;
	}

                        	                   			private $contact;
    	                        
	public function setContact($contact){
		$this->contact = $contact;
         $this->apiParas["contact"] = $contact;
	}

	public function getContact(){
	  return $this->contact;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                                                    	}





        
 

