$(function(){
    //アンケート新規作成で「テキストボックス」を選択した時、回答選択肢の入力が出来なくなるようにする
    $('#formtypes1').change(function(){
        let result=$('#formtypes1').val();
        if(result =="1"){
            $('#item_content1').prop('disabled',true);
        }else{
            $('#item_content1').prop('disabled',false);
        }
    })
})
