function validation(){
		var result  =   true;
		var x       =   document.getElementsByTagName("input");
		var atindex  =   x[3].value.indexOf('@');
		var dotindex =   x[3].value.lastIndexOf('.');
		if (x[0].value.length==0 || x[1].value.length==0 || x[2].value.length==0 || x[3].value.length==0 || x[1].value.length!=10 || x[2].value.length!=10){
			if( x[0].value.length     ==0)
				   x[0].style.border    ="solid 2px red";
			if( x[1].value.length     ==0)
				   x[1].style.border    ="solid 2px red";
			if( x[2].value.length     ==0)
				   x[2].style.border    ="solid 2px red";
			if(  x[3].value.length   ==0)
				   x[3].style.border    ="solid 2px red";
			if(  x[1].value.length   !=10)
				   x[1].style.border    ="solid 2px red";
			if(x[2].value.length     !=10)
				   x[2].style.border    ="solid 2px red";
			result=false;
		}
		if (atindex<1 || dotindex >= x[3].value.length-2 || dotindex-atindex<3) {
			x[3].style.border    =   "solid 2px red";
			result = false
		}
		if(!(isNaN(x[0].value))){
			x[0].style.border    =   "solid 2px red";
			result=false;
		}
		if(isNaN(x[1].value) || isNaN(x[2].value) ){
			x[1].style.border    =   "solid 2px red";
			x[2].style.border    =   "solid 2px red";
			result=false;
		}
		if(x[1].value==x[2].value){
			x[1].style.border    =   "solid 2px red";
			x[2].style.border    =   "solid 2px red";
			result=false;
		}
		if (x[0].value.length==0 || x[1].value.length==0 || x[2].value.length==0|| x[3].value.length==0){
			var para = document.createElement('p');
			var node = document.createTextNode("Oops! You left one or more fields empty");
			para.appendChild(node);
			var parent = document.getElementById('error_messages');
			parent.innerHTML = "";
			parent.appendChild(para);
		}
		return result;	
}