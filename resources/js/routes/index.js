import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/views/pages/Home';
import About from '@/js/views/pages/About';
import Error404 from '@/js/views/errors/404';

Vue.use(VueRouter);

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home
		},
		{
			path: '/about',
			name: 'about',
			component: About
		},
    	{
    		path: "*",
    		name:  'error404',
    		component: Error404
    	},
	]
});

	// document.getElementById('loading-app').classList.add('active');
// for(var i=0;i<=50000;i++)
// {
	// setTimeout('return 0',1);
// }
	// setTimeout('return 0',5000);
	// setInterval(function() {
		// document.getElementById('loading-app').classList.remove('active');
		// document.getElementById('loading-app').classList.remove('active');
	// }, 1000);
	// 
	// 
	
	// setTimeout(next(),3000);
router.beforeEach((to, from, next) => {
	next();
});

export default router