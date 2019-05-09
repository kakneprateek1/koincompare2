var a = var1;
var b = var2;
var ethcount = koeth;
var ltccount = koltc;
var bchcount = kobch;
var omgcount = koomg;
var rqcount = korq;
var zrxcount = kozrx;
var gntcount = kognt;
var batcount = kobat;
var aecount = koae;
var trxcount = kotrx;
var xlmcount = koxlm;
var bitbtccount = bitbtc;
var bitethcount = biteth;
var bitltccount = bitltc;
var bitxrpcount = bitxrp;
var bitbchcount = bitbch;
var bitxmrcount = bitxmr;
var bitrpxcount = bitrpx;
var bitdogcount = bitdog;
var bitgascount = bitgas;
var bitneocount = bitneo;
var bitdbccount = bitdbc;
var bitsccount = bitsc;
var bittrxcount = bittrx;
var bitdashcount = bitdash;
var bitxlmcount = bitxlm;
var cdbtccount = cdbtc;
var cdxrpcount = cdxrp;
var cdethcount = cdeth;
var cdltccount = cdltc;
var cdbchcount = cdbch;
var cdqtumcount = cdq;
var cdomgcount = cdomg;
var zpbtccount = zpbtc;
var zpxrpcount = zpxrp;
var zpethcount = zpeth;
var zpltccount = zpltc;
var zpbchcount = zpbch;
ko.cleanNode(document.getElementById('elt3'));
ko.applyBindings(a, document.getElementById('elt3'));
ko.cleanNode(document.getElementById('elt4'));
ko.applyBindings(b, document.getElementById('elt4'));
ko.cleanNode(document.getElementById('ethcount'));
ko.applyBindings(ethcount, document.getElementById('ethcount'));
ko.cleanNode(document.getElementById('ltccount'));
ko.applyBindings(ltccount, document.getElementById('ltccount'));
ko.cleanNode(document.getElementById('bchcount'));
ko.applyBindings(bchcount, document.getElementById('bchcount'));
ko.cleanNode(document.getElementById('omgcount'));
ko.applyBindings(omgcount, document.getElementById('omgcount'));
ko.cleanNode(document.getElementById('rqcount'));

ko.applyBindings(rqcount, document.getElementById('rqcount'));
ko.cleanNode(document.getElementById('zrxcount'));
ko.applyBindings(zrxcount, document.getElementById('zrxcount'));
ko.cleanNode(document.getElementById('gntcount'));
ko.applyBindings(gntcount, document.getElementById('gntcount'));
ko.cleanNode(document.getElementById('batcount'));
ko.applyBindings(gntcount, document.getElementById('batcount'));
ko.cleanNode(document.getElementById('aecount'));
ko.applyBindings(aecount, document.getElementById('aecount'));
ko.cleanNode(document.getElementById('trxcount'));
ko.applyBindings(trxcount, document.getElementById('trxcount'));
ko.cleanNode(document.getElementById('xlmcount'));
ko.applyBindings(trxcount, document.getElementById('xlmcount'));
ko.cleanNode(document.getElementById('bitbtccount'));
ko.applyBindings(bitbtccount, document.getElementById('bitbtccount'));
ko.cleanNode(document.getElementById('bitethcount'));
ko.applyBindings(bitethcount, document.getElementById('bitethcount'));
ko.cleanNode(document.getElementById('bitltccount'));
ko.applyBindings(bitltccount, document.getElementById('bitltccount'));
ko.cleanNode(document.getElementById('bitxrpcount'));
ko.applyBindings(bitxrpcount, document.getElementById('bitxrpcount'));
ko.cleanNode(document.getElementById('bitrpxcount'));
ko.applyBindings(bitrpxcount, document.getElementById('bitrpxcount'));
ko.cleanNode(document.getElementById('bitxmrcount'));
ko.applyBindings(bitxmrcount, document.getElementById('bitxmrcount'));
ko.cleanNode(document.getElementById('bitdbccount'));
ko.applyBindings(bitdbccount, document.getElementById('bitdbccount'));
ko.cleanNode(document.getElementById('bitgascount'));
ko.applyBindings(bitgascount, document.getElementById('bitgascount'));
ko.cleanNode(document.getElementById('bitneocount'));
ko.applyBindings(bitneocount, document.getElementById('bitneocount'));
ko.cleanNode(document.getElementById('bitsccount'));
ko.applyBindings(bitsccount, document.getElementById('bitsccount'));
ko.cleanNode(document.getElementById('bittrxcount'));
ko.applyBindings(bittrxcount, document.getElementById('bittrxcount'));
ko.cleanNode(document.getElementById('bitbchcount'));
ko.applyBindings(bitbchcount, document.getElementById('bitbchcount'));
ko.cleanNode(document.getElementById('bitxlmcount'));
ko.applyBindings(bitxlmcount, document.getElementById('bitxlmcount'));
ko.cleanNode(document.getElementById('bitdashcount'));
ko.applyBindings(bitdashcount, document.getElementById('bitdashcount'));
ko.cleanNode(document.getElementById('bitdogcount'));
ko.applyBindings(bitdogcount, document.getElementById('bitdogcount'));

