
const app = new Vue({
	el:"#root",
	data: {
		inputUser: '',
		albums: []
	},
	methods: {
		search() {
			axios.get('http://localhost/Esercizi/php-ajax-dischi/Esercizio-2/server.php', {
				params: {
					input_filter: this.inputUser
				}
			})
			.then(result => {
				this.albums = result.data.response;
			})
		},
	},
	mounted() {
		//Chiamata API per recuperare i dati necessari che vengono salvati in albums[]
		axios.get('http://localhost/Esercizi/php-ajax-dischi/Esercizio-2/server.php', {
			params: {
				input_filter:''
			}
		})
		.then(result => {
			this.albums = result.data.response;
		})
	},
});
