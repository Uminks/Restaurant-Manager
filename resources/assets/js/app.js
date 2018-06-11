import React, { Component } from 'react';
import { render } from 'react-dom';
import AppAdministrador from './components/AppAdministrador';
import AppHome from './components/AppHome';

require('./bootstrap');
 
let appAdministrador = document.getElementById('appAdministrador');
if (appAdministrador) {
    render(<AppAdministrador />, appAdministrador);
}

let appHome = document.getElementById('appHome');
if (appHome) {
    render(<AppHome />, appHome);
}