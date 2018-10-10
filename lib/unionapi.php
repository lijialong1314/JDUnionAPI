<?php
include_once 'jdunion/JdSdk.php';
require_once "StatisticClient.php";

//核心代码
class UnionController{

    private $client;
    private $reportServer = "udp://xxxxx:xxxx";
    private $reportName = "ServerName";
    private $unionid = "xxxxxx";

    public function __construct() {
        $this->init();
    }
    
    private function report($method,$success, $code, $msg){
        StatisticClient::tick($this->reportName, $method);
        // 上报结果
        StatisticClient::report($this->reportName, $method, $success, $code, $msg,$this->reportServer);
    }
    
    private function init(){
        $this->client = new \JdClient();
        $this->client->appKey = "xxxxxxxxxxxxxx";
        $this->client->appSecret = "xxxxxxxxxxxxxxxxxx";
        $this->client->accessToken = "xxxxxxxxxxxxxxxxxx";
        $this->client->serverUrl = "https://api.jd.com/routerjson";
        $this->client->connectTimeout = 10;
        $this->client->readTimeout = 10;
    }

    private function doRequest($req){
       $data =   $this->client->execute($req, $this->client->accessToken);

       return $data;
    }

    private function check($param,$rule){
        if(isset($rule["Required"])){
            foreach($rule["Required"] as $n){
                if(!isset($param[$n])){
                    return "缺少参数：$n";
                }
            }
        }
        return true;
    }
    
    private function response_success($method,$text,$data){
        $this->report($method,true,1,"成功");
        return ["code"=>1,"msg"=>$text,"data"=>$data];
    }

    private function response_error($method,$text,$data){
        $this->report($method,false,2,$data);
        return ["code"=>-1,"msg"=>$text,"data"=>$data];
    }

