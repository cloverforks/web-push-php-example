<html>
<body>
<h1>Web Push talk @PWA Paris #2</h1>
<button id="push-subscription-button">Push notifications !</button>
<button id="send-push-button">Send a push notification</button>
<button id="test" onclick="test()">Test</button><br><br><br>
<textarea id="result" cols="80" rows="5"></textarea>
<script type="text/javascript" src="app.php"></script>
<script>
    function test() {
        if (window.Notification && Notification.permission !== "denied") {
            Notification.requestPermission(function (status) {    // 请求权限
                if (status === 'granted') {
                    // 弹出一个通知
                    var n = new Notification('测试标题', {
                        body: '你有新短消息',
                        icon: 'launcher-icon.png'
                    });

                    //3秒后关闭通知
                    setTimeout(function () {
                        n.close();
                    }, 3000);
                }
            });
        }
    }
</script>
</body>
</html>
