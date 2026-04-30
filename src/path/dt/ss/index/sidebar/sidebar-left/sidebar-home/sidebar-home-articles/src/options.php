<?php
#START 000
$numarul = 0;                               #(Increment). Count of articles
echo "<!--START : ARTICLES WITH EXTENDED MODE-->";
#START URL : article
echo "<div class='feed-wrapp-articles-0-item-001'>";
echo "<!--START : Widget Hide post-->";
echo "
    <div class='APPEARANCE_articleRemovedEXTENDED_js APPEARANCE_DARK_articleRemovedEXTENDED_js tosrIDextended tosrjs p l w100 bgw pa sh br12 mb25 mt25 none'>
        <!--START : Hide-->
            <span class='APPEARANCE_article_extended_removed_hide_js APPERANCE_DARK_text_css article_extended_removed_hide_js rw1s p l f14 fw'>
                ".$languagesArticle[$selectedLanguage]['ArticleRemoved']."
            </span>
            <div class='APPEARANCE_extended_undo_hide_js APPERANCE_DARK_text_css article_extended_undo_hide_js id_undo_appearance_js rw2b c p fw f14' onclick='rw2bUndo_hide_extended()'>
                ".$languagesArticle[$selectedLanguage]['UNDO']."
            </div>
        <!--END-->
        <!--START : Delete-->
            <span class='aer_extendedjs rw1s p l f14 fw'>
                ".$languagesArticle[$selectedLanguage]['articleDeleted']."
            </span>
            <div class='aerre_extendedjs id_undo_removed_appearance_js rw2b c p fw f14' onclick='rw2bUndoRemoved_extended()'>
                ".$languagesArticle[$selectedLanguage]['RECOVER']."
            </div>
        </div>";
echo "<!--END-->";
echo "
<!--START : Hide_post_Complain-->
    <div class='APPEARANCE_hidepostcomplainEXTENDED_js APPEARANCE_DARK_hidepostcomplainEXTENDED_js rWPU_extended_mode_js ab bgw f14 br12 u rwpuIDextended none'>
        <!--START : Button Hide post-->
            <div class='buufjs aC c h40 buuf_hide_extended_js' onclick='unauthorized(), hidePost_extended()'>
                <!--START : Icon-->
                    <div class='ac1 p l h40 w16 dg alc'>
                        <div class='APPEARANCE_articleLForbbiden_extended_js APPEARANCE_DARK_articleLForbbiden_js ac1ico'></div>
                    </div>
                <!--END-->
                <!--START : Title-->
                    <div class='APPEARANCE_articleLTextForbbiden_extended_js APPEARANCE_DARK_articleLTextForbbiden_js p l pal10 h40 lh40 arcm'>
                        ".$languagesArticle[$selectedLanguage]['HidePost']."
                    </div>
                <!--END-->
            </div>
        <!--END-->
        <!--START : Button Complain-->
            <div class='buufjs aC c h40 buuf_extended_js' onclick='unauthorized(), complain()'>
                <!--START : Icon-->
                    <div class='ac1 p l h40 w16 dg alc'>
                        <div class='APPEARANCE_articleLComplain_extended_js APPEARANCE_DARK_articleLComplain_js ac1icoCompl'></div>
                    </div>
                <!--END-->
                <!--START : Title-->
                    <div class='APPEARANCE_articleLreport_extended_js APPEARANCE_DARK_articleLreport_js p l pal10 h40 lh40 arcm'>
                        ".$languagesArticle[$selectedLanguage]['Complain']."
                    </div>
                <!--END-->
            </div>
        <!--END-->
        <!--START : Delete-->
            <div class='bofa_extendedjs buufjs aC c h40 options_for_article_js' onclick='deletePost_extended()'>
                <div class='ac1 p l h40 w16 dg alc'>
                    <!--START : Icon-->
                        <svg width='16px' height='16px' viewBox='0 0 16 16' fill='#4B4F56'><path fill-rule='evenodd' d='M8 0c4.415 0 8 3.585 8 8s-3.585 8-8 8-8-3.585-8-8 3.585-8 8-8zm.999 11a1 1 0 10-2 0 1 1 0 002 0zm0-6a1 1 0 00-2 0v3a1 1 0 002 0V5z'></path></svg>
                    <!--END-->
                </div>
                <div class='p l pal10 h40 lh40 arcm'>
                    <!--START : Title-->
                        ".$languagesArticle[$selectedLanguage]['Delete']."
                    <!--END-->
                </div>
            </div>
        <!--END-->
        <!--START : Icon--><div class='pudorWPU ab w20'><div class='APPEARANCE_icon_arrow_articleL_extended_js APPEARANCE_DARK_icon_arrow_articleL_js pudeb ab bgw'><!--icon--></div></div><!--END-->
    </div>
<!--END-->";
echo "<div class='APPEARANCE_extended_httpUrlArticle_js APPEARANCE_DARK_extended_httpUrlArticle_js extended_httpUrlArticle_js none mt25 p l pa mb25 bgw sh br12 tosaIDextended'></div>";
echo "</div>";
#END
echo "<!--END-->";
echo "<!--START : ARTICLES WITHOUT EXTENDED MODE-->";
echo "<div class='feed-wrapp-articles-0 p l'>"; #Place where articles will be required
#END   000
?>