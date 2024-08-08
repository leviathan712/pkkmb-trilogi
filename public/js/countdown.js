
function updateCountdown() {
  const now = new Date().getTime();
  const countdownDate = new Date("August 30, 2024 00:00:00").getTime();
  const distance = countdownDate - now;

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("days").setAttribute('style', `--value:${days}`);
  document.getElementById("hours").setAttribute('style', `--value:${hours}`);
  document.getElementById("minutes").setAttribute('style', `--value:${minutes}`);
  document.getElementById("seconds").setAttribute('style', `--value:${seconds}`);

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("days").setAttribute('style', `--value:0`);
    document.getElementById("hours").setAttribute('style', `--value:0`);
    document.getElementById("minutes").setAttribute('style', `--value:0`);
    document.getElementById("seconds").setAttribute('style', `--value:0`);
  }
}

const x = setInterval(updateCountdown, 1000);