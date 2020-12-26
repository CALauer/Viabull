

$(document).ready(function() {

	output =  document.getElementById('api-received-data');
	data = [];
	// Request Data
	//  $('#requestBtn').click('click', function() {
	// 	var ourRequest = new XMLHttpRequest();
	// 		ourRequest.open('GET', '../json/stocks.json');
	// 		ourRequest.onload = function() {
	// 			string = "";
	// 			const receievedData = this.responseText; 
	// 			var data = JSON.parse(receievedData).data;
	// 			for (i = 0; i < 100; i++) {
	// 				// console.log(data[i].symbol);
	// 				string = '<td><a href="javascript:void(0)" class="stock-link" id=' + data[i].symbol + '>' + data[i].symbol + 
	// 				'</a></td><td>' + data[i].name + '</td>' +
	// 				'<td>' + data[i].currency + '</td>' +
	// 				'<td>' + data[i].exchange + '</td>' +
	// 				'<td>' + data[i].country + '</td>' +
	// 				'<td>' + data[i].type + '</td>' +
	
	// 				'</td></tr>';
	// 				output.insertAdjacentHTML("beforebegin", string);
	// 			}
	// 		};
	// 		ourRequest.send();
	// 	});
	


		var ourRequest = new XMLHttpRequest();
		ourRequest.open('GET', '../json/stocks.json');
		ourRequest.onload = function() {
			const receievedData = this.responseText; 
			var myArray = JSON.parse(receievedData).data;
	
			$('#search-by-name').on('keyup', function() {
				var value = $(this).val();
				var data = searchStocksByName(value, myArray);
				createTableData(data);
				if (value = "") {
					console.log(value + "this");
				}
			})
			$('#search-by-symbol').on('keyup', function() {
				var value = $(this).val();
				var data = searchStocksBySymbol(value, myArray);
				createTableData(data);
				if (value = "") {
					console.log(value + "this");
				}
			})
		};
	 
			// createTableData(myArray)
	
		function searchStocksByName(value, data) {
			var filteredData = []
			value = value.toLowerCase();
	
			for (i = 0; i < data.length; i++) {
				var name = data[i].name.toLowerCase();
	
				if (name.includes(value)) {
					filteredData.push(data[i]);
				} 
			}
			return filteredData;
			// console.log(filteredData + "filtered Data")
		}
		function searchStocksBySymbol(value, data) {
			var filteredData = []
			value = value.toLowerCase();
	
			for (i = 0; i < data.length; i++) {
				var symbol = data[i].symbol.toLowerCase();
	
				if (symbol.includes(value)) {
					filteredData.push(data[i]);
				} 
			}
			return filteredData;
			// console.log(filteredData + "filtered Data")
		}
	
			function createTableData(data) {
				var table = document.getElementById('myTable');
				table.innerHTML  = "";
				console.log(data);
				for(var i=0; i < 50 && i < data.length; i++) {
				table.innerHTML += '<tr><td><a href=../view/stockProfile.php?id="'+ data[i].symbol +'">'
				 + data[i].symbol  + '</td><td>' + data[i].name +
				 '</td><td>' + data[i].exchange + 
				 '</td><td><button class="addTo-btn" id="'+ data[i].symbol +'">Add</button></td></tr>';
				//  value="' + data[i].symbol + '"
				}
		}
ourRequest.send();

function updateHtmlContent() {
    var htmlContent=$('#watchlist').text();
    $.ajax({
        type: "GET",
        datatype: "text",
        //php function that should give you the text back
        url: 'memberHeader-test.php',
        success: function(data) {
            if (htmlContent != data) {
                $('#watchlist').text(data);
            }
        }
    });
}

//compare and upate every 20 seconds
setInterval(updateHtmlContent(), 1000);

	});
	
	$('#myTable').on('click', '.addTo-btn', (e) => { 
		console.log("clicked")
		var stockID = e.target.id
			$.ajax({
				url: "../includes/updateUserStock.php", 
				type: "POST",
				data: { stockID : stockID }, 
				success: function(output){
					alert(output);
					location.reload(); 

				}
			});
		});
	// Actions
	$('#test').click('click', function() {
		console.log("clicked");
		let x = $('.login-drop-down');
		if (x.data('clicked', true) ) {
			x.fadeToggle(200).delay( 100 ).css({display: 'inline-grid', top: 30});
			}
		});
	$('#mobile-account-btn').click('click', function() {
		let x = $('.login-drop-down');
		if (x.data('clicked', true) ) {
			x.fadeToggle(200).delay( 100 ).css({display: 'grid', top: 40, alignContent: 'flex-start'});
			}
		});
	$('#go-home').click('click', function() {
		window.location.href = "../view/index.php";
		});
		$('#cta-start-investing').click('click', function() {
			window.location.href = "../view/register.php";
			});
	// Mobile Navigation
	
	$('#mobile-menu-btn').click('click', function() {
		let x = $('.mobile-menu');
		if (x.data('clicked', true) ) {
			x.fadeToggle(200).delay( 100 ).css({display: 'inline-grid', top: 0});
			}
		});
		// Profile Functions
		$('#update-phone-btn').click('click', function() {
			if(document.URL.indexOf("updatePhoneSuccessful") >= 0){ 
				$('#update-phone-btn').css({display: 'none'})
				console.log("test")
				}
			function test() {
				console.log("testing")
			}
			});
			function updatePhone() {
				$('#update-phone-form, #close-update-phone-form-btn').css({display: 'inline'})
				$('#update-phone-link').css({display: 'none'})
				}
				function updateEmail() {
					$('#update-email-form, #close-update-email-form-btn').css({display: 'inline'})
					$('#update-email-link').css({display: 'none'})
					}
				function closeUpdate() {
					$('#update-phone-form').css({display: 'none'})
					$('#update-phone-link').css({display: 'inline'})
					$('#update-email-form').css({display: 'none'})
					$('#update-email-link').css({display: 'inline'})
					}
// Retriveing data from API working
// MY_API_KEY = "1bc0ed7394d041a0a2760d09b2b5fe25";
// demo_url = "https://api.twelvedata.com/time_series?symbol=AAPL,MSFT,EUR/USD,SBUX,NKE&interval=1min&apikey=demo&source=docs"
// // url = "https://api.twelvedata.com/time_series?symbol=AAPL,MSFT,EUR/USD,SBUX,NKE&interval=1min&apikey=" + MY_API_KEY + "" 

// data;

// request = new XMLHttpRequest;
// request.open('GET', demo_url, true);

// request.onload = function() {
//   if (request.status >= 200 && request.status < 400){
//     // Success!
// 	data = JSON.parse(request.responseText);
// 	// console.log(data)
//   } else {
//     // We reached our target server, but it returned an error

//   }
// };

// request.onerror = function() {
//   // There was a connection error of some sort
// };

// request.send();
// console.log(data)



			
	
	
	
	
	
	