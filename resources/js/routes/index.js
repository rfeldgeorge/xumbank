import Vue from 'vue'
import VueRouter from 'vue-router'
import Dashboard from '../pages/Dashboard.vue'
import Wire from '../pages/Wire.vue'
import Profile from '../pages/Profile.vue'
import Setting from '../pages/Setting.vue'
import UpdateProfile from '../pages/UserUpdate.vue'

Vue.use(VueRouter)

const routes =[
    {
        path: '/dashboard',
        component: Dashboard
    },
    {
        path: '/wire',
        component: Wire
    },
    {
        path: '/profile',
        component: Profile
    },
    {
        path: '/settings',
        component: Setting
    },

    {
        path: '/update-profile',
        component: UpdateProfile
    }
]

export default new VueRouter({
    mode: 'history',
    routes
})