<?php
class VisJosServiceUpdateInventoryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vis.jos.service.updateInventory";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                private $JDSKU;
                              public function setJDSKU($JDSKU ){
                 $this->JDSKU=$JDSKU;
                 $this->apiParas["JD_SKU"] = $jDSKU;
              }

              public function getJDSKU(){
              	return $this->JDSKU;
              }
                                                                                                                                                                                                                                                                                                                                                                                                               private $VENDORCODE;
                              public function setVENDORCODE($VENDORCODE ){
                 $this->VENDORCODE=$VENDORCODE;
                 $this->apiParas["VENDOR_CODE"] = $vENDORCODE;
              }

              public function getVENDORCODE(){
              	return $this->VENDORCODE;
              }
                                                                                                                                                                                                                                                                                                                       private $QUANTITY;
                              public function setQUANTITY($QUANTITY ){
                 $this->QUANTITY=$QUANTITY;
                 $this->apiParas["QUANTITY"] = $QUANTITY;
              }

              public function getQUANTITY(){
              	return $this->QUANTITY;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       private $DELVCENTERID;
                              public function setDELVCENTERID($DELVCENTERID ){
                 $this->DELVCENTERID=$DELVCENTERID;
                 $this->apiParas["DELV_CENTER_ID"] = $dELVCENTERID;
              }

              public function getDELVCENTERID(){
              	return $this->DELVCENTERID;
              }
                                                                                                                }





        
 

