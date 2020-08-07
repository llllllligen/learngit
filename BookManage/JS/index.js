var leftBar = document.querySelectorAll('.left ul li');
var subPage = document.querySelector('.subPage');

console.log(subPage);
leftBar[0].onclick = function(){
    subPage.src = "./searchBook.html";
}
leftBar[1].onclick = function(){
    subPage.src = "./addBook.html";
}
leftBar[2].onclick = function(){
    subPage.src = "./removeBook.html";
}
leftBar[3].onclick = function(){
    subPage.src = "./editBook.html";
}