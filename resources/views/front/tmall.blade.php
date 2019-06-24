@extends('front/base_template/dashboard')
@section('content')


    <div class="search">

        <!--筛选内容(全部作者)-->
        <div class="scholars-recommend-content att-choose">
            <div class="scholars-choose-box default-box scholars-choose-box-forLine">
                <p class="choose-content left">
                    <em>区域</em>
                    <span>不限</span>
                    <span>华东地区</span>
                    <span>华南地区</span>
                    <span>华中地区</span>
                    <span>华北地区</span>
                    <span>华西地区</span>
                    <span>东北地区</span>
                    <span>西北地区</span>
                    <span>西南地区</span>
                    <span>江浙沪地区</span>
                </p>
                <div class="scholars-choose-box scholars-choose-box2 left seemorebox">
                    <div class="title left">区域</div>
                    <ul class="left">
                        <li>不限</li>
                        <li>华东地区</li>
                        <li>华南地区</li>
                        <li>华中地区</li>
                        <li>华北地区</li>
                        <li>华西地区</li>
                        <li>东北地区</li>
                        <li>西北地区</li>
                        <li>西南地区</li>
                        <li>江浙沪地区</li>
                    </ul>
                </div>
                <!--        <button class="sch-moreChoose sch-getmore">更多</button>-->
                <!--        <button class="sch-moreChoose">+多选</button>-->
            </div>
            <div class="scholars-choose-box scholars-choose-box2 choosemorebox">
                <form action="">
                    <div class="title left">区域</div>
                    <ul class="left">
                        <li><input type="checkbox">不限</li>
                        <li><input type="checkbox">华东地区</li>
                        <li><input type="checkbox">华南地区</li>
                        <li><input type="checkbox">华中地区</li>
                        <li><input type="checkbox">华北地区</li>
                        <li><input type="checkbox">华西地区</li>
                        <li><input type="checkbox">东北地区</li>
                        <li><input type="checkbox">西北地区</li>
                        <li><input type="checkbox">东南地区</li>
                        <li><input type="checkbox">西南地区</li>
                        <li><input type="checkbox">江浙沪地区</li>
                    </ul>
                    <div class="btns left">
                        <p><input type="button" class="sure" value="确定"></p>
                        <p><input type="reset" class="false" value="取消"></p>
                    </div>
                </form>
            </div>
        </div>

        <!--筛选内容(全部领域)-->
        <div class="scholars-recommend-content att-choose">
            <div class="scholars-choose-box default-box scholars-choose-box-forLine">
                <p class="choose-content left">
                    <em>类目</em>
                    <span>不限</span>
                    <span>服饰</span>
                    <span>居家日用</span>
                    <span>化妆品</span>
                    <span>母婴用品</span>
                    <span>3C数码类</span>
                    <span>运动户外</span>
                    <span>食品</span>
                    <span>汽车及配件</span>
                    <span>书籍音像</span>
                    <span>珠宝配饰</span>
                    <span>服务大类</span>
                </p>
                <div class="scholars-choose-box scholars-choose-box2 left seemorebox">
                    <div class="title left">类目</div>
                    <ul class="left">
                        <li>不限</li>
                        <li>服饰</li>
                        <li>居家日用</li>
                        <li>化妆品</li>
                        <li>母婴用品</li>
                        <li>3C数码类</li>
                        <li>运动户外</li>
                        <li>食品</li>
                        <li>汽车及配件</li>
                        <li>书籍音像</li>
                        <li>珠宝配饰</li>
                        <li>服务大类</li>
                        <li>鞋类箱包</li>
                        <li>家用电器</li>
                        <li>话费通讯</li>
                        <li>其他类目</li>
                    </ul>
                </div>
                <!--        <button class="sch-moreChoose sch-getmore">更多</button>-->
                <!--        <button class="sch-moreChoose">+多选</button>-->
            </div>
            <div class="scholars-choose-box scholars-choose-box2 choosemorebox">
                <form action="">
                    <div class="title left">类目</div>
                    <ul class="left">
                        <li><input type="checkbox">不限</li>
                        <li><input type="checkbox">服饰</li>
                        <li><input type="checkbox">居家日用</li>
                        <li><input type="checkbox">化妆品</li>
                        <li><input type="checkbox">母婴用品</li>
                        <li><input type="checkbox">3C数码类</li>
                        <li><input type="checkbox">运动户外</li>
                        <li><input type="checkbox">汽车及配件</li>
                        <li><input type="checkbox">书籍音像</li>
                        <li><input type="checkbox">珠宝配饰</li>
                        <li><input type="checkbox">服务大类</li>
                        <li><input type="checkbox">鞋类箱包</li>
                        <li><input type="checkbox">家用电器</li>
                        <li><input type="checkbox">话费通讯</li>
                        <li><input type="checkbox">学科领域1（数量）</li>
                        <li><input type="checkbox">其他类目</li>
                    </ul>
                    <div class="btns left">
                        <p><input type="button" class="sure" value="确定"></p>
                        <p><input type="reset" class="false" value="取消"></p>
                    </div>
                </form>
            </div>
        </div>
        <!--筛选内容(全部研究方向)-->
        <div class="scholars-recommend-content att-choose">
            <div class="scholars-choose-box default-box scholars-choose-box-forLine">
                <p class="choose-content left">
                    <em>价格</em>
                    <span>不限</span>
                    <span>3万以下</span>
                    <span>3万-5万</span>
                    <span>5万-10万</span>
                    <span>5万-10万</span>
                    <span>10万-20万</span>
                    <span>20万-30万</span>
                </p>
                <div class="scholars-choose-box scholars-choose-box2 left seemorebox">
                    <div class="title left">价格</div>
                    <ul class="left">
                        <li>不限</li>
                        <li>3万以下</li>
                        <li>3万-5万</li>
                        <li>5万-10万</li>
                        <li>5万-10万</li>
                        <li>10万-20万</li>
                        <li>20万-30万</li>
                    </ul>
                </div>
                <!--        <button class="sch-moreChoose sch-getmore">更多</button>-->
                <!--        <button class="sch-moreChoose">+多选</button>-->
            </div>
            <div class="scholars-choose-box scholars-choose-box2 choosemorebox">
                <form action="">
                    <div class="title left">价格</div>
                    <ul class="left">
                        <li><input type="checkbox">不限</li>
                        <li><input type="checkbox">3万以下</li>
                        <li><input type="checkbox">3万-5万</li>
                        <li><input type="checkbox">5万-10万</li>
                        <li><input type="checkbox">5万-10万</li>
                        <li><input type="checkbox">10万-20万</li>
                        <li><input type="checkbox">20万-30万</li>
                    </ul>
                    <div class="btns left">
                        <p><input type="button" class="sure" value="确定"></p>
                        <p><input type="reset" class="false" value="取消"></p>
                    </div>
                </form>
            </div>
        </div>

        <!--商城-->
        <div class="scholars-recommend-content att-choose">
            <div class="scholars-choose-box default-box scholars-choose-box-forLine">
                <p class="choose-content left">
                    <em>商城</em>
                    <span>不限</span>
                    <span>旗舰店</span>
                    <span>专营店</span>
                    <span>专卖店</span>
                </p>
                <div class="scholars-choose-box scholars-choose-box2 left seemorebox">
                    <div class="title left">商城</div>
                    <ul class="left">
                        <li>不限</li>
                        <li>旗舰店</li>
                        <li>专营店</li>
                        <li>专卖店</li>
                    </ul>
                </div>
                <!--        <button class="sch-moreChoose sch-getmore">更多</button>-->
                <!--        <button class="sch-moreChoose">+多选</button>-->
            </div>
            <div class="scholars-choose-box scholars-choose-box2 choosemorebox">
                <form action="">
                    <div class="title left">商城</div>
                    <ul class="left">
                        <li><input type="checkbox">不限</li>
                        <li><input type="checkbox">旗舰店</li>
                        <li><input type="checkbox">专营店</li>
                        <li><input type="checkbox">专卖店</li>
                    </ul>
                    <div class="btns left">
                        <p><input type="button" class="sure" value="确定"></p>
                        <p><input type="reset" class="false" value="取消"></p>
                    </div>
                </form>
            </div>
        </div>

        <!--商标-->
        <div class="scholars-recommend-content att-choose">
            <div class="scholars-choose-box default-box scholars-choose-box-forLine">
                <p class="choose-content left">
                    <em>商标</em>
                    <span>不限</span>
                    <span>R标</span>
                    <span>TM标</span>
                    <span>无商标</span>
                </p>
                <div class="scholars-choose-box scholars-choose-box2 left seemorebox">
                    <div class="title left">商标</div>
                    <ul class="left">
                        <li>不限</li>
                        <li>R标</li>
                        <li>TM标</li>
                        <li>无商标</li>
                    </ul>
                </div>
                <!--        <button class="sch-moreChoose sch-getmore">更多</button>-->
                <!--        <button class="sch-moreChoose">+多选</button>-->
            </div>
            <div class="scholars-choose-box scholars-choose-box2 choosemorebox">
                <form action="">
                    <div class="title left">商标</div>
                    <ul class="left">
                        <li><input type="checkbox">不限</li>
                        <li><input type="checkbox">R标</li>
                        <li><input type="checkbox">TM标</li>
                        <li><input type="checkbox">无商标</li>
                    </ul>
                    <div class="btns left">
                        <p><input type="button" class="sure" value="确定"></p>
                        <p><input type="reset" class="false" value="取消"></p>
                    </div>
                </form>
            </div>
        </div>

        <!--其它-->
        <div class="scholars-recommend-content att-choose">
            <div class="scholars-choose-box default-box scholars-choose-box-forLine">
                <p class="choose-content left">
                    <em>评分</em>
                    <span>不限</span>
                    <span>5分以上</span>
                    <span>4.9分以上</span>
                    <span>4.8分以上</span>
                    <span>4.7分以上</span>
                    <span>4.6分以上</span>
                    <span>4.5分以上</span>
                    <span>4.4分以上</span>
                    <span>4.3分以上</span>
                    <span>4.2分以上</span>
                    <span>4.1分以上</span>
                </p>
                <div class="scholars-choose-box scholars-choose-box2 left seemorebox">
                    <div class="title left">评分</div>
                    <ul class="left">
                        <li>不限</li>
                        <li>5分以上</li>
                        <li>3万-5万</li>
                        <li>5万-10万</li>
                        <li>5万-10万</li>
                        <li>10万-20万</li>
                        <li>20万-30万</li>
                    </ul>
                </div>
                <!--        <button class="sch-moreChoose sch-getmore">更多</button>-->
                <!--        <button class="sch-moreChoose">+多选</button>-->
            </div>
            <div class="scholars-choose-box scholars-choose-box2 choosemorebox">
                <form action="">
                    <div class="title left">价格</div>
                    <ul class="left">
                        <li><input type="checkbox">不限</li>
                        <li><input type="checkbox">3万以下</li>
                        <li><input type="checkbox">3万-5万</li>
                        <li><input type="checkbox">5万-10万</li>
                        <li><input type="checkbox">5万-10万</li>
                        <li><input type="checkbox">10万-20万</li>
                        <li><input type="checkbox">20万-30万</li>
                    </ul>
                    <div class="btns left">
                        <p><input type="button" class="sure" value="确定"></p>
                        <p><input type="reset" class="false" value="取消"></p>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">


                <div class="row col-lg-12 setHover">
                    <div class=" col-lg-10 col-md-9 order-md-3 detailCardLeft" data-aos="fade">
                        <div class="text-left pb-1 border-primary mb-4">
                            <a href="Tmall-detail.html">
                                <h5 class="text-primary detailCardLeftTitle"><img src="images/store.png" />华南地区3C数码类天猫旗舰店出售，无扣分诚心出售 </h5>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>主营类目：</span>鞋类箱包</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商城类型：</span>专营店</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标类型：</span>R商标</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>纳税资质：</span>小规模纳税人</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>技术年费：</span>60000元</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>保证金：</span>100000元（需退还）</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标分类：</span>25类</p>
                            </div>
                            <div class="col-md-12 mb-md-2 mb-1 col-lg-12">
                                <p><span>卖家描述：</span>华南地区出售，京东自营旗舰店，耳机耳麦鼠标。1.店铺一直在盈利中，而且转换率较高....</p>
                            </div>
                        </div>
                        <div class="row cardTag">
                            <div class="col-md-12 mb-md-2 mb-0 col-lg-12 cardTag">
                                <span>店铺标签：</span>
                                <span class="perCardTag">盈利店铺</span>
                                <span class="perCardTag">本人出售</span>
                                <span class="perCardTag">无扣分</span>
                                <span class="perCardTag">收藏高</span>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-2 col-md-3 order-md-3 detailCardRight" data-aos="fade">
                        <div class="detailCardRightPrice">
                            ￥39.8万
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="查看详情" class="btn btn-primary py-2 px-4 text-white LookDetail">
                                <input type="submit" value="立即咨询" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row col-lg-12 setHover">
                    <div class=" col-lg-10 col-md-9 order-md-3 detailCardLeft" data-aos="fade">
                        <div class="text-left pb-1 border-primary mb-4">
                            <h5 class="text-primary detailCardLeftTitle"><img src="images/store.png" />华南地区3C数码类天猫旗舰店出售，无扣分诚心出售 </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>主营类目：</span>鞋类箱包</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商城类型：</span>专营店</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标类型：</span>R商标</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>纳税资质：</span>小规模纳税人</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>技术年费：</span>60000元</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>保证金：</span>100000元（需退还）</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标分类：</span>25类</p>
                            </div>
                            <div class="col-md-12 mb-md-2 mb-1 col-lg-12">
                                <p><span>卖家描述：</span>华南地区出售，京东自营旗舰店，耳机耳麦鼠标。1.店铺一直在盈利中，而且转换率较高....</p>
                            </div>
                        </div>
                        <div class="row cardTag">
                            <div class="col-md-12 mb-md-2 mb-0 col-lg-12 cardTag">
                                <span>店铺标签：</span>
                                <span class="perCardTag">盈利店铺</span>
                                <span class="perCardTag">本人出售</span>
                                <span class="perCardTag">无扣分</span>
                                <span class="perCardTag">收藏高</span>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-2 col-md-3 order-md-3 detailCardRight" data-aos="fade">
                        <div class="detailCardRightPrice">
                            ￥39.8万
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="查看详情" class="btn btn-primary py-2 px-4 text-white LookDetail">
                                <input type="submit" value="立即咨询" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!--<div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
        <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
      </div>-->
                <div class="row col-lg-12 setHover">
                    <div class=" col-lg-10 col-md-9 order-md-3 detailCardLeft" data-aos="fade">
                        <div class="text-left pb-1 border-primary mb-4">
                            <h5 class="text-primary detailCardLeftTitle"><img src="images/store.png" />华南地区3C数码类天猫旗舰店出售，无扣分诚心出售 </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>主营类目：</span>鞋类箱包</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商城类型：</span>专营店</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标类型：</span>R商标</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>纳税资质：</span>小规模纳税人</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>技术年费：</span>60000元</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>保证金：</span>100000元（需退还）</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标分类：</span>25类</p>
                            </div>
                            <div class="col-md-12 mb-md-2 mb-1 col-lg-12">
                                <p><span>卖家描述：</span>华南地区出售，京东自营旗舰店，耳机耳麦鼠标。1.店铺一直在盈利中，而且转换率较高....</p>
                            </div>
                        </div>
                        <div class="row cardTag">
                            <div class="col-md-12 mb-md-2 mb-0 col-lg-12 cardTag">
                                <span>店铺标签：</span>
                                <span class="perCardTag">盈利店铺</span>
                                <span class="perCardTag">本人出售</span>
                                <span class="perCardTag">无扣分</span>
                                <span class="perCardTag">收藏高</span>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-2 col-md-3 order-md-3 detailCardRight" data-aos="fade">
                        <div class="detailCardRightPrice">
                            ￥39.8万
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="查看详情" class="btn btn-primary py-2 px-4 text-white LookDetail">
                                <input type="submit" value="立即咨询" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row col-lg-12 setHover">
                    <div class=" col-lg-10 col-md-9 order-md-3 detailCardLeft" data-aos="fade">
                        <div class="text-left pb-1 border-primary mb-4">
                            <h5 class="text-primary detailCardLeftTitle"><img src="images/store.png" />华南地区3C数码类天猫旗舰店出售，无扣分诚心出售 </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>主营类目：</span>鞋类箱包</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商城类型：</span>专营店</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标类型：</span>R商标</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>纳税资质：</span>小规模纳税人</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>技术年费：</span>60000元</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>保证金：</span>100000元（需退还）</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标分类：</span>25类</p>
                            </div>
                            <div class="col-md-12 mb-md-2 mb-1 col-lg-12">
                                <p><span>卖家描述：</span>华南地区出售，京东自营旗舰店，耳机耳麦鼠标。1.店铺一直在盈利中，而且转换率较高....</p>
                            </div>
                        </div>
                        <div class="row cardTag">
                            <div class="col-md-12 mb-md-2 mb-0 col-lg-12 cardTag">
                                <span>店铺标签：</span>
                                <span class="perCardTag">盈利店铺</span>
                                <span class="perCardTag">本人出售</span>
                                <span class="perCardTag">无扣分</span>
                                <span class="perCardTag">收藏高</span>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-2 col-md-3 order-md-3 detailCardRight" data-aos="fade">
                        <div class="detailCardRightPrice">
                            ￥39.8万
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="查看详情" class="btn btn-primary py-2 px-4 text-white LookDetail">
                                <input type="submit" value="立即咨询" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!--<div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
        <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
      </div>-->
                <div class="row col-lg-12 setHover">
                    <div class=" col-lg-10 col-md-9 order-md-3 detailCardLeft" data-aos="fade">
                        <div class="text-left pb-1 border-primary mb-4">
                            <h5 class="text-primary detailCardLeftTitle"><img src="images/store.png" />华南地区3C数码类天猫旗舰店出售，无扣分诚心出售 </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>主营类目：</span>鞋类箱包</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商城类型：</span>专营店</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标类型：</span>R商标</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>纳税资质：</span>小规模纳税人</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>技术年费：</span>60000元</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>保证金：</span>100000元（需退还）</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标分类：</span>25类</p>
                            </div>
                            <div class="col-md-12 mb-md-2 mb-1 col-lg-12">
                                <p><span>卖家描述：</span>华南地区出售，京东自营旗舰店，耳机耳麦鼠标。1.店铺一直在盈利中，而且转换率较高....</p>
                            </div>
                        </div>
                        <div class="row cardTag">
                            <div class="col-md-12 mb-md-2 mb-0 col-lg-12 cardTag">
                                <span>店铺标签：</span>
                                <span class="perCardTag">盈利店铺</span>
                                <span class="perCardTag">本人出售</span>
                                <span class="perCardTag">无扣分</span>
                                <span class="perCardTag">收藏高</span>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-2 col-md-3 order-md-3 detailCardRight" data-aos="fade">
                        <div class="detailCardRightPrice">
                            ￥39.8万
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="查看详情" class="btn btn-primary py-2 px-4 text-white LookDetail">
                                <input type="submit" value="立即咨询" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!--<div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
        <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
      </div>-->
                <div class="row col-lg-12 setHover">
                    <div class=" col-lg-10 col-md-9 order-md-3 detailCardLeft" data-aos="fade">
                        <div class="text-left pb-1 border-primary mb-4">
                            <h5 class="text-primary detailCardLeftTitle"><img src="images/store.png" />华南地区3C数码类天猫旗舰店出售，无扣分诚心出售 </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>主营类目：</span>鞋类箱包</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商城类型：</span>专营店</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标类型：</span>R商标</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>纳税资质：</span>小规模纳税人</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>技术年费：</span>60000元</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>保证金：</span>100000元（需退还）</p>
                            </div>
                            <div class="col-md-2 mb-md-2 mb-1 col-lg-4">
                                <p><span>商标分类：</span>25类</p>
                            </div>
                            <div class="col-md-12 mb-md-2 mb-1 col-lg-12">
                                <p><span>卖家描述：</span>华南地区出售，京东自营旗舰店，耳机耳麦鼠标。1.店铺一直在盈利中，而且转换率较高....</p>
                            </div>
                        </div>
                        <div class="row cardTag">
                            <div class="col-md-12 mb-md-2 mb-0 col-lg-12 cardTag">
                                <span>店铺标签：</span>
                                <span class="perCardTag">盈利店铺</span>
                                <span class="perCardTag">本人出售</span>
                                <span class="perCardTag">无扣分</span>
                                <span class="perCardTag">收藏高</span>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-2 col-md-3 order-md-3 detailCardRight" data-aos="fade">
                        <div class="detailCardRightPrice">
                            ￥39.8万
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="查看详情" class="btn btn-primary py-2 px-4 text-white LookDetail">
                                <input type="submit" value="立即咨询" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection