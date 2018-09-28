<?php
class ServicePromotionWxsqGetCodeBySubUnionIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.wxsq.getCodeBySubUnionId";
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
                                    	                                            		                                    	                   			private $proCont;
    	                        
	public function setProCont($proCont){
		$this->proCont = $proCont;
         $this->apiParas["proCont"] = $proCont;
	}

	public function getProCont(){
	  return $this->proCont;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $materialIds;
                              public function setMaterialIds($materialIds ){
                 $this->materialIds=$materialIds;
                 $this->apiParas["materialIds"] = $materialIds;
              }

              public function getMaterialIds(){
              	return $this->materialIds;
              }
                                                                                                                                        	                   			private $subUnionId;
    	                        
	public function setSubUnionId($subUnionId){
		$this->subUnionId = $subUnionId;
         $this->apiParas["subUnionId"] = $subUnionId;
	}

	public function getSubUnionId(){
	  return $this->subUnionId;
	}

                        	                   			private $positionId;
    	                        
	public function setPositionId($positionId){
		$this->positionId = $positionId;
         $this->apiParas["positionId"] = $positionId;
	}

	public function getPositionId(){
	  return $this->positionId;
	}

                        	                   			private $pid;
    	                        
	public function setPid($pid){
		$this->pid = $pid;
         $this->apiParas["pid"] = $pid;
	}

	public function getPid(){
	  return $this->pid;
	}

                            }





        
 

