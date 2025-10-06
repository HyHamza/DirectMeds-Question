if (!window.location.pathname.includes('/admin') && !window.location.pathname.includes('/user')) {
    window.smartlook || (function (d) {
        var o = smartlook = function () {
            o.api.push(arguments)
        }, h = d.getElementsByTagName('head')[0];
        var c = d.createElement('script');
        o.api = new Array();
        c.async = true;
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.src = 'https://web-sdk.smartlook.com/recorder.js';
        h.appendChild(c);
    })(document);
    smartlook('init', '02bb1c8e1a611edbf76a7c00349247194ca3eb07', {region: 'eu'});
    smartlook('cookieDomain', '.direct-meds.com');
}