function nyanAnim(){
    var nyan = document.getElementById('nyan');
    var f1 = document.getElementById('f1');
    var f2 = document.getElementById('f2');
    var f3 = document.getElementById('f3');
    var f4 = document.getElementById('f4');
    var f5 = document.getElementById('f5');
    var wow = document.getElementById('wow');
    nyan.classList.add('nyanAnim');
    f1.classList.add('f1');
    f2.classList.add('f2');
    f3.classList.add('f3');
    f4.classList.add('f4');
    f5.classList.add('f5');
    wow.classList.add('wowAnim');
}
function kirbyAnim(){
    var kirby = document.getElementById('kirby');
    var kirby0 = document.getElementById('kirby0');
    var github = document.getElementById('github');
    github.classList.add('githubAnim');
    kirby.classList.add('kirbyAnim');
    kirby0.style.opacity = 0;
}