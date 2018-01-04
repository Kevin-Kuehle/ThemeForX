/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _mobileNav = __webpack_require__(1);

var _mobileNav2 = _interopRequireDefault(_mobileNav);

var _slider = __webpack_require__(2);

var _slider2 = _interopRequireDefault(_slider);

var _pricingTable = __webpack_require__(3);

var _pricingTable2 = _interopRequireDefault(_pricingTable);

var _formHandler = __webpack_require__(4);

var _formHandler2 = _interopRequireDefault(_formHandler);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

document.addEventListener('DOMContentLoaded', function () {

	(0, _slider2.default)();
	(0, _mobileNav2.default)();
	(0, _pricingTable2.default)();
	(0, _formHandler2.default)();
});

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {

	var button = document.querySelectorAll('.nav-button');
	var wrapElement = document.querySelectorAll('.canvasWrap');
	var mobileNav = document.querySelector('.mobile-nav');
	var topBar = document.querySelector('.topBar');
	var offsetTarget = document.querySelector('body');

	//=============================================================================================================================================================================================
	// add click event on mobile Nav-Button by click toggle class to >mobileNav<
	button[0].addEventListener('click', function () {

		wrapElement[0].classList.toggle('slide');
		mobileNav.classList.toggle('show');
	});

	//=============================================================================================================================================================================================
	// get a target often topBar and add class by scrolling down of height from target
	document.addEventListener('scroll', function () {
		var scrollTop = window.scrollY;
		var triggerHeight = topBar.clientHeight;

		if (scrollTop >= triggerHeight) {
			topBar.classList.add('sticky');
			offsetTarget.style.marginTop = triggerHeight + "px";
		} else if (scrollTop === 0) {
			topBar.classList.remove('sticky');
			offsetTarget.style.marginTop = '';
		}
	});
	//=================================================================================================================================================================================================
};

; // default Function

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {

	jQuery('.header-slider').slick({
		arrows: false,
		autoplay: true,
		speed: 200,
		autoplaySpeed: 7000,
		adaptiveHeight: false,
		dots: false,
		slidesToShow: 1
	});
};

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {

	// tables (Obj)
	var tables = document.querySelectorAll('.starter , .basic , .business');

	if (tables.length > 0) {
		console.log('true');

		console.log('table length: ' + tables.length);

		var _loop = function _loop(i) {
			console.log('na' + i);

			tables[i].addEventListener('mouseenter', function () {
				tables[i].classList.add('showBTN');
				console.log('Showie');
			});

			tables[i].addEventListener('mouseleave', function () {
				tables[i].classList.remove('showBTN');
				console.log('Showie');
			});
		};

		for (var i = 0; i < tables.length; i++) {
			_loop(i);
		}
	}
};

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {

	var Button = document.querySelector('.anfrage');
	var getAllFormWraps = document.querySelectorAll('.formWrap');
	var FormBox = document.querySelector('.formBox');
	var close = document.querySelector('.close');

	Button.addEventListener('click', function () {
		getAllFormWraps[0].classList.toggle('hide');
	});

	document.addEventListener('click', function (e) {
		if (e.target === getAllFormWraps[0] || e.target === close) {
			getAllFormWraps[0].classList.add('hide');
		}
	});
};

/***/ })
/******/ ]);