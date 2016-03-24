<?php
   header('Content-Type: text/html; charset=UTF-8');
?>
<html>
  <head>
    <script src="//code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/locale/ja.js"></script>
    <title>ほげほげ</title>
  </head>
  <body>
    <div>
      <p>Hello, World!</p>
      <p>こんにちは</p>
    </div>
    <div>
      <p>
	このページを開いた日時（サーバーサイド）: <?php echo date('Y-m-d H:i:s P'); ?>
      </p>
    </div>
    <div>
      <p>
	このページを開いた日時（クライアントサイド）: <span id="ct"></span>
      </p>
    </div>
    <div>
      <p>
	現在の日時（クライアントサイド）: <span id="ct2"></span> [<span id="ct3"></span>]
      </p>
    </div>
    <script type="text/javascript">
      $(function(){

      function now() {
      	return moment().format('YYYY-MM-DD HH:mm:ss.SSS Z');
      };

      var t = now();
      $("#ct").text(t);
      $("#ct2").text(t);
      $("#ct3").text(0);

      var n = 0;
      setInterval(function() {
      	$("#ct2").text(now());
	$("#ct3").text(++n);
      }, 100);

      });
    </script>		
  </body>
</html>
