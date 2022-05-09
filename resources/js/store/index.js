import Vue from "vue";
import Vuex from 'vuex';
import axios from "axios";
import {API_BASE_URL} from "../config";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        categories: [],
    },
    mutations: {
        getCategories(state, { categories }) {
          console.log(categories);
        }
    },
    actions: {
        getCategories(context) {
            console.log('hello');
            // axios.get(`${API_BASE_URL}/api/categories`)
            //     .then((response) => context.commit('getCategories', response.data.data));
        },
    },
});
