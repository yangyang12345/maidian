$(" .form-control").click( function(event){
    var chooseWay = $("#chooseTestWay").find("option:selected").text();
    if( chooseWay === "密保问题验证"){
        $("#way1").show();
        $("#way2").show();
        $("#way3").hide();
    }else if( chooseWay === "原支付密码验证"){
        $("#way1").hide();
        $("#way2").hide();
        $("#way3").show();
    }
} );

$(".sellerImg").mouseover(function(){
    $(".sellerImg img").attr("src", "images/seller-selected.png");
    $(".buyerImg img").attr("src", "images/buyer.png");
    $(".moneyImg img").attr("src", "images/money.png");
    $(".personalImg img").attr("src", "images/personal.png");
    $(".adviceImg img").attr("src", "images/advice.png");
});
$(".buyerImg").mouseover(function(){
    $(".sellerImg img").attr("src", "images/seller.png");
    $(".buyerImg img").attr("src", "images/buyer-selected.png");
    $(".moneyImg img").attr("src", "images/money.png");
    $(".personalImg img").attr("src", "images/personal.png");
    $(".adviceImg img").attr("src", "images/advice.png");
});
$(".moneyImg").mouseover(function(){
    $(".sellerImg img").attr("src", "images/seller.png");
    $(".buyerImg img").attr("src", "images/buyer.png");
    $(".moneyImg img").attr("src", "images/money-selected.png");
    $(".personalImg img").attr("src", "images/personal.png");
    $(".adviceImg img").attr("src", "images/advice.png");
});
$(".personalImg").mouseover(function(){
    $(".sellerImg img").attr("src", "images/seller.png");
    $(".buyerImg img").attr("src", "images/buyer.png");
    $(".moneyImg img").attr("src", "images/money.png");
    $(".personalImg img").attr("src", "images/personal-selected.png");
    $(".adviceImg img").attr("src", "images/advice.png");
});
$(".adviceImg").mouseover(function(){
    $(".sellerImg img").attr("src", "images/seller.png");
    $(".buyerImg img").attr("src", "images/buyer.png");
    $(".moneyImg img").attr("src", "images/money.png");
    $(".personalImg img").attr("src", "images/personal.png");
    $(".adviceImg img").attr("src", "images/advice-selected.png");
});


// $(".sellerImg").mouseout(function(){
//     $(".sellerImg img").attr("src", "images/seller.png");
// });

$(".sellerImg").click(function(){
    $(".sellerImg img").attr("src", "images/seller-selected.png");
});
