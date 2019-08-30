<!DOCTYPE html>

<html xml:lang="zh" lang="zh">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    
    <title>Tradecoin4u</title>
    
    
    <link type="text/css" rel="stylesheet" href="stylesheets/form.css?<?=time()?>">
   
    <script src="/js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="/js/default.js?<?=time()?>" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <script src="/js/jquery-validation/jquery.validate.min.js"></script>
    <script src="/js/jquery-validation/localization/messages_zh_TW.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>

<header class="header clearfix">
        <a class="logo" href="/" title="Tradecoin4u"></a>
        

        <!-- <a href="/" class="main_menu_hamburger" title="手機選單">
            <div class="in">
                <span class= line1></span>
                <span class= line2></span>
                <span class= line3></span>
            </div>
        </a> -->

        <ul class="nav_mainpage clearfix">

            <li>
                <a id="div1Link" href="#how_to_trade_block" class="how_to_trade" title="交易流程">交易流程<br/>How to Trade</a>
            </li>
            <li>
                <a id="div2Link" href="#quote_block" class="quote" title="匯率">匯率<br/>Rates</a>
            </li>
            <li>
                <a id="div3Link" href="#faqs_block" class="faqs" title="常見問題">常見問題<br/>FAQs</a>
            </li>
            <li>
                <a id="div4Link" href="#contact_block" class="contact" title="聯絡我們">聯絡我們<br/>Contact</a>
            </li>
            <li>
                <a href="#" class="contract" title="遠期合約">遠期合約<br/>Forward Contract</a>
            </li>

        </ul>
       
    </header>

<div class="light_box_wrap">
                <div class="light_box">
                    <div class="box_top">取得報價<br/>Contact us
                        <a href="#" class="cancel"></a>
                    </div>
                    <form class="apply_form">
                        <p class="first_content">請填入您的基本資料及購買資訊，我們會將報價單及轉帳地址以email方式發送給您<br/>Please fill in your basic information and purchase information, we will send you
                            the quotation and transfer address by email.</p>
                        <p class="title_p">郵件地址<br/>Email :</p>
                        <input class="box_input" type="text" name="email" autocomplete="off" required>
                        <p class="title_p">聯絡電話<br/>Phone :</p>
                        <input class="box_input" type="text" name="phone" autocomplete="off" required>
                        <p class="purchase_p">購買幣種<span>Purchase<br/>currency：</span></p>
                        <select name="currency_tobuy" required>
                            <option value="">請選擇幣種&nbsp;Please select a currency</option>
                            <option value="BTC">比特幣 Bitcoin</option>
                            <option value="ETH">以太幣 Ethereum</option>
                            <option value="EOS">柚子幣 EOS</option>
                            <option value="LTC">萊特幣 Litecoin</option>
                            <option value="BCH">比特幣現金 BCH</option>
                            <option value="XRP">瑞波幣 Ripple</option>
                            <option value="XLM">Stellar (XLM)</option>
                            <option value="ADA">Cardano (ADA)</option>
                            <option value="DASH">達世幣 Dash</option>
                            <option value="USDT">泰達幣 USDT</option>
                        </select>
                        
                        <p class="purchase_p">支付幣種<span>Purchase<br/>currency：</span></p>
                        <select name="currency_topay" required>
                            <option value="">請選擇幣種&nbsp;Please select a currency</option>
                            <option value="美金">美金</option>
                            <option value="港幣">港幣</option>
                        </select>
                        <p class="title_p">購買數量<br/>Amount：</p>
                        <input class="box_input" type="text" name="amount" autocomplete="off" required>
                        <p class="title_p">備註<br/>Note : </p>
                        <input class="box_input" type="text" name="note" autocomplete="off">
                        <button type="button" onclick="submit_form()">送出<br/>Submit</button>
                        
                    </form>
                </div>
            </div>
<script>
function submit_form(){
        if($('form.apply_form').valid()){
            $.confirm({
                type:"green",
                title: '確定要送出嗎?',
                content: '',
                buttons: {
                    confirm: function () {

                        $.post('/price/send',$('form.apply_form').serialize(),function(data){

                            console.log(data)

                            if(data.success){
                                $.alert({
                                    type:"green",
                                    title: data.msg,
                                    content: '',
                                    buttons: {
                                        confirm: {
                                            text:"OK",
                                            
                                            action: function(){
                                                // if(data.success){
                                                //     $('a.cancel').click();
                                                // }
                                                $('a.cancel').click();
                                            }
                                        },
                                    },
                                });
                            }else{
                                $.alert({
                                    type:"orange",
                                    title: data.msg,
                                    content: '',
                                    buttons: {
                                        confirm: {
                                            text:"有資料未正確填寫",
                                            action: function(){
                                                
                                            }
                                        },
                                    },
                                });
                            }
                        },'json');
                    },
                    cancel: function () {
                    
                    },
                }
            });
        }
    }
</script>

</body>
</html>