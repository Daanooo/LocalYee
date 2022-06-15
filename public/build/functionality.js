(self["webpackChunk"] = self["webpackChunk"] || []).push([["functionality"],{

/***/ "./assets/js/functionality.js":
/*!************************************!*\
  !*** ./assets/js/functionality.js ***!
  \************************************/
/***/ (() => {

// closes alerts after clicking the x button 
var dismissButton = document.querySelector('.alert-dismiss');
dismissButton.addEventListener('click', function (e) {
  var parentAlert = dismissButton.closest('.alert');

  if (parentAlert != null) {
    parentAlert.remove();
  }
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/js/functionality.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiZnVuY3Rpb25hbGl0eS5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7OztBQUFBO0FBQ0EsSUFBSUEsYUFBYSxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsZ0JBQXZCLENBQXBCO0FBQ0FGLGFBQWEsQ0FBQ0csZ0JBQWQsQ0FBK0IsT0FBL0IsRUFBd0MsVUFBQ0MsQ0FBRCxFQUFPO0VBQzNDLElBQUlDLFdBQVcsR0FBR0wsYUFBYSxDQUFDTSxPQUFkLENBQXNCLFFBQXRCLENBQWxCOztFQUVBLElBQUlELFdBQVcsSUFBSSxJQUFuQixFQUF5QjtJQUNyQkEsV0FBVyxDQUFDRSxNQUFaO0VBQ0g7QUFDSixDQU5EIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2Z1bmN0aW9uYWxpdHkuanMiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gY2xvc2VzIGFsZXJ0cyBhZnRlciBjbGlja2luZyB0aGUgeCBidXR0b24gXG52YXIgZGlzbWlzc0J1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5hbGVydC1kaXNtaXNzJyk7XG5kaXNtaXNzQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGUpID0+IHtcbiAgICB2YXIgcGFyZW50QWxlcnQgPSBkaXNtaXNzQnV0dG9uLmNsb3Nlc3QoJy5hbGVydCcpO1xuXG4gICAgaWYgKHBhcmVudEFsZXJ0ICE9IG51bGwpIHtcbiAgICAgICAgcGFyZW50QWxlcnQucmVtb3ZlKCk7XG4gICAgfVxufSk7Il0sIm5hbWVzIjpbImRpc21pc3NCdXR0b24iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsInBhcmVudEFsZXJ0IiwiY2xvc2VzdCIsInJlbW92ZSJdLCJzb3VyY2VSb290IjoiIn0=