var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.styles([
        'style.css'
        
    ]);
});


elixir(function(mix) {
    mix.scripts([
        
        'bootstrap.js',       
        
        'datatables.js',
        
    ]);
});