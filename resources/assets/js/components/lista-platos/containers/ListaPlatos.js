import React, { Component } from 'react';
import RenderPlatos from '../components/RenderPlatos';

function ListaPlatos(props) {

    return (
    	<div id="cartaTitulo" className="modal fade">
    		<div className="modal-dialog modal-content">

				<div className="modal-body">			
					<div className="row" id="carta">

			            <ul>
			            {
			            	props.platos.map((plato) => {
								return(
									<RenderPlatos 
										{...plato}
										key={plato.id}
									/>
								)
							})
						}										
			            </ul>

			        </div>
			    </div>

            </div>
        </div>          	    
    );
}
 
export default ListaPlatos;