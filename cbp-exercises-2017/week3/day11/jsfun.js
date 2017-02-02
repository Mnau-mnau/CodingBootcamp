//js file
<div class="button" onclick="execute_this();">Click me</div>
var button = document.getElementById('button');
button.onclick = function() {
    execute_this();
};
var button = document.getElementById('button');
button.addEventListener ("click", function(event){
execute_this()});

var button = $('button');
button.on("click", function(event){
    execute_this();
});