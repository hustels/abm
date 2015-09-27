window.onload = function(){
	//Vue instance
	new Vue({
		el: '#table-report',

		data: {
			//Campo de busqueda
			search: '',
			//campo a ordenar
			ordenarpor: '',
			reverso: false ,
			//reports: [],
			// columnas de la tabla
			columns:  ['Peticion' , 'Link' ,'Usuario' , 'Grupo' ,'Aplicacion' , 'Fecha'],
			listaOrden:  ['sm_num' , 'link' ,'employer_id' , 'group' ,'application' , 'created_at'],
		
		},
		ready: function() {

		   	this.fetchReports();

		    },
		methods: {
			fetchReports: function(){
				this.$http.get('/reports/vueGetRequest' , function(reports){
				this.$set('reports' , reports);
					//this.reports = reports;
				})
			},
			sortBy: function(ordenarpor){
				this.reverso = (this.ordenarpor == ordenarpor) ? ! this.reverso : false;
				this.ordenarpor = ordenarpor;
			}
		}

	})
}