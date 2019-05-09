
$.ajax({
  url: 'https://koinex.in/api/ticker',
  type: 'GET',
  success: function(data) {
        var abc = data;
        var sto=abc['stats']['BTC']['last_traded_price'];
	localStorage.setItem("data",sto);
        console.log(localStorage.data);
  },
  error: function(e) {
	console.log(localStorage.data);
  }
  
});
