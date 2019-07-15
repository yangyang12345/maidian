@extends('front/base_template/dashboard')
@section('content')


<div class="search">
<!--已选类别-->
<!--    <div class="atp_choosed overflow">-->
<!--      <div class="left title col666">已选类别：</div>-->
<!--      <div class="left conn" style="width: 780px;"></div>-->
<!--    </div>-->
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

<!--商城-->
<div class="scholars-recommend-content att-choose">
  <div class="scholars-choose-box default-box scholars-choose-box-forLine">
    <p class="choose-content left">
      <em>商标</em>
         <span>不限</span>
         <span>第1类-化学原料</span>
         <span>第2类-颜料油漆</span>
         <span>第3类-日化用品</span>
         <span>第4类-燃料油脂</span>
         <span>第5类-医药</span>
         <span>第6类-金属材料</span>
         <span>第7类-机械设备</span>
    </p>
    <div class="scholars-choose-box scholars-choose-box2 left seemorebox scholars-choose-box-forLine">
      <div class="title left">商标</div>
      <ul class="left row">
        <li class="col-lg-2">不限</li>
        <li class="col-lg-2">第1类-化学原料</li>
        <li class="col-lg-2">第2类-颜料油漆</li>
        <li class="col-lg-2">第3类-日化用品</li>
        <li class="col-lg-2">第4类-燃料油脂</li>
        <li class="col-lg-2">第5类-医药</li>
        <li class="col-lg-2">第6类-金属材料</li>
        <li class="col-lg-2">第7类-机械设备</li>
        <li class="col-lg-2">第8类-手工器械</li>
        <li class="col-lg-2">第9类-科学仪器</li>
        <li class="col-lg-2">第10类-医疗器械</li>
        <li class="col-lg-2">第11类-灯具空调</li>
        <li class="col-lg-2">第12类-运输工具</li>
        <li class="col-lg-2">第13类-军火烟火</li>
        <li class="col-lg-2">第14类-珠宝钟表</li>
        <li class="col-lg-2">第15类-乐器</li>
        <li class="col-lg-2">第16类-办公用品</li>
        <li class="col-lg-2">第17类-橡胶制品</li>
        <li class="col-lg-2">第18类-皮革皮具</li>
        <li class="col-lg-2">第19类-建筑材料</li>
        <li class="col-lg-2">第20类-家具</li>
        <li class="col-lg-2">第21类-厨房洁具</li>
        <li class="col-lg-2">第22类-绳网袋篷</li>
        <li class="col-lg-2">第23类-纱线丝</li>
        <li class="col-lg-2">第24类-布料床单</li>
        <li class="col-lg-2">第25类-服装鞋帽</li>
        <li class="col-lg-2">第26类-纽扣拉链</li>
        <li class="col-lg-2">第27类-地毯席垫</li>
        <li class="col-lg-2">第28类-健身器材</li>
        <li class="col-lg-2">第29类-食品</li>
        <li class="col-lg-2">第30类-方便食品</li>
        <li class="col-lg-2">第31类-私聊种籽</li>
        <li class="col-lg-2">第32类-啤酒饮料</li>
        <li class="col-lg-2">第33类-酒</li>
        <li class="col-lg-2">第34类-烟草烟具</li>
        <li class="col-lg-2">第35类-广告销售</li>
        <li class="col-lg-2">第36类-金融物管</li>
        <li class="col-lg-2">第37类-建筑修理</li>
        <li class="col-lg-2">第38类-通讯服务</li>
        <li class="col-lg-2">第39类-运输储藏</li>
        <li class="col-lg-2">第40类-材料加工</li>
        <li class="col-lg-2">第41类-网站服务</li>
        <li class="col-lg-2">第42类-餐饮住宿</li>
        <li class="col-lg-2">第43类-医疗园艺</li>
        <li class="col-lg-2">第44类-社会服务</li>
        <li class="col-lg-2">第45类-教育娱乐</li>
      </ul>
    </div>
            <button class="sch-moreChoose sch-getmore"><img class="imgclick" src="images/more.png"/></button>
<!--                <button class="sch-moreChoose">+多选</button>-->
  </div>

</div>

</div>

<div class="site-section">
  <div class="container row" style="margin: auto">
    @foreach ($list as $l)
    <div class="row col-lg-6">
      <div class="row setHover">
        <div class=" col-lg-12 col-md-9 order-md-3 detailCardLeft" data-aos="fade">
          <div class="text-left pb-1 border-primary mb-4">
            <h5 class="text-primary detailCardLeftTitle"><img src="images/store.png"/>{{ $l->name }}</h5>
          </div>
          <div class="row">
            <div class="col-md-2 mb-md-2 mb-1 col-lg-5">
              <p><span>主营类目：</span>{{ $l->categories }}</p>
            </div>
            <div class="col-md-2 mb-md-2 mb-1 col-lg-6">
              <p><span>所在区域：</span>{{ $l->area }}</p>
            </div>
            <div class="col-md-2 mb-md-2 mb-1 col-lg-5">
              <p><span>纳税资质：</span>一般纳税人</p>
            </div>
            <div class="col-md-2 mb-md-2 mb-1 col-lg-6">
              <p><span>商标分类：</span>{{ $l->type_mark }}</p>
            </div>
            <div class="col-md-2 mb-md-2 mb-1 col-lg-5">
              <p><span>技术年费：</span>0元</p>
            </div>
            <div class="col-md-2 mb-md-2 mb-1 col-lg-6">
              <p><span>保证金：</span>{{ $l->deposit }}</p>
            </div>
          </div>
          <div class="row cardTag">
            <div class="col-md-12 mb-md-2 mb-0 col-lg-12 cardTag">
              <input type="submit" value="立即抢购" class="btn btn-primary py-2 px-4 text-white">
              <input type="submit" value="立即询价" class="btn btn-primary py-2 px-4 text-white">
            </div>
          </div>
        </div>
      </div>
     </div>
    @endforeach
    </div>
    
    <hr>
    <div class="row">
      <div class="m-auto">
        {{ $list->links() }}
      </div>
    </div>
  </div>
</div>


</div>

@endsection