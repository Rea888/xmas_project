
// Set the date we're counting down to
var countDownDate = new Date("Dec 24, 2022 20:30:00").getTime();

// Update the count-down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count-down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "D " + hours + "H "
        + minutes + "m " + seconds + "s ";


    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        const element = document.getElementById("demo");
        element.innerHTML = "<a href= 'introduction'>Let's get started! </a>";

    }
}, 1000);
