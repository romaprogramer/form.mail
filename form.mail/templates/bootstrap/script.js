
function addGroup(){
        LNum = ++Num
        TagGroup = document.createElement('div')
        TagGroup.id = "group" + LNum
        TagGroup.setAttribute('class', 'row my-3') 
        TagGroupHTML =   `<div class="col">
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
                    </div>`
        TagGroup.innerHTML = TagGroupHTML        
        document.getElementById("groups").append(TagGroup)    
}
function removeGroup(){
    Elem = event.currentTarget
    NumElem = Elem.id
    document.getElementById("group"+NumElem).remove()
}