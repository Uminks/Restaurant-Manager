import React, { Component } from 'react';
import RenderTipos from '../components/RenderTipos';

class ListaTipos extends Component {

	constructor(props){
		super(props);
	}

	//Aqui va los Metodos y logica para agregar platos a los tipos

    render() {
        return (
        	<RenderTipos lista={this.props.lista} />              	    
        );
    }
}
 
export default ListaTipos;