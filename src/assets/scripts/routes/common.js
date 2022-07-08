import smoothscroll from "smoothscroll-polyfill";
import hamburger from "./../part/hamburger";


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

	},
};
