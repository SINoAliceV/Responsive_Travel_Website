<script>
  var h = 0;
  
  function SetH(o) {
   h = o.scrollTop                        /*  body的滚动值赋给h  */
   SetCookie("scrollvalue", h)        /*  h存到名为scrollvalue的cookie  */
  }
   
  function SetCookie(Name, Value) {
   document.cookie = Name + "=" + Value + "; ";   /*  h存到名为scrollvalue的cookie  */
  }
  
  /*
	此时的cookie:  "scrollvalue=h;"
  */
  
  function GetCookie(Name) {                    /*   通过cookie名检索cookie值  */
	var name=Name+"=";                             /*   此时name='scrollvalue='   */                     
	var cn=document.cookie.split(';');  /*  将cookie用;分开,返回给cn数组,此时cn[0]='scrollvalue=h'  */
	
	for(i=0;i<cn.length;i++){					/* 在cn数组中查找Name */
		if(cn[i].indexOf(Name)==0)          
		return cn[i].substring(name.length,cn[i].length);          /*  返回'='后面的h */
	}
	return "";
  }
  
  
  window.onload = function () {
   document.getElementById("x").scrollTop = GetCookie("scrollvalue");//页面加载时设置scrolltop高度
  }
 </script>