ko.cleanNode(document.getElementById('cdbtccount'));
ko.applyBindings(cdbtccount, document.getElementById('cdbtccount'));
ko.cleanNode(document.getElementById('cdltccount'));
ko.applyBindings(cdltccount, document.getElementById('cdltccount'));
ko.cleanNode(document.getElementById('cdethcount'));
ko.applyBindings(cdethcount, document.getElementById('cdethcount'));
ko.cleanNode(document.getElementById('cdxrpcount'));
ko.applyBindings(cdxrpcount, document.getElementById('cdxrpcount'));
ko.cleanNode(document.getElementById('cdbchcount'));
ko.applyBindings(cdbchcount, document.getElementById('cdbchcount'));
ko.cleanNode(document.getElementById('cdomgcount'));
ko.applyBindings(cdomgcount, document.getElementById('cdomgcount'));
ko.cleanNode(document.getElementById('cdqtumcount'));
ko.applyBindings(cdqtumcount, document.getElementById('cdqtumcount'));

ko.cleanNode(document.getElementById('zpbtccount'));
ko.applyBindings(zpbtccount, document.getElementById('zpbtccount'));
ko.cleanNode(document.getElementById('zpltccount'));
ko.applyBindings(zpltccount, document.getElementById('zpltccount'));
ko.cleanNode(document.getElementById('zpethcount'));
ko.applyBindings(zpethcount, document.getElementById('zpethcount'));
ko.cleanNode(document.getElementById('zpxrpcount'));
ko.applyBindings(zpxrpcount, document.getElementById('zpxrpcount'));
ko.cleanNode(document.getElementById('zpbchcount'));
ko.applyBindings(zpbchcount, document.getElementById('zpbchcount'));

var value = ko.observable("0");
var value1 = ko.observable("0");
var ethval = ko.observable("0");

