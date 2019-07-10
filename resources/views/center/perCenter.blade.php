
@extends('front/base_template/dashboard')
@push('common-css')
    <link rel="stylesheet" href="{{ asset("/css/perCentermain.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/perCenterstyle.css")}}">
@endpush
@section('content')
<div class="perCenterContainer">
    <div id="wrapper" class="perCenterWrapper wrapShow">
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li >
                            <a href="javascript:;" class="nav-togg sellerImg"> <img src="{{ asset('images/seller.png') }}" class="margin-right-10"/><span>我是卖家</span> </a>
                            <div>
                                <ul>
                                    <li class="perCenterNavFont"><a href="{{ route('center.iwantsell') }}" class="iframe_link widthAll"><span>我要出售</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iHaveSell.html" target="_blank" class="iframe_link widthAll"><span>我出售的店铺</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;" class="nav-togg buyerImg"> <img src="{{ asset('images/buyer.png') }}"  class="margin-right-10"/><span>我是买家</span> </a>
                            <div>
                                <ul>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iPurchase.html" target="_blank" class="iframe_link widthAll"><span>我要收购</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/seekToBuy.html" target="_blank" class="iframe_link widthAll"><span>我的求购信息</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iHaveBuy.html" target="_blank" class="iframe_link widthAll"><span>我购买的网店</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iLike.html" target="_blank" class="iframe_link widthAll"><span>我收藏的网店</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;" class="nav-togg moneyImg"> <img src="{{ asset('images/money.png') }}" class="margin-right-10 "/><span>资金管理</span> </a>
                            <div>
                                <ul>
                                    <li class="perCenterNavFont"><a href="perCenterLink/rechargeMoney.html" target="_blank" class="iframe_link widthAll"><span>我要充值</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iWantWithdraw.html" target="_blank" class="iframe_link widthAll"><span>我要提现</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/rechargeRecord.html" target="_blank" class="iframe_link widthAll"><span>充值记录</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/withdrawMoney.html" target="_blank" class="iframe_link widthAll"><span>提现记录</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/detailMoney.html" target="_blank" class="iframe_link widthAll"><span>收支明细</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/freezeMoney.html" target="_blank" class="iframe_link widthAll"><span>资金冻结记录</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iGotPrize.html" target="_blank" class="iframe_link widthAll"><span>奖品查询</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;" class="nav-togg personalImg"> <img src="{{ asset('images/personal.png') }}" class="margin-right-10 "/><span>我的信息</span> </a>
                            <div>
                                <ul>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iPartTimeJob.html" target="_blank" class="iframe_link widthAll"><span>我代理的兼职店铺</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iDentity.html" target="_blank" class="iframe_link widthAll"><span>实名认证</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/modifyKeyPro.html" target="_blank" class="iframe_link widthAll"><span>修改密码保护</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/changeLogKey.html" target="_blank" class="iframe_link widthAll"><span>设置登录密码</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/setPayKey.html" target="_blank" class="iframe_link widthAll"><span>设置支付密码</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/forgotPayKey.html" target="_blank" class="iframe_link widthAll"><span>找回支付密码</span></a></li>
                                    <!--<li class="perCenterNavFont"><a href="link/2/index.html" target="_blank" class="iframe_link"><span>设置银行账户</span></a></li>-->
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;" class="nav-togg adviceImg"> <img src="{{ asset('images/advice.png') }}" class="margin-right-10 "/><span>咨询建议</span> </a>
                            <div>
                                <ul>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iWantAsk.html" target="_blank" class="iframe_link"><span>我要提问</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iWantAdvice.html" target="_blank" class="iframe_link"><span>我要建议</span></a></li>
                                    <li class="perCenterNavFont"><a href="perCenterLink/iWantComplain.html" target="_blank" class="iframe_link"><span>我要投诉</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main" style="width: 77%;">
            <div class="main-content">
                <div class="perCenterRight">
                    @yield('center_content')
                </div>
            </div>
        </div>
    </div>
</div>
@push('common-js')
<script src="{{ asset("/js/klorofil-common.js")}}"></script>
@endpush
@endsection