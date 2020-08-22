// JavaScript source code
var myDate = new Date();
var hrs = myDate.getHours();

var greet;
var greet_icon;
if (hrs < 12) {
    greet = 'Good Morning';
    greet_icon = 'morning';
}
else if (hrs >= 12 && hrs <= 16) {
    greet = 'Good Afternoon';
    greet_icon = 'afternoon';
}
else if (hrs >= 16 && hrs <= 24) {
    greet = 'Good Evening';
    greet_icon = 'evening';
}

document.getElementById('greet').innerHTML = '<img src="images/greeting/' + greet_icon + '.png" width="100"><br><b>' + greet +'</b>'