$.ajax({
    type: "GET",

    url: "https://koinex.in/api/ticker"
}).done(function (data) {
    var abc = data;
    value1 = (abc['stats']['BTC']['last_traded_price'] * a);
    ko.cleanNode(document.getElementById('elt1'));
    ko.applyBindings(value1, document.getElementById('elt1'));

    value = (abc['stats']['XRP']['last_traded_price'] * b);
    ko.cleanNode(document.getElementById('elt2'));
    ko.applyBindings(value, document.getElementById('elt2'));

    ethval = (abc['stats']['ETH']['last_traded_price'] * ethcount);
    ko.cleanNode(document.getElementById('ethval'));
    ko.applyBindings(ethval, document.getElementById('ethval'));

    ltcval = (abc['stats']['LTC']['last_traded_price'] * ltccount);
    ko.cleanNode(document.getElementById('ltcval'));
    ko.applyBindings(ltcval, document.getElementById('ltcval'));

    bchval = (abc['stats']['BCH']['last_traded_price'] * bchcount);
    ko.cleanNode(document.getElementById('bchval'));
    ko.applyBindings(bchval, document.getElementById('bchval'));

    omgval = (abc['stats']['OMG']['last_traded_price'] * omgcount);
    ko.cleanNode(document.getElementById('omgval'));
    ko.applyBindings(omgval, document.getElementById('omgval'));

    rqval = (abc['stats']['REQ']['last_traded_price'] * rqcount);
    ko.cleanNode(document.getElementById('rqval'));
    ko.applyBindings(rqval, document.getElementById('rqval'));

    zrxval = (abc['stats']['ZRX']['last_traded_price'] * zrxcount);
    ko.cleanNode(document.getElementById('zrxval'));
    ko.applyBindings(zrxval, document.getElementById('zrxval'));

    gntval = (abc['stats']['GNT']['last_traded_price'] * gntcount);
    ko.cleanNode(document.getElementById('gntval'));
    ko.applyBindings(gntval, document.getElementById('gntval'));

    batval = (abc['stats']['BAT']['last_traded_price'] * batcount);
    ko.cleanNode(document.getElementById('batval'));
    ko.applyBindings(batval, document.getElementById('batval'));

    aeval = (abc['stats']['AE']['last_traded_price'] * aecount);
    ko.cleanNode(document.getElementById('aeval'));
    ko.applyBindings(aeval, document.getElementById('aeval'));

    trxval = (abc['stats']['TRX']['last_traded_price'] * trxcount);
    ko.cleanNode(document.getElementById('trxval'));
    ko.applyBindings(trxval, document.getElementById('trxval'));

    xlmval = (abc['stats']['XLM']['last_traded_price'] * xlmcount);
    ko.cleanNode(document.getElementById('xlmval'));
    ko.applyBindings(xlmval, document.getElementById('xlmval'));
});

