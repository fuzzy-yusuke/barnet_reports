$(function(){
    //アンケート新規作成で「テキストボックス」を選択した時、回答選択肢の入力が出来なくなるようにする
    document.getElementById("formtypes1").onchange = function() {
        var result=$(formtypes1.value);
        //console.log(result);
        if(result="1"){
            console.log(result);
            $('item_content1').prop('disabled',false);
        }else{
            $('item_content1').prop('disabled',true);
        }

    };
})
