
$(".list").hover(function(){
			$(this).find("ul").show();
		},function(){
			$(this).find("ul").hide();
		});

//index主体特特效

$(".level-item").hover(function(){
       var index=$(".level-item").index(this);
       console.log(index)
       $(".second-menu").hide().eq(index).fadeIn();
       $(".second-menu").eq(index).css({
         top:-index*51+"px"

       })

},function(){$(".second-menu").fadeOut()});

//主体的Flash动画效果部分

//参数：执行动画的时间
function img(s){
  $("#imgs").animate({"left":"-738px"},s,function(){
      //当动画执行完 把第一张图片放到最后
      $(".img:first").appendTo("#imgs");
      //把定位的left值，设置为0
      $("#imgs").css("left","0px");
      //执行后1000后再继续执行代码
      $("#imgs").delay(2500);
      //再调用滚动函数
      img(2500);
  })
}
img(2500);

// //鼠标放上去动画停止
// $("#imgs").mouseover(function(){
//   $("#imgs").stop(true);
// });
// img(2500);

// //鼠标移除时继续动画
// $("#imgs").mouseout(function(){
//   //计算本次动画需要的时间
//   var left = parseFloat($("#imgs").get(0).style.left);
//   var s = (738-Math.abs(left)) / 738 * 2000;
//   //alert(s)
//   img(s);
// })
