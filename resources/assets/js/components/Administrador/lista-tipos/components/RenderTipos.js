import React from 'react';

function RenderTipos(props) {
	return(
		<div>
            <ul>
            {
				props.lista.map((menu) => {
					return(
						<li key={menu.id}>
							{menu.titulo}
							//	Aqui imagen
						</li>
					)
				})
			}						
            </ul>
        </div>
    )
		
}

export default RenderTipos;