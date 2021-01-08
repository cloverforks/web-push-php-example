<html>
<head>
 <meta charset="UTF-8">
 </head>
<body>
<h1>Web Push talk @PWA Paris #2</h1>
<button id="push-subscription-button">Push notifications !</button>
<button id="send-push-button">Send a push notification</button>
<button id="test" onclick="test()">-----test-----</button>
<br><br><br>
<textarea id="result" cols="80" rows="5"></textarea>
<script type="text/javascript" src="app.php"></script>
<script>
    function test() {
        if (window.Notification && Notification.permission !== "denied") {
            Notification.requestPermission(function (status) {
                var n = new Notification('测试标题', {body: '你有新短消息！'});
            });
        }

    }
</script>
</body>
</html>
