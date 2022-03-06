/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js');
   
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/

firebase.initializeApp({
    apiKey: "AIzaSyB66WGaMWofx1w1Xql8qN-82fosVF49QMQ",
    authDomain: "myproject-a64c6.firebaseapp.com",
    projectId: "myproject-a64c6",
    storageBucket: "myproject-a64c6.appspot.com",
    messagingSenderId: "763371665100",
    appId: "1:763371665100:web:0df03f7cb93d2f071d3469",
    measurementId: "G-7Z70N28BJL"
    });
  
/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
    /* Customize notification here */
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };
  
    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});