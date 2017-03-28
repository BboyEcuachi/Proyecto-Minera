module.exports = function(app, passport) {
    var fs = require('fs');

    app.get('/', function(req, res) {
        res.redirect('/index.html');
    });

    app.get('/home', function (req, res) {
        res.render('index.html');
    });

    /*app.get('/verUsuario', isLoggedIn, function (req, res) {
        res.render('VerUsuarios.html');
    });

    app.get('/crearUsuario', function (req, res) {
        res.render('CrearUsuario.html', {title: 'Registrar Usuarios'});
    });
*/
    app.get('/mail', function (req, res) {
        res.render('Mail.html');
    });

    app.get('/Mapa', function (req, res) {
        res.render('mapa.html');
    });


    app.get('/Equipo', function (req, res) {
        res.render('Equipo.html');
    });

};