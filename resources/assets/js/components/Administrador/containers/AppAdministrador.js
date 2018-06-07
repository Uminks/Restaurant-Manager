import React, { Component } from 'react';

class AppAdministrador extends Component {

	constructor(){
		super();
		this.state = {
			menus: [],
		}
	}

	componentDidMount(){
		axios.get('/api/')
			.then(menus => {
				console.log(menus.data);
				this.setState({ menus: menus.data })
			})
	}


	//Hay que Modularizar como componente
	renderProducts(){
		return this.state.menus.map(menu => {
			return (
				<li key={menu.id}>
					{menu.titulo}
					<img src={menu.image}/>
				</li>
			);
		})
	}
	//

    render() {
        return (
            <div>
                <ul>
					{this.renderProducts()}
                </ul>
            </div>
        );
    }
}
 
export default AppAdministrador;
 

 