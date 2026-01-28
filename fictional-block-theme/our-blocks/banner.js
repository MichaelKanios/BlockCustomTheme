wp.blocks.reggisterBlockType('ourblocktheme/banner', {
    title: 'Banner',
    edit:EditComponent,
    save: SaveComponent,
})
function EditComponent(){}
function SaveComponent(){
    return <p>This is from our block</p>
    
}