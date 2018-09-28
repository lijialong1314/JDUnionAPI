<?php
class DspAdreportMinuteconcreteGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adreport.minuteconcrete.get";
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
                                                        		                                    	                   			private $dimension;
    	                        
	public function setDimension($dimension){
		$this->dimension = $dimension;
         $this->apiParas["dimension"] = $dimension;
	}

	public function getDimension(){
	  return $this->dimension;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $putType;
    	                        
	public function setPutType($putType){
		$this->putType = $putType;
         $this->apiParas["putType"] = $putType;
	}

	public function getPutType(){
	  return $this->putType;
	}

                        	                   			private $startMinute;
    	                        
	public function setStartMinute($startMinute){
		$this->startMinute = $startMinute;
         $this->apiParas["startMinute"] = $startMinute;
	}

	public function getStartMinute(){
	  return $this->startMinute;
	}

                        	                   			private $endMinute;
    	                        
	public function setEndMinute($endMinute){
		$this->endMinute = $endMinute;
         $this->apiParas["endMinute"] = $endMinute;
	}

	public function getEndMinute(){
	  return $this->endMinute;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $days;
                              public function setDays($days ){
                 $this->days=$days;
                 $this->apiParas["days"] = $days;
              }

              public function getDays(){
              	return $this->days;
              }
                                                                                                                                        	                        	                            }





        
 

