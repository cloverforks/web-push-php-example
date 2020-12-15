self.addEventListener('push', function (event) {
    if (!(self.Notification && self.Notification.permission === 'granted')) {
        return;
    }

    const sendNotification = body => {
        // you could refresh a notification badge here with postMessage API
        const title = "Web Push example";
        const data = event.data.json();

        return self.registration.showNotification(title, {
            data,
            body: data.body,
            icon: '/src/launcher-icon.png'
        })

        // return self.registration.showNotification(title, {
        //     body,
        // });
    };

    if (event.data) {
        const message = event.data.text();
        event.waitUntil(sendNotification(message));
    }
});
