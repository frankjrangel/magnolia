function supportsSVG() {
	function SVGchecker() {
	  return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;  
	}
	if (!SVGchecker()) {
	  var imgs = document.getElementsByTagName('img');
	  var dotSVG = /.*\.svg$/;
	  for (var i = 0; i < imgs.length; ++i) {
		if(imgs[i].src.match(dotSVG)) {
		  imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
		}
	  }
	}
}