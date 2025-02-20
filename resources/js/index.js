const menu = document.getElementById('menuDiv');
const menuElement = [];

function navigationMenu() {

    for (let i = 0; i < 5; i++) {
        const button = document.createElement("div");
        menuElement.push(button);
    }

    menuElement[0].innerHTML = '<a href="/resources/views/home.blade.php">Home page</a>';
    menuElement[1].innerHTML = '<a href="/resources/views/about_me.blade.php">About me</a>';
    menuElement[2].innerHTML = '<a href="/resources/views/faq.blade.php">FAQ</a>';
    menuElement[4].innerHTML = '<a href="/resources/views/dashboard.blade.php">Dashboard</a>';
    menuElement[5].innerHTML = '<a href="/resources/views/blog_home.blade.php">Blog</a>'

    for (const element in menuElement) {
        menu.appendChild(element);
    }
}
