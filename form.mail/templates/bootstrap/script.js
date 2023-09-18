
function addGroup(){
        LNum = ++Num
        
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
        
        TagGroup = BX.create('div', {attrs:{id:"group"+LNum, className:"row my-3"}})
        TagGroup.innerHTML = TagGroupHTML     
        BX.append(TagGroup, BX("groups"))
}
function removeGroup(){
    Elem = event.currentTarget
    NameTagGroup = "group" + Elem.id
    BX.remove(BX(NameTagGroup))
}