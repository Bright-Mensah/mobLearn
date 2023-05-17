// <<<<<<< HEAD
let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);

    if(pos > 70) {
        scrollProgress.style.display = "grid";
    } else{
        scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(#ffccfb ${scrollValue}%, #d7d7d7 ${scrollValue}% )`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;


// start learning button
$('#btnStartLearning').click(function(){
    window.location.href="http://localhost/moblearn/login.php";
})

// login button
$('#btnLogin').click(function(){
    window.location.href="http://localhost/moblearn/login.php";
})

// sign up button
$('#btnSignUp').click(function(){
    window.location.href="http://localhost/moblearn/signUp.php";
})
// >>>>>>> a9a55b66580d7bb7ca7f35815265b165f89dc1c8
