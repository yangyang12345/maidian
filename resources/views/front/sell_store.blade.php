@extends('front/base_template/dashboard')
@section('content')


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5 container-row-center">

            <form action="#" class="p-5 bg-white setBorderR">

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black">请选择您的店铺出售类型：</label><br/>
<!--                  <input type="email" id="chooseType" class="form-control">-->

                  <label class="text-black-sell"><input type="radio" name="radio"  value="天猫商城"><i>✓</i>天猫商城</label>
                  <label class="text-black-sell"><input type="radio" name="radio"  value="淘宝网店"><i>✓</i>淘宝网店</label>
                  <label class="text-black-sell"><input type="radio" name="radio"  value="其他网店"><i>✓</i>其他网店</label>

                </div>
              </div>


              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="address">请填写您的网店地址</label>
                  <input type="email" id="address" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="ID">请填写您的旺旺号</label>
                  <input type="subject" id="ID" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="phone">请填写您的手机号</label>
                  <input type="subject" id="phone" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="qqNum">请填写您的QQ号</label>
                  <input type="subject" id="qqNum" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="马上提交" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">

            <div class="p-4 mb-3 bg-white serviceImg">

              <img src="images/service.png">

            </div>

            <div class="p-4 mb-3 bg-white setBorderR">
              <h3 class="h5 text-black mb-3 ">更多信息</h3>
              <p>留下您的联系方式和店铺信息，我们的客服会对店铺进行评估后立刻联系您您也可以直接咨询在线客服，我们将提供一对一的挂售服务</p>
              <input type="submit" value="咨询客服" class="btn btn-primary py-2 px-4 text-white">
            </div>

          </div>
        </div>
      </div>
    </div>
    
  </div>

@endsection