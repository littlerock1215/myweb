<!DOCTYPE html>

<html xml:lang="zh" lang="zh">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    
    <title>Tradecoin4u</title>
    
    
    <link type="text/css" rel="stylesheet" href="stylesheets/form.css?<?=time()?>">
    <link type="text/css" rel="stylesheet" href="stylesheets/vip.css?<?=time()?>">

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
                    <div class="box_top">Tradecoin4u 高級客戶認證<br/>Tradecoin4u Advanced Customer Certification
                        <a href="#" class="cancel"></a>
                    </div>
                    <form class="apply_form">
                        <p class="first_content">交易量首次達到1百萬港元以上客戶需要填寫此表格<br/>For the all users who reach the transaction volume over HK$1 million. Customers need to fill out this form.</p>
                        <p class="first_content">想了解更多 Tradecoin4u 反黑錢政策可登錄以下網址：<br/>Want to know more Tradecoin4u anti-money policy can be found at the following URL：<br/><a class="link_aml" href="/aml">https://www.tradecoin4u.com/aml</a></p>
                        
                        <p class="title_p">姓名<br/>Name :</p>
                        <input class="box_input" type="text" name="name" autocomplete="off" required>
                        <p class="title_p">手機<br/>Mobile :</p>
                        <input class="box_input" type="text" name="mobile" autocomplete="off" required>
                        <p class="title_long">雇主（如果是自僱人士，請描述您的自僱）<br/>Employer (If self-employed, please describe your self-employment)：</p>
                        <input class="box_input" type="text" name="employer" autocomplete="off" required>
                        <p class="title_p">職稱/職務<br/>Title/Position：</p>
                        <input class="box_input" type="text" name="title" autocomplete="off" required>
                        <p class="title_p">淨資產<br/>Net worth：</p><br/>
                        <input  type="radio" name="net_worth" value="HK$0-100K">HK$0-100K<br/>
                        <input  type="radio" name="net_worth" value="HK$100-500K">HK$100-500K<br/>
                        <input  type="radio" name="net_worth" value="HK$500K-1mil">HK$500K-1mil<br/>
                        <input  type="radio" name="net_worth" value="HK$1mil-5mil">HK$1mil-5mil<br/>
                        <input  type="radio" name="net_worth" value="HK$5mil+">HK$5mil+<br/>

                        <p class="title_p">流動資產淨值<br/>Liquid net worth：</p><br/>
                        <input  type="radio" name="Liquid_net_worth" value="HK$0-100K">HK$0-100K<br/>
                        <input  type="radio" name="Liquid_net_worth" value="HK$100-500K">HK$100-500K<br/>
                        <input  type="radio" name="Liquid_net_worth" value="HK$500K-1mil">HK$500K-1mil<br/>
                        <input  type="radio" name="Liquid_net_worth" value="HK$1mil-5mil">HK$1mil-5mil<br/>
                        <input  type="radio" name="Liquid_net_worth" value="HK$5mil+">HK$5mil+<br/>

                        <p class="title_p">財富來源<br/>Sources of Wealth：</p><br/>
                        
                        
                        
                        
                        <p class="title_p">預計每月交易金額<br/>Expected sum of monthly trade (E.g. HK$ 2mil)：</p>
                        <input class="box_input" type="text" name="amount" autocomplete="off" required>
                        <p class="title_p">聲明<br/>DECLARATION： </p>
                        <p>本人謹此聲明，申請表內所提供的的各項資料均屬正確、完備及真實的，如日後作出任何更改將會即時通知Tradecoin4u。本人清楚及同意Tradecoin4u將會收集本人的資料作為防止清洗黑錢及恐怖分子融資活動的措施。本人在Tradecoin4u作出的交易並無跟任何洗黑錢、恐怖活動、恐怖分子融資活動或任何犯罪活動掛鈎，如觸犯上述活動，本人將會對Tradecoin4u的損失作出賠償。</p>
                        <p>I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein, immediately. In case of any of the above information is found to be false or untrue or misleading or misrepresenting. I am aware that I may be held liable for it. I understand and agree that Tradecoin4u will collect my information as a measure for preventing money laundering and terrorist financing. I am not doing any trades at Tradecoin4u with any money laundering, terrorist activities, terrorist financing activities or any criminal activity, and I will compensate the loss of Tradecoin4u if in violation of the above activities.</p>
                        <p>在此聲明所有上述信息均屬真實無誤</p><br/>
                        <p>I hereby declare that all the above information is true and correct</p><br/>
                        <p class="title_p">日期<br/>Date：</p><br/>
                        <input class="box_input" type="text" name="mobile" autocomplete="off" required>
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