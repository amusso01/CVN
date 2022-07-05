export default function hamburger() {
	const burger = document.getElementById("hamburger");
	const mainMenu = document.getElementById("menu_main");
	const menuOverlay = document.getElementById("menuOverlay");
	const htmlElement = document.querySelector("html");
	burger.addEventListener("click", function (e) {
		mainMenu.classList.toggle("s-open");
		menuOverlay.classList.toggle("s-open");
		burger.classList.toggle("is-active");

		// prevent content scrolling
		htmlElement.classList.toggle("noscroll");
	});
}
