var b = 1;
function bind1() {
    var a = var1;
    var b = var2;
    ko.applyBindings(a);
    ko.applyBindings(b);
    console.log("hoi");
    this.value = ko.observable("0");
    var a = (var1);
    value = "1";
    this.value1 = ko.observable("0");
    $.ajax({
        type: "GET",

        url: "http://45.113.136.146:33025/messenger2/webapi/exchange/zebpay"
    }).done(function (data) {
        var abc = JSON.parse(data);

        value = (abc['buy'] * a);

        ko.cleanNode(document.getElementById('elt2'));
        ko.applyBindings(value, document.getElementById('elt2'));

    });

    $.ajax({
        type: "GET",

        url: "http://45.113.136.146:33025/messenger2/webapi/exchange/bitbinszebpayxrp"
    }).done(function (data) {
        var abc = JSON.parse(data);

        value1 = (abc['buy'] * a);
        ko.cleanNode(document.getElementById('elt1'));
        ko.applyBindings(value1, document.getElementById('elt1'));

    });
}
setInterval(bind1, 1000);