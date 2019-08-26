<!DOCTYPE html>

<html xml:lang="zh" lang="zh">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    
    <title>Tradecoin4u</title>
    
    
    <link type="text/css" rel="stylesheet" href="stylesheets/home.css?<?=time()?>">
   
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
        <a class="logo" href="#" title="Tradecoin4u"></a>
        <button type="button" id="BackTop"  class="top"></button>
        

        <!-- <a href="/" class="main_menu_hamburger" title="手機選單">
            <div class="in">
                <span class= line1></span>
                <span class= line2></span>
                <span class= line3></span>
            </div>
        </a> -->

        <ul  class="nav_mainpage clearfix">

            <li>
                <a id="div6Link" href="#top" class="how_to_trade" title="首頁">首頁<br/>Home</a>
            </li>

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
            <!-- <li>
                <a href="#" class="contract" title="遠期合約">遠期合約<br/>Forward Contract</a>
            </li> -->

        </ul>
       
    </header>

    <div class="main_userpage">
        <div id="#top" class="trading_service_block">
            <div class="content">
                <p class="title">線上換匯所<br/>OTC trading service </p>
                <p class="content_font">BTC Shop是由一群值得信賴的經紀人團隊組成，<br/> 團員擁有卓越的比特幣及加密貨幣知識。<br/> 我們在香港交易比特幣已超過5年，<br/>並在可靠性，經濟性，安全性和便利性方面的優勢引領行業。</p>
                <p class="content_font">The BTC Shop is made up of a team of trusted brokers  with excellent bitcoin and cryptocurrency knowledge. We have been trading Bitcoin in Hong Kong for more than 5 years and lead the industry in terms of reliability affordability,safety and convenience.</p>
                <a href="#" class="get_price">取得報價<br/>Contact us</a>
                <a href="#quote_block" id="div5Link" class="get_price_bottom">先看匯率<br/>View exchange rate</a>
                <p class="trading_time">交易時間：周一至周五9:00至23:00 | 周六日9:00至23:00</p>
                <p class="trading_time2">Trading Hours: Monday to Friday 9:00~23:00 | Weekend 9:00至23:00</p>
            </div>
            
            
            <div class="coin_top"></div>
            <div class="coin_middle"></div>
            <div class="coin_bottom"></div>
                
            
            
            
        </div>

        <div id="how_to_trade_block">
            <p class="subtitle">交易流程<br/>How to Trade</p>
            <ul>
                <li>
                    <img src="images/1.png">
                    <p class="li_p_header">聯絡我們<br/>CONTACT US</p>
                    <P>寄送Email給我們，告訴我們你想交易什麼，然後我們會給你作出報價。第一次買家需要提供身份證副本作紀錄。</P>
                    <P>Contact us with Email and tell us what you would like to trade. We will give you a quotation. First time buyer must provide HKID copy for record.</P>
                </li>
                <li>
                    <img src="images/2.png">
                    <p class="li_p_header">轉帳<br/>TRANSFER</p>
                    <P>請在10分鐘內匯款到我們提供的賬戶內。</P>
                    <P>Please transfer the payment to the account we provided within 10 mins.</P>
                </li>
                <li>
                    <img src="images/3.png">
                    <p class="li_p_header">交易完成<br/>COMPLETE</p>
                    <p class="li_p_content">當我們確認您的轉賬後，我們會在把對應的金額轉到您提供的帳戶或地址。</p>
                    <p class="li_p_content">When we have confirmed your transaction, we will transfer the right amount to the account or address you provided.</p>
                </li>
            </ul>
            <div class="price_block">
                <a href="#" class="get_price_tradeblock">取得報價<br/>Contact us</a>
                <a href="#" id="div7Link" class="get_price_bottom_tradeblock">先看匯率<br/>View exchange rate</a>
            </div>

            <div class="light_box_wrap">
                <div class="light_box">
                    <div class="box_top">取得報價<br/>Contact us
                        <a href="#" class="cancel"></a>
                    </div>
                    <form class="apply_form">
                        <p class="first_content">請選擇您偏好的聯繫方式，我們會將報價單及轉帳地址以您選擇的方式發送給您<br/>Please select your preferred contact method and we will send you the quotation and transfer address in the way you choose.</p>
                        
                        <p class="vip_p">BTCShop 高級客戶認證<br/>交易量首次達到1百萬港元以上客戶需要填寫此表格<br/>For the all users who reach the transaction volume over HK$1 million.<br/>Customers need to fill out this form.</p>
                        <div class="link">
                            <a href="/form">Email</a>
                            <a href="https://api.whatsapp.com/send?phone=85264114188&text=%E6%88%91%E5%B0%8DCrptoExchange%E6%9C%89%E8%88%88%E8%B6%A3">WhatsApp</a>
                        </div>
                        
                        <!-- <input type="radio" name="contact_way" value="email"> Email<br>
                        <input type="radio" name="contact_way" value="whatsapp"> WhatsApp<br>
                        
                        <button type="button" onclick="submit_form()">送出<br/>Submit</button> -->
                        
                    </form>
                </div>
            </div>
            <img class="circle_left" src="/images/circle_left_new@2x.png">
            <img class="circle_middle" src="/images/circle_middle_new.png">
            <img class="circle_right" src="/images/circle_right_new.png">
        </div>


        <div id="quote_block">
            <p class="subtitle">匯率<br/>Rates</p>
            <ul>
                <div>
                    <p>貨幣<br/>Currency</p>
                    <p>收價 <br/>We Buy</p>
                    <p>售價<br/>We Sell</p>
                </div>
                <li>
                    <p>比特幣<br/>Bitcoin</p>
                    <p>HK$ <?=number_format($price_data['BTC']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['BTC']['sell'],2)?></p>
                </li>
                <li>
                    <p>以太幣<br/>Ethereum</p>
                    <p>HK$ <?=number_format($price_data['ETH']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['ETH']['sell'],2)?></p>
                </li>
                <li>
                    <p>柚子幣<br/>EOS</p>
                    <p>HK$ <?=number_format($price_data['EOS']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['EOS']['sell'],2)?></p>
                </li>
                <li>
                    <p>萊特幣<br/>Litecoin</p>
                    <p>HK$ <?=number_format($price_data['LTC']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['LTC']['sell'],2)?></p>
                </li>
                <li>
                    <p>比特幣現金<br/>BCH</p>
                    <p>HK$ <?=number_format($price_data['BCH']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['BCH']['sell'],2)?></p>
                </li>
                <li>
                    <p>瑞波幣<br/>Ripple</p>
                    <p>HK$ <?=number_format($price_data['XRP']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['XRP']['sell'],2)?></p>
                </li>
                <li>
                    <p>Stellar<br/>(XLM)</p>
                    <p>HK$ <?=number_format($price_data['XLM']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['XLM']['sell'],2)?></p>
                </li>
                <li>
                    <p>Cardano<br/>(ADA)</p>
                    <p>HK$ <?=number_format($price_data['ADA']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['ADA']['sell'],2)?></p>
                </li>
                <li>
                    <p>達世幣<br/>Dash</p>
                    <p>HK$ <?=number_format($price_data['DASH']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['DASH']['sell'],2)?></p>
                </li>
                <li>
                    <p>泰達幣<br/>USDT</p>
                    <p>HK$ <?=number_format($price_data['USDT']['buy'],2)?></p>
                    <p>HK$ <?=number_format($price_data['USDT']['sell'],2)?></p>
                </li>
            </ul>
            <div class="p_block">
                <p class="small_font">1.價格僅供參考,交易前請與客服確認<br/>Price is for reference only, please confirm with CS before trading.</p>
                <p class="small_font">2.有些加密貨幣可能需要數個小時才能轉款成功,請耐心等耐.<br/>Cryptocurrencies may take up to a few hours to confrim. Please be patient.</p>
            </div>
            
            <a href="#" class="get_price_quoteblock">取得報價<br/>Contact us</a>
        </div>
        <div id="faqs_block">
            <p class="subtitle">常見問題<br/>FAQs</p>
            <div>
                <div>
                    <a href="#"></a>
                    <p class="question">為什麼使用Email?<br/>Why use Email to trade?</p>
                    <p class="answer">Email是受歡迎的即時通訊移動應用程序。 它使我們能夠覆蓋更廣泛的受眾。 除此之外，所有Email訊息都經端對端加密保障，對我們來說確保你的數據安全是非常重要。</p>
                    <p class="answer">Email is the popular IM mobile app . It allow us to reach wider audience.  Beside that, all Email and calls are secured with end-to-end encryption, it is very important for us to make sure all your data is safe.</p>
                </div>
                <div>
                    <a href="#"></a>
                    <p class="question">如何開一個比特幣錢包?<br/>How to open a Bitcoin Wallet?</p>
                    <p class="answer">取得比特幣之前，更要先準備好存放比特幣的軟體錢包。我們建議使用 Blockchain.com. 一個簡單易用,及安全的比特幣錢包</p>
                    
                </div>
                <div>
                    <a href="#"></a>
                    <p class="question">最低交易量是多少？<br/>what is the minimum trading volume?</p>
                    <p class="answer">最低交易額為港幣二千五百元。港幣一萬元以下的交易我們會收取轉帳費。</p>
                    <p class="answer">The minimum trade amount is HK$ 2,500.00. We will charge transfer fee for transactions under HK $ 10,000.</p>
                </div>
                <div>
                    <a href="#"></a>
                    <p class="question">誰支付礦工費？<br/>Who pays for the miners fee?</p>
                    <p class="answer">為了使我們的交易簡單快捷，發送數字資產的人將支付礦工的費用。 例如，如果您從我們購買10ETH，您將會收到10ETH，反之亦然，如果您向我們出售10ETH，我們將期待收到10ETH。如果收取的數量與我們談洽有出入，我們會按比例調整。<br/>>港幣一萬元以下的交易我們會收取轉帳費。 </p>
                    <p class="answer">In order to make our transaction smoothly, whoever sends the digital assets will pays for the miners fee. For example, if you are buying 10ETH from us, you will be expecting to receive 10ETH, vice versa, if you are selling 10ETH from us, we will be expecting to receive 10ETH.<br/>>We will charge transfer fee for transactions under HK $ 10,000.</p>
                </div>
                <div>
                    <a href="#"></a>
                    <p class="question">如果交易在10分鐘內沒有完成會如何處理？<br/>What happen if the transaction not complete within 10 mins?</p>
                    <p class="answer">如果10分鐘內不能成功付款，我們提供的價格不再有效。如果因網絡速度影響，10分鐘內沒法確認轉賬，轉賬確認後我們會給您一個新的報價，如果您不同意，所有的資金都會發送到您所提供的地址。你將需要支付此轉賬所產生的費用。</p>
                    <p class="answer">If you cannot pay in 10 mins, the price we provided is no longer valid. If the network is slow and no confirmation from the network within 10 mins, we will give you a new quotation, if you do not agree,  all the fund will send  to the address you provided and you will need to pay for the fees. </p>
                </div>
            </div>

        </div>
        <div id="contact_block">
            <p class="subtitle">聯絡我們<br/>Contact</p>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.37484762764!2d114.17302794994059!3d22.301658948410566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400eec79e67b9%3A0xcbe747de9fb86cef!2z5paw5qWt5buj5ZWG5qWt5aSn5buI!5e0!3m2!1szh-TW!2stw!4v1565938727110!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
            <p class="small_font">香港尖沙咀金巴利道73號<br/> No.73 ,Address address,address address ,Hongkong</p>
            <p class="small_font">交易時間：周一至周五9:00至23:00 | 周六日9:00至23:00<br/> Trading Hours: Monday to Friday 9:00~23:00 | Weekend 9:00至23:00</p>
            <a class="fb1" href="https://api.whatsapp.com/send?phone=85264114188&text=%E6%88%91%E5%B0%8DCrptoExchange%E6%9C%89%E8%88%88%E8%B6%A3"></a>
            <a class="fb2" href="#"></a>
        </div>
    </div>

    <footer>
        <h6>Copyright © tradecoin4u</h6>
        <h4>免責聲明:  投資涉及風險，代幣價格有時會大幅波動，價格可升亦可跌，更可變得毫無價值。投資未必一定能夠賺取利潤，反而可能會招致損失，往績數字並非未來表現的指標。投資前應先閱讀有關產品的發售文件、財務及相關的風險聲明，.並應就本身的財政、其他狀況及需要詳細考慮並考慮決定投資是否切合本身特定的投資需要。<a href="#">了解更多>></a></h4>
        <a href="#" class="back_top" href="#"></a>
        <a href="#" class="bottom_item1" href="#">服務條款<br/>&nbsp;&nbsp;Terms and Conditions </a>
        <a href="#" class="bottom_item2" href="#">防洗錢政策<br/>&nbsp;&nbsp;&nbsp;&nbsp;AML Policy </a>
        <a href="#" class="bottom_item3" href="#">隱私政策<br/>&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy </a>
    </footer>

