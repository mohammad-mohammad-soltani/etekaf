import './bootstrap';
const countdownEl = document.getElementById('countdown');

// ⏰ زمان هدف: 22 دسامبر ساعت 01:00 بامداد
const targetTime = new Date();
targetTime.setMonth(11); // دسامبر (0-based)
targetTime.setDate(22);
targetTime.setHours(1, 0, 0, 0);

function updateCountdown() {
    const now = new Date();
    let diff = targetTime - now;

    if (diff <= 0) {
        countdownEl.innerText = '⏰ ثبت‌نام آغاز شد';
        clearInterval(timer);
        return;
    }

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((diff / (1000 * 60)) % 60);
    const seconds = Math.floor((diff / 1000) % 60);

    countdownEl.innerText =
        `${days} روز ${hours} ساعت ${minutes} دقیقه ${seconds} ثانیه`;
}


updateCountdown();
const timer = setInterval(updateCountdown, 1000);
