function showfunction(service, city, area)
{
    alert(service + " " + city + " " + area);
    var xmlhttp, content = "";
    if(city==""){
        content += "please fill in the city";
    }
    else if(area==""){
        if(content.length > 0){
            content += " and area";
        }
        else
            content += " please fill in the area";
    }
    
    if (city=="" || area == "" || service == ""){
        alert(content);
        document.getElementById("serviceProviderList").innerHTML=content;
      return;
    }
    if (window.XMLHttpRequest){
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else{// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("serviceProviderList").innerHTML=xmlhttp.responseText;
          
      }
    }
    xmlhttp.open("GET","ajax_practice.php?city="+city,true);
    xmlhttp.send();
}