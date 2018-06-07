import React, { Component } from 'react';
import { render } from 'react-dom';
import AppAdministrador from './components/Administrador/containers/AppAdministrador';

require('./bootstrap');
 

let appAdministrador = document.getElementById('appAdministrador');
if (appAdministrador) {
    render(<AppAdministrador />, appAdministrador);
}