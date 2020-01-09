// <script>
    //跑动的次数
    var count = 0;
    //动画的执行方向
    var isgo = false;
    //定义计时器对象
    var timer;

    window.onload = function () {
        /*获取ul元素*/
        var ul_img = document.getElementsByClassName("ul_img")[0];
        //获取所有的li图片元素
        var li_img = document.getElementsByClassName("li_img");
        //获取控制方向的箭头元素
        var arrow = document.getElementsByClassName("arrow");
        //获取所有按钮元素
        var div_btn = document.getElementsByClassName("div_btn");
        div_btn[0].style.backgroundColor = "aqua";


        /*定义计时器，控制图片移动*/
        showtime();
        function showtime() {
            timer = setInterval(function () {
                if (isgo == false) {
                    count++;
                    //控制ul中的图片整体向左推移800px的距离，让第二张图片进入到显示容器中。
                    // 剩余图片隐藏
                    ul_img.style.transform = "translate(" + -800 * count + "px)";
                    // 图片显示完后，禁止count的自增
                    // 同时改变isgo的值，让轮播图开始反向滚动
                    if (count >= li_img.length - 1) {
                        count = li_img.length - 1;
                        isgo = true;
                    }
                }
                // 轮播图反向滚动
                else {
                    count--;
                    ul_img.style.transform = "translate(" + -800 * count + "px)";
                    if (count <= 0) {
                        count = 0;
                        isgo = false;
                    }
                }

                for (var i = 0; i < div_btn.length; i++) {
                    div_btn[i].style.backgroundColor = "aquamarine";
                }

                div_btn[count].style.backgroundColor = "aqua";

            }, 3000)
        }

        /*鼠标进入左右方向键操作*/
        for (var i = 0; i < arrow.length; i++) {
            //鼠标悬停时，利用clearInteral()来终止定时器
            arrow[i].onmouseover = function () {
                //停止计时器
                clearInterval(timer);
            }
            //鼠标离开时
            arrow[i].onmouseout = function () {
                //添加计时器
                showtime();
            }
            // 按动方向键，触发事件
            arrow[i].onclick = function () {
                //用title值区分左右
                if (this.title == 0) {
                    // 右方向
                    count++;
                    // 返回第一张图片
                    if (count > 3) {
                        count = 0;
                    }
                }
                else {
                    // 左方向
                    count--;
                    // 转移到最后一张图片
                    if (count < 0) {
                        count = 3;
                    }
                }
                // 移动图片
                ul_img.style.transform = "translate(" + -800 * count + "px)";
                // 修改底部按钮的颜色
                for (var i = 0; i < div_btn.length; i++) {
                    div_btn[i].style.backgroundColor = "aquamarine";
                }
                div_btn[count].style.backgroundColor = "aqua";
            }
        }

        //鼠标悬停在底部按钮的操作
        for (var b = 0; b < div_btn.length; b++) {
            // 循环绑定
            div_btn[b].index = b;
            // 鼠标悬停事件
            div_btn[b].onmouseover = function () {
                // 暂停计时器
                clearInterval(timer);
                // 更改按钮颜色
                for (var a = 0; a < div_btn.length; a++) {
                    div_btn[a].style.backgroundColor = "aquamarine";
                }
                div_btn[this.index].style.backgroundColor = "aqua";
                //让count值对应
                //为了控制方向
                if (this.index == 3) {
                    isgo = true;
                }
                if (this.index == 0) {
                    isgo = false;
                }
                count = this.index;
                ul_img.style.transform = "translate(" + -800 * this.index + "px)";
            }
            // 鼠标离开事件
            div_btn[b].onmouseout = function () {
                //添加计时器
                showtime();
            }
        }
    }
// </script>