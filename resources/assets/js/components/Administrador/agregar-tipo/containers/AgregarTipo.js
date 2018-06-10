import React, { Component } from 'react';

class AgregarTipo extends Component {

	constructor(props){
		super(props);

		this.state = {
			nuevoTipo: {
				titulo: '',
				image: 'image/plato.jpg',
			}
		}

		this.handleSubmit = this.handleSubmit.bind(this);
		this.handleInput = this.handleInput.bind(this);
	}
	
	handleInput(key, e){
		let state = Object.assign({}, this.state.nuevoTipo);
		state[key] = e.target.value;
		this.setState({nuevoTipo: state}); 
	}

	handleSubmit(e){
		e.preventDefault();
		this.props.onAdd(this.state.nuevoTipo);
		document.getElementById("titulo").value="";
	}


    render() {
        return (
        	<div className="contenedorAgregar">
	        	<div className="ingresoTipo">

	        		<form onSubmit={this.handleSubmit}>
						<input id="titulo" type="text" className="form-control"  placeholder="Título" onChange={(e)=>this.handleInput('titulo', e)}/> 
						<input type="file" className="file"/>

						<input type="submit" className="guardarTipo btn btn-info pull-right" value="Guardar"/> 
					</form>

	        	</div>
        	</div>
        );
    }
}

export default AgregarTipo;