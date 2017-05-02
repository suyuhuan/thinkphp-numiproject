
		$(".more").toggle(function(){
			$(".hidden-ul").show();
			//$(".ico-more").css("background","url('./images/detail_old_z_154793c.png'),");
			$(".ico-more").css("background-position","-61px -585px");
		},function(){
			$(".hidden-ul").hide();
			//$(".ico-more").css("background","url('./images/detail_old_z_154793c.png')");
			$(".ico-more").css("background-position","-61px -567px");
		})
		//购物
		function decr(obj){
			
			num=$(obj).next().val();
			
			if(num!=1){
				num--;
				$(obj).next().val(num);
			}
		}
		function add(obj){
			num=$(obj).prev().val();

			num++;
			$(obj).prev().val(num);
		}
