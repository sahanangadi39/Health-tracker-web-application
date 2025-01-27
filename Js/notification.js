let close = 1;

function notification() {


   let notifications = document.getElementById('notification-panel');



   if (close) {
      notifications.style.animation = 'notificationopen 0.6s ease-in forwards';
      close = 0;
   } else {
      notifications.style.animation = 'notificationclose 0.6s ease-in forwards';
      close = 1;
   }


   //  notifications.style.animation = 'notificationclose 1s ease-out forwards';






}