$.ajax({
    type: "GET",

    url: "http://45.113.136.146:33025/messenger2/webapi/exchange/bitbins"
}).done(function (data) {
    var data1 = JSON.parse(data);
    var str = JSON.stringify(data1[0]['BTC']);
    var ob1 = JSON.parse(str);
    var btcltp = ob1['lastTradePrice'];

    bitbtcval = btcltp * bitbtccount;
    ko.cleanNode(document.getElementById('bitbtcval'));
    ko.applyBindings(bitbtcval, document.getElementById('bitbtcval'));

    var xrpstr = JSON.stringify(data1[1]['XRP']);
    var xrpob1 = JSON.parse(xrpstr);
    var xrpltp = xrpob1['lastTradePrice'];

    bitxrpval = xrpltp * bitxrpcount;
    ko.cleanNode(document.getElementById('bitxrpval'));
    ko.applyBindings(bitxrpval, document.getElementById('bitxrpval'));

    var ethstr = JSON.stringify(data1[4]['ETH']);
    var ethob1 = JSON.parse(ethstr);
    var ethltp = ethob1['lastTradePrice'];

    bitethval = ethltp * bitethcount;
    ko.cleanNode(document.getElementById('bitethval'));
    ko.applyBindings(bitethval, document.getElementById('bitethval'));

    var ltcstr = JSON.stringify(data1[8]['LTC']);
    var ltcob1 = JSON.parse(ltcstr);
    var ltcltp = ltcob1['lastTradePrice'];

    bitltcval = ltcltp * bitltccount;
    ko.cleanNode(document.getElementById('bitltcval'));
    ko.applyBindings(bitltcval, document.getElementById('bitltcval'));

    var bchstr = JSON.stringify(data1[12]['BCH']);
    var bchob1 = JSON.parse(bchstr);
    var bchltp = bchob1['lastTradePrice'];

    bitbchval = bchltp * bitbchcount;
    ko.cleanNode(document.getElementById('bitbchval'));
    ko.applyBindings(bitbchval, document.getElementById('bitbchval'));

    var dbcstr = JSON.stringify(data1[7]['DBC']);
    var dbcob1 = JSON.parse(dbcstr);
    var dbcltp = dbcob1['lastTradePrice'];

    bitdbcval = dbcltp * bitdbccount;
    ko.cleanNode(document.getElementById('bitdbcval'));
    ko.applyBindings(bitdbcval, document.getElementById('bitdbcval'));

    var dashstr = JSON.stringify(data1[10]['DASH']);
    var dashob1 = JSON.parse(dashstr);
    var dashltp = dashob1['lastTradePrice'];

    bitdashval = dashltp * bitdashcount;
    ko.cleanNode(document.getElementById('bitdashval'));
    ko.applyBindings(bitdashval, document.getElementById('bitdashval'));

    var dogstr = JSON.stringify(data1[11]['DOGE']);
    var dogob1 = JSON.parse(dogstr);
    var dogltp = dogob1['lastTradePrice'];

    bitdogval = dogltp * bitdogcount;
    ko.cleanNode(document.getElementById('bitdogval'));
    ko.applyBindings(bitdogval, document.getElementById('bitdogval'));

    var gasstr = JSON.stringify(data1[3]['GAS']);
    var gasob1 = JSON.parse(gasstr);
    var gasltp = gasob1['lastTradePrice'];

    bitgasval = gasltp * bitgascount;
    ko.cleanNode(document.getElementById('bitgasval'));
    ko.applyBindings(bitgasval, document.getElementById('bitgasval'));

    var neostr = JSON.stringify(data1[2]['NEO']);
    var neoob1 = JSON.parse(neostr);
    var neoltp = neoob1['lastTradePrice'];

    bitneoval = neoltp * bitneocount;
    ko.cleanNode(document.getElementById('bitneoval'));
    ko.applyBindings(bitneoval, document.getElementById('bitneoval'));

    var rpxstr = JSON.stringify(data1[6]['RPX']);
    var rpxob1 = JSON.parse(rpxstr);
    var rpxltp = rpxob1['lastTradePrice'];

    bitrpxval = rpxltp * bitrpxcount;
    ko.cleanNode(document.getElementById('bitrpxval'));
    ko.applyBindings(bitrpxval, document.getElementById('bitrpxval'));

    var scstr = JSON.stringify(data1[13]['SIA']);
    var scob1 = JSON.parse(scstr);
    var scltp = scob1['lastTradePrice'];

    bitscval = scltp * bitsccount;
    ko.cleanNode(document.getElementById('bitscval'));
    ko.applyBindings(bitscval, document.getElementById('bitscval'));

    var trxstr = JSON.stringify(data1[14]['TRX']);
    var trxob1 = JSON.parse(trxstr);
    var trxltp = trxob1['lastTradePrice'];

    bittrxval = trxltp * bittrxcount;
    ko.cleanNode(document.getElementById('bittrxval'));
    ko.applyBindings(bittrxval, document.getElementById('bittrxval'));

    var xlmstr = JSON.stringify(data1[5]['XLM']);
    var xlmob1 = JSON.parse(xlmstr);
    var xlmltp = xlmob1['lastTradePrice'];

    bitxlmval = xlmltp * bitxlmcount;
    ko.cleanNode(document.getElementById('bitxlmval'));
    ko.applyBindings(bitxlmval, document.getElementById('bitxlmval'));

    var xmrstr = JSON.stringify(data1[9]['XMR']);
    var xmrob1 = JSON.parse(xmrstr);
    var xmrltp = xmrob1['lastTradePrice'];

    bitxmrval = xmrltp * bitxmrcount;
    ko.cleanNode(document.getElementById('bitxmrval'));
    ko.applyBindings(bitxmrval, document.getElementById('bitxmrval'));



});

