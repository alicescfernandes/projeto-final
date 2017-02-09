/* 
 * NAME: Simple Analytics Script 
 * AUTHOR: Alice Fernandes
 * EXCLUSIVELY FOR MY PORTFOLIO WEBSITE
 *
 * DESCRIPTION: This script will take data out of the browser window object and send it to a database in order to provide user analytics data to study the website interaction with the user 
 *              This data will then be processed by a backend panel, to provide detailed information on how the user acess their website, and to provide valuable information that can help to improve the webste
 *				No sensitive data is taken, and it is stored a cookie with an ID, so that we can see how many acess does the user has made to the website.
 *	
 */


var _ = undefined
function Analytics (dataSettings){
	this.servicesAdded = [];
	this.lastSentData = {};
	this.lastSemtDataTimeStamp = '';
	this.serviceStarted = false;
	this.serviceStatus = 'disconnected';
	this.dataObject = {
		userAgent:_, 
		clientWidth:_,
		clientHeight:_,
		appName:_,
		appCodeName:_,
		appVersion:_,
		platform:_,
		product:_,
		cookieEnabled:_,
		platform:_,
		vendor:_,
		colorDepth:_,
		pixelDepth:_,
		language:_
	};

}


Analytics.prototype.setUserID = function(){
	document.cookie = 'aID=123;' //set random uID
}
Analytics.prototype.send = function(){} //ajax request
Analytics.prototype.addService = function(url){
	this.servicesAdded.push(url);
}
Analytics.prototype.makeDataObject = function(){
	this.dataObject.appCodeName = window.navigator.appCodeName;
	this.dataObject.appVersion = window.navigator.appVersion;
	this.dataObject.appName = window.navigator.appName;
	this.dataObject.cookieEnabled = window.navigator.cookieEnabled;
	this.dataObject.language = window.navigator.language;
	this.dataObject.platform = window.navigator.platform;
	this.dataObject.product = window.navigator.product;
	this.dataObject.userAgent = window.navigator.userAgent;
	this.dataObject.vendor =   window.navigator.vendor;
	this.dataObject.clientWidth = window.screen.availWidth
	this.dataObject.clientHeight = window.screen.height;
	this.dataObject.pixelDepth = window.screen.colorDepth;
	this.dataObject.colorDepth = window.screen.pixelDepth;

	console.log(this.dataObject)
}
Analytics.prototype.getDataObject = function(){
	return this.dataObject
}
Analytics.prototype.prepareDataObject = function(){
	var postString = '?';

	for(var property in this.dataObject){
		postString+=encodeURIComponent(property+'=' +this.dataObject[property]) + '&'
	}

	return postString
}

var analytics = new Analytics()