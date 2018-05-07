import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/home/home'
import Group from '@/components/group/group'
import Book from '@/components/book/book'
import BackCast from '@/components/BackCast/BackCast'
import Personal from '@/components/Personal/Personal'
import BookFilm from '@/components/book/book_film'
import ReadBook from '@/components/book/read_book'
import TvBook from '@/components/book/tv_book'
import MusicBook from '@/components/book/music_book'
import CityBook from '@/components/book/city_book'
import Rooms from '@/components/listRoom/rooms'
Vue.use(Router)

export default new Router({
  routes: [
  	{
  		path:'/listRoom',
  		component:Rooms
  	},
  	{
      path: '/home',
      component:Home
    },
    {
      path: '/group',
      component:Group
    },
   	{
      path: '/book',
      component:Book,
      children:[
      	{
      		path:'video',
      		component:BookFilm
      	},
      	{
      		path:'read',
      		component:ReadBook
      	},
      	{
      		path:'tv',
      		component:TvBook
      	},
      	{
      		path:'city',
      		component:CityBook
      	},
      	{
      		path:'music',
      		component:MusicBook
      	},
      ]
    },
    {
      path: '/backCast',
      component:BackCast
    },
    {
      path: '/personal',
      component:Personal
    }
  ]
})
