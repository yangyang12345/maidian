@extends('front/base_template/dashboard')
@section('content')
    

    <div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/hero_bg_2.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8 indexBanner" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">奇 妙 的  ●  商 机 创 意</h1>
            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Advertising media</p>
            <input type="text" placeholder="请输入您所需网店的关键字，商机即将呈现">

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section bg-light" id="section-services">
      <div class="container">
        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">今日好店</h2>
            <p class="color-black-opacity-5">为您甄选优质店铺</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 recommendStore" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-plane"></span></div>
              <div>
                <h3>江浙沪地区淘宝4钻食品保健企业店铺不过户</h3>
                <ul class="ul-check list-unstyled success">
                  <li>主营类目：食品</li>
                  <li>店铺类型：企业店</li>
                  <li>信誉等级：4钻</li>
                  <li>所在地区：江浙沪地区</li>
                </ul>
                <input type="submit" value="马上咨询" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 recommendStore" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-boat-ship"></span></div>
              <div>
                <h3>华北地区淘宝5钻服饰箱包店铺，资料齐全</h3>
                <ul class="ul-check list-unstyled success">
                  <li>主营类目：服饰</li>
                  <li>店铺类型：待升级企业店</li>
                  <li>信誉等级：5钻</li>
                  <li>所在地区：华北地区</li>
                </ul>
                <input type="submit" value="马上咨询" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 recommendStore" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-truck"></span></div>
              <div>
                <h3>东北地区淘宝两皇冠食品保健，诚意出售</h3>
                <ul class="ul-check list-unstyled success">
                  <li>主营类目：食品</li>
                  <li>店铺类型：待升级企业店</li>
                  <li>信誉等级：2皇冠</li>
                  <li>所在地区：东北地区</li>
                </ul>
                <input type="submit" value="马上咨询" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 recommendStore" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-warehouse"></span></div>
              <div>
                <h3>华北地区服饰天猫旗舰店出售，无扣分，动态飘红，欢迎咨询</h3>
                <ul class="ul-check list-unstyled success">
                  <li>主营类目：服饰</li>
                  <li>商城类型：旗舰店</li>
                  <li>商标类型：R商标</li>
                  <li>所在地区：华北地区</li>
                </ul>
                <input type="submit" value="马上咨询" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 recommendStore" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-wooden"></span></div>
              <div>
                <h3>华南地区智能追踪器旗舰店新店，诚意出售</h3>
                <ul class="ul-check list-unstyled success">
                  <li>主营类目：3C数码类</li>
                  <li>商城类型：--</li>
                  <li>商标类型：2皇冠</li>
                  <li>所在地区：华南地区</li>
                </ul>
                <input type="submit" value="马上咨询" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 recommendStore" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-worldwide"></span></div>
              <div>
                <h3>江浙沪地区，金华墙纸</h3>
                <ul class="ul-check list-unstyled success">
                  <li>主营类目：家装家饰</li>
                  <li>商城类型：--</li>
                  <li>商标类型：授权</li>
                  <li>所在地区：江浙沪地区</li>
                </ul>
                <input type="submit" value="马上咨询" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  <div class="site-section bg-image overlay" style="background-image: url({{ asset('images/hero_bg_4.jpg') }});" id="section-how-it-works">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary" data-aos="fade">卖店聚焦</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <div class="how-it-work-item">
            <span class="number">1</span>
            <div class="how-it-work-body">
              <h2>注意事项</h2>
              <ul class="ul-check list-unstyled success">
                <a href="#"><li class="text-white">网店出售流程</li></a>
                <a href="#"><li class="text-white">转让后如何提现</li></a>
                <a href="#"><li class="text-white">网店卖出后怎么收款</li></a>
                <a href="#"><li class="text-white">网店出售后需要做什么</li></a>
                <a href="#"><li class="text-white">修改登记信息</li></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <div class="how-it-work-item">
            <span class="number">2</span>
            <div class="how-it-work-body">
              <h2>重点关注</h2>
              <ul class="ul-check list-unstyled success">
                <a href="#"><li class="text-white">卖店网和华为达成战略合作</li></a>
                <a href="#"><li class="text-white">卖店网在美国成功上市</li></a>
                <a href="#"><li class="text-white">卖店网成功进入全球500强企业</li></a>
                <a href="#"><li class="text-white">CEO兼董事长于总和特朗普会面</li></a>
                <a href="#"><li class="text-white">卖店网招聘公告</li></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
          <div class="how-it-work-item">
            <span class="number">3</span>
            <div class="how-it-work-body">
              <h2>新闻公告</h2>
              <ul class="ul-check list-unstyled success">
                <a href="#"><li class="text-white">每逢佳节“粽”思你</li></a>
                <a href="#"><li class="text-white">2019开工大吉！致所有追梦者的情书</li></a>
                <a href="#"><li class="text-white">麦淘网全新版本上线啦</li></a>
                <a href="#"><li class="text-white">麦淘网祝全体新老客户中秋快乐</li></a>
                <a href="#"><li class="text-white">元旦佳节，麦淘热情不打烊</li></a>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

    <div class="site-section block-13" id="section-industries">

      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">客服团队</h2>
            <p class="color-black-opacity-5">专业资深的客服团队在线为您解答问题.</p>
          </div>
        </div>
      </div>

      <div class="owl-carousel nonloop-block-13">
        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">董啦啦</h3>
              <p class="px-5">资深客服，拥有5年的客服经验，拥有98.9的好评率，擅长应对各种冲突</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">于啦啦</h3>
              <p class="px-5">资深客服，拥有5年的客服经验，拥有98.9的好评率，擅长应对各种冲突</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">嘻嘻嘻</h3>
              <p class="px-5">资深客服，拥有5年的客服经验，拥有98.9的好评率，擅长应对各种冲突</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">不知道</h3>
              <p class="px-5">资深客服，拥有5年的客服经验，拥有98.9的好评率，擅长应对各种冲突</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">说什么</h3>
              <p class="px-5">资深客服，拥有5年的客服经验，拥有98.9的好评率，擅长应对各种冲突</p>
            </div>
          </a>
        </div>


      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5 mr-auto">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure deserunt ut architecto dolores quo beatae laborum aliquam ipsam rem impedit obcaecati ea consequatur.</p>
              </div>
              
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="perCenter.html">个人中心</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>Copyright &copy; 2019.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  <!-- </div> -->

  </body>
  @endsection
