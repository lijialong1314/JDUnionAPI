<?php
class LasImHfsReservationPushRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.im.hfs.reservation.push";
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
                                                        		                                    	                   			private $orderid;
    	                        
	public function setOrderid($orderid){
		$this->orderid = $orderid;
         $this->apiParas["orderid"] = $orderid;
	}

	public function getOrderid(){
	  return $this->orderid;
	}

                        	                   			private $appointmentstatus;
    	                        
	public function setAppointmentstatus($appointmentstatus){
		$this->appointmentstatus = $appointmentstatus;
         $this->apiParas["appointmentstatus"] = $appointmentstatus;
	}

	public function getAppointmentstatus(){
	  return $this->appointmentstatus;
	}

                        	                   			private $appointmenttimebegin;
    	                        
	public function setAppointmenttimebegin($appointmenttimebegin){
		$this->appointmenttimebegin = $appointmenttimebegin;
         $this->apiParas["appointmenttimebegin"] = $appointmenttimebegin;
	}

	public function getAppointmenttimebegin(){
	  return $this->appointmenttimebegin;
	}

                        	                   			private $appointmenttimeend;
    	                        
	public function setAppointmenttimeend($appointmenttimeend){
		$this->appointmenttimeend = $appointmenttimeend;
         $this->apiParas["appointmenttimeend"] = $appointmenttimeend;
	}

	public function getAppointmenttimeend(){
	  return $this->appointmenttimeend;
	}

                        	                   			private $serviceproviderno;
    	                        
	public function setServiceproviderno($serviceproviderno){
		$this->serviceproviderno = $serviceproviderno;
         $this->apiParas["serviceproviderno"] = $serviceproviderno;
	}

	public function getServiceproviderno(){
	  return $this->serviceproviderno;
	}

                        	                   			private $operator;
    	                        
	public function setOperator($operator){
		$this->operator = $operator;
         $this->apiParas["operator"] = $operator;
	}

	public function getOperator(){
	  return $this->operator;
	}

                        	                   			private $operatetime;
    	                        
	public function setOperatetime($operatetime){
		$this->operatetime = $operatetime;
         $this->apiParas["operatetime"] = $operatetime;
	}

	public function getOperatetime(){
	  return $this->operatetime;
	}

                        	                   			private $ordertype;
    	                        
	public function setOrdertype($ordertype){
		$this->ordertype = $ordertype;
         $this->apiParas["ordertype"] = $ordertype;
	}

	public function getOrdertype(){
	  return $this->ordertype;
	}

                            }





        
 

