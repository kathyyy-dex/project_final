let d = new Date();
document.body.innerHTML = "<h1>Today's date is " + d + "</h1>";

let d = new Date();
let hour = d.getHours();

if (hour < 12) {
  document.body.innerHTML += "<p>Good morning!</p>";
} else if (hour < 18) {
  document.body.innerHTML += "<p>Good afternoon!</p>";
} else {
  document.body.innerHTML += "<p>Good evening!</p>";
}