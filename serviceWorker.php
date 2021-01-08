<?php header("content-type: application/javascript; charset=utf-8"); ?>
self.addEventListener('push', function (event) {
    if (!(self.Notification && self.Notification.permission === 'granted')) {
        return;
    }

    const sendNotification = body => {
        // you could refresh a notification badge here with postMessage API
        const title = "Web Push example";
        const data = event.data.json();

        event.waitUntil(
            self.registration.showNotification(title, {
                data,
                body: data.body,
            })
        );
    };

    if (event.data) {
        const message = event.data.text();
        event.waitUntil(sendNotification(message));
    }
});

self.addEventListener('notificationclick', event => {
    event.notification.close();
    const {notification: {data}} = event;
    self.clients.openWindow(`/?query=${data.body}`);
});
