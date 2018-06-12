import React, { Component } from 'react';
import ListaTipos from './lista-tipos/containers/ListaTipos';
import AgregarTipo from './agregar-tipo/containers/AgregarTipo';

class AppAdministrador extends Component {

	constructor(){
		super();
		this.state = {
			menus: [],
			platos: [],
		}

		this.handleAddTipo = this.handleAddTipo.bind(this);
		this.handleDelete = this.handleDelete.bind(this);
		this.handleShowPlatos = this.handleShowPlatos.bind(this);
	}

	//Extrae todos los tipos de la DB
	componentDidMount(){
		fetch('/api/')
			.then(response => {
				return response.json()
			})
			.then(menus => {
				this.setState({ menus: menus })
			})
	}

	//Agrega datos a los tipos a la DB
	handleAddTipo(tipo){
		fetch('/api/', {
			method: 'POST',

			headers:{
				'Accept': 'application/json',
				'Content-Type': 'application/json',
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},

			body: JSON.stringify(tipo),
		})
			.then(response => {
				return response.json();
			})
			.then(data => {
				this.setState((prevState) => ({
					menus: prevState.menus.concat(data),
					currentMenu: data
				}));
			})
	}

	//Eliminar datos de tipo y toda su casacada de platos de la db
	handleDelete(tipo){
		fetch('/api/eliminar/'+tipo.id, {
			method: 'DELETE',
		})
			.then(response => {
				this.componentDidMount();
			})
	}

	//Peticion mostrar platos 
	handleShowPlatos(tipo){
		fetch('/api/'+tipo.id)
			.then(response => {
				return response.json()
			})
			.then(platos => {
				this.setState({ platos: platos })
			})
	}



    render() {
        return (
        	<div>
        		<ListaTipos 
        			lista={this.state.menus}
        			handleDelete={this.handleDelete}
        			handleShowPlatos={this.handleShowPlatos}
        			platos={this.state.platos}
        		/>
        		<AgregarTipo onAdd={this.handleAddTipo}/>
        	</div>
        );
    }
}
 
export default AppAdministrador;


 