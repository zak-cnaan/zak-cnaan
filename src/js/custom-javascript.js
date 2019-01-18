$(document).ready(function (){
    // $('body').scrollspy({ target: '#navbarCollapse', offset: 60 });

    // var node = document.querySelector('#cake');
    
    


});

gumshoe.init({
    selector: '#navbarCollapse a', // Default link selector (must use a valid CSS selector)
    selectorHeader: '#Header nav', // Fixed header selector (must use a valid CSS selector)
    container: window, // The element to spy on scrolling in (must be a valid DOM Node)
    offset: 0, // Distance in pixels to offset calculations
    activeClass: 'active', // Class to apply to active navigation link and its parent list item
    scrollDelay: false, // Wait until scrolling has stopped before updating the navigation
    callback: function (nav) {} // Callback to run after setting active link
});
var scroll = new SmoothScroll('#navbarCollapse a', {
    speed: 300,
    header: '#Header nav'
});