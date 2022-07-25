function getScrollbarWidth() {
	var outer = document.createElement("div");
	outer.style.visibility = "hidden";
	outer.style.width = "100px";
	outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps

	document.body.appendChild(outer);

	var widthNoScroll = outer.offsetWidth;
	// force scrollbars
	outer.style.overflow = "scroll";

	// add innerdiv
	var inner = document.createElement("div");
	inner.style.width = "100%";
	outer.appendChild(inner);        

	var widthWithScroll = inner.offsetWidth;

	// remove divs
	outer.parentNode.removeChild(outer);

	return widthNoScroll - widthWithScroll;
}

function findDimensions() //函数：獲取尺寸
{	
	var winWidth = 0;
	var winHeight = 0;
	
	
	//獲取窗口宽度
	if (window.innerWidth)
	winWidth = window.innerWidth;
	else if ((document.body) && (document.body.clientWidth))
	winWidth = document.body.clientWidth;
	//獲取窗口高度
	if (window.innerHeight)
	winHeight = window.innerHeight;
	else if ((document.body) && (document.body.clientHeight))
	winHeight = document.body.clientHeight;
	//通過深入Document内部對body進行檢測，獲取窗口大小
	/*
	if (document.documentElement  && document.documentElement.clientHeight && document.documentElement.clientWidth)
	{
		winHeight = document.documentElement.clientHeight;
		winWidth = document.documentElement.clientWidth;
	}
	//BUG:
		winHeight發散
		網頁一讀取無法準確抓到視窗大小	
	
	*/
	
	var titleimg = new Image();
	titleimg.src = "../img/title.png";
	var height = titleimg.height;
	var width = titleimg.width;
	
	var headerheight = document.getElementsByTagName('header').height;
	var footerheight = document.getElementsByTagName('footer').height;
	//document.getElementById('text').innerHTML = height + "," + footerheight;
	
	var bodyHeight = winHeight - 171;//171為header+footer高度
	document.getElementById('b2').style.height = bodyHeight;
	//改變左區及右區大小
	var leftwidth = bodyHeight*167/596;//(167/596)為背景長寬比
	var leftheight = bodyHeight;
	document.getElementById('lhand').style.height = leftheight;	
	var elems_table = document.getElementsByClassName('table_cell');
	for(var i = 0; i < elems_table.length; i++) {
		elems_table[i].style.height = bodyHeight / 13;
		//13為測試結果
	}
	//document.getElementById('text').innerHTML = bodyHeight / 9;
	
	//改變buttom大小
	var elems = document.getElementsByClassName('buttom');
	for(var i = 0; i < elems.length; i++) {
		elems[i].style.width = leftwidth;
	}
	
	var rightwidth = winWidth - leftwidth - getScrollbarWidth();
	document.getElementById('rhand').style.width = rightwidth;
	var innermargin = rightwidth*3/100;
	document.getElementById('inner').style.margin = innermargin;
	var borderWidth = 5;
	document.getElementById('inner').style.borderWidth = borderWidth;
	document.getElementById('inner').style.height = bodyHeight - (innermargin+borderWidth*2)*2 - getScrollbarWidth();
	document.getElementById('container').style.height = bodyHeight - (innermargin+borderWidth*2)*2 - getScrollbarWidth();
	document.getElementById('container').style.width = rightwidth - (innermargin+borderWidth*2)*2;
	
	var elems_container = document.getElementsByClassName('indexcontainer');
	for(var i = 0; i < elems.length; i++) {
		elems_container[i].style.height = bodyHeight - (innermargin+borderWidth*2+9)*2 - getScrollbarWidth();//9為測試結果
	}
}
//调用函数，獲取數值
window.onresize=findDimensions;
