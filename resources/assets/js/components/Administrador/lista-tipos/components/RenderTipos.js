import React from 'react';

function RenderTipos(props) {
	return(
		<div id="inicio" className="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul>
            {
				props.lista.map((menu) => {
					return(
						<li key={menu.id} id="Titulo" className="noStyle">
							<img src={menu.image} alt="Imagen"/>
							<a href="#cartaTitulo" data-toggle="modal"><p>{menu.titulo}</p></a>
						</li>
					)
				})
			}						
            </ul>
        </div>
    )
		
}

export default RenderTipos;
   	
						
						
				