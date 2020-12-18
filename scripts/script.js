$(document).ready(function() {

output =  document.getElementById('api-received-data');
data = [];
// Request Data
$('#requestBtn').click('click', function() {
	var ourRequest = new XMLHttpRequest();
		ourRequest.open('GET', '../json/stocks.json');
		ourRequest.onload = function() {
            string = "";
            const receievedData = this.responseText; 
            var data = JSON.parse(receievedData).data;
            for (i = 0; i < 100; i++) {
                console.log(data[i].symbol);
                string = '<td><a href="javascript:void(0)" class="stock-link" id=' + data[i].symbol + '>' + data[i].symbol + 
                '</a></td><td>' + data[i].name + '</td>' +
                '<td>' + data[i].currency + '</td>' +
                '<td>' + data[i].exchange + '</td>' +
                '<td>' + data[i].country + '</td>' +
                '<td>' + data[i].type + '</td>' +

                '</td></tr>';
                output.insertAdjacentHTML("beforebegin", string);
            }
        };
        ourRequest.send();
});

// Actions
$('#test').click('click', function() {
	console.log("clicked");

	let x = $('.login-drop-down');
	console.log("clicked")
	if (x.data('clicked', true) ) {
		x.fadeToggle(200).delay( 100 ).css({display: 'inline-grid', top: 30})
		}
	});
});
$('#go-home').click('click', function() {
	window.location.href = "../view/index.php";
	console.log("clicked");

	});
