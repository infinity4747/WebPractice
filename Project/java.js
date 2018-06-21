const JSON_PATH = " http://demo2820730.mockable.io/flora's_tea";
const SORT_PRICE = function(a, b) {
  return a.price - b.price;
};
class App{
	constructor(){
		this._onJsonReady = this._onJsonReady.bind(this);
		this._sortItems = this._sortItems.bind(this);

		const priceElement = document.querySelector("#desc");
		const priceButton = new SortButton(
			priceElement, this._sortItems, SORT_PRICE);
		
	}

	_sortItems(sortFunction){
		this.itemInfo.sort(sortFunction);
		this._renderItems();
	}
	_renderItems(){
		const itemContainer = document.querySelector("#contain");
		itemContainer.innerHTML = '';
		for(const info of this.itemInfo){
			const item = new Item(itemContainer, info.image, info.title, info.price);
		}
	}

	loadItems(){
		fetch(JSON_PATH).then(this._onResponse).then(this._onJsonReady);
	}

	_onJsonReady(json){
		this.itemInfo = json.items;
		const items = json.items;
		const itemContainer = document.querySelector("#contain");
		for(const info of this.itemInfo){
			const item = new Item(itemContainer, info.image, info.title, info.price);
		}
	}

	_onResponse(response){
		return response.json();
	}
}

class SortButton{
	constructor(containerElement, onClickCallback, sortFunction){
		this._onClick = this._onClick.bind(this);
		this.onClickCallback = onClickCallback; 

		this.sortFunction = sortFunction;
		containerElement.addEventListener('click', this._onClick);
	}

	_onClick(){
		this.onClickCallback(this.sortFunction);
	}
}

class Item{
	constructor(containerElement, imageUrl, title, price){
		
	
		let element = document.createElement("div");
		element.setAttribute("class", "con1");

		let image = document.createElement('img');
		image.src = imageUrl;

		let name = document.createElement("div");
		name.setAttribute("class", "titles");
		name.innerHTML = title;

		let price_item = document.createElement("div");
		price_item.setAttribute("class", "price");
		price_item.innerHTML = price + "$";
		element.append(image);
		element.append(name);
		element.append(price_item);
		containerElement.append(element);
	}
}

const app = new App();
app.loadItems();


