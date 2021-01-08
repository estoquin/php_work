function selectProvincia(element){
    var prov = element.getAttribute('title');
    document.getElementById("prov-title").innerHTML = prov;
    tablaAJAX(prov);
    provInfo(prov);
    // alert("work");
}



//Basic Ajax for the data of each province
function tablaAJAX(prov){
    var xhr = new XMLHttpRequest();
    var province = prov;
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText = null){//Mi If no esta funcionando
                document.getElementById("tabla").innerHTML = "Sin datos";
            }
            else{
                document.getElementById("tabla").innerHTML=this.responseText;//responseText returns and string with the answer to the query, null if there is nothing
            }
        }
    }   
    xhr.open('GET', 'app/get.php?prov='+province, true);
    xhr.send();
}   

function provInfo(prov){
    var xhr = new XMLHttpRequest();
    var province = prov;
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('prov-info').innerHTML = this.responseText;
        }
    }
    xhr.open('GET', 'app/getInfo.php?prov='+province, true);
    xhr.send();
}

/*LOADER ANIMATION*/
