export default function () {

	let Button = document.querySelector('.anfrage');
	let getAllFormWraps = document.querySelectorAll('.formWrap');
	let FormBox = document.querySelector('.formBox');
	let close = document.querySelector('.close');


	Button.addEventListener('click', function () {
		getAllFormWraps[0].classList.toggle('hide');

	});

	document.addEventListener('click', function (e) {
		if (e.target === getAllFormWraps[0] || e.target === close) {
			getAllFormWraps[0].classList.add('hide');
		}
	});
}