<head>
	<meta charset="UTF-8">
	<title>sample menu</title>
	<link rel="stylesheet" href="style.css">
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
  $('.global-nav li a').each(function(){ // eachは繰り返し関数
    var $href = $(this).attr('href');　//aタグhrefを取得

    var $url = location.href;

console.log($href);
console.log($url);

    if(location.href.match($href)) {  //現在のページのＵＲＬとhrefが含まれているかを判断（だから/ だとできなかったのか）
      $(this).parent().addClass('current');　//合致する場合はclassを追加
    } else {
      $(this).parent().removeClass('current');　//しない場合はclass削除
    }

  });
});

</script>

</head>