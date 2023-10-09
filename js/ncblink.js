jQuery(document).ready(function ($) {
    // Assuming Bible references are links with the class 'bible-reference'
    $('.bible-reference').on('click', function (e) {
        e.preventDefault();
        
        // Get the Bible reference from the clicked link
        var reference = $(this).text();
        
        // Create a lightbox with the reference
        $.fancybox.open({
            src: '<div>' + reference + '</div>',
            type: 'inline',
        });
    });
});
