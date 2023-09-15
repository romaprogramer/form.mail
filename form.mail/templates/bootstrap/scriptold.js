
/* document.addEventListener( "load", () =>{
    console.log("check");
    document.getElementById("add3").addEventListener("onclick", ()=>{
        document.getElementById("groups").innerHTML = document.getElementById("groups").innerHTML + 
        "<div id='group1'>" +
                    "<input type='text' name='brand[]'>"  +
                    "<input type='text' name='product[]'>"  +
                    "<input type='text' name='number[]'>"  +
                    "<input type='text' name='fasovka[]'>"  +
                    "<input type='text' name='client[]'>"  +
                "</div>"
    })
}) */

function addGroup(){
        document.getElementById("groups").innerHTML = document.getElementById("groups").innerHTML + 
        "<div id='group1'>" +
                    "<input type='text' name='brand[]'>"  +
                    "<input type='text' name='product[]'>"  +
                    "<input type='text' name='number[]'>"  +
                    "<input type='text' name='fasovka[]'>"  +
                    "<input type='text' name='client[]'>"  +
                "</div>"
}