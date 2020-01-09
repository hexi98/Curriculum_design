// 1.公共变量声明***********************************

var canvas = document.getElementById('canvas'),
	ctx = canvas.getContext('2d');
// 创建离屏对象
var offscreenCanvas = document.createElement('canvas'),
    offscreenCtx = offscreenCanvas.getContext('2d');

var iWidth = canvas.width,
    iHeight = canvas.height;

var img = new Image();

//设置图片的位置大小
var PICTURE_LEFT = 80,
    PICTURE_TOP = 50,
    PICTURE_WIDTH = 300,
    PICTURE_HEIGHT = 300;
var i=1;

 //绘制器
picturePainter = new ImagePainter('../image/teach/p-1.jpg'),
pictureNoFusePainter = new ImagePainter('../image/teach/p-4.jpg'),
pictureContinuePainters = [],

//创建 图片连续播放 精灵动画制作器
    pictureContinueAnimator = new SpriteAnimator(
            pictureContinuePainters,//绘制器
            function () { picture.painter = pictureNoFusePainter; });
//创建 图片 精灵
    picture = new Sprite('picture', picturePainter);
var lastAdvance1=0;

 //2.函数定义 *****************************************

 //播放精灵
function photoPlay (e) {
  if (picture.animating) 
      return; 
   pictureContinueAnimator.start(picture, 6000); 
 };

 requestNextAnimationFrame(animate);

 //播放机器人图片
function animate(now) {
   ctx.clearRect(0,0,canvas.width,canvas.height);
   picture.paint(ctx);
   // now - lastAdvance1 表示当前时间与开始播放的时间间隔
   if(now - lastAdvance1 <10000)
   requestNextAnimationFrame(animate);
   //如果超过这段时间，则调用picture1 进入下一个播放环节
 else {
setTimeout(photoPlay, 5000);
 	// photoPlay();
  // requestNextAnimationFrame (picture1);
 }
}

// Initialization................................................


requestNextAnimationFrame(animate);

picture.left = PICTURE_LEFT;
picture.top = PICTURE_TOP;
picture.width = PICTURE_WIDTH;
picture.height = PICTURE_HEIGHT;
// var i=1;
for (var i=1; i <=4; ++i) {
   pictureContinuePainters.push( new ImagePainter('../image/teach/p-' + i + '.jpg'));
}

setTimeout(photoPlay, 2000);
