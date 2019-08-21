<form class="mail_form">

<div class="page-header">
      <div class="row">
        <div class="col-md-4 text-xs-center text-md-left text-nowrap">
          <h1><i class="page-header-icon ion-locked"></i>公告信件發送</h1>
        </div>

        <hr class="page-wide-block visible-xs visible-sm">

        <!-- Spacer -->
        <div class="m-b-2 visible-xs visible-sm clearfix"></div>
      </div>
    </div>

    <div class="row">
        <div class="form-group col-7">
            <label for="email_list">收件人</label>
            <input type="text" class="form-control" id="email_list"  name="email">
        </div>

        <div class="form-group col-5 ">
            <label for="exampleFormControlInput1">會員帳號<label class="mb-0"><input style="margin-left: 20px; " id="select_all" type="checkbox" value=""> 全部選取</label></label>
            <div class="account_block drop_list">
                <div onclick="toggle_drop(this)">請選擇</div>
                
                <ul class="account_ul" style="height:300px;">
                  <?php
                    foreach($data_list as $row):
                    ?> 
                    <li><label><input type="checkbox" value="<?=$row?>"><?=$row?></label></li>
                    <?php
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>
    
    </div>
    
    <div class="row">
        <div class="form-group col-7">
            <label for="exampleFormControlSelect1">主旨</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="subject">
        </div>

        <div class="form-group col-5 ">
            <label for="exampleFormControlInput1">信件類別</label>
            <div class="category_block drop_list ">
                <select class="form-control category_ul aaa" id="exampleFormControlSelect1" name="type">
                    <option value="System">系統公告</option>
                    <option value="Category">類別公告</option>
                    <option value="Other">其他</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">內容</label>
        <p style="color:#183b52;font-weight:bold;">剩餘<span style="color:red" id='textCount'>1000</span>個字<br/> </p>
        <textarea class="form-control" id="content" name="content" onkeyup="words_deal()"></textarea>
    </div>

      <button type="submit" class="btn btn-primary"  onclick="send_code(this)">Send</button>

</form>
<script src="/js/autosize.min.js"></script>
<script src="/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<script>

    // $(document).ready(function(){
    //     $('#forgot_form').submit(function(e){
    //         e.preventDefault();
    //         var form = $('#forgot_form');
    //         form.find('button[type="submit"]').attr('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
    //         $.post('/login/forgot_email_check',form.serialize(),function(data){
    //             if(data.success){
    //                 $('#forgot_panel').html(data._html);
    //             }else {
    //                 alert_box('orange', data.msg, '');
    //                 form.find('button[type="submit"]').attr('disabled', false).html('NEXT');
    //             }
                
    //         },'json');
    //     });
    // });
    // function fetch(){
    //     $.post('http://34.80.194.175:9004/api/AvaAPI/InvestAHFTBackend',{},function(data){
    //         console.log(data)
    //     },'json');
    // }
    function send_code(btn){
        var form = $('.mail_form');

        $(btn).attr('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
        
        $.post('/mail/send',$(form).serialize(),function(data){
            if(data.success){
                alert_box('green', data.msg, '');
            }else {
                alert_box('orange', data.msg, '');
            }
            $(btn).attr('disabled', false).html('Send');
        },'json');
        
    }

    $(document).ready(function(){
        autosize($('#content'));
        $('body').mouseup(function(e){
            var container = $(".account_block");
            if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
            {
                $('.account_ul').slideUp('fast');
                console.log('not target');
            }else{
                console.log('target');
            }
        });
        $('.account_ul input[type="checkbox"]').change(function(){
            var _list = '';
            $('.account_ul input[type="checkbox"]:checked').each(function(i){
                _list = _list + $(this).val() + ',';
            });
            $('#email_list').val(_list);
        });
        $('#select_all').change(function(){

            $('.account_ul input[type="checkbox"]').prop('checked',$('#select_all').prop('checked')).change();

        });

        $('.account_ul').perfectScrollbar();

    });
    function toggle_drop(el){
        $('.account_ul').slideToggle('fast');
    }

    function words_deal() 
    { 
        var curLength=$('#content').val().length; 
        if(curLength>1000) 
            { 
            var num=$('#content').val().substr(0,10000); 
            $('#content').val(num); 
            alert('超過字數限制，多出的字將被截斷' ); 
            } 
        else 
        { 
        $('#textCount').text(1000-$('#content').val().length); 
        } 
    } 
    </script>