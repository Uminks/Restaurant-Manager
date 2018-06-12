import React, { Component } from 'react';
import ListaTipos from './lista-tipos/containers/ListaTipos';

class AppHome extends Component {

	constructor(){
		super();
		this.state = {
			menus: [],
			platos: [],
		}
		
		this.handleShowPlatos = this.handleShowPlatos.bind(this);
	}

	//Extrae todos los datos de la DB
	componentDidMount(){
		fetch('/api/')
			.then(response => {
				return response.json()
			})
			.then(menus => {
				this.setState({ menus: menus })
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
        			handleShowPlatos={this.handleShowPlatos} 
        			platos={this.state.platos}
				/>
        	</div>
        );
    }
}
 
export default AppHome;