<div class="center_chat_js poUWCjs none">
    <!--START : Chat-->
        <div class="APPEARANCE_chat_js APPEARANCE_DARK_chat_js  puwC ab bgw br12 ">
            <div class="w100 br12 p l mobhpm">
                <!--START : Loading-->
                    <div class="loading_for_chat_js w100 dg alc jcc hi">
                        <div class='loader wi hi'>
                            <div class='loader__item ab br50'></div>
                        </div>
                    </div>
                <!--END-->
                <!--START : For authorized users-->
                    <div class="rlsn01au">
                        <!--START-->
                            <!--START : Title-->
                                <div class="APPEARANCE_chat_menu_js APPEARANCE_DARK_chat_menu_css chat_title_js wwct_nav_chat_css w100 u">
                                    Чат - забегаловка
                                    <!--START : TO CLOSE -> FOR MOBILE-->
                                        <div class="mtclmojs dg alc jcc none">
                                            <div class="tcfmbc h40 w40 br50 dg alc jcc c" onclick="close_mobile_chat()">
                                                <div class="p w26 mtm3">
                                                    <div class="closemenu">
                                                        <div class="pwmcmrd45 ab h3 w26 bgw br4"></div>
                                                        <div class="pwmcmrd45 ab h3 w26 bgw br4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!--END-->
                                </div>
                            <!--END-->
                            <!--START : MESSAGES-->
                                <div class="wwct w100 pat10 insertMessageChatjs">
                                    
                                </div>
                            <!--END-->
                            <!--START : INPUT TEXT-->
                                <div class="APPEARANCE_MOBILE_input_chat_js APPEARANCE_MOBILE_DARK_input_chat_css wwctit w100">
                                    <div class="wwctit1 w100">
                                        <div class="wwctit2 p l w100">
                                            <input type="text" id="chat_input_id" class="APPEARANCE_chat_input_js APPEARANCE_DARK_chat_input_css get_message_js wwctit2Input w100 br50 sh pal" placeholder="Мой влажные мысли..." onclick="removeErrorChatInput()" onkeydown="chathandleKeyPress(event)">
                                            <!--START : Button SEND-->
                                                <div class="wwctit3 ab dg jcc alc">
                                                    <div class="wwctit4 br50 c" onclick="send_chat_message()"><!--Button--></div>
                                                </div>
                                            <!--END-->
                                        </div>
                                    </div>
                                </div>
                            <!--END-->
                        <!--END-->
                    </div>
                <!--END-->
            </div>
        </div>
    <!--END : Chat-->
</div>