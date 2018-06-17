requirejs.config({ // cau hinh` main cua? require.js
    paths: {
        'knockoutLib': 'lib/knockout', // thu vien cua? knockout
        'knockout' : 'knockout' // hello world
    }
});

requirejs(['knockout']);