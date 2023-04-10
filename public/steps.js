var elements = document.getElementsByClassName("_option_9bife_5");
var myFunction = function() {
    Array.from(elements).forEach(function(element) {
    element.classList.remove("_selected_9bife_44")
});
    var attribute = this.getElementsByTagName('input')[0].getAttribute("data-testid");
    this.classList.add("_selected_9bife_44");
    // "attribute" to post
};
Array.from(elements).forEach(function(element) {
    element.addEventListener('click', myFunction);
});