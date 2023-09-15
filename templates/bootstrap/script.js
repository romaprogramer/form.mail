
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
        LNum = ++Num
        document.getElementById("groups").innerHTML = document.getElementById("groups").innerHTML + 
                `<div id="group${LNum}" class="row my-3">
                    <div class="col">
                        <input type="text" class="form-control form-control-sm " name="brand[]" >
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="product[]">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="number[]">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="fasovka[]">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="client[]">
                    </div>
                    <div class="col">
                        <button type"button" onclick="addGroup()" class="btn btn-primary p-1">+</button>
                        <button type"button" id="${LNum}" onclick="removeGroup()" class="btn btn-primary px-2 py-1">-</button>
                    </div>
                </div>`
}
function removeGroup(){
    Elem = event.currentTarget
    NumElem = Elem.id
    document.getElementById("group"+NumElem).remove()
}