import React, { Component } from 'react';
import ListaTipos from './lista-tipos/containers/ListaTipos';

class AppHome extends Component {

	constructor(){
		super();
		this.state = {
			menus: [],
		}
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


    render() {
        return (
        	<div>
        		<ListaTipos lista={this.state.menus} />
        	</div>
        );
    }
}
 
export default AppHome;