/*
* Author: Argin Aslanian
* Resume Generator
*/


// Declare elements
var start = document.getElementById("start-gen"); // Generate Resume Button
var content = document.getElementById("resume-content"); // Resume Content Inputs Area

start.onclick = function() {
    start.disabled = true;
    content.style.display = 'block';
}
