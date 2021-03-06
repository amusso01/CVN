import smoothscroll from "smoothscroll-polyfill";
import hamburger from "./../part/hamburger";
import tabNavigation from "../part/tabNavigation";
import modal from "../part/modal";


import Glide from '@glidejs/glide'


// https://github.com/aFarkas/lazysizes
import 'lazysizes' ;
import 'lazysizes/plugins/bgset/ls.bgset';

export default {
	init() {
		// JavaScript to be fired on all pages

		// kick off the polyfill!
		smoothscroll.polyfill();

		// Hamburger event listener
		hamburger();

	},

	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired

		// GLIDE FEATURED NEWS
		const featuredNews = document.getElementById("glideFeaturedNews");
		if(typeof(featuredNews) != 'undefined' && featuredNews != null){
			new Glide('.glide-featured-news').mount()
		} 

		// MODAL 
		const modalEl = document.getElementById("jsModal");
		if(typeof(modalEl) != 'undefined' && modalEl != null){
			modal()
		} 

		// TAB GUIDELINES
		const guidelines = document.getElementById("guidelinesTab");
		if(typeof(guidelines) != 'undefined' && guidelines != null){
			tabNavigation()
		}

	},
};
