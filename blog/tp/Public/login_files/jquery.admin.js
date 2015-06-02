$(document).ready(function(){

    $(document).on('click', '#form input[type=submit]', function(){
        admin.hide('#content', 100, function(form){
            $.post(form.attr('action'), form.serialize(), function(m){
                if(m.status){
                    $.facebox(m.info);
                }else{
                    $('#content').html(m);
                }
                admin.show('#content', 100);
            });
        }, $('#form'));
        return false;
    })

    $(document).on('click','.table a',function(){
        admin.hide('#content', 100, function($this){
            $.post($this.attr('href'),function(m){
                if(m.status){
                    $.facebox(m.info);
                }else{
                    $('#content').html(m);
                }
                admin.show('#content', 100);
            });
        }, $(this));
        return false;
    });

    // 分页按钮
	$('#content').on('click','.pagination li a',function(){
        admin.hide('#content', 100, function($this){
            $.get($this.attr('href'),function(m){
                $('#content').html(m)
                admin.show('#content', 100);
            });
        }, $(this));
		return false;
	});
	//左侧菜单按钮
	$('#menu').on('click','li a',function(){
		$('#menu .active').removeClass('active');
        $(this).parent().addClass('active');
        admin.hide('#content', 100, function($this){
            $.get($this.attr('href'),function(m){
                $('#content').html(m);
                admin.show('#content', 100);
            });
        }, $(this));
		return false;
	});
	//顶部导航按钮
	$('#nav').on('click','li a',function(){
		$('#nav .active').removeClass('active');
		$(this).parent().addClass('active');
		$.get($(this).attr('href'),function(m){
			$('#menu').html(m);
			$('#menu li a:first').click();
		});
		return false;
	});
	$('#nav li a:first').click(); //初始加载
});

var admin = (function(){
    return {
        show: function(name, time, callback, $this){
            $('#loading').fadeOut(function(){
                if(callback === undefined){
                    $(name).fadeIn(time);
                }else{
                    $(name).fadeIn(time, callback($this));
                }
            });
        },
        hide:function(name, time, callback, $this){
            $(name).fadeOut(time, function(){
                if(callback === undefined){
                    $('#loading').fadeIn();
                }else{
                    $('#loading').fadeIn(callback($this));
                }
            });
        }
    }
})();