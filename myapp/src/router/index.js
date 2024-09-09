import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import PostView from '@/components/PostView'
import PostShow from '@/components/PostShow';

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/posts',
      name: 'PostView',
      component: PostView
    },
    {
      path: '/post/:id',
      name: 'PostShow',
      component: PostShow
    }
  ],
})
