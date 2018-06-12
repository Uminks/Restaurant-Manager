import React, { Component } from 'react';
import PropTypes from 'prop-types';

class RenderTipos extends Component {
	
	constructor(props){
		super(props);
	}

	render(){

		return(
			<li>

				<img src={this.props.imagen} className="img-thumbnail"/>
				<h4>{this.props.titulo}</h4>
				<h5><b>{this.props.precio}</b></h5>
				<h6 className="text-justify">{this.props.descripcion}</h6>

				<hr/>

			</li>	
		);

	}
		
}

export default RenderTipos;