import lodash from 'lodash'
import axios from 'axios'
import Vue from 'vue'

window._ = lodash
window.axios = axios
window.Vue = Vue

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