$.ajax({
    url: 'https://coindelta.com/api/v1/public/getticker/',
    type: 'get',
    crossDomain: true,
    dataType: 'json',
    contentType: "application/json",
    success: function (data) {
        var str = JSON.stringify(data[0]);
        var ob1 = JSON.parse(str);
        var ltp = ob1['Last'];

        cdbtcval = ltp * cdbtccount;
        ko.cleanNode(document.getElementById('cdbtcval'));
        ko.applyBindings(cdbtcval, document.getElementById('cdbtcval'));

        var xrpstr = JSON.stringify(data[9]);
        var xrpob1 = JSON.parse(xrpstr);
        var xrpltp = xrpob1['Last'];

        cdxrpval = xrpltp * cdxrpcount;
        ko.cleanNode(document.getElementById('cdxrpval'));
        ko.applyBindings(cdxrpval, document.getElementById('cdxrpval'));

        var ltcstr = JSON.stringify(data[2]);
        var ltcob1 = JSON.parse(ltcstr);
        var ltcltp = ltcob1['Last'];

        cdltcval = ltcltp * cdltccount;
        ko.cleanNode(document.getElementById('cdltcval'));
        ko.applyBindings(cdltcval, document.getElementById('cdltcval'));

        var ethstr = JSON.stringify(data[1]);
        var ethob1 = JSON.parse(ethstr);
        var ethltp = ethob1['Last'];
        cdethval = ethltp * cdethcount;
        ko.cleanNode(document.getElementById('cdethval'));
        ko.applyBindings(cdethval, document.getElementById('cdethval'));

        var bchstr = JSON.stringify(data[11]);
        var bchob1 = JSON.parse(bchstr);
        var bchltp = bchob1['Last'];
        cdbchval = bchltp * cdbchcount;
        ko.cleanNode(document.getElementById('cdbchval'));
        ko.applyBindings(cdbchval, document.getElementById('cdbchval'));


        var omgstr = JSON.stringify(data[3]);
        var omgob1 = JSON.parse(omgstr);
        var omgltp = omgob1['Last'];
        cdomgval = omgltp * cdomgcount;
        ko.cleanNode(document.getElementById('cdomgval'));
        ko.applyBindings(cdomgval, document.getElementById('cdomgval'));

        var qstr = JSON.stringify(data[4]);
        var qob1 = JSON.parse(qstr);
        var qltp = qob1['Last'];
        cdqtumval = qltp * cdqtumcount;
        ko.cleanNode(document.getElementById('cdqtumval'));
        ko.applyBindings(cdqtumval, document.getElementById('cdqtumval'));

    }
});

$.ajax({
    type: "GET",

    url: "http://45.113.136.146:33025/messenger2/webapi/exchange/zebpay"
}).done(function (data) {
    var abc = JSON.parse(data);
    var ltp = (abc['market']);
    zpbtcval=ltp*zpbtccount;
    ko.cleanNode(document.getElementById('zpbtcval'));
    ko.applyBindings(zpbtcval, document.getElementById('zpbtcval'));
    
});

$.ajax({
    type: "GET",

    url: "http://45.113.136.146:33025/messenger2/webapi/exchange/bitbinszebpayxrp"
}).done(function (data) {
    var abc = JSON.parse(data);
    var ltp = (abc['market']);
    zpxrpval=ltp*zpxrpcount;
    ko.cleanNode(document.getElementById('zpxrpval'));
    ko.applyBindings(zpxrpval, document.getElementById('zpxrpval'));

});



$.ajax({
    type: "GET",

    url: "http://45.113.136.146:33025/messenger2/webapi/exchange/bitbinszebpayeth"
}).done(function (data) {
    var abc = JSON.parse(data);
    var ltp = (abc['market']);
    zpethval=ltp*zpethcount;
    ko.cleanNode(document.getElementById('zpethval'));
    ko.applyBindings(zpethval, document.getElementById('zpethval'));

});

$.ajax({
    type: "GET",

    url: "http://45.113.136.146:33025/messenger2/webapi/exchange/bitbinszebpayltc"
}).done(function (data) {
    var abc = JSON.parse(data);
    var ltp = (abc['market']);
    zpltcval=ltp*zpltccount;
    ko.cleanNode(document.getElementById('zpltcval'));
    ko.applyBindings(zpltcval, document.getElementById('zpltcval'));

});

$.ajax({
    type: "GET",

    url: "http://45.113.136.146:33025/messenger2/webapi/exchange/bitbinszebpaybch"
}).done(function (data) {
    var abc = JSON.parse(data);
    var ltp = (abc['market']);
    zpbchval=ltp*zpbchcount;
    ko.cleanNode(document.getElementById('zpbchval'));
    ko.applyBindings(zpbchval, document.getElementById('zpbchval'));

});
/*
 $.ajax({
 type: "GET",
 
 url: "http://45.113.136.146:33025/messenger2/webapi/exchange/bitbinszebpayxrp"
 }).done(function (data) {
 var abcd = JSON.parse(data);
 value = (abcd['buy']);
 console.log(value);
 ko.cleanNode(document.getElementById('elt2'));
 ko.applyBindings(value, document.getElementById('elt2'));
 
 });
 
 */
 