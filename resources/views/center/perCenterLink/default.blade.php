@extends('center/perCenter')
@section('center_content')

<div class="container">
    <h3 class="text-orange per-want-title"><img src="../images/balance.png" class="margin-right-10"/>账户余额</h3><br>
    <div class="row margin-bottom-30">
        <div class="mb-2 col-md-9 row">
            <div class=" mb-2 col-md-8" style="margin-top: 10px;">
                <div class=" mb-md-4 mb-1 perCenTruePrice">￥ 0 元</div>
                <div class=" mb-md-2 mb-1 text-orange-text">可用余额：0元</div>
                <div class=" mb-md-2 mb-1 text-orange-text">冻结金额：0元 <span class="text-red"><a href="freezeMoney.html">查看详情</a></span></div>
                <div class=" mb-md-2 mb-1 text-orange-text">账面不对？赶紧反馈吧</div>
            </div>
            <div class="mb-2 col-md-4" style="margin-top: 20px;">
                <div class="mb-2  mb-md-4 perCenTrueRecharge"><a href="rechargeMoney.html">充值</a></div>
                <div class="mb-2  mb-md-4 perCenTrueWithdraw"><a href="withdrawMoney.html">提现</a></div>
                <div class="mb-2  mb-md-4 perCenTrueIncome"><a href="detailMoney.html">收支</a></div>
            </div>
        </div>
        <div class=" mb-2 col-md-3">
            <a href="iWantSell.html">
                <div class="iWantSale">
                    <img src="../images/sale.png">
                    <div class="mb-2">我要出售</div>
                </div>
            </a>
            <a href="iPurchase.html">
                <div class="iWantSale">
                    <img src="../images/purchase.png">
                    <div class="mb-2">我要求购</div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="mb-2 col-md-3">
            <a href="iHaveSell.html">
                <div class="defaultBottom">
                    <img src="../images/sale-2.png">
                    <div class="mb-2">出售的网店</div>
                </div>
            </a>
        </div>
        <div class="mb-2 col-md-3">
            <a href="iHaveBuy.html">
                <div class="defaultBottom">
                    <img src="../images/purchase-2.png">
                    <div class="mb-2">购买的网店</div>
                </div>
            </a>
        </div>
        <div class="mb-2 col-md-3">
            <a href="rechargeMoney.html">
                <div class="defaultBottom">
                    <img src="../images/recharge.png">
                    <div class="mb-2">我要充值</div>
                </div>
            </a>
        </div>
        <div class="mb-2 col-md-3">
            <a href="iLike.html">
                <div class="defaultBottom">
                    <img src="../images/collect.png">
                    <div class="mb-2">我收藏的店铺</div>
                </div>
            </a>
        </div>
    </div>
</div>


@endsection
