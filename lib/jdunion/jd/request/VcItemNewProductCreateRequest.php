<?php
class VcItemNewProductCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.newProduct.create";
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
                                    	                        	                   			private $applyId;
    	                                                            
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

                        	                                            		                                    	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $cid1;
    	                        
	public function setCid1($cid1){
		$this->cid1 = $cid1;
         $this->apiParas["cid1"] = $cid1;
	}

	public function getCid1(){
	  return $this->cid1;
	}

                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $zhBrand;
    	                                                            
	public function setZhBrand($zhBrand){
		$this->zhBrand = $zhBrand;
         $this->apiParas["zh_brand"] = $zhBrand;
	}

	public function getZhBrand(){
	  return $this->zhBrand;
	}

                        	                   			private $enBrand;
    	                                                            
	public function setEnBrand($enBrand){
		$this->enBrand = $enBrand;
         $this->apiParas["en_brand"] = $enBrand;
	}

	public function getEnBrand(){
	  return $this->enBrand;
	}

                        	                   			private $model;
    	                        
	public function setModel($model){
		$this->model = $model;
         $this->apiParas["model"] = $model;
	}

	public function getModel(){
	  return $this->model;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $webSite;
    	                                                            
	public function setWebSite($webSite){
		$this->webSite = $webSite;
         $this->apiParas["web_site"] = $webSite;
	}

	public function getWebSite(){
	  return $this->webSite;
	}

                        	                   			private $originalPlace;
    	                                                            
	public function setOriginalPlace($originalPlace){
		$this->originalPlace = $originalPlace;
         $this->apiParas["original_place"] = $originalPlace;
	}

	public function getOriginalPlace(){
	  return $this->originalPlace;
	}

                        	                   			private $warranty;
    	                        
	public function setWarranty($warranty){
		$this->warranty = $warranty;
         $this->apiParas["warranty"] = $warranty;
	}

	public function getWarranty(){
	  return $this->warranty;
	}

                        	                   			private $shelfLife;
    	                                                            
	public function setShelfLife($shelfLife){
		$this->shelfLife = $shelfLife;
         $this->apiParas["shelf_life"] = $shelfLife;
	}

	public function getShelfLife(){
	  return $this->shelfLife;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $width;
    	                        
	public function setWidth($width){
		$this->width = $width;
         $this->apiParas["width"] = $width;
	}

	public function getWidth(){
	  return $this->width;
	}

                        	                   			private $height;
    	                        
	public function setHeight($height){
		$this->height = $height;
         $this->apiParas["height"] = $height;
	}

	public function getHeight(){
	  return $this->height;
	}

                        	                   			private $marketPrice;
    	                                                            
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
         $this->apiParas["market_price"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

                        	                   			private $purchasePrice;
    	                                                            
	public function setPurchasePrice($purchasePrice){
		$this->purchasePrice = $purchasePrice;
         $this->apiParas["purchase_price"] = $purchasePrice;
	}

	public function getPurchasePrice(){
	  return $this->purchasePrice;
	}

                        	                   			private $memberPrice;
    	                                                            
	public function setMemberPrice($memberPrice){
		$this->memberPrice = $memberPrice;
         $this->apiParas["member_price"] = $memberPrice;
	}

	public function getMemberPrice(){
	  return $this->memberPrice;
	}

                        	                   			private $salerCode;
    	                                                            
	public function setSalerCode($salerCode){
		$this->salerCode = $salerCode;
         $this->apiParas["saler_code"] = $salerCode;
	}

	public function getSalerCode(){
	  return $this->salerCode;
	}

                        	                   			private $purchaserCode;
    	                                                            
	public function setPurchaserCode($purchaserCode){
		$this->purchaserCode = $purchaserCode;
         $this->apiParas["purchaser_code"] = $purchaserCode;
	}

	public function getPurchaserCode(){
	  return $this->purchaserCode;
	}

                        	                   			private $upc;
    	                        
	public function setUpc($upc){
		$this->upc = $upc;
         $this->apiParas["upc"] = $upc;
	}

	public function getUpc(){
	  return $this->upc;
	}

                        	                   			private $packing;
    	                        
	public function setPacking($packing){
		$this->packing = $packing;
         $this->apiParas["packing"] = $packing;
	}

	public function getPacking(){
	  return $this->packing;
	}

                        	                   			private $packType;
    	                                                            
	public function setPackType($packType){
		$this->packType = $packType;
         $this->apiParas["pack_type"] = $packType;
	}

	public function getPackType(){
	  return $this->packType;
	}

                        	                   			private $skuUnit;
    	                                                            
	public function setSkuUnit($skuUnit){
		$this->skuUnit = $skuUnit;
         $this->apiParas["sku_unit"] = $skuUnit;
	}

	public function getSkuUnit(){
	  return $this->skuUnit;
	}

                        	                   			private $pkgInfo;
    	                                                            
	public function setPkgInfo($pkgInfo){
		$this->pkgInfo = $pkgInfo;
         $this->apiParas["pkg_info"] = $pkgInfo;
	}

	public function getPkgInfo(){
	  return $this->pkgInfo;
	}

                        	                   			private $itemNum;
    	                                                            
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["item_num"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $introHtml;
    	                                                            
	public function setIntroHtml($introHtml){
		$this->introHtml = $introHtml;
         $this->apiParas["intro_html"] = $introHtml;
	}

	public function getIntroHtml(){
	  return $this->introHtml;
	}

                        	                   			private $introMobile;
    	                                                            
	public function setIntroMobile($introMobile){
		$this->introMobile = $introMobile;
         $this->apiParas["intro_mobile"] = $introMobile;
	}

	public function getIntroMobile(){
	  return $this->introMobile;
	}

                        	                   			private $videoId;
    	                                                            
	public function setVideoId($videoId){
		$this->videoId = $videoId;
         $this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId(){
	  return $this->videoId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $value;
                              public function setValue($value ){
                 $this->value=$value;
                 $this->apiParas["value"] = $value;
              }

              public function getValue(){
              	return $this->value;
              }
                                                                                                                                        	                   			private $isOriPack;
    	                                                                        
	public function setIsOriPack($isOriPack){
		$this->isOriPack = $isOriPack;
         $this->apiParas["is_ori_pack"] = $isOriPack;
	}

	public function getIsOriPack(){
	  return $this->isOriPack;
	}

                        	                   			private $sysp;
    	                        
	public function setSysp($sysp){
		$this->sysp = $sysp;
         $this->apiParas["sysp"] = $sysp;
	}

	public function getSysp(){
	  return $this->sysp;
	}

                        	                   			private $storeProperty;
    	                                                            
	public function setStoreProperty($storeProperty){
		$this->storeProperty = $storeProperty;
         $this->apiParas["store_property"] = $storeProperty;
	}

	public function getStoreProperty(){
	  return $this->storeProperty;
	}

                        	                   			private $designConcept;
    	                                                            
	public function setDesignConcept($designConcept){
		$this->designConcept = $designConcept;
         $this->apiParas["design_concept"] = $designConcept;
	}

	public function getDesignConcept(){
	  return $this->designConcept;
	}

                        	                   			private $hasTransferElecCode;
    	                                                                                    
	public function setHasTransferElecCode($hasTransferElecCode){
		$this->hasTransferElecCode = $hasTransferElecCode;
         $this->apiParas["has_transfer_elec_code"] = $hasTransferElecCode;
	}

	public function getHasTransferElecCode(){
	  return $this->hasTransferElecCode;
	}

                        	                   			private $afterSaleDesc;
    	                                                                        
	public function setAfterSaleDesc($afterSaleDesc){
		$this->afterSaleDesc = $afterSaleDesc;
         $this->apiParas["after_sale_desc"] = $afterSaleDesc;
	}

	public function getAfterSaleDesc(){
	  return $this->afterSaleDesc;
	}

                                                                        		                                    	                   			private $wreadme;
    	                        
	public function setWreadme($wreadme){
		$this->wreadme = $wreadme;
         $this->apiParas["wreadme"] = $wreadme;
	}

	public function getWreadme(){
	  return $this->wreadme;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $propId;
                              public function setPropId($propId ){
                 $this->propId=$propId;
                 $this->apiParas["prop_id"] = $propId;
              }

              public function getPropId(){
              	return $this->propId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propVid;
                              public function setPropVid($propVid ){
                 $this->propVid=$propVid;
                 $this->apiParas["prop_vid"] = $propVid;
              }

              public function getPropVid(){
              	return $this->propVid;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propRemark;
                              public function setPropRemark($propRemark ){
                 $this->propRemark=$propRemark;
                 $this->apiParas["prop_remark"] = $propRemark;
              }

              public function getPropRemark(){
              	return $this->propRemark;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propAlias;
                              public function setPropAlias($propAlias ){
                 $this->propAlias=$propAlias;
                 $this->apiParas["prop_alias"] = $propAlias;
              }

              public function getPropAlias(){
              	return $this->propAlias;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propValues;
                              public function setPropValues($propValues ){
                 $this->propValues=$propValues;
                 $this->apiParas["prop_values"] = $propValues;
              }

              public function getPropValues(){
              	return $this->propValues;
              }
                                                                                                                                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $extId;
                              public function setExtId($extId ){
                 $this->extId=$extId;
                 $this->apiParas["ext_id"] = $extId;
              }

              public function getExtId(){
              	return $this->extId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extValues;
                              public function setExtValues($extValues ){
                 $this->extValues=$extValues;
                 $this->apiParas["ext_values"] = $extValues;
              }

              public function getExtValues(){
              	return $this->extValues;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extAlias;
                              public function setExtAlias($extAlias ){
                 $this->extAlias=$extAlias;
                 $this->apiParas["ext_alias"] = $extAlias;
              }

              public function getExtAlias(){
              	return $this->extAlias;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extRemark;
                              public function setExtRemark($extRemark ){
                 $this->extRemark=$extRemark;
                 $this->apiParas["ext_remark"] = $extRemark;
              }

              public function getExtRemark(){
              	return $this->extRemark;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $skuNameGaea;
                              public function setSkuNameGaea($skuNameGaea ){
                 $this->skuNameGaea=$skuNameGaea;
                 $this->apiParas["sku_name_gaea"] = $skuNameGaea;
              }

              public function getSkuNameGaea(){
              	return $this->skuNameGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim1ValGaea;
                              public function setDim1ValGaea($dim1ValGaea ){
                 $this->dim1ValGaea=$dim1ValGaea;
                 $this->apiParas["dim1_val_gaea"] = $dim1ValGaea;
              }

              public function getDim1ValGaea(){
              	return $this->dim1ValGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim1SortGaea;
                              public function setDim1SortGaea($dim1SortGaea ){
                 $this->dim1SortGaea=$dim1SortGaea;
                 $this->apiParas["dim1_sort_gaea"] = $dim1SortGaea;
              }

              public function getDim1SortGaea(){
              	return $this->dim1SortGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim2ValGaea;
                              public function setDim2ValGaea($dim2ValGaea ){
                 $this->dim2ValGaea=$dim2ValGaea;
                 $this->apiParas["dim2_val_gaea"] = $dim2ValGaea;
              }

              public function getDim2ValGaea(){
              	return $this->dim2ValGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim2SortGaea;
                              public function setDim2SortGaea($dim2SortGaea ){
                 $this->dim2SortGaea=$dim2SortGaea;
                 $this->apiParas["dim2_sort_gaea"] = $dim2SortGaea;
              }

              public function getDim2SortGaea(){
              	return $this->dim2SortGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      private $otherSaleAttributeGaea;
                              public function setOtherSaleAttributeGaea($otherSaleAttributeGaea ){
                 $this->otherSaleAttributeGaea=$otherSaleAttributeGaea;
                 $this->apiParas["other_sale_attribute_gaea"] = $otherSaleAttributeGaea;
              }

              public function getOtherSaleAttributeGaea(){
              	return $this->otherSaleAttributeGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $marketPriceGaea;
                              public function setMarketPriceGaea($marketPriceGaea ){
                 $this->marketPriceGaea=$marketPriceGaea;
                 $this->apiParas["market_price_gaea"] = $marketPriceGaea;
              }

              public function getMarketPriceGaea(){
              	return $this->marketPriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $purchasePriceGaea;
                              public function setPurchasePriceGaea($purchasePriceGaea ){
                 $this->purchasePriceGaea=$purchasePriceGaea;
                 $this->apiParas["purchase_price_gaea"] = $purchasePriceGaea;
              }

              public function getPurchasePriceGaea(){
              	return $this->purchasePriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $memberPriceGaea;
                              public function setMemberPriceGaea($memberPriceGaea ){
                 $this->memberPriceGaea=$memberPriceGaea;
                 $this->apiParas["member_price_gaea"] = $memberPriceGaea;
              }

              public function getMemberPriceGaea(){
              	return $this->memberPriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $weightGaea;
                              public function setWeightGaea($weightGaea ){
                 $this->weightGaea=$weightGaea;
                 $this->apiParas["weight_gaea"] = $weightGaea;
              }

              public function getWeightGaea(){
              	return $this->weightGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $lengthGaea;
                              public function setLengthGaea($lengthGaea ){
                 $this->lengthGaea=$lengthGaea;
                 $this->apiParas["length_gaea"] = $lengthGaea;
              }

              public function getLengthGaea(){
              	return $this->lengthGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $widthGaea;
                              public function setWidthGaea($widthGaea ){
                 $this->widthGaea=$widthGaea;
                 $this->apiParas["width_gaea"] = $widthGaea;
              }

              public function getWidthGaea(){
              	return $this->widthGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $heightGaea;
                              public function setHeightGaea($heightGaea ){
                 $this->heightGaea=$heightGaea;
                 $this->apiParas["height_gaea"] = $heightGaea;
              }

              public function getHeightGaea(){
              	return $this->heightGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $upcGaea;
                              public function setUpcGaea($upcGaea ){
                 $this->upcGaea=$upcGaea;
                 $this->apiParas["upc_gaea"] = $upcGaea;
              }

              public function getUpcGaea(){
              	return $this->upcGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $itemNumGaea;
                              public function setItemNumGaea($itemNumGaea ){
                 $this->itemNumGaea=$itemNumGaea;
                 $this->apiParas["item_num_gaea"] = $itemNumGaea;
              }

              public function getItemNumGaea(){
              	return $this->itemNumGaea;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                                              private $applicant;
                              public function setApplicant($applicant ){
                 $this->applicant=$applicant;
                 $this->apiParas["applicant"] = $applicant;
              }

              public function getApplicant(){
              	return $this->applicant;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $qcCode;
                              public function setQcCode($qcCode ){
                 $this->qcCode=$qcCode;
                 $this->apiParas["qc_code"] = $qcCode;
              }

              public function getQcCode(){
              	return $this->qcCode;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $endDate;
                              public function setEndDate($endDate ){
                 $this->endDate=$endDate;
                 $this->apiParas["end_date"] = $endDate;
              }

              public function getEndDate(){
              	return $this->endDate;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $fileKeyList;
                              public function setFileKeyList($fileKeyList ){
                 $this->fileKeyList=$fileKeyList;
                 $this->apiParas["file_key_list"] = $fileKeyList;
              }

              public function getFileKeyList(){
              	return $this->fileKeyList;
              }
                                                                                                                }





        
 

