
const app = new Vue({
	el:"#root",
	data: {
		albums: []
	},
	mounted() {
		//Chiamata API per recuperare i dati necessari che vengono salvati in albums[]
		axios.get('http://localhost/Esercizi/php-ajax-dischi/Esercizio-2/index.php')
		.then(result => {
			this.albums = result.data.response;
		})
	},
});
