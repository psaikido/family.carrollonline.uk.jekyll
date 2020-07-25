var agt=navigator.userAgent.toLowerCase()

var konq=(agt.indexOf("konqueror") != -1) ? true:false
var opera=(agt.indexOf("opera") != -1) ? true:false
var mac=(agt.indexOf("mac") != -1) ? true:false
var ie4=(document.all && !document.getElementById) ? true:false
var ie5up=(document.all && document.getElementById && !opera && !konq) ? true:false
var ns4=(document.layers) ? true:false
var ns5up=(!document.all && document.getElementById) ? true:false
/*
alert("ie4=" + ie4 + 
  "\n ie5up=" + ie5up + 
  "\n ns4=" + ns4 + 
  "\n ns5up=" + ns5up + 
  "\n konqueror=" + konq + 
  "\n opera=" + opera +
  "\n mac=" + mac)
*/
