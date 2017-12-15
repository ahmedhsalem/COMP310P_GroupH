function checkForm(form){
			var numbers = /^[0-9]+$/; 
			var eventcapacity = document.getElementById("event_capacity").value;
			var ticketprice = document.getElementById("ticket_price").value;
			var ok = true; 
				
			if (!numbers.test(eventcapacity)) {
				 document.getElementById("event_capacityError").innerHTML = "Numbers only please";
					ok = false; 
				   }
			if (!numbers.test(ticketprice)) {
				 document.getElementById("ticket_priceError").innerHTML = "Numbers only please";
					ok = false; 
				   }
	return ok;
	}
