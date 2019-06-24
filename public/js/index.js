$(function(){
	//筛选条件单选点击事件
	$('.scholars-choose-box-forLine').on('click','.choose-content span',function(){
		var conn = $(this).text();
		var tit = $(this).siblings('em').text();


		if ($(this).hasClass("activeAddClass"))
			$(this).removeClass("activeAddClass");
		else {
			$(this).addClass("activeAddClass").siblings().removeClass("activeAddClass");
		}

		conn = tit +"："+conn;
		// var add = '<span class="tally">'+conn+'<i class="iconfont icon-guanbi">X</i></span>';
		$('.atp_choosed').fadeIn();
		// $('.atp_choosed .conn').append(add);
		// $(this).parent().parent().hide();
	});

	//筛选条件单选点击事件
	$('.cs-options').on('click','ul li',function(){
		var conn = $(this).text();
		var tit = $(this).siblings('em').text();
		if ($(this).hasClass("activeAddClass"))
			$(this).removeClass("activeAddClass");
		else {
			$(this).addClass("activeAddClass").siblings().removeClass("activeAddClass");
		}

		conn = tit +"："+conn;
		// var add = '<span class="tally">'+conn+'<i class="iconfont icon-guanbi">X</i></span>';
		$('.atp_choosed').fadeIn();
		$('.atp_choosed .conn').append(add);
		// $(this).parent().parent().hide();
	});


	//更多中单机选择事件
	$('.scholars-recommend-content').on('click','.seemorebox li',function(){
		var conn = $(this).text();
		var tit = $(this).parent().siblings('.title').text();
		conn = tit+"："+conn;
		var add = '<span class="tally">'+conn+'<i class="iconfont icon-guanbi">X</i></span>';		
		$('.atp_choosed').fadeIn();
		$('.atp_choosed .conn').append(add);
		if ($(this).hasClass("activeAddClass"))
			$(this).removeClass("activeAddClass");
		else {
			$(this).addClass("activeAddClass").siblings().removeClass("activeAddClass");
		}
		$(this).parent().parent().siblings('.sch-moreChoose').children(" img").attr('src','./images/more.png');
		$(this).parent().parent().hide();
		$(this).parent().parent().siblings('.choose-content').show();
		// $(this).parent().parent().parent().hide();
	});

	$('.scholars-choose-box').on('click','.sch-moreChoose',function(){
		if($('.sch-moreChoose img').attr('src')=='./images/more.png'){
			$('.sch-moreChoose img').attr('src','./images/close.png');
			$(this).siblings('.seemorebox').show();
			$(this).siblings('.choose-content').hide();
		}else{
			$('.sch-moreChoose img').attr('src','./images/more.png');
			$(this).siblings('.seemorebox').hide();
			$(this).siblings('.choose-content').show();
		}
	});




	//多选确定
	$('.scholars-choose-box.scholars-choose-box2').on('click','.sure',function(){
		var conn = $(this).parent().parent().siblings('.title').text();
		conn = conn+'：';
		$(this).parent().parent().siblings('ul').find('li').each(function(){
			if($(this).find('input').prop('checked')==true){
				conn+=$(this).text()+'、';
			}
		});
		
		var tolength = $(this).parent().parent().siblings('ul').find('li').length;
		conn=conn.substring(0,conn.length-1);
		$('.atp_choosed').fadeIn();
		var add = '<span class="tally">'+conn+'<i class="iconfont icon-guanbi">X</i></span>';
		$('.atp_choosed .conn').append(add);
		$(this).parent().parent().parent().parent().hide();		

	});
	//多选取消
	$('.scholars-choose-box.scholars-choose-box2').on('click','.false',function(){
		$(this).parent().parent().parent().parent().hide();
		$(this).parent().parent().parent().parent().siblings('.default-box').show();
	});
	//删除选项
	$('.atp_choosed').on('click','.icon-guanbi',function(){		
		var choosetit = $(this).parent().text().split('：')[0];
		console.log(choosetit);
		var index = 0;
		switch(choosetit){
			case '区域':
				index = 0;
				break;
			case '类目':
				index = 1;
				break;
			case '价格':
				index = 2;
				break;
			default:
				index = 3;

		}
		$(this).parent().remove();
		$('.att-choose').eq(index).children('.default-box').show();
		if($('.atp_choosed').find('.conn').html()==''){
			$('.atp_choosed').hide();
		}
		
	});
	
})
