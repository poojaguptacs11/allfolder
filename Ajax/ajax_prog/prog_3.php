<script type="text/javascript">
//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
alert ("You are not using Microsoft Internet Explorer");
}
function makerequest(serverPage, objID) {
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
obj.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
//-->
</script>
<body onload="makerequest ('content1.html','hw')">
<div align="center">
<h1>My Webpage</h1>
<a href="content1.html" onclick="makerequest('content1.html','hw'); 
return false;"> Page 1</a> | <a href="content2.html"
onclick="makerequest('content2.html','hw'); 
return false;">Page 2</a> | <a href="content3.html" onclick=
"makerequest('content3.html','hw'); return false;">Page 3</a> | 
<a href="content4.html" onclick="makerequest('content4.html','hw'); return false;">
Page 4</a>
<div id="hw"></div>
</div>
</body>
</html>
<!-- content1.html -->
<div style="width: 770px; text-align: left;">
<h1>Page 1</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<!-- content2.html -->
<div style="width: 770px; text-align: left;">
<h1>Page 2</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<!-- content3.html -->
<div style="width: 770px; text-align: left;">
<h1>Page 3</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
www.it-ebooks.info
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<!-- content4.html -->
<div style="width: 770px; text-align: left;">
<h1>Page 4</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
culpa qui officia deserunt mollit anim id est laborum.</p>
</div>