    //获取推广商品信息接口
    public function getGoodsInfo($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["skuIds"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        $req = new \ServicePromotionGoodsInfoRequest;
        $req->setSkuIds($param["skuIds"]);

        $data = $this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        
        $jsonarr = json_decode($data["getpromotioninfo_result"],true);

        if($jsonarr["sucessed"]===true && $jsonarr["message"] == '接口成功'){
            return $this->response_success(__FUNCTION__,"success", $jsonarr["result"]);
        }else{
            return $this->response_error(__FUNCTION__,"error",$jsonarr["message"]);
        }
    }

    //获取优惠商品
    public function queryPreferentialGoods($request){
        $param = $request->params;
        $result =  $this->check($param,[
            "Required"=>["from","pageSize"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        
        $req = new \UnionThemeGoodsServiceQueryCouponGoodsRequest;
        $req->setPageSize($param["pageSize"]);
        $req->setFrom($param["from"]);

        if(isset($param["cid3"])){
            $req->setCid3($param["cid3"]);
        }

        $data = $this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $code = $data["code"];
        if($code == 0){
            $jsonarr = json_decode($data["queryCouponGoods_result"],true);
            return $this->response_success(__FUNCTION__,"success",$jsonarr["data"]);
        }else{
            return $this->response_error(__FUNCTION__,"error",$data["zh_desc"]);
        }
    }

    //查询爆款商品
    public function queryExplosiveGoods($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["from","pageSize"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        $req = new \UnionThemeGoodsServiceQueryExplosiveGoodsRequest;
        $req->setPageSize($param["pageSize"]);
        $req->setFrom($param["from"]);
        if(isset($param["cid3"])){
            $req->setCid3($param["cid3"]);
        }

        $data = $this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $code = $data["code"];
        if($code == 0){
            $jsonarr = json_decode($data["queryExplosiveGoods_result"],true);
            return $this->response_success(__FUNCTION__,"success",$jsonarr["data"]);
        }else{
            return $this->response_error(__FUNCTION__,"error",$data["zh_desc"]);
        }
    }

    //批量创建推广位
    public function createPromotionSiteBatch($request){

        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["key","unionId","type","spaceName"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        $req = new \ServicePromotionCreatePromotionSiteBatchRequest;
        $req->setKey($param["key"]);
        if(isset($param["siteId"]))
            $req->setSiteId($param["siteId"]);
        $req->setUnionId($param["unionId"]);
        $req->setUnionType(1);
        $req->setType($param["type"]);
        $req->setSpaceName($param["spaceName"]);

        $data =$this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["create_promotion_site_result"],true);
        if($jsonarr["code"] == 200){
            return $this->response_success(__FUNCTION__,"success",$jsonarr["data"]);
        }else{
            return $this->response_error(__FUNCTION__,"error",$jsonarr["message"]);
        }
    }

    //查询推广位
    public function queryPromotionSite($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["key","unionId","pageNo","pageSize"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        
        $req = new \ServicePromotionQueryPromotionSiteRequest;
        $req->setKey($param["key"]);
        $req->setPageNo($param["pageNo"]);
        $req->setPageSize($param["pageSize"]);
        $req->setUnionId($param["unionId"]);

        $data =$this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["querypromotionsite_result"],true);
        if($jsonarr["code"] == 200){
            return $this->response_success(__FUNCTION__,"success",$jsonarr["data"]);
        }else{
             return $this->response_error(__FUNCTION__,"error",$jsonarr["message"]);
        }
    }

    //联盟微信手q通过subUnionId获取推广链接
    public function getWXSQCodeByUnionId($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["materialIds","unionId"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        $req = new \ServicePromotionWxsqGetCodeByUnionIdRequest;
        $req->setProCont(1);//推广内容：1单品
        $req->setMaterialIds($param["materialIds"]);//推广物料：单品skuId
        $req->setUnionId($param["unionId"]);//联盟ID

        if(isset($param["pid"]))
            $req->setPid($param["pid"]);//子帐号身份标识
        if(isset($param["positionId"]))
            $req->setPositionId($param["positionId"]);//推广位ID

        $data =$this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["getcodebysubunionid_result"],true);
        if($jsonarr["resultCode"] == 0){
            return $this->response_success(__FUNCTION__,"success",$jsonarr["urlList"]);
        }else{
            return $this->response_error(__FUNCTION__,"error",$jsonarr["resultMessage"]);
        }
    }

    //优惠券,商品二合一转接API-通过unionId获取推广链接
    public function getCouponCodeByUnionId($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["couponUrl","materialIds","unionId"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        $req = new \ServicePromotionCouponGetCodeByUnionIdRequest;
        $req->setCouponUrl($param["couponUrl"]);
        $req->setMaterialIds($param["materialIds"]);
        $req->setUnionId($param["unionId"]);

        if(isset($param["positionId"]))
            $req->setPositionId($param["positionId"]);
        if(isset($param["pid"]))
            $req->setPid($param["pid"]);

        $data =$this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["getcodebyunionid_result"],true);
        if($jsonarr["resultCode"] == 0){
            $urllist = $jsonarr["urlList"];
            $dataresp = [];
            foreach($urllist as $key=>$value){
                $couponurl = explode(",", $key);
                $dataresp[] = ["id"=>$couponurl[1],"couponUrl"=>$couponurl[0],"couponCode"=>$value];
            }
            return $this->response_success(__FUNCTION__,"success",$dataresp);
        }else{
            return $this->response_error(__FUNCTION__,"error",$jsonarr["resultMessage"]);
        }
    }

    //优惠券商品查询
    public function queryCouponGoods($request){
        $param = $request->params;

        $req = new \UnionSearchQueryCouponGoodsRequest;
        if(isset($param['pageIndex'])){
            $req->setPageIndex($param["pageIndex"]);//	页码
        }else{
            $req->setPageIndex(1);//	页码，默认1
        }

        if(isset($param["cid3"])){
            $req->setCid3($param["cid3"]);
        }
        if(isset($param["skuIdList"]))
            $req->putOtherTextParam("skuIdList", $param["skuIdList"]);//skuId集合，长度最大30，可为空。如果传值，忽略其他查询条


        if(isset($param["pageSize"]))
            $req->setPageSize($param["pageSize"]);//单页数最大30，默认20

        if(isset($param["priceFrom"]))
            $req->putOtherTextParam("priceFrom", $param["priceFrom"]);//商品价格下限
        if(isset($param["priceTo"]))
            $req->putOtherTextParam("priceTo", $param["priceTo"]);//商品价格上限
        if(isset($param["goodsKeyword"]))
            $req->putOtherTextParam("goodsKeyword", $param["goodsKeyword"]);//商品关键词


        $data = $this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $code = $data["code"];
        if($code == 0){
            $jsonarr = json_decode($data["query_coupon_goods_result"],true);
            if(isset($jsonarr["data"])){
                return $this->response_success(__FUNCTION__,"success",["total"=>$jsonarr["total"],"goodsList"=>$jsonarr["data"]]);
            }else{
                return $this->response_error(__FUNCTION__,"error","未找到相关数据");
            }
        }else{
            return $this->response_error(__FUNCTION__,"error",$data["zh_desc"]);
        }
    }

    //优惠券领取情况查询
    public function getInfo($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["couponUrl"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        $req = new \ServicePromotionCouponGetInfoRequest;
        $req->setCouponUrl($_GET["couponUrl"]);//

        $data = $this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["getinfo_result"],true);
        if(count($jsonarr["data"]) > 0){
            return $this->response_success(__FUNCTION__,"success",$jsonarr["data"]);
        }else{
            return $this->response_error(__FUNCTION__,"error","没有查询到信息");
        }
    }

    //获取拼购商品
    public function queryPinGouGoods($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["pageIndex","pageSize"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        $req = new \UnionSearchGoodsParamQueryRequest;

        if(isset($param['cat1Id'])){
            $req->setCat1Id($param['cat1Id']);
        }

        if(isset($param['owner'])){
            $req->setOwner($param['owner']);
        }
        if(isset($param['pageIndex'])){
            $req->setPageIndex($param['pageIndex']);
        }
        if(isset($param['pageSize'])){
            $req->setPageSize($param['pageSize']);
        }
        if(isset($param['sortName'])){
            $req->setSortName($param['sortName']);
        }
        if(isset($param['sort'])){
            $req->setSort($param['sort']);
        }
        if(isset($param['skuIds'])){
            $req->putOtherTextParam("skuIds",$param['skuIds']);
        }
        if(isset($param['pingouPriceStart'])){
            $req->putOtherTextParam("pingouPriceStart",$param['pingouPriceStart']);
        }
        if(isset($param['pingouPriceEnd'])){
            $req->putOtherTextParam("pingouPriceEnd",$param['pingouPriceEnd']);
        }
        if(isset($param['wlCommissionShareStart'])){
            $req->putOtherTextParam("wlCommissionShareStart",$param['wlCommissionShareStart']);
        }
        if(isset($param['wlCommissionShareEnd'])){
            $req->putOtherTextParam("wlCommissionShareEnd",$param['wlCommissionShareEnd']);
        }

        $data = $this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["queryPromotionGoodsByParam_result"],true);
        if(isset($jsonarr["data"]) && count($jsonarr["data"]) > 0){
            return $this->response_success(__FUNCTION__,"success",$jsonarr["data"]);
        }else{
            return $this->response_error(__FUNCTION__,"error","没有查询到信息");
        }
    }

    //短链接转自己的微信手Q短链  https://union-click.jd.com/jdc?d=H4fqc1
    public function short2WXSQ($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["shortUrl","unionId"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        //根据shorturl获取商品ID
        $id = [];
        $shortUrl = $param["shortUrl"];

        $result = $this->checkShortUrl($shortUrl);
         if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        if(strstr($shortUrl,",")>-1){
            $arr = explode(",", $shortUrl);
            foreach($arr as $url){
                $_id= $this->short2id($url);
                if($_id){
                    $id[] = $_id;
                }
            }
        }else{
            //单个url
            $_id = $this->short2id($shortUrl);
            if($_id){
                $id[] = $_id;
            }
        }

        if(count($id) == 0){
            return $this->response_error(__FUNCTION__,"error","没有解析到商品SKU，请确认参数是否正常");
        }


        $materialIds = implode(",", $id);;//可以是多个，逗号分割
        $req = new \ServicePromotionWxsqGetCodeByUnionIdRequest;
        $req->setProCont(1);//推广内容：1单品
        $req->setMaterialIds($materialIds);//推广物料：单品skuId
        $req->setUnionId($param["unionId"]);//联盟ID

        if(isset($param["pid"]))
            $req->setPid($param["pid"]);//子帐号身份标识
        if(isset($param["positionId"]))
            $req->setPositionId($param["positionId"]);//推广位ID

        $data =$this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["getcodebysubunionid_result"],true);
        if($jsonarr["resultCode"] == 0){
             return $this->response_success(__FUNCTION__,"success",$jsonarr["urlList"]);
        }else{
            return $this->response_error(__FUNCTION__,"error",$jsonarr["resultMessage"]);
        }

    }

    //短链接转自己的二合一短链
    public function short2CouponCode($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["shortUrl","unionId"]
        ]);
         if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        
        //根据shorturl获取商品ID
        $id = [];
        $shortUrl = $param["shortUrl"];

        $result = $this->checkShortUrl($shortUrl);
         if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        if(strstr($shortUrl,",")>-1){
            $arr = explode(",", $shortUrl);
            foreach($arr as $url){
                $_id= $this->short2id($url);
                if($_id){
                    $id[] = $_id;
                }
            }
        }else{
            //单个url
            $_id = $this->short2id($shortUrl);
            if($_id){
                $id[] = $_id;
            }
        }

        if(count($id) == 0){
            return $this->response_error(__FUNCTION__,"error","没有解析到商品SKU，请确认参数是否正常");
        }

        //根据商品id，查询优惠券原始链接
        $couponidlist = [];
        $req = new \UnionSearchQueryCouponGoodsRequest;
        $req->setPageIndex(1);
        foreach($id as $i){
            $req->putOtherTextParam("skuIdList", $i);
            $data = $this->doRequest($req);
            $code = $data["code"];
            if($code == 0){
                $jsonarr = json_decode($data["query_coupon_goods_result"],true);
                if(isset($jsonarr["data"])){
                    $goods= $jsonarr["data"][0];
                    if(isset($goods['couponList'])){
                        $coupon = $goods['couponList'][0];
                        $couponUrl = $coupon['link'];
                        $couponidlist[$i] = 'http:'.$couponUrl;
                    }
                }
            }
        }

        if(count($couponidlist) == 0){
            return $this->response_error(__FUNCTION__,"error","没有解析到商品优惠券链接，请确认参数是否正常！");
        }

        $materids = array_keys($couponidlist);
        $copurls  = array_values($couponidlist);
        $materids = implode(',', $materids);
        $copurls = implode(",", $copurls);

        $req = new \ServicePromotionCouponGetCodeByUnionIdRequest;
        $req->setCouponUrl($copurls);
        $req->setMaterialIds($materids);
        $req->setUnionId($param["unionId"]);

        if(isset($param["positionId"]))
            $req->setPositionId($param["positionId"]);
        if(isset($param["pid"]))
            $req->setPid($param["pid"]);

        $data =$this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["getcodebyunionid_result"],true);
        if($jsonarr["resultCode"] == 0){
            $urllist = $jsonarr["urlList"];
            $dataresp = [];
            foreach($urllist as $key=>$value){
                $couponurl = explode(",", $key);
                $dataresp[] = ["id"=>$couponurl[1],"couponUrl"=>$couponurl[0],"couponCode"=>$value];
            }
            return $this->response_success(__FUNCTION__,"success",$dataresp);
        }else{
            return $this->response_error(__FUNCTION__,"error",$jsonarr["resultMessage"]);
        }
    }

    //工具商订单查询
    public function queryOrderListWithKey($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["key","time"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }

        $req = new \UnionServiceQueryOrderListWithKeyRequest;
        $req->setKey($param["key"]);
        if(isset($param['pageIndex'])){
            $req->setPageIndex($param["pageIndex"]);
        }else{
            $req->setPageIndex(1);
        }
        if(isset($param['pageSize'])){
            $req->setPageSize($param["pageSize"]);
        }else{
            $req->setPageSize(20);
        }

        $req->setTime($param["time"]);
        $req->setUnionId($this->unionid);
        $data = $this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        $jsonarr = json_decode($data["result"],true);
        if($jsonarr['success'] == 1){
            if(isset($jsonarr['data'])){
                return $this->response_success(__FUNCTION__,"success",$jsonarr['data']);
            }else{
                return $this->response_error(__FUNCTION__,'error','没有订单信息');
            }
        }else{
            return $this->response_error(__FUNCTION__,"error",$jsonarr['msg']);
        }
    }
    
        //关键字选品
    public function queryKeywordGoods($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["pageIndex","pageSize"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        $req = new \UnionSearchGoodsKeywordQueryRequest;
        if(isset($param['cat1Id'])){
            $req->setCat1Id($param['cat1Id']);
        }
        if(isset($param['cat2Id'])){
            $req->setCat2Id($param['cat2Id']);
        }
        if(isset($param['cat3Id'])){
            $req->setCat3Id($param['cat3Id']);
        }
        if(isset($param['keyword'])){
            $req->setKeyword($param['keyword']);
        }
        if(isset($param['sort_name'])){
            $req->setSortName($param['sort_name']);
        }
        if(isset($param['sort'])){
            $req->setSort($param['sort']);
        }
        $req->setPageIndex($param['pageIndex']);
        $req->setPageSize($param['pageSize']);
        $data = $this->doRequest($req);
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        
        $code = $data["code"];
        if($code == 0){
            $jsonarr = json_decode($data["querygoodsbykeyword_result"],true);
            if(isset($jsonarr["data"])){
                return $this->response_success(__FUNCTION__,"success",["total"=>$jsonarr["total"],"goodsList"=>$jsonarr["data"]]);
            }else{
                return $this->response_error(__FUNCTION__,"error","没有查询到信息");
            }
        }else{
            return $this->response_error(__FUNCTION__,"error",$data["zh_desc"]);
        }
        
    }
    
    //秒杀商品查询
    public function querySecKillGoods($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["secKillPriceFrom","secKillPriceTo"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        $req = new \ServiceGoodsQuerySecKillGoodsRequest;

        $req->setSecKillPriceFrom($param['secKillPriceFrom']);
        $req->setSecKillPriceTo($param['secKillPriceTo']);

        if(isset($param['skuIdList'])){
            $req->setSkuIdList($param['skuIdList']);
        }
        if(isset($param['pageIndex'])){
            $req->setPageIndex($param['pageIndex']);
        }
        if(isset($param['pageSize'])){
            $req->setPageSize($param['pageSize']);
        }
        if(isset($param['isBeginSecKill'])){
            $req->setIsBeginSecKill($param['isBeginSecKill']);
        }
        if(isset($param['cid1Id'])){
            $req->setCid1Id($param['cid1Id']);
        }
        if(isset($param['cid2Id'])){
            $req->setCid2Id($param['cid2Id']);
        }
        if(isset($param['cid3Id'])){
            $req->setCid3Id($param['cid3Id']);
        }
        if(isset($param['owner'])){
            $req->setOwner($param['owner']);
        }
        if(isset($param['commissionShareFrom'])){
            $req->setCommissionShareFrom($param['commissionShareFrom']);
        }
        if(isset($param['commissionShareTo'])){
            $req->setCommissionShareTo($param['commissionShareTo']);
        }
        if(isset($param['sortName'])){
            $req->setSortName($param['sortName']);
        }
        if(isset($param['sort'])){
            $req->setSortName($param['sort']);
        }

        $data = $this->doRequest($req);
        
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        
        $code = $data["code"];
        if($code == 0){
            $jsonarr = json_decode($data["querystupricegoods_result"],true);
            if(isset($jsonarr["data"])){
                return $this->response_success(__FUNCTION__,"success",["total"=>$jsonarr["totalCount"],"goodsList"=>$jsonarr["data"]]);
            }else{
                return $this->response_error(__FUNCTION__,"error","没有查询到信息");
            }
        }else{
            return $this->response_error(__FUNCTION__,"error",$data["zh_desc"]);
        }
    }

     public function queryCategory($request){
        $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["parentId","grade"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        
        $req = new \UnionSearchGoodsCategoryQueryRequest;
        $req->setGrade($param["grade"]);
        $req->setParentId($param["parentId"]);
        
        $data = $this->doRequest($req);
        
        if(isset($param['debug']) && $param['debug'] == 1){
            return $this->response_success(__FUNCTION__,"success", $data);
        }
        
        $code = $data["code"];
        if($code == 0){
            $jsonarr = json_decode($data["querygoodscategory_result"],true);
            if(isset($jsonarr["data"]) && count($jsonarr['data'])>0){
                return $this->response_success(__FUNCTION__,"success",$jsonarr["data"]);
            }else{
                return $this->response_error(__FUNCTION__,"error","没有查询到信息");
            }
        }else{
           return  $this->response_error(__FUNCTION__,"error",$data["zh_desc"]);
        }
    }
    
    //查询商品详情图片
    public function getGoodsDetail($request){

       $param = $request->params;
        $result = $this->check($param,[
            "Required"=>["id"]
        ]);
        if($result !== true){
            return $this->response_error(__FUNCTION__,"error",$result);
        }
        
        $id = $param["id"];
        if(!is_numeric($id)){
            return $this->response_error(__FUNCTION__,"$id 不是有效的商品ID","");
        }

        $jdurl = "http://item.jd.com/$id.html";
        $html = file_get_contents($jdurl);
        preg_match("/desc: '(\S+)'/",$html, $regs);
        
        if(count($regs)==2){
            $descUrl  = $regs[1];
            $detail = file_get_contents("https:".$descUrl);
            if($detail){
                $detail = json_decode($detail,true);
                $content = $detail["content"];
                
                if(strstr($content,"data-lazyload")>-1){
                    $regImg = '/data-lazyload="([^ \t]+)"/';
                    preg_match_all($regImg,$content,$matchAll);
                    return $this->response_success(__FUNCTION__,"success",$matchAll[1]);
                }else{
                    return $this->response_success(__FUNCTION__,"success",$content);
                }
            }
        }
        return $this->response_error(__FUNCTION__,"ID：$id 没有解析到详情信息","");
    }
    
    private function short2id($shorturl){
        $html = file_get_contents($shorturl);
        preg_match("/hrl='(\S+)'/",$html, $regs);
        if(count($regs)>1){
            $longurl = $regs[1];
            $url = $this->curl_get_302($longurl);
            if($url){
                $sku = $this->convertUrlQuery($url)["sku"];
                return $sku;
            }else{
                return false;
            }
        }
    }

    private function convertUrlQuery($query){
        $query = str_replace("?", "&", $query);

        $queryParts = explode('&', $query);
        $params = array();
        foreach ($queryParts as $param) {
            $item = explode('=', $param);

            $params[@$item[0]] = @$item[1];
        }
        return $params;
    }

    private function curl_get_302($url) {
        $ch = curl_init();
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL,  $url);
        //curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch,  CURLOPT_FOLLOWLOCATION, 1); // 302 redirect
        //curl_setopt($ch,  CURLOPT_POSTFIELDS, $vars);
        $data = curl_exec($ch);
        $Headers =  curl_getinfo($ch);
        curl_close($ch);
        if ($data != $Headers)
            return  $Headers["url"];
        else
            return false;
    }

    private function checkShortUrl($shorturl){
        if(strstr($shorturl,"union-click.jd.com") === false){
           return "短链接非法";
        }
        return true;
    }
}