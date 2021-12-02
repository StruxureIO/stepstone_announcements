humhub.module('stepstone_announcements', function(module, require, $) {

    var init = function() {
        console.log('stepstone_announcements module activated');
    };

    var hello = function() {
        alert(module.text('hello')+' - '+module.config.username)
    };

    module.export({
        //uncomment the following line in order to call the init() function also for each pjax call
        //initOnPjaxLoad: true,
        init: init,
        hello: hello
    });
});