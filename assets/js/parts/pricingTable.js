
export default function () {

	// tables (Obj)
	let tables = document.querySelectorAll('.starter , .basic , .business');

	if (tables.length > 0) {
		console.log('true');

		console.log('table length: ' + tables.length);

		for (let i=0 ; i < tables.length; i++) {
			console.log( 'na' + i);

			tables[i].addEventListener('mouseenter', () => {
				tables[i].classList.add('showBTN');
				console.log('Showie');
			})

			tables[i].addEventListener('mouseleave', () => {
				tables[i].classList.remove('showBTN');
				console.log('Showie');
			})
		}
	}
}