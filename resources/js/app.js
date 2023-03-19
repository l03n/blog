window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import { createApp } from 'vue';

import ChartExample from './components/ChartExample';
import ExampleComponent from './components/ExampleComponent';

const app = createApp({});

app.component('example-component', ExampleComponent);
app.component('chart-example', ChartExample);

app.mount('#app');
