var func=function (i) {
            $("img").attr("src","img/img_0"+i+".png" );
            // $('slider-item')[i-1].attr('color','blue');
    // $('.slider-item').eq(i).css('color','red')
    //由红色变成蓝色
    console.log($('.slider-item').eq(i-1).css('color','blue'));
    //有了新的蓝色,旧的蓝色得变回红色
      //不处理,可以越界
        $('.slider-item').eq(i-2).css('color','red');
}
//设置一个定时器  不停的修改src
var d =1;
$('.slider-item').eq(0).css('color','blue');//初始化
setInterval(function () {
    func(d);
    d++;
    if (d==6){
        d=1;
    }
} ,1000);

