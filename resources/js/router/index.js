import Vue from "vue";
import Router from "vue-router";

import Feedback from "../components/Feedback";

Vue.use(Router)

export default new Router({
        routes: [
            {
                name: 'feedback',
                component: Feedback,
                path: '/feedback'

            }
        ],
        mode: 'history'
    }
)
