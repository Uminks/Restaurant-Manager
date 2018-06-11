import React, { Component } from 'react';
import RenderTipos from '../components/RenderTipos';

function ListaTipos(props) {

    return (
    	<div id="inicio" className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul>
            {
				props.lista.map((menu) => {
					return(
						<RenderTipos 
							{...menu}
							key={menu.id}
							handleDelete = {props.handleDelete}
						/>
					)
				})
			}						
            </ul>
        </div>          	    
    );
}
 
export default ListaTipos;