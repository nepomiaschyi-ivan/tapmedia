new WOW().init();

(function () {
    if (document.referrer !== "") {
        var a = document.referrer.split('/');
        if (a.includes('banner') && document.location.pathname === '/') {
            setTimeout(function () {
                $('#download-file').modal('show');
            }, 5000);
        }
    }

})();