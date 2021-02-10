$(function(){
    //アンケート新規作成で「テキストボックス」を選択した時、回答選択肢の入力が出来なくなるようにする
    $('#formtypes1').change(function(){
        let result=$('#formtypes1').val();
        if(result =="1"){
            $('#item_content1').prop('disabled',true);
            $('#item_content2').prop('disabled',true);
            $('#item_content3').prop('disabled',true);
            $('#item_content4').prop('disabled',true);
            $('#item_content5').prop('disabled',true);
        }else{
            $('#item_content1').prop('disabled',false);
            $('#item_content2').prop('disabled',false);
            $('#item_content3').prop('disabled',false);
            $('#item_content4').prop('disabled',false);
            $('#item_content5').prop('disabled',false);
        }
    })
})
