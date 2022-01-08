const search_product = (val) =>{
    if(val === ""){
        return;
    }else{
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
           if(this.readyState === 4 && this.status === 200){
              document.getElementById("dropDown").innerHTML = this.responseText;
              document.getElementById("dropDown").style.display = "block";
             
           }
        }
        xmlhttp.open("GET",`/?keyword=${val}`,true);
        xmlhttp.send();
    }
}

const App = () =>{
    const searchBox = document.querySelector("#searchProduct");
    searchBox.addEventListener("keyup",(e)=>{    
        search_product(e.target.value);
    })
    

}

App();