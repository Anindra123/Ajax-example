const search_product = (val) =>{
    if(val === ""){
        return;
    }else{
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = (e)=>{
            console.log(e);
        }
        xmlhttp.open("GET",`/?search=${val}`,true);
        xmlhttp.send();
    }
}

const App = () =>{
    const searchBox = document.querySelector("#searchProduct");
    searchBox.addEventListener("input",(e)=>{    
        search_product(e.target.value);
    })
    

}

App();