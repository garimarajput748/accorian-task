
function startCountdown(countDownDate) {
var x = setInterval(function() {
var now = new Date().getTime();
var distance = countDownDate - now;

var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

document.getElementById("countday").innerHTML = days;

document.getElementById("counthour").innerHTML = hours;

document.getElementById("countmin").innerHTML = minutes;

document.getElementById("countsec").innerHTML = seconds;

if (distance < 0) {
clearInterval(x);
document.getElementById("countexpired").innerHTML = "EXPIRED";
}
}, 1000);
}

// Usage
const countDownDate = new Date("Mar 24, 2024 18:30:25").getTime();
startCountdown(countDownDate);
