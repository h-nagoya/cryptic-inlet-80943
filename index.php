<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="//code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/locale/ja.js"></script>
    <title>ほげほげ</title>
    <style>
      .b td {
         border: solid 1px #000000;
         border-collapse: collapse;
         padding: 0.5em;
      }
</style>
  </head>
  <body>

    <table class="b">
      <tr>
	<td>このページを開いた日時（サーバーサイド）</td>
	<td> <?php echo date('Y-m-d H:i:s P'); ?></td>
      </tr>
      <tr>
	<td>このページを開いた日時（クライアントサイド）</td>
	<td><span id="ct1"></span></td>
      </tr>
      <tr>
	<td>現在の日時（クライアントサイド） </td>
	<td><span id="ct2"></span></td>
      </tr>
      <tr>
	<td>現在の日時（サーバーサイド）</td>
	<td><span id="ct3"></span></td>
      </tr>
      <tr>
	<td>uptime（サーバーサイド） </td>
	<td><span id="ct4"></span></td>
      </tr>
    </table>

    <script type="text/javascript">
    $(function(){
	function now() {
	    return moment().format('YYYY-MM-DD HH:mm:ss.SSS Z');
	};
	function update() {
	    $.get('/uptime.php', function(data){$("#ct4").text(data);});
	    $.get('/now.php', function(data){$("#ct3").text(data);});
	    $("#ct2").text(now());
	};
        update();
	$("#ct1").text(now());
	setInterval(update, 1000);
    });
    </script>
  </body>
</html>
