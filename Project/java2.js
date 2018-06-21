	function process(responses){
			for (var i = 0; i < responses.length; i++) {
				 var div = document.createElement('div');
				 div.setAttribute("class","card");
				 var car = document.createElement('div');
				 car.setAttribute("class","title");
				 car.innerHTML=(responses[i].image);
				 car.innerHTML=(responses[i].title);
				 div.appendChild(car);
				 var price = document.createElement('div');
				 price.setAttribute('class','price');
				 price.innerHTML=(responses[i].price);
				 div.appendChild(price);
				 document.getElementById("container").appendChild(div);
			}
		}
			function onSuccess(response){
			return response.json().then(process);
		}
		
		function onFail(response){}
		
		function call(event){
			setTimeout(function(){
				fetch("http://demo2820730.mockable.io/flora's_tea").then(onSuccess,onFail);
			}, 2000);
		}