<script>
$(document).ready(function(){
    //top button

    $('#BackTop').click(function(){ 
		$('html,body').animate({scrollTop:0}, 333);
	});
	// $(window).scroll(function() {
	// 	if ( $(this).scrollTop() > 300 ){
	// 		$('#BackTop').fadeIn(222);
	// 	} else {
	// 		$('#BackTop').stop().fadeOut(222);
	// 	}
	// }).scroll();
    
    
    //the price click function

    $('a.get_price').click(function(e){

       // e.preventDefault();
        
        // if($('.light_box_wrap').hasClass('active')){
        //     $('light_box_wrap').removeClass('active');
        //     $('.light_box').removeClass('active');
        //     $('body').removeClass('open');
        //     //$('.block_bottom').removeClass('active');

        // }else{
            $('.light_box_wrap').addClass('active');
            $('.light_box').addClass('active');
            $('body').addClass('open');
            //$('.block_bottom').addClass('active');
        // }
    })

// the price _tradeblock function

    $('a.get_price_tradeblock').click(function(e){

        e.preventDefault();

        $('.light_box_wrap').addClass('active');
        $('.light_box').addClass('active');
        $('body').addClass('open');

    })

    

    $('a.get_price_quoteblock').click(function(e){

        e.preventDefault();

        $('.light_box_wrap').addClass('active');
        $('.light_box').addClass('active');
        $('body').addClass('open');

    })

//the cancel icon funtion

    $('a.cancel').click(function(e){

        //e.preventDefault();

        $('.light_box_wrap').removeClass('active');
        $('.light_box').removeClass('active');
        $('body').removeClass('open');
    })

// a scroll link function
    $("#div1Link").click(function() {
    $("html, body").animate({
    scrollTop: $("#how_to_trade_block").offset().top }, {duration: 500,easing: "swing"});
    return false;
    });

    $("#div2Link").click(function() {
    $("html, body").animate({
    scrollTop: $("#quote_block").offset().top }, {duration: 500,easing: "swing"});
    return false;
    });

    $("#div3Link").click(function() {
    $("html, body").animate({
    scrollTop: $("#faqs_block").offset().top }, {duration: 500,easing: "swing"});
    return false;
    });

    $("#div4Link").click(function() {
    $("html, body").animate({
    scrollTop: $("#contact_block").offset().top }, {duration: 500,easing: "swing"});
    return false;
    });

    $("#div5Link").click(function() {
    $("html, body").animate({
    scrollTop: $("#quote_block").offset().top }, {duration: 500,easing: "swing"});
    return false;
    });

    $("#div6Link").click(function() {
    $("html, body").animate({
    scrollTop: $("#top").offset().top }, {duration: 500,easing: "swing"});
    return false;
    });

    $("#div7Link").click(function() {
    $("html, body").animate({
    scrollTop: $("#quote_block").offset().top }, {duration: 500,easing: "swing"});
    return false;
    });

//  save the form data
   
     
});

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