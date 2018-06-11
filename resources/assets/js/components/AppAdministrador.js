import React, { Component } from 'react';
import ListaTipos from './lista-tipos/containers/ListaTipos';
import AgregarTipo from './agregar-tipo/containers/AgregarTipo';

class AppAdministrador extends Component {

	constructor(){
		super();
		this.state = {
			menus: [],
		}

		this.handleAddTipo = this.handleAddTipo.bind(this);
		this.handleDelete = this.handleDelete.bind(this);
	}

	//Extrae todos los datos de la DB
	componentDidMount(){
		fetch('/api/')
			.then(response => {
				return response.json()
			})
			.then(menus => {
				this.setState({ menus })
			})
	}

	//Agrega datos a la DB
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

	//Eliminar datos de la db
	handleDelete(tipo){
		fetch('/api/eliminar/'+tipo.id, {
			method: 'DELETE',
		})
			.then(response => {
				this.componentDidMount();
			})
	}



    render() {
        return (
        	<div>
        		<ListaTipos lista={this.state.menus} handleDelete={this.handleDelete}/>
        		<AgregarTipo onAdd={this.handleAddTipo}/>
        	</div>
        );
    }
}
 
export default AppAdministrador;


 