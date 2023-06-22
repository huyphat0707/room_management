// Import
import Vue from 'vue';
// Global vue
window.Vue = Vue;

Vue.component('room-index', () => import('@container/Room/RoomIndex.vue'));

const appElement = document.getElementById("app");
if (appElement) {
	const app = new Vue({
		el: "#app",
	});

	global.vm = app;
}
