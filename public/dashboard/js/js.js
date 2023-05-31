navStatus = false;
window.toggleNav = () => {
    navStatus = !navStatus;
    document.querySelector(".sidebar-offcanvas").style.right = navStatus ? "-3%": "-270px";
}