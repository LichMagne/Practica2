import loadash from 'lodash';
window._ = loadash;

import * as Popper from '@popperjs/core';
window.Popper = Popper;


import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import * as Swal from 'sweetalert2';
window.Swal=Swal;



import Echo from "laravel-echo";
import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 123,
    wsHost: window.location.hostname,
    wsPort: 6001,
    forceTLS: false,
    disableStats: true,
});

window.Echo.channel('events').listen('RealTimeEvent',(e)=>console.log('Message: '+e.message));

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

