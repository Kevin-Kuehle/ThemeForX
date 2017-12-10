// default Function
export default function () {


	let button = document.querySelectorAll('.nav-botton');
	let wrapElement = document.querySelectorAll('.canvasWrap');
	let mobileNav = document.querySelector('.mobile-nav');
	let topBar = document.querySelector('.topBar');
	let offsetTarget = document.querySelector('body');

	//=============================================================================================================================================================================================
	// add click event on mobile Nav-Button by click toggle class to >mobileNav<
	button[0].addEventListener('click', () => {

		wrapElement[0].classList.toggle('slide');
		mobileNav.classList.toggle('show');

	});

	//=============================================================================================================================================================================================
	// get a target often topBar and add class by scrolling down of height from target
	document.addEventListener('scroll', () => {
		let scrollTop = window.scrollY;
		let triggerHeight = topBar.clientHeight;

		if (scrollTop >= triggerHeight) {
			topBar.classList.add('sticky');
			offsetTarget.style.marginTop = triggerHeight + "px";
		} else if (scrollTop === 0) {
			topBar.classList.remove('sticky');
			offsetTarget.style.marginTop = '';
		}
	})
	//=================================================================================================================================================================================================
};