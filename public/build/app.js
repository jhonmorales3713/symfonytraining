"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/app.css */ "./assets/css/app.css");
// assets/js/app.js

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
 // Need jQuery? Install it with "yarn add jquery"(or "npm install jquery"), then uncomment to import it.
// import $ from 'jquery';

var $shelves_genre = $("#shelves_genre");
var $token = $("#shelves__token");
$shelves_genre.on('change', function () {
  var $form = $(this).closest('form');
  var data = [];
  data[$token.attr('name')] = $token.val();
  data[$shelves_genre.attr('name')] = $shelves_genre.val(); // console.log("sd")
  // console.log($shelves_genre.val());
  // console.log(data);
  // $.post("new", data).then(function (response){
  //     // console.log(response);
  //     // console.log($("#shelves_subGenre"));
  //     // $("#shelves_subGenre").replaceWith(
  //     //     $(response).find("#shelves_subGenre")
  //     // );
  // }); 
}); // console.log('Hello Webpack Encore! t me in assets/js/app.js');

/***/ }),

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/js/app.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7O0FBQUE7O0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7Q0FHQTtBQUNBOztBQUNBLElBQUlBLGNBQWMsR0FBR0MsQ0FBQyxDQUFDLGdCQUFELENBQXRCO0FBQ0EsSUFBSUMsTUFBTSxHQUFHRCxDQUFDLENBQUMsaUJBQUQsQ0FBZDtBQUNBRCxjQUFjLENBQUNHLEVBQWYsQ0FBa0IsUUFBbEIsRUFBMkIsWUFBVTtFQUVqQyxJQUFJQyxLQUFLLEdBQUdILENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUksT0FBUixDQUFnQixNQUFoQixDQUFaO0VBRUEsSUFBSUMsSUFBSSxHQUFDLEVBQVQ7RUFFQUEsSUFBSSxDQUFDSixNQUFNLENBQUNLLElBQVAsQ0FBWSxNQUFaLENBQUQsQ0FBSixHQUE0QkwsTUFBTSxDQUFDTSxHQUFQLEVBQTVCO0VBQ0FGLElBQUksQ0FBQ04sY0FBYyxDQUFDTyxJQUFmLENBQW9CLE1BQXBCLENBQUQsQ0FBSixHQUFvQ1AsY0FBYyxDQUFDUSxHQUFmLEVBQXBDLENBUGlDLENBUWpDO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0FBQ0gsQ0FsQkQsR0FvQkE7Ozs7Ozs7Ozs7O0FDbkNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gYXNzZXRzL2pzL2FwcC5qc1xyXG4vKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbmltcG9ydCAnLi4vY3NzL2FwcC5jc3MnO1xyXG5cclxuLy8gTmVlZCBqUXVlcnk/IEluc3RhbGwgaXQgd2l0aCBcInlhcm4gYWRkIGpxdWVyeVwiKG9yIFwibnBtIGluc3RhbGwganF1ZXJ5XCIpLCB0aGVuIHVuY29tbWVudCB0byBpbXBvcnQgaXQuXHJcbi8vIGltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XHJcbnZhciAkc2hlbHZlc19nZW5yZSA9ICQoXCIjc2hlbHZlc19nZW5yZVwiKTtcclxudmFyICR0b2tlbiA9ICQoXCIjc2hlbHZlc19fdG9rZW5cIik7XHJcbiRzaGVsdmVzX2dlbnJlLm9uKCdjaGFuZ2UnLGZ1bmN0aW9uKCl7XHJcblxyXG4gICAgdmFyICRmb3JtID0gJCh0aGlzKS5jbG9zZXN0KCdmb3JtJyk7XHJcblxyXG4gICAgdmFyIGRhdGE9W107XHJcblxyXG4gICAgZGF0YVskdG9rZW4uYXR0cignbmFtZScpXSA9ICR0b2tlbi52YWwoKTtcclxuICAgIGRhdGFbJHNoZWx2ZXNfZ2VucmUuYXR0cignbmFtZScpXSA9ICRzaGVsdmVzX2dlbnJlLnZhbCgpO1xyXG4gICAgLy8gY29uc29sZS5sb2coXCJzZFwiKVxyXG4gICAgLy8gY29uc29sZS5sb2coJHNoZWx2ZXNfZ2VucmUudmFsKCkpO1xyXG4gICAgLy8gY29uc29sZS5sb2coZGF0YSk7XHJcbiAgICAvLyAkLnBvc3QoXCJuZXdcIiwgZGF0YSkudGhlbihmdW5jdGlvbiAocmVzcG9uc2Upe1xyXG4gICAgLy8gICAgIC8vIGNvbnNvbGUubG9nKHJlc3BvbnNlKTtcclxuICAgIC8vICAgICAvLyBjb25zb2xlLmxvZygkKFwiI3NoZWx2ZXNfc3ViR2VucmVcIikpO1xyXG4gICAgLy8gICAgIC8vICQoXCIjc2hlbHZlc19zdWJHZW5yZVwiKS5yZXBsYWNlV2l0aChcclxuICAgIC8vICAgICAvLyAgICAgJChyZXNwb25zZSkuZmluZChcIiNzaGVsdmVzX3N1YkdlbnJlXCIpXHJcbiAgICAvLyAgICAgLy8gKTtcclxuICAgIC8vIH0pOyBcclxufSk7XHJcblxyXG4vLyBjb25zb2xlLmxvZygnSGVsbG8gV2VicGFjayBFbmNvcmUhIHQgbWUgaW4gYXNzZXRzL2pzL2FwcC5qcycpOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyIkc2hlbHZlc19nZW5yZSIsIiQiLCIkdG9rZW4iLCJvbiIsIiRmb3JtIiwiY2xvc2VzdCIsImRhdGEiLCJhdHRyIiwidmFsIl0sInNvdXJjZVJvb3QiOiIifQ==