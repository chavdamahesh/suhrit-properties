(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[80],{

/***/ "./resources/js/vendor/Export2Zip.js":
/*!*******************************************!*\
  !*** ./resources/js/vendor/Export2Zip.js ***!
  \*******************************************/
/*! exports provided: export_txt_to_zip */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"export_txt_to_zip\", function() { return export_txt_to_zip; });\n/* harmony import */ var jszip__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jszip */ \"./node_modules/jszip/dist/jszip.min.js\");\n/* harmony import */ var jszip__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jszip__WEBPACK_IMPORTED_MODULE_0__);\n/* eslint-disable */\n__webpack_require__(/*! script-loader!file-saver */ \"./node_modules/script-loader/index.js!./node_modules/file-saver/dist/FileSaver.min.js\");\n\n\nfunction export_txt_to_zip(th, jsonData, txtName, zipName) {\n  var zip = new jszip__WEBPACK_IMPORTED_MODULE_0___default.a();\n  var txt_name = txtName || 'file';\n  var zip_name = zipName || 'file';\n  var data = jsonData;\n  var txtData = \"\".concat(th, \"\\r\\n\");\n  data.forEach(function (row) {\n    var tempStr = '';\n    tempStr = row.toString();\n    txtData += \"\".concat(tempStr, \"\\r\\n\");\n  });\n  zip.file(\"\".concat(txt_name, \".txt\"), txtData);\n  zip.generateAsync({\n    type: \"blob\"\n  }).then(function (blob) {\n    saveAs(blob, \"\".concat(zip_name, \".zip\"));\n  }, function (err) {\n    alert('导出失败');\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvdmVuZG9yL0V4cG9ydDJaaXAuanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvdmVuZG9yL0V4cG9ydDJaaXAuanM/ZWViOSJdLCJzb3VyY2VzQ29udGVudCI6WyIvKiBlc2xpbnQtZGlzYWJsZSAqL1xucmVxdWlyZSgnc2NyaXB0LWxvYWRlciFmaWxlLXNhdmVyJyk7XG5cbmltcG9ydCBKU1ppcCBmcm9tICdqc3ppcCc7XG5leHBvcnQgZnVuY3Rpb24gZXhwb3J0X3R4dF90b196aXAodGgsIGpzb25EYXRhLCB0eHROYW1lLCB6aXBOYW1lKSB7XG4gIHZhciB6aXAgPSBuZXcgSlNaaXAoKTtcbiAgdmFyIHR4dF9uYW1lID0gdHh0TmFtZSB8fCAnZmlsZSc7XG4gIHZhciB6aXBfbmFtZSA9IHppcE5hbWUgfHwgJ2ZpbGUnO1xuICB2YXIgZGF0YSA9IGpzb25EYXRhO1xuICB2YXIgdHh0RGF0YSA9IFwiXCIuY29uY2F0KHRoLCBcIlxcclxcblwiKTtcbiAgZGF0YS5mb3JFYWNoKGZ1bmN0aW9uIChyb3cpIHtcbiAgICB2YXIgdGVtcFN0ciA9ICcnO1xuICAgIHRlbXBTdHIgPSByb3cudG9TdHJpbmcoKTtcbiAgICB0eHREYXRhICs9IFwiXCIuY29uY2F0KHRlbXBTdHIsIFwiXFxyXFxuXCIpO1xuICB9KTtcbiAgemlwLmZpbGUoXCJcIi5jb25jYXQodHh0X25hbWUsIFwiLnR4dFwiKSwgdHh0RGF0YSk7XG4gIHppcC5nZW5lcmF0ZUFzeW5jKHtcbiAgICB0eXBlOiBcImJsb2JcIlxuICB9KS50aGVuKGZ1bmN0aW9uIChibG9iKSB7XG4gICAgc2F2ZUFzKGJsb2IsIFwiXCIuY29uY2F0KHppcF9uYW1lLCBcIi56aXBcIikpO1xuICB9LCBmdW5jdGlvbiAoZXJyKSB7XG4gICAgYWxlcnQoJ+WvvOWHuuWksei0pScpO1xuICB9KTtcbn0iXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/vendor/Export2Zip.js\n");

/***/ })

}]);