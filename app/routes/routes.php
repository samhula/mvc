<?php
// SET YOUR APPLICATION ROUTES HERE
// Router::<HTTP Method>(Path, [Controller Name, Controller Method])

Router::get('/welcome', ['welcome', 'index']);
Router::get('/welcome/ooga', ['welcome', 'ooga']);
Router::get('/index', ['home', 'index']);
Router::get('/home', ['home', 'index']);
Router::get('/home/edit', ['home', 'edit']);
Router::get('/', ['home', 'index']);

// DO NOT DELETE
Router::loadController(['_404', 'index']);