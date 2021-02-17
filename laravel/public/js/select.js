/*$(function () {
    for(var i=1;i<3;i++){
        $('#formtypes[i]').on('change',function(){
            let result=$('#formtypes[i]').val;
            if(result=='1'){
                $('.item_content[i])').attr('disabled',true);
            }else{
                $('.item_content[i]').attr('disabled',false);
            }
        })
    }
    });*/

$(function () {

    $('#formtypes1').on('change', function () {
        //一番上以外をどうやって取得する？
        let result = $('#formtypes1').val();
        var _class = $('[id^=item_content]').attr('class');
        if (result == '1') {
            $('.item_content1').attr('disabled', true);
            console.log(_class);
        }else{
            $('.item_content1').attr('disabled', false);
        }
    });
    $('#formtypes2').on('change', function () {
        //一番上以外をどうやって取得する？
        let result = $('#formtypes2').val();
        var _class = $('[id^=item_content]').attr('class');
        if (result == '1') {
            $('.item_content2').attr('disabled', true);
            console.log(_class);
        }else{
            $('.item_content2').attr('disabled', false);
        }
    });
    $('#formtypes3').on('change', function () {
        //一番上以外をどうやって取得する？
        let result = $('#formtypes3').val();
        var _class = $('[id^=item_content]').attr('class');
        if (result == '1') {
            $('.item_content3').attr('disabled', true);
            console.log(_class);
        }else{
            $('.item_content3').attr('disabled', false);
        }
    });
});



    // $('input[type=2]').change(function(){
    //     let hoge=$('.hoge1').attr('class');
    //     console.log(hoge);
    // });
    /*//アンケート新規作成で「テキストボックス」を選択した時、回答選択肢の入力が出来なくなるようにする
    $('select').change(function(){
        let result=$('[id^=formtypes]').val();
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
    });*/

