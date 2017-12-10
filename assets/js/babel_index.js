import register_mobile_nav from './parts/mobile-nav';
import register_slider from './parts/slider';
import register_pricingTable from './parts/pricingTable';

document.addEventListener('DOMContentLoaded', () => {

	register_slider();
	register_mobile_nav();
	register_pricingTable();

});