<?php

exit();

// Convert big Geshi CSS file to small files 
$string= ".code .abap .de1, .code .abap .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .abap  {font-family:monospace; font-size: 12px;}
.code .abap .imp {font-weight: bold; color: red;}
.code .abap li, .code .abap .li1 {font-weight: normal; vertical-align:top;}
.code .abap .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .abap .li2 {background: #f2f2f2;}
.code .abap .kw1 {color: #000066; text-transform: uppercase; font-weight: bold;}
.code .abap .kw2 {color: #cc4050; text-transform: uppercase; font-weight: bold;}
.code .abap .kw3 {color: #005066; text-transform: uppercase; font-weight: bold;}
.code .abap .kw4 {color: #500066; text-transform: uppercase; font-weight: bold;}
.code .abap .kw5 {color: #005066; text-transform: uppercase; font-weight: bold;}
.code .abap .kw6 {color: #000066; text-transform: uppercase; font-weight: bold;}
.code .abap .kw7 {color: #000066; text-transform: uppercase; font-weight: bold;}
.code .abap .kw8 {color: #005066; text-transform: uppercase; font-weight: bold;}
.code .abap .kw9 {color: #500066; text-transform: uppercase; font-weight: bold;}
.code .abap .co1 {color: #808080; font-style: italic;}
.code .abap .co2 {color: #339933;}
.code .abap .coMULTI {color: #808080; font-style: italic;}
.code .abap .es0 {color: #000099; font-weight: bold;}
.code .abap .br0 {color: #808080;}
.code .abap .sy0 {color: #808080;}
.code .abap .sy1 {color: #800080;}
.code .abap .sy2 {color: #0000ff;}
.code .abap .st0 {color: #4da619;}
.code .abap .nu0 {color: #3399ff;}
.code .abap .me1 {color: #202020;}
.code .abap .me2 {color: #202020;}
.code .abap .ln-xtra, .code .abap li.ln-xtra, .code .abap div.ln-xtra {background-color: #ffc;}
.code .abap span.xtra { display:block; }

.code .actionscript .de1, .code .actionscript .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .actionscript  {font-family:monospace; font-size: 12px;}
.code .actionscript .imp {font-weight: bold; color: red;}
.code .actionscript li, .code .actionscript .li1 {font-weight: normal; vertical-align:top;}
.code .actionscript .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .actionscript .li2 {background: #f2f2f2;}
.code .actionscript .kw1 {color: #b1b100;}
.code .actionscript .kw2 {color: #000000; font-weight: bold;}
.code .actionscript .kw3 {color: #0066CC;}
.code .actionscript .co1 {color: #808080; font-style: italic;}
.code .actionscript .co2 {color: #808080; font-style: italic;}
.code .actionscript .coMULTI {color: #808080; font-style: italic;}
.code .actionscript .es0 {color: #000099; font-weight: bold;}
.code .actionscript .br0 {color: #66cc66;}
.code .actionscript .sy0 {color: #66cc66;}
.code .actionscript .st0 {color: #ff0000;}
.code .actionscript .nu0 {color: #cc66cc;}
.code .actionscript .me1 {color: #006600;}
.code .actionscript .ln-xtra, .code .actionscript li.ln-xtra, .code .actionscript div.ln-xtra {background-color: #ffc;}
.code .actionscript span.xtra { display:block; }

.code .actionscript3 .de1, .code .actionscript3 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .actionscript3  {font-family:monospace; font-size: 12px;}
.code .actionscript3 .imp {font-weight: bold; color: red;}
.code .actionscript3 li, .code .actionscript3 .li1 {font-weight: normal; vertical-align:top;}
.code .actionscript3 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .actionscript3 .li2 {background: #f2f2f2;}
.code .actionscript3 .kw1 {color: #0033ff; font-weight: bold;}
.code .actionscript3 .kw2 {color: #6699cc; font-weight: bold;}
.code .actionscript3 .kw3 {color: #339966; font-weight: bold;}
.code .actionscript3 .kw4 {color: #9900cc; font-weight: bold;}
.code .actionscript3 .kw5 {color: #004993;}
.code .actionscript3 .kw6 {color: #004993;}
.code .actionscript3 .kw7 {color: #004993;}
.code .actionscript3 .kw8 {color: #004993;}
.code .actionscript3 .co1 {color: #009900; font-style: italic;}
.code .actionscript3 .co2 {color: #009966; font-style: italic;}
.code .actionscript3 .coMULTI {color: #3f5fbf;}
.code .actionscript3 .br0 {color: #000000;}
.code .actionscript3 .sy0 {color: #000066; font-weight: bold;}
.code .actionscript3 .st0 {color: #990000;}
.code .actionscript3 .nu0 {color: #000000; font-weight:bold;}
.code .actionscript3 .me0 {color: #000000;}
.code .actionscript3 .ln-xtra, .code .actionscript3 li.ln-xtra, .code .actionscript3 div.ln-xtra {background-color: #ffc;}
.code .actionscript3 span.xtra { display:block; }

.code .ada .de1, .code .ada .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .ada  {font-family:monospace; font-size: 12px;}
.code .ada .imp {font-weight: bold; color: red;}
.code .ada li, .code .ada .li1 {font-weight: normal; vertical-align:top;}
.code .ada .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .ada .li2 {background: #f2f2f2;}
.code .ada .kw1 {color: #00007f;}
.code .ada .kw2 {color: #0000ff;}
.code .ada .kw3 {color: #46aa03; font-weight:bold;}
.code .ada .co1 {color: #adadad; font-style: italic;}
.code .ada .coMULTI {color: #808080; font-style: italic;}
.code .ada .es0 {color: #000099; font-weight: bold;}
.code .ada .br0 {color: #66cc66;}
.code .ada .sy0 {color: #66cc66;}
.code .ada .st0 {color: #7f007f;}
.code .ada .nu0 {color: #ff0000;}
.code .ada .me1 {color: #202020;}
.code .ada .ln-xtra, .code .ada li.ln-xtra, .code .ada div.ln-xtra {background-color: #ffc;}
.code .ada span.xtra { display:block; }

.code .apache .de1, .code .apache .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .apache  {font-family:monospace; font-size: 12px;}
.code .apache .imp {font-weight: bold; color: red;}
.code .apache li, .code .apache .li1 {font-weight: normal; vertical-align:top;}
.code .apache .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .apache .li2 {background: #f2f2f2;}
.code .apache .kw1 {color: #00007f;}
.code .apache .kw2 {color: #0000ff;}
.code .apache .kw3 {color: #000000; font-weight:bold;}
.code .apache .co1 {color: #adadad; font-style: italic;}
.code .apache .es0 {color: #000099; font-weight: bold;}
.code .apache .br0 {color: #339933;}
.code .apache .sy0 {color: #008000;}
.code .apache .st0 {color: #7f007f;}
.code .apache .nu0 {color: #ff0000;}
.code .apache .ln-xtra, .code .apache li.ln-xtra, .code .apache div.ln-xtra {background-color: #ffc;}
.code .apache span.xtra { display:block; }

.code .applescript .de1, .code .applescript .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .applescript  {font-family:monospace; font-size: 12px;}
.code .applescript .imp {font-weight: bold; color: red;}
.code .applescript li, .code .applescript .li1 {font-weight: normal; vertical-align:top;}
.code .applescript .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .applescript .li2 {background: #f2f2f2;}
.code .applescript .kw1 {color: #0066ff;}
.code .applescript .kw2 {color: #ff0033;}
.code .applescript .kw3 {color: #ff0033; font-weight: bold;}
.code .applescript .co1 {color: #808080; font-style: italic;}
.code .applescript .co3 {color: #ff0000;}
.code .applescript .coMULTI {color: #808080; font-style: italic;}
.code .applescript .es0 {color: #000000; font-weight: bold;}
.code .applescript .br0 {color: #000000;}
.code .applescript .sy0 {color: #000000;}
.code .applescript .st0 {color: #009900;}
.code .applescript .nu0 {color: #000000;}
.code .applescript .me1 {color: #006600;}
.code .applescript .me2 {color: #006600;}
.code .applescript .re0 {color: #339933;}
.code .applescript .re4 {color: #0066ff;}
.code .applescript .ln-xtra, .code .applescript li.ln-xtra, .code .applescript div.ln-xtra {background-color: #ffc;}
.code .applescript span.xtra { display:block; }

.code .apt_sources .de1, .code .apt_sources .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .apt_sources  {font-family:monospace; font-size: 12px;}
.code .apt_sources .imp {font-weight: bold; color: red;}
.code .apt_sources li, .code .apt_sources .li1 {font-weight: normal; vertical-align:top;}
.code .apt_sources .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .apt_sources .li2 {background: #f2f2f2;}
.code .apt_sources .kw1 {color: #00007f;}
.code .apt_sources .kw2 {color: #b1b100;}
.code .apt_sources .kw3 {color: #b16000;}
.code .apt_sources .co1 {color: #adadad; font-style: italic;}
.code .apt_sources .re0 {color: #009900;}
.code .apt_sources .ln-xtra, .code .apt_sources li.ln-xtra, .code .apt_sources div.ln-xtra {background-color: #ffc;}
.code .apt_sources span.xtra { display:block; }

.code .asm .de1, .code .asm .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .asm  {font-family:monospace; font-size: 12px;}
.code .asm .imp {font-weight: bold; color: red;}
.code .asm li, .code .asm .li1 {font-weight: normal; vertical-align:top;}
.code .asm .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .asm .li2 {background: #f2f2f2;}
.code .asm .kw1 {color: #00007f; font-weight: bold;}
.code .asm .kw2 {color: #0000ff; font-weight: bold;}
.code .asm .kw3 {color: #00007f;}
.code .asm .kw4 {color: #000000; font-weight: bold;}
.code .asm .kw5 {color: #000000; font-weight: bold;}
.code .asm .co1 {color: #666666; font-style: italic;}
.code .asm .co2 {color: #adadad; font-style: italic;}
.code .asm .es0 {color: #000099; font-weight: bold;}
.code .asm .br0 {color: #009900; font-weight: bold;}
.code .asm .sy0 {color: #339933;}
.code .asm .st0 {color: #7f007f;}
.code .asm .nu0 {color: #0000ff;}
.code .asm .ln-xtra, .code .asm li.ln-xtra, .code .asm div.ln-xtra {background-color: #ffc;}
.code .asm span.xtra { display:block; }

.code .asp .de1, .code .asp .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .asp  {font-family:monospace; font-size: 12px;}
.code .asp .imp {font-weight: bold; color: red;}
.code .asp li, .code .asp .li1 {font-weight: normal; vertical-align:top;}
.code .asp .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .asp .li2 {background: #f2f2f2;}
.code .asp .kw1 {color: #990099; font-weight: bold;}
.code .asp .kw2 {color: #0000ff; font-weight: bold;}
.code .asp .kw3 {color: #330066;}
.code .asp .co1 {color: #008000;}
.code .asp .co2 {color: #ff6600;}
.code .asp .coMULTI {color: #008000;}
.code .asp .es0 {color: #000099; font-weight: bold;}
.code .asp .br0 {color: #006600; font-weight:bold;}
.code .asp .sy0 {color: #006600; font-weight: bold;}
.code .asp .sy1 {color: #000000; font-weight: bold;}
.code .asp .st0 {color: #cc0000;}
.code .asp .nu0 {color: #800000;}
.code .asp .me1 {color: #9900cc;}
.code .asp .ln-xtra, .code .asp li.ln-xtra, .code .asp div.ln-xtra {background-color: #ffc;}
.code .asp span.xtra { display:block; }

.code .autoit .de1, .code .autoit .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .autoit  {font-family:monospace; font-size: 12px;}
.code .autoit .imp {font-weight: bold; color: red;}
.code .autoit li, .code .autoit .li1 {font-weight: normal; vertical-align:top;}
.code .autoit .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .autoit .li2 {background: #f2f2f2;}
.code .autoit .kw1 {color: #0000FF; font-weight: bold;}
.code .autoit .kw2 {color: #800000; font-weight: bold;}
.code .autoit .kw3 {color: #000080; font-style: italic; font-weight: bold;}
.code .autoit .kw4 {color: #0080FF; font-style: italic; font-weight: bold;}
.code .autoit .kw5 {color: #F000FF; font-style: italic;}
.code .autoit .kw6 {color: #A00FF0; font-style: italic;}
.code .autoit .co0 {font-style: italic; color: #009933;}
.code .autoit .coMULTI {font-style: italic; color: #669900;}
.code .autoit .br0 {color: #FF0000; font-weight: bold;}
.code .autoit .sy0 {color: #FF0000; font-weight: bold;}
.code .autoit .st0 {font-weight: bold; color: #008080;}
.code .autoit .nu0 {color: #AC00A9; font-style: italic; font-weight: bold;}
.code .autoit .me1 {color: #0000FF; font-style: italic; font-weight: bold;}
.code .autoit .re0 {font-weight: bold; color: #AA0000;}
.code .autoit .ln-xtra, .code .autoit li.ln-xtra, .code .autoit div.ln-xtra {background-color: #ffc;}
.code .autoit span.xtra { display:block; }

.code .avisynth .de1, .code .avisynth .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .avisynth  {font-family:monospace; font-size: 12px;}
.code .avisynth .imp {font-weight: bold; color: red;}
.code .avisynth li, .code .avisynth .li1 {font-weight: normal; vertical-align:top;}
.code .avisynth .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .avisynth .li2 {background: #f2f2f2;}
.code .avisynth .kw1 {color:#9966CC; font-weight:bold;}
.code .avisynth .kw2 {color:#0000FF; font-weight:bold;}
.code .avisynth .kw3 {color:#CC3300; font-weight:bold;}
.code .avisynth .kw4 {color:#660000; font-weight:bold;}
.code .avisynth .co1 {color:#008000; font-style:italic;}
.code .avisynth .coMULTI {color:#000080; font-style:italic;}
.code .avisynth .es0 {color:#000099;}
.code .avisynth .br0 {color:#006600; font-weight:bold;}
.code .avisynth .sy0 {color:#006600; font-weight:bold;}
.code .avisynth .st0 {color:#996600;}
.code .avisynth .nu0 {color:#006666;}
.code .avisynth .me1 {color:#9900CC;}
.code .avisynth .ln-xtra, .code .avisynth li.ln-xtra, .code .avisynth div.ln-xtra {background-color: #ffc;}
.code .avisynth span.xtra { display:block; }

.code .bash .de1, .code .bash .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .bash  {font-family:monospace; font-size: 12px;}
.code .bash .imp {font-weight: bold; color: red;}
.code .bash li, .code .bash .li1 {font-weight: normal; vertical-align:top;}
.code .bash .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .bash .li2 {background: #f2f2f2;}
.code .bash .kw1 {color: #000000; font-weight: bold;}
.code .bash .kw2 {color: #c20cb9; font-weight: bold;}
.code .bash .kw3 {color: #7a0874; font-weight: bold;}
.code .bash .co0 {color: #666666; font-style: italic;}
.code .bash .co1 {color: #800000;}
.code .bash .co2 {color: #cc0000; font-style: italic;}
.code .bash .co3 {color: #000000; font-weight: bold;}
.code .bash .es1 {color: #000099; font-weight: bold;}
.code .bash .es2 {color: #007800;}
.code .bash .es3 {color: #007800;}
.code .bash .es4 {color: #007800;}
.code .bash .es5 {color: #780078;}
.code .bash .es_h {color: #000099; font-weight: bold;}
.code .bash .br0 {color: #7a0874; font-weight: bold;}
.code .bash .sy0 {color: #000000; font-weight: bold;}
.code .bash .st0 {color: #ff0000;}
.code .bash .st_h {color: #ff0000;}
.code .bash .nu0 {color: #000000;}
.code .bash .re0 {color: #007800;}
.code .bash .re1 {color: #007800;}
.code .bash .re2 {color: #007800;}
.code .bash .re4 {color: #007800;}
.code .bash .re5 {color: #660033;}
.code .bash .ln-xtra, .code .bash li.ln-xtra, .code .bash div.ln-xtra {background-color: #ffc;}
.code .bash span.xtra { display:block; }

.code .basic4gl .de1, .code .basic4gl .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .basic4gl  {font-family:monospace; font-size: 12px;}
.code .basic4gl .imp {font-weight: bold; color: red;}
.code .basic4gl li, .code .basic4gl .li1 {font-weight: normal; vertical-align:top;}
.code .basic4gl .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .basic4gl .li2 {background: #f2f2f2;}
.code .basic4gl .kw1 {color: #000080; font-weight: bold;}
.code .basic4gl .kw2 {color: #FF0000;}
.code .basic4gl .kw3 {color: #0000FF;}
.code .basic4gl .co1 {color: #657CC4; font-style: italic;}
.code .basic4gl .br0 {color: #000080;}
.code .basic4gl .sy0 {color: #0000FF;}
.code .basic4gl .st0 {color: #008000;}
.code .basic4gl .nu0 {color: #000080; font-weight: bold;}
.code .basic4gl .ln-xtra, .code .basic4gl li.ln-xtra, .code .basic4gl div.ln-xtra {background-color: #ffc;}
.code .basic4gl span.xtra { display:block; }

.code .bf .de1, .code .bf .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .bf  {font-family:monospace; font-size: 12px;}
.code .bf .imp {font-weight: bold; color: red;}
.code .bf li, .code .bf .li1 {font-weight: normal; vertical-align:top;}
.code .bf .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .bf .li2 {background: #f2f2f2;}
.code .bf .co1 {color: #666666; font-style: italic;}
.code .bf .br0 {color: #66cc66;}
.code .bf .sy0 {color: #006600;}
.code .bf .sy1 {color: #660000;}
.code .bf .sy2 {color: #000066;}
.code .bf .sy3 {color: #660066;}
.code .bf .sy4 {color: #666600;}
.code .bf .st0 {color: #ff0000;}
.code .bf .ln-xtra, .code .bf li.ln-xtra, .code .bf div.ln-xtra {background-color: #ffc;}
.code .bf span.xtra { display:block; }

.code .bibtex .de1, .code .bibtex .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .bibtex  {font-family:monospace; font-size: 12px;}
.code .bibtex .imp {font-weight: bold; color: red;}
.code .bibtex li, .code .bibtex .li1 {font-weight: normal; vertical-align:top;}
.code .bibtex .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .bibtex .li2 {background: #f2f2f2;}
.code .bibtex .kw1 {color: #C02020;}
.code .bibtex .kw2 {color: #C02020;}
.code .bibtex .kw3 {color: #C08020;}
.code .bibtex .kw4 {color: #C08020;}
.code .bibtex .co1 {color: #2C922C; font-style: italic;}
.code .bibtex .es0 {color: #000000; font-weight: bold;}
.code .bibtex .br0 {color: #E02020;}
.code .bibtex .sy0 {color: #E02020;}
.code .bibtex .st0 {color: #2020C0;}
.code .bibtex .re1 {color: #2020C0;}
.code .bibtex .re2 {color: #C08020;}
.code .bibtex .re3 {color: #800000;}
.code .bibtex .ln-xtra, .code .bibtex li.ln-xtra, .code .bibtex div.ln-xtra {background-color: #ffc;}
.code .bibtex span.xtra { display:block; }

.code .blitzbasic .de1, .code .blitzbasic .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .blitzbasic  {font-family:monospace; font-size: 12px;}
.code .blitzbasic .imp {font-weight: bold; color: red;}
.code .blitzbasic li, .code .blitzbasic .li1 {font-weight: normal; vertical-align:top;}
.code .blitzbasic .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .blitzbasic .li2 {background: #f2f2f2;}
.code .blitzbasic .kw1 {color: #000066; font-weight: bold;}
.code .blitzbasic .kw2 {color: #0000ff;}
.code .blitzbasic .co1 {color: #D9D100; font-style: italic;}
.code .blitzbasic .es0 {color: #000099; font-weight: bold;}
.code .blitzbasic .br0 {color: #000066;}
.code .blitzbasic .sy0 {color: #000066;}
.code .blitzbasic .st0 {color: #009900;}
.code .blitzbasic .nu0 {color: #CC0000;}
.code .blitzbasic .me1 {color: #006600;}
.code .blitzbasic .ln-xtra, .code .blitzbasic li.ln-xtra, .code .blitzbasic div.ln-xtra {background-color: #ffc;}
.code .blitzbasic span.xtra { display:block; }

.code .bnf .de1, .code .bnf .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .bnf  {font-family:monospace; font-size: 12px;}
.code .bnf .imp {font-weight: bold; color: red;}
.code .bnf li, .code .bnf .li1 {font-weight: normal; vertical-align:top;}
.code .bnf .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .bnf .li2 {background: #f2f2f2;}
.code .bnf .sy0 {color: #000066; font-weight: bold;}
.code .bnf .st0 {color: #a00;}
.code .bnf .st1 {color: #a00;}
.code .bnf .re0 {color: #007;}
.code .bnf .ln-xtra, .code .bnf li.ln-xtra, .code .bnf div.ln-xtra {background-color: #ffc;}
.code .bnf span.xtra { display:block; }

.code .boo .de1, .code .boo .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .boo  {font-family:monospace; font-size: 12px;}
.code .boo .imp {font-weight: bold; color: red;}
.code .boo li, .code .boo .li1 {font-weight: normal; vertical-align:top;}
.code .boo .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .boo .li2 {background: #f2f2f2;}
.code .boo .kw1 {color:green;font-weight:bold;}
.code .boo .kw2 {color:navy;}
.code .boo .kw3 {color:blue;font-weight:bold;}
.code .boo .kw4 {color:#8B4513;}
.code .boo .kw5 {color:teal;font-weight:bold;}
.code .boo .kw6 {color:blue;font-weight:bold;}
.code .boo .kw7 {color:blue;font-weight:bold;}
.code .boo .kw8 {color:blue;font-weight:bold;}
.code .boo .kw9 {color:maroon;}
.code .boo .kw10 {color:maroon;}
.code .boo .kw11 {color:purple;}
.code .boo .kw12 {color:#4B0082;}
.code .boo .kw13 {color:purple;font-weight:bold;}
.code .boo .kw14 {color:#008B8B;font-weight:bold;}
.code .boo .kw15 {color:brown;}
.code .boo .kw16 {color:black;font-weight:bold;}
.code .boo .kw17 {color:gray;}
.code .boo .co1 {color: #999999; font-style: italic;}
.code .boo .co2 {color: #999999; font-style: italic;}
.code .boo .coMULTI {color: #008000; font-style: italic;}
.code .boo .es0 {color: #0000FF; font-weight: bold;}
.code .boo .es_h {color: #0000FF; font-weight: bold;}
.code .boo .br0 {color: #006400;}
.code .boo .sy0 {color: #006400;}
.code .boo .st0 {color: #008000;}
.code .boo .st_h {color: #008000;}
.code .boo .nu0 {color: #00008B;}
.code .boo .me0 {color: #000000;}
.code .boo .me1 {color: #000000;}
.code .boo .ln-xtra, .code .boo li.ln-xtra, .code .boo div.ln-xtra {background-color: #ffc;}
.code .boo span.xtra { display:block; }

.code .c .de1, .code .c .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .c  {font-family:monospace; font-size: 12px;}
.code .c .imp {font-weight: bold; color: red;}
.code .c li, .code .c .li1 {font-weight: normal; vertical-align:top;}
.code .c .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .c .li2 {background: #f2f2f2;}
.code .c .kw1 {color: #b1b100;}
.code .c .kw2 {color: #000000; font-weight: bold;}
.code .c .kw3 {color: #000066;}
.code .c .kw4 {color: #993333;}
.code .c .co1 {color: #666666; font-style: italic;}
.code .c .co2 {color: #339933;}
.code .c .coMULTI {color: #808080; font-style: italic;}
.code .c .es0 {color: #000099; font-weight: bold;}
.code .c .es1 {color: #000099; font-weight: bold;}
.code .c .es2 {color: #660099; font-weight: bold;}
.code .c .es3 {color: #660099; font-weight: bold;}
.code .c .es4 {color: #660099; font-weight: bold;}
.code .c .es5 {color: #006699; font-weight: bold;}
.code .c .br0 {color: #009900;}
.code .c .sy0 {color: #339933;}
.code .c .st0 {color: #ff0000;}
.code .c .nu0 {color: #0000dd;}
.code .c .nu6 {color: #208080;}
.code .c .nu8 {color: #208080;}
.code .c .nu12 {color: #208080;}
.code .c .nu16 {color:#800080;}
.code .c .nu17 {color:#800080;}
.code .c .nu18 {color:#800080;}
.code .c .nu19 {color:#800080;}
.code .c .me1 {color: #202020;}
.code .c .me2 {color: #202020;}
.code .c .ln-xtra, .code .c li.ln-xtra, .code .c div.ln-xtra {background-color: #ffc;}
.code .c span.xtra { display:block; }

.code .c_mac .de1, .code .c_mac .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .c_mac  {font-family:monospace; font-size: 12px;}
.code .c_mac .imp {font-weight: bold; color: red;}
.code .c_mac li, .code .c_mac .li1 {font-weight: normal; vertical-align:top;}
.code .c_mac .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .c_mac .li2 {background: #f2f2f2;}
.code .c_mac .kw1 {color: #0000ff;}
.code .c_mac .kw2 {color: #0000ff;}
.code .c_mac .kw3 {color: #0000dd;}
.code .c_mac .kw4 {color: #0000ff;}
.code .c_mac .co1 {color: #ff0000;}
.code .c_mac .co2 {color: #339900;}
.code .c_mac .coMULTI {color: #ff0000; font-style: italic;}
.code .c_mac .es0 {color: #000099; font-weight: bold;}
.code .c_mac .es1 {color: #000099; font-weight: bold;}
.code .c_mac .es2 {color: #660099; font-weight: bold;}
.code .c_mac .es3 {color: #660099; font-weight: bold;}
.code .c_mac .es4 {color: #660099; font-weight: bold;}
.code .c_mac .es5 {color: #006699; font-weight: bold;}
.code .c_mac .br0 {color: #000000;}
.code .c_mac .sy0 {color: #000000;}
.code .c_mac .st0 {color: #666666;}
.code .c_mac .nu0 {color: #0000dd;}
.code .c_mac .nu6 {color: #208080;}
.code .c_mac .nu8 {color: #208080;}
.code .c_mac .nu12 {color: #208080;}
.code .c_mac .nu16 {color:#800080;}
.code .c_mac .nu17 {color:#800080;}
.code .c_mac .nu18 {color:#800080;}
.code .c_mac .nu19 {color:#800080;}
.code .c_mac .me1 {color: #00eeff;}
.code .c_mac .me2 {color: #00eeff;}
.code .c_mac .ln-xtra, .code .c_mac li.ln-xtra, .code .c_mac div.ln-xtra {background-color: #ffc;}
.code .c_mac span.xtra { display:block; }

.code .caddcl .de1, .code .caddcl .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .caddcl  {font-family:monospace; font-size: 12px;}
.code .caddcl .imp {font-weight: bold; color: red;}
.code .caddcl li, .code .caddcl .li1 {font-weight: normal; vertical-align:top;}
.code .caddcl .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .caddcl .li2 {background: #f2f2f2;}
.code .caddcl .kw1 {color: #b1b100;}
.code .caddcl .co1 {color: #808080; font-style: italic;}
.code .caddcl .coMULTI {color: #808080; font-style: italic;}
.code .caddcl .es0 {color: #000099; font-weight: bold;}
.code .caddcl .br0 {color: #66cc66;}
.code .caddcl .sy0 {color: #66cc66;}
.code .caddcl .st0 {color: #ff0000;}
.code .caddcl .nu0 {color: #cc66cc;}
.code .caddcl .ln-xtra, .code .caddcl li.ln-xtra, .code .caddcl div.ln-xtra {background-color: #ffc;}
.code .caddcl span.xtra { display:block; }

.code .cadlisp .de1, .code .cadlisp .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .cadlisp  {font-family:monospace; font-size: 12px;}
.code .cadlisp .imp {font-weight: bold; color: red;}
.code .cadlisp li, .code .cadlisp .li1 {font-weight: normal; vertical-align:top;}
.code .cadlisp .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .cadlisp .li2 {background: #f2f2f2;}
.code .cadlisp .kw1 {color: #b1b100;}
.code .cadlisp .co1 {color: #808080; font-style: italic;}
.code .cadlisp .coMULTI {color: #808080; font-style: italic;}
.code .cadlisp .es0 {color: #000099; font-weight: bold;}
.code .cadlisp .br0 {color: #66cc66;}
.code .cadlisp .sy0 {color: #66cc66;}
.code .cadlisp .st0 {color: #ff0000;}
.code .cadlisp .nu0 {color: #cc66cc;}
.code .cadlisp .ln-xtra, .code .cadlisp li.ln-xtra, .code .cadlisp div.ln-xtra {background-color: #ffc;}
.code .cadlisp span.xtra { display:block; }

.code .cfdg .de1, .code .cfdg .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .cfdg  {font-family:monospace; font-size: 12px;}
.code .cfdg .imp {font-weight: bold; color: red;}
.code .cfdg li, .code .cfdg .li1 {font-weight: normal; vertical-align:top;}
.code .cfdg .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .cfdg .li2 {background: #f2f2f2;}
.code .cfdg .kw1 {color: #717100;}
.code .cfdg .kw2 {color: #000000; font-weight: bold;}
.code .cfdg .kw3 {color: #006666;}
.code .cfdg .co1 {color: #808080; font-style: italic;}
.code .cfdg .co2 {color: #808080; font-style: italic;}
.code .cfdg .coMULTI {color: #808080; font-style: italic;}
.code .cfdg .es0 {color: #000099; font-weight: bold;}
.code .cfdg .br0 {color: #66cc66;}
.code .cfdg .sy0 {color: #66cc66;}
.code .cfdg .st0 {color: #ff0000;}
.code .cfdg .nu0 {color: #cc66cc;}
.code .cfdg .me1 {color: #006600;}
.code .cfdg .me2 {color: #006600;}
.code .cfdg .ln-xtra, .code .cfdg li.ln-xtra, .code .cfdg div.ln-xtra {background-color: #ffc;}
.code .cfdg span.xtra { display:block; }

.code .cfm .de1, .code .cfm .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .cfm  {font-family:monospace; font-size: 12px;}
.code .cfm .imp {font-weight: bold; color: red;}
.code .cfm li, .code .cfm .li1 {font-weight: normal; vertical-align:top;}
.code .cfm .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .cfm .li2 {background: #f2f2f2;}
.code .cfm .kw1 {color: #990000; font-weight: bold;}
.code .cfm .kw2 {color: #000000; font-weight: bold;}
.code .cfm .kw3 {color: #0000FF;}
.code .cfm .kw4 {color: #000000; font-weight: bold;}
.code .cfm .kw5 {color: #0000FF;}
.code .cfm .kw6 {color: #0000FF;}
.code .cfm .kw7 {color: #0000FF;}
.code .cfm .co1 {color: #808080; font-style: italic;}
.code .cfm .coMULTI {color: #808080; font-style: italic;}
.code .cfm .es0 {color: #000099; font-weight: bold;}
.code .cfm .br0 {color: #0000FF;}
.code .cfm .sy0 {color: #0000FF;}
.code .cfm .st0 {color: #009900;}
.code .cfm .nu0 {color: #FF0000;}
.code .cfm .sc0 {color: #808080; font-style: italic;}
.code .cfm .sc1 {color: #00bbdd;}
.code .cfm .sc2 {color: #0000FF;}
.code .cfm .sc3 {color: #000099;}
.code .cfm .sc4 {color: #333333;}
.code .cfm .sc5 {color: #333333;}
.code .cfm .ln-xtra, .code .cfm li.ln-xtra, .code .cfm div.ln-xtra {background-color: #ffc;}
.code .cfm span.xtra { display:block; }

.code .cil .de1, .code .cil .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .cil  {font-family:monospace; font-size: 12px;}
.code .cil .imp {font-weight: bold; color: red;}
.code .cil li, .code .cil .li1 {font-weight: normal; vertical-align:top;}
.code .cil .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .cil .li2 {background: #f2f2f2;}
.code .cil .kw1 {color:maroon;font-weight:bold;}
.code .cil .kw2 {color:blue;font-weight:bold;}
.code .cil .kw3 {color:purple;font-weight:bold;}
.code .cil .kw4 {color:teal;}
.code .cil .kw5 {color:blue;}
.code .cil .kw6 {color:blue;}
.code .cil .kw7 {color:blue;}
.code .cil .kw8 {color:blue;}
.code .cil .kw9 {color:00008B}
.code .cil .kw10 {color:gray}
.code .cil .co0 {color:gray;font-style:italic;}
.code .cil .es0 {color: #008000; font-weight: bold;}
.code .cil .br0 {color: #006400;}
.code .cil .sy0 {color: #006400;}
.code .cil .st0 {color: #008000;}
.code .cil .nu0 {color: #00008B;}
.code .cil .me1 {color: #000033;}
.code .cil .re0 {color:blue;}
.code .cil .ln-xtra, .code .cil li.ln-xtra, .code .cil div.ln-xtra {background-color: #ffc;}
.code .cil span.xtra { display:block; }

.code .cmake .de1, .code .cmake .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .cmake  {font-family:monospace; font-size: 12px;}
.code .cmake .imp {font-weight: bold; color: red;}
.code .cmake li, .code .cmake .li1 {font-weight: normal; vertical-align:top;}
.code .cmake .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .cmake .li2 {background: #f2f2f2;}
.code .cmake .kw1 {color: #1f3f81; font-style: bold;}
.code .cmake .kw2 {color: #1f3f81;}
.code .cmake .kw3 {color: #077807; font-style: italic;}
.code .cmake .co1 {color: #666666; font-style: italic;}
.code .cmake .es0 {color: #000099; font-weight: bold;}
.code .cmake .es1 {color: #b08000;}
.code .cmake .es2 {color: #0000cd;}
.code .cmake .sy0 {color: #197d8b;}
.code .cmake .st0 {color: #912f11;}
.code .cmake .re0 {color: #b08000;}
.code .cmake .re1 {color: #0000cd;}
.code .cmake .ln-xtra, .code .cmake li.ln-xtra, .code .cmake div.ln-xtra {background-color: #ffc;}
.code .cmake span.xtra { display:block; }

.code .cobol .de1, .code .cobol .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .cobol  {font-family:monospace; font-size: 12px;}
.code .cobol .imp {font-weight: bold; color: red;}
.code .cobol li, .code .cobol .li1 {font-weight: normal; vertical-align:top;}
.code .cobol .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .cobol .li2 {background: #f2f2f2;}
.code .cobol .kw1 {color: #000080; font-weight: bold;}
.code .cobol .kw2 {color: #000000; font-weight: bold;}
.code .cobol .kw3 {color: #008000; font-weight: bold;}
.code .cobol .kw4 {color: #000080;}
.code .cobol .kw5 {color: #008000;}
.code .cobol .co1 {color: #a0a0a0; font-style: italic;}
.code .cobol .coMULTI {color: #a0a0a0; font-style: italic;}
.code .cobol .es0 {color: #000099; font-weight: bold;}
.code .cobol .br0 {color: #339933;}
.code .cobol .sy0 {color: #000066;}
.code .cobol .st0 {color: #ff0000;}
.code .cobol .nu0 {color: #993399;}
.code .cobol .me1 {color: #202020;}
.code .cobol .ln-xtra, .code .cobol li.ln-xtra, .code .cobol div.ln-xtra {background-color: #ffc;}
.code .cobol span.xtra { display:block; }

.code .cpp .de1, .code .cpp .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .cpp  {font-family:monospace; font-size: 12px;}
.code .cpp .imp {font-weight: bold; color: red;}
.code .cpp li, .code .cpp .li1 {font-weight: normal; vertical-align:top;}
.code .cpp .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .cpp .li2 {background: #f2f2f2;}
.code .cpp .kw1 {color: #0000ff;}
.code .cpp .kw2 {color: #0000ff;}
.code .cpp .kw3 {color: #0000dd;}
.code .cpp .kw4 {color: #0000ff;}
.code .cpp .co1 {color: #666666;}
.code .cpp .co2 {color: #339900;}
.code .cpp .coMULTI {color: #ff0000; font-style: italic;}
.code .cpp .es0 {color: #000099; font-weight: bold;}
.code .cpp .es1 {color: #000099; font-weight: bold;}
.code .cpp .es2 {color: #660099; font-weight: bold;}
.code .cpp .es3 {color: #660099; font-weight: bold;}
.code .cpp .es4 {color: #660099; font-weight: bold;}
.code .cpp .es5 {color: #006699; font-weight: bold;}
.code .cpp .br0 {color: #008000;}
.code .cpp .sy0 {color: #008000;}
.code .cpp .sy1 {color: #000080;}
.code .cpp .sy2 {color: #000040;}
.code .cpp .sy3 {color: #000040;}
.code .cpp .sy4 {color: #008080;}
.code .cpp .st0 {color: #FF0000;}
.code .cpp .nu0 {color: #0000dd;}
.code .cpp .nu6 {color: #208080;}
.code .cpp .nu8 {color: #208080;}
.code .cpp .nu12 {color: #208080;}
.code .cpp .nu16 {color:#800080;}
.code .cpp .nu17 {color:#800080;}
.code .cpp .nu18 {color:#800080;}
.code .cpp .nu19 {color:#800080;}
.code .cpp .me1 {color: #007788;}
.code .cpp .me2 {color: #007788;}
.code .cpp .ln-xtra, .code .cpp li.ln-xtra, .code .cpp div.ln-xtra {background-color: #ffc;}
.code .cpp span.xtra { display:block; }

.code .cpp-qt .de1, .code .cpp-qt .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .cpp-qt  {font-family:monospace; font-size: 12px;}
.code .cpp-qt .imp {font-weight: bold; color: red;}
.code .cpp-qt li, .code .cpp-qt .li1 {font-weight: normal; vertical-align:top;}
.code .cpp-qt .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .cpp-qt .li2 {background: #f2f2f2;}
.code .cpp-qt .kw1 {color: #000000; font-weight:bold;}
.code .cpp-qt .kw2 {color: #0057AE;}
.code .cpp-qt .kw3 {color: #2B74C7;}
.code .cpp-qt .kw4 {color: #0057AE;}
.code .cpp-qt .kw5 {color: #22aadd;}
.code .cpp-qt .co1 {color: #888888;}
.code .cpp-qt .co2 {color: #006E28;}
.code .cpp-qt .coMULTI {color: #888888; font-style: italic;}
.code .cpp-qt .es0 {color: #000099; font-weight: bold;}
.code .cpp-qt .es1 {color: #000099; font-weight: bold;}
.code .cpp-qt .es2 {color: #660099; font-weight: bold;}
.code .cpp-qt .es3 {color: #660099; font-weight: bold;}
.code .cpp-qt .es4 {color: #660099; font-weight: bold;}
.code .cpp-qt .es5 {color: #006699; font-weight: bold;}
.code .cpp-qt .br0 {color: #006E28;}
.code .cpp-qt .sy0 {color: #006E28;}
.code .cpp-qt .st0 {color: #BF0303;}
.code .cpp-qt .nu0 {color: #B08000;}
.code .cpp-qt .nu6 {color: #208080;}
.code .cpp-qt .nu8 {color: #208080;}
.code .cpp-qt .nu12 {color: #208080;}
.code .cpp-qt .nu16 {color:#800080;}
.code .cpp-qt .nu17 {color:#800080;}
.code .cpp-qt .nu18 {color:#800080;}
.code .cpp-qt .nu19 {color:#800080;}
.code .cpp-qt .me1 {color: #2B74C7;}
.code .cpp-qt .me2 {color: #2B74C7;}
.code .cpp-qt .me3 {color: #2B74C7;}
.code .cpp-qt .ln-xtra, .code .cpp-qt li.ln-xtra, .code .cpp-qt div.ln-xtra {background-color: #ffc;}
.code .cpp-qt span.xtra { display:block; }

.code .csharp .de1, .code .csharp .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .csharp  {font-family:monospace; font-size: 12px;}
.code .csharp .imp {font-weight: bold; color: red;}
.code .csharp li, .code .csharp .li1 {font-weight: normal; vertical-align:top;}
.code .csharp .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .csharp .li2 {background: #f2f2f2;}
.code .csharp .kw1 {color: #0600FF;}
.code .csharp .kw2 {color: #FF8000; font-weight: bold;}
.code .csharp .kw3 {color: #008000;}
.code .csharp .kw4 {color: #FF0000;}
.code .csharp .kw5 {color: #000000;}
.code .csharp .co1 {color: #008080; font-style: italic;}
.code .csharp .co2 {color: #008080;}
.code .csharp .co3 {color: #008080;}
.code .csharp .coMULTI {color: #008080; font-style: italic;}
.code .csharp .es0 {color: #008080; font-weight: bold;}
.code .csharp .es_h {color: #008080; font-weight: bold;}
.code .csharp .br0 {color: #000000;}
.code .csharp .sy0 {color: #008000;}
.code .csharp .st0 {color: #666666;}
.code .csharp .st_h {color: #666666;}
.code .csharp .nu0 {color: #FF0000;}
.code .csharp .me1 {color: #0000FF;}
.code .csharp .me2 {color: #0000FF;}
.code .csharp .ln-xtra, .code .csharp li.ln-xtra, .code .csharp div.ln-xtra {background-color: #ffc;}
.code .csharp span.xtra { display:block; }

.code .css .de1, .code .css .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .css  {font-family:monospace; font-size: 12px;}
.code .css .imp {font-weight: bold; color: red;}
.code .css li, .code .css .li1 {font-weight: normal; vertical-align:top;}
.code .css .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .css .li2 {background: #f2f2f2;}
.code .css .kw1 {color: #000000; font-weight: bold;}
.code .css .kw2 {color: #993333;}
.code .css .co1 {color: #a1a100;}
.code .css .co2 {color: #ff0000; font-style: italic;}
.code .css .coMULTI {color: #808080; font-style: italic;}
.code .css .es0 {color: #000099; font-weight: bold;}
.code .css .br0 {color: #00AA00;}
.code .css .sy0 {color: #00AA00;}
.code .css .st0 {color: #ff0000;}
.code .css .nu0 {color: #cc66cc;}
.code .css .re0 {color: #cc00cc;}
.code .css .re1 {color: #6666ff;}
.code .css .re2 {color: #3333ff;}
.code .css .re3 {color: #933;}
.code .css .ln-xtra, .code .css li.ln-xtra, .code .css div.ln-xtra {background-color: #ffc;}
.code .css span.xtra { display:block; }

.code .d .de1, .code .d .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .d  {font-family:monospace; font-size: 12px;}
.code .d .imp {font-weight: bold; color: red;}
.code .d li, .code .d .li1 {font-weight: normal; vertical-align:top;}
.code .d .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .d .li2 {background: #f2f2f2;}
.code .d .kw1 {color: #b1b100;}
.code .d .kw2 {color: #000000; font-weight: bold;}
.code .d .kw3 {color: #aaaadd; font-weight: bold;}
.code .d .kw4 {color: #993333;}
.code .d .co1 {color: #808080; font-style: italic;}
.code .d .co2 {color: #009933; font-style: italic;}
.code .d .co3 {color: #009933; font-style: italic;}
.code .d .co4 {color: #ff0000;}
.code .d .co5 {color: #0040ff;}
.code .d .coMULTI {color: #808080; font-style: italic;}
.code .d .es0 {color: #000099; font-weight: bold;}
.code .d .es1 {color: #000099; font-weight: bold;}
.code .d .es2 {color: #660099; font-weight: bold;}
.code .d .es3 {color: #660099; font-weight: bold;}
.code .d .es4 {color: #660099; font-weight: bold;}
.code .d .es5 {color: #006699; font-weight: bold;}
.code .d .es6 {color: #666699; font-weight: bold; font-style: italic;}
.code .d .br0 {color: #66cc66;}
.code .d .sy0 {color: #66cc66;}
.code .d .st0 {color: #ff0000;}
.code .d .st_h {color: #ff0000;}
.code .d .nu0 {color: #0000dd;}
.code .d .nu6 {color: #208080;}
.code .d .nu8 {color: #208080;}
.code .d .nu12 {color: #208080;}
.code .d .nu16 {color:#800080;}
.code .d .nu17 {color:#800080;}
.code .d .nu18 {color:#800080;}
.code .d .nu19 {color:#800080;}
.code .d .me1 {color: #006600;}
.code .d .me2 {color: #006600;}
.code .d .ln-xtra, .code .d li.ln-xtra, .code .d div.ln-xtra {background-color: #ffc;}
.code .d span.xtra { display:block; }

.code .dcs .de1, .code .dcs .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .dcs  {font-family:monospace; font-size: 12px;}
.code .dcs .imp {font-weight: bold; color: red;}
.code .dcs li, .code .dcs .li1 {font-weight: normal; vertical-align:top;}
.code .dcs .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .dcs .li2 {background: #f2f2f2;}
.code .dcs .kw1 {color: red;}
.code .dcs .kw2 {color: blue;}
.code .dcs .kw3 {color: black;}
.code .dcs .co1 {color: black; background-color: silver;}
.code .dcs .co2 {color: maroon; background-color: pink;}
.code .dcs .br0 {color: black;}
.code .dcs .sy0 {color: black;}
.code .dcs .st0 {color: green;}
.code .dcs .nu0 {color: green;}
.code .dcs .ln-xtra, .code .dcs li.ln-xtra, .code .dcs div.ln-xtra {background-color: #ffc;}
.code .dcs span.xtra { display:block; }

.code .delphi .de1, .code .delphi .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .delphi  {font-family:monospace; font-size: 12px;}
.code .delphi .imp {font-weight: bold; color: red;}
.code .delphi li, .code .delphi .li1 {font-weight: normal; vertical-align:top;}
.code .delphi .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .delphi .li2 {background: #f2f2f2;}
.code .delphi .kw1 {color: #000000; font-weight: bold;}
.code .delphi .kw2 {color: #000000; font-weight: bold;}
.code .delphi .kw3 {color: #000066;}
.code .delphi .kw4 {color: #000066; font-weight: bold;}
.code .delphi .co1 {color: #808080; font-style: italic;}
.code .delphi .co2 {color: #008000; font-style: italic;}
.code .delphi .coMULTI {color: #808080; font-style: italic;}
.code .delphi .es0 {color: #ff0000; font-weight: bold;}
.code .delphi .br0 {color: #000066;}
.code .delphi .sy0 {color: #000066;}
.code .delphi .sy1 {color: #000066;}
.code .delphi .sy2 {color: #000066;}
.code .delphi .sy3 {color: #000066;}
.code .delphi .st0 {color: #ff0000;}
.code .delphi .nu0 {color: #0000ff;}
.code .delphi .me1 {color: #006600;}
.code .delphi .re0 {color: #9ac;}
.code .delphi .re1 {color: #ff0000;}
.code .delphi .ln-xtra, .code .delphi li.ln-xtra, .code .delphi div.ln-xtra {background-color: #ffc;}
.code .delphi span.xtra { display:block; }

.code .diff .de1, .code .diff .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .diff  {font-family:monospace; font-size: 12px;}
.code .diff .imp {font-weight: bold; color: red;}
.code .diff li, .code .diff .li1 {font-weight: normal; vertical-align:top;}
.code .diff .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .diff .li2 {background: #f2f2f2;}
.code .diff .kw1 {color: #aaaaaa; font-style: italic;}
.code .diff .re0 {color: #440088;}
.code .diff .re1 {color: #991111;}
.code .diff .re2 {color: #00b000;}
.code .diff .re3 {color: #888822;}
.code .diff .re4 {color: #888822;}
.code .diff .re5 {color: #0011dd;}
.code .diff .re6 {color: #440088;}
.code .diff .re7 {color: #991111;}
.code .diff .re8 {color: #00b000;}
.code .diff .re9 {color: #888822;}
.code .diff .ln-xtra, .code .diff li.ln-xtra, .code .diff div.ln-xtra {background-color: #ffc;}
.code .diff span.xtra { display:block; }

.code .div .de1, .code .div .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .div  {font-family:monospace; font-size: 12px;}
.code .div .imp {font-weight: bold; color: red;}
.code .div li, .code .div .li1 {font-weight: normal; vertical-align:top;}
.code .div .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .div .li2 {background: #f2f2f2;}
.code .div .kw1 {color: #0040b1;}
.code .div .kw2 {color: #000000;}
.code .div .kw3 {color: #000066; font-weight: bold;}
.code .div .kw4 {color: #993333;}
.code .div .co1 {color: #808080; font-style: italic;}
.code .div .coMULTI {color: #808080; font-style: italic;}
.code .div .br0 {color: #44aa44;}
.code .div .sy0 {color: #44aa44;}
.code .div .st0 {color: #ff0000;}
.code .div .nu0 {color: #cc66cc;}
.code .div .me0 {color: #202020;}
.code .div .ln-xtra, .code .div li.ln-xtra, .code .div div.ln-xtra {background-color: #ffc;}
.code .div span.xtra { display:block; }

.code .dos .de1, .code .dos .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .dos  {font-family:monospace; font-size: 12px;}
.code .dos .imp {font-weight: bold; color: red;}
.code .dos li, .code .dos .li1 {font-weight: normal; vertical-align:top;}
.code .dos .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .dos .li2 {background: #f2f2f2;}
.code .dos .kw1 {color: #00b100; font-weight: bold;}
.code .dos .kw2 {color: #000000; font-weight: bold;}
.code .dos .kw3 {color: #b1b100; font-weight: bold;}
.code .dos .kw4 {color: #0000ff; font-weight: bold;}
.code .dos .co1 {color: #808080; font-style: italic;}
.code .dos .es0 {color: #ff0000; font-weight: bold;}
.code .dos .br0 {color: #66cc66;}
.code .dos .sy0 {color: #33cc33;}
.code .dos .sy1 {color: #33cc33;}
.code .dos .st0 {color: #ff0000;}
.code .dos .nu0 {color: #cc66cc;}
.code .dos .re0 {color: #b100b1; font-weight: bold;}
.code .dos .re1 {color: #448844;}
.code .dos .re2 {color: #448888;}
.code .dos .ln-xtra, .code .dos li.ln-xtra, .code .dos div.ln-xtra {background-color: #ffc;}
.code .dos span.xtra { display:block; }

.code .dot .de1, .code .dot .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .dot  {font-family:monospace; font-size: 12px;}
.code .dot .imp {font-weight: bold; color: red;}
.code .dot li, .code .dot .li1 {font-weight: normal; vertical-align:top;}
.code .dot .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .dot .li2 {background: #f2f2f2;}
.code .dot .kw1 {color: #000066;}
.code .dot .kw2 {color: #000000; font-weight: bold;}
.code .dot .kw3 {color: #993333;}
.code .dot .kw4 {color: #b1b100;}
.code .dot .co1 {color: #808080; font-style: italic;}
.code .dot .co2 {color: #339933;}
.code .dot .coMULTI {color: #808080; font-style: italic;}
.code .dot .es0 {color: #af624d; font-weight: bold;}
.code .dot .br0 {color: #66cc66;}
.code .dot .sy0 {color: #66cc66;}
.code .dot .st0 {color: #ff0000;}
.code .dot .nu0 {color: #cc66cc;}
.code .dot .ln-xtra, .code .dot li.ln-xtra, .code .dot div.ln-xtra {background-color: #ffc;}
.code .dot span.xtra { display:block; }

.code .eiffel .de1, .code .eiffel .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .eiffel  {font-family:monospace; font-size: 12px;}
.code .eiffel .imp {font-weight: bold; color: red;}
.code .eiffel li, .code .eiffel .li1 {font-weight: normal; vertical-align:top;}
.code .eiffel .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .eiffel .li2 {background: #f2f2f2;}
.code .eiffel .kw1 {color: #0600FF; font-weight: bold;}
.code .eiffel .kw2 {color: #0600FF; font-weight: bold;}
.code .eiffel .kw3 {color: #800080;}
.code .eiffel .kw4 {color: #800000}
.code .eiffel .kw5 {color: #603000;}
.code .eiffel .co1 {color: #008000; font-style: italic;}
.code .eiffel .es0 {color: #005070; font-weight: bold;}
.code .eiffel .br0 {color: #FF0000;}
.code .eiffel .sy0 {color: #600000;}
.code .eiffel .st0 {color: #0080A0;}
.code .eiffel .nu0 {color: #FF0000;}
.code .eiffel .me1 {color: #000060;}
.code .eiffel .me2 {color: #000050;}
.code .eiffel .ln-xtra, .code .eiffel li.ln-xtra, .code .eiffel div.ln-xtra {background-color: #ffc;}
.code .eiffel span.xtra { display:block; }

.code .email .de1, .code .email .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .email  {font-family:monospace; font-size: 12px;}
.code .email .imp {font-weight: bold; color: red;}
.code .email li, .code .email .li1 {font-weight: normal; vertical-align:top;}
.code .email .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .email .li2 {background: #f2f2f2;}
.code .email .kw1 {color: #0000FF; font-weight: bold;}
.code .email .kw2 {color: #000000; font-weight: bold;}
.code .email .kw3 {color: #800000; font-weight: bold;}
.code .email .kw4 {font-weight: bold;}
.code .email .es0 {color: #000099; font-weight: bold;}
.code .email .br0 {color: #66cc66;}
.code .email .sy0 {color: #66cc66;}
.code .email .st0 {color: #ff0000;}
.code .email .nu0 {color: #cc66cc;}
.code .email .sc0 {color: #000040;}
.code .email .re1 {color: #000000; font-weight: bold;}
.code .email .re2 {color: #0000FF;}
.code .email .re3 {color: #008000;}
.code .email .re4 {color: #0000FF; font-weight: bold;}
.code .email .re5 {font-weight: bold;}
.code .email .re6 {color: #400080;}
.code .email .ln-xtra, .code .email li.ln-xtra, .code .email div.ln-xtra {background-color: #ffc;}
.code .email span.xtra { display:block; }

.code .erlang .de1, .code .erlang .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .erlang  {font-family:monospace; font-size: 12px;}
.code .erlang .imp {font-weight: bold; color: red;}
.code .erlang li, .code .erlang .li1 {font-weight: normal; vertical-align:top;}
.code .erlang .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .erlang .li2 {background: #f2f2f2;}
.code .erlang .kw1 {color: #186895;}
.code .erlang .kw2 {color: #014ea4;}
.code .erlang .kw3 {color: #fa6fff;}
.code .erlang .kw4 {color: #fa6fff;}
.code .erlang .kw5 {color: #ff4e18;}
.code .erlang .kw6 {color: #9d4f37;}
.code .erlang .co1 {color: #666666; font-style: italic;}
.code .erlang .coMULTI {color: #666666; font-style: italic;}
.code .erlang .es0 {color: #000099; font-weight: bold;}
.code .erlang .es_h {color: #000099; font-weight: bold;}
.code .erlang .br0 {color: #109ab8;}
.code .erlang .sy0 {color: #004866;}
.code .erlang .sy1 {color: #6bb810;}
.code .erlang .sy2 {color: #ee3800;}
.code .erlang .sy3 {color: #014ea4;}
.code .erlang .st0 {color: #ff7800;}
.code .erlang .nu0 {color: #ff9600;}
.code .erlang .me1 {color: #006600;}
.code .erlang .me2 {color: #006600;}
.code .erlang .re0 {color: #6941fd;}
.code .erlang .re1 {color: #d400ed;}
.code .erlang .re2 {color: #5400b3;}
.code .erlang .re3 {color: #ff3c00;}
.code .erlang .re4 {color: #6941fd;}
.code .erlang .re5 {color: #45b3e6;}
.code .erlang .re6 {color: #ff9600;}
.code .erlang .re7 {color: #d400ed;}
.code .erlang .re8 {color: #ff9600;}
.code .erlang .ln-xtra, .code .erlang li.ln-xtra, .code .erlang div.ln-xtra {background-color: #ffc;}
.code .erlang span.xtra { display:block; }

.code .fo .de1, .code .fo .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .fo  {font-family:monospace; font-size: 12px;}
.code .fo .imp {font-weight: bold; color: red;}
.code .fo li, .code .fo .li1 {font-weight: normal; vertical-align:top;}
.code .fo .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .fo .li2 {background: #f2f2f2;}
.code .fo .kw1 {color: #000000; font-weight: bold;}
.code .fo .kw2 {color: #000000; font-weight: bold;}
.code .fo .kw3 {color: #006600; font-weight: bold;}
.code .fo .kw4 {color: #006600; font-weight: bold;}
.code .fo .kw5 {color: #003399; font-weight: bold;}
.code .fo .kw6 {color: #003399; font-weight: bold;}
.code .fo .kw7 {color: #003399; font-weight: bold;}
.code .fo .kw8 {color: #003399; font-weight: bold;}
.code .fo .kw9 {color: #003399; font-weight: bold;}
.code .fo .kw10 {color: #003399; font-weight: bold;}
.code .fo .kw11 {color: #003399; font-weight: bold;}
.code .fo .kw12 {color: #003399; font-weight: bold;}
.code .fo .co1 {color: #666666; font-style: italic;}
.code .fo .coMULTI {color: #666666; font-style: italic;}
.code .fo .es0 {color: #000099; font-weight: bold;}
.code .fo .br0 {color: #009900;}
.code .fo .sy0 {color: #339933;}
.code .fo .sy1 {color: #000000; font-weight: bold;}
.code .fo .st0 {color: #0000ff;}
.code .fo .nu0 {color: #cc66cc;}
.code .fo .me1 {color: #006633;}
.code .fo .me2 {color: #006633;}
.code .fo .ln-xtra, .code .fo li.ln-xtra, .code .fo div.ln-xtra {background-color: #ffc;}
.code .fo span.xtra { display:block; }

.code .fortran .de1, .code .fortran .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .fortran  {font-family:monospace; font-size: 12px;}
.code .fortran .imp {font-weight: bold; color: red;}
.code .fortran li, .code .fortran .li1 {font-weight: normal; vertical-align:top;}
.code .fortran .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .fortran .li2 {background: #f2f2f2;}
.code .fortran .kw1 {color: #b1b100;}
.code .fortran .kw2 {color: #000000; font-weight: bold;}
.code .fortran .kw3 {color: #000066;}
.code .fortran .kw4 {color: #993333;}
.code .fortran .co1 {color: #666666; font-style: italic;}
.code .fortran .co2 {color: #339933;}
.code .fortran .coMULTI {color: #808080; font-style: italic;}
.code .fortran .es0 {color: #000099; font-weight: bold;}
.code .fortran .br0 {color: #009900;}
.code .fortran .sy0 {color: #339933;}
.code .fortran .st0 {color: #ff0000;}
.code .fortran .nu0 {color: #cc66cc;}
.code .fortran .me1 {color: #202020;}
.code .fortran .me2 {color: #202020;}
.code .fortran .ln-xtra, .code .fortran li.ln-xtra, .code .fortran div.ln-xtra {background-color: #ffc;}
.code .fortran span.xtra { display:block; }

.code .freebasic .de1, .code .freebasic .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .freebasic  {font-family:monospace; font-size: 12px;}
.code .freebasic .imp {font-weight: bold; color: red;}
.code .freebasic li, .code .freebasic .li1 {font-weight: normal; vertical-align:top;}
.code .freebasic .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .freebasic .li2 {background: #f2f2f2;}
.code .freebasic .kw1 {color: #b1b100;}
.code .freebasic .co1 {color: #808080;}
.code .freebasic .co2 {color: #339933;}
.code .freebasic .es0 {color: #000099;}
.code .freebasic .br0 {color: #66cc66;}
.code .freebasic .sy0 {color: #66cc66;}
.code .freebasic .st0 {color: #ff0000;}
.code .freebasic .nu0 {color: #cc66cc;}
.code .freebasic .me0 {color: #66cc66;}
.code .freebasic .ln-xtra, .code .freebasic li.ln-xtra, .code .freebasic div.ln-xtra {background-color: #ffc;}
.code .freebasic span.xtra { display:block; }

.code .genero .de1, .code .genero .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .genero  {font-family:monospace; font-size: 12px;}
.code .genero .imp {font-weight: bold; color: red;}
.code .genero li, .code .genero .li1 {font-weight: normal; vertical-align:top;}
.code .genero .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .genero .li2 {background: #f2f2f2;}
.code .genero .kw1 {color: #0600FF;}
.code .genero .kw2 {color: #0000FF; font-weight: bold;}
.code .genero .kw3 {color: #008000;}
.code .genero .kw4 {color: #FF0000;}
.code .genero .co1 {color: #008080; font-style: italic;}
.code .genero .co2 {color: #008080;}
.code .genero .coMULTI {color: #008080; font-style: italic;}
.code .genero .es0 {color: #008080; font-weight: bold;}
.code .genero .br0 {color: #000000;}
.code .genero .sy0 {color: #008000;}
.code .genero .st0 {color: #808080;}
.code .genero .nu0 {color: #FF0000;}
.code .genero .me1 {color: #0000FF;}
.code .genero .me2 {color: #0000FF;}
.code .genero .ln-xtra, .code .genero li.ln-xtra, .code .genero div.ln-xtra {background-color: #ffc;}
.code .genero span.xtra { display:block; }

.code .gettext .de1, .code .gettext .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .gettext  {font-family:monospace; font-size: 12px;}
.code .gettext .imp {font-weight: bold; color: red;}
.code .gettext li, .code .gettext .li1 {font-weight: normal; vertical-align:top;}
.code .gettext .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .gettext .li2 {background: #f2f2f2;}
.code .gettext .kw1 {color: #000000; font-weight: bold;}
.code .gettext .co0 {color: #000099;}
.code .gettext .co1 {color: #000099;}
.code .gettext .co2 {color: #000099;}
.code .gettext .co3 {color: #006666;}
.code .gettext .co4 {color: #666666; font-style: italic;}
.code .gettext .es0 {color: #000099; font-weight: bold;}
.code .gettext .br0 {color: #000099;}
.code .gettext .st0 {color: #ff0000;}
.code .gettext .nu0 {color: #000099;}
.code .gettext .ln-xtra, .code .gettext li.ln-xtra, .code .gettext div.ln-xtra {background-color: #ffc;}
.code .gettext span.xtra { display:block; }

.code .glsl .de1, .code .glsl .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .glsl  {font-family:monospace; font-size: 12px;}
.code .glsl .imp {font-weight: bold; color: red;}
.code .glsl li, .code .glsl .li1 {font-weight: normal; vertical-align:top;}
.code .glsl .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .glsl .li2 {background: #f2f2f2;}
.code .glsl .kw1 {color: #000000; font-weight: bold;}
.code .glsl .kw2 {color: #333399; font-weight: bold;}
.code .glsl .kw3 {color: #000066; font-weight: bold;}
.code .glsl .kw4 {color: #333399; font-weight: bold;}
.code .glsl .kw5 {color: #993333; font-weight: bold;}
.code .glsl .kw6 {color: #551111;}
.code .glsl .co1 {color: #666666; font-style: italic;}
.code .glsl .co2 {color: #009900;}
.code .glsl .coMULTI {color: #666666; font-style: italic;}
.code .glsl .es0 {color: #000099; font-weight: bold;}
.code .glsl .br0 {color: #000066;}
.code .glsl .sy0 {color: #000066;}
.code .glsl .st0 {color: #ff0000;}
.code .glsl .nu0 {color: #0000ff;}
.code .glsl .me1 {color: #006600;}
.code .glsl .ln-xtra, .code .glsl li.ln-xtra, .code .glsl div.ln-xtra {background-color: #ffc;}
.code .glsl span.xtra { display:block; }

.code .gml .de1, .code .gml .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .gml  {font-family:monospace; font-size: 12px;}
.code .gml .imp {font-weight: bold; color: red;}
.code .gml li, .code .gml .li1 {font-weight: normal; vertical-align:top;}
.code .gml .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .gml .li2 {background: #f2f2f2;}
.code .gml .kw1 {font-weight: bold; color: #000000;}
.code .gml .kw2 {font-weight: bold; color: #000000;}
.code .gml .kw3 {color: navy;}
.code .gml .kw4 {color: #663300;}
.code .gml .co1 {font-style: italic; color: green;}
.code .gml .coMULTI {font-style: italic; color: green;}
.code .gml .es0 {color: #000099; font-weight: bold;}
.code .gml .br0 {color: #000000;}
.code .gml .sy0 {color: #66cc66; font-weight: bold;}
.code .gml .st0 {color: #ff0000;}
.code .gml .nu0 {color: #cc66cc;}
.code .gml .me1 {color: #202020;}
.code .gml .ln-xtra, .code .gml li.ln-xtra, .code .gml div.ln-xtra {background-color: #ffc;}
.code .gml span.xtra { display:block; }

.code .gnuplot .de1, .code .gnuplot .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .gnuplot  {font-family:monospace; font-size: 12px;}
.code .gnuplot .imp {font-weight: bold; color: red;}
.code .gnuplot li, .code .gnuplot .li1 {font-weight: normal; vertical-align:top;}
.code .gnuplot .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .gnuplot .li2 {background: #f2f2f2;}
.code .gnuplot .kw1 {color: #b1b100;}
.code .gnuplot .kw2 {color: #990000;}
.code .gnuplot .kw3 {color: #550000;}
.code .gnuplot .kw4 {color: #7a0874;}
.code .gnuplot .kw5 {color: #448888;}
.code .gnuplot .co1 {color: #adadad; font-style: italic;}
.code .gnuplot .es0 {color: #000099; font-weight:bold;}
.code .gnuplot .br0 {color: #000099; font-weight:bold;}
.code .gnuplot .sy0 {color: #000; font-weight: bold;}
.code .gnuplot .st0 {color: #0000ff;}
.code .gnuplot .nu0 {color: #cc66cc;}
.code .gnuplot .re0 {color: #007800;}
.code .gnuplot .re1 {color: #cc66cc;}
.code .gnuplot .ln-xtra, .code .gnuplot li.ln-xtra, .code .gnuplot div.ln-xtra {background-color: #ffc;}
.code .gnuplot span.xtra { display:block; }

.code .groovy .de1, .code .groovy .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .groovy  {font-family:monospace; font-size: 12px;}
.code .groovy .imp {font-weight: bold; color: red;}
.code .groovy li, .code .groovy .li1 {font-weight: normal; vertical-align:top;}
.code .groovy .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .groovy .li2 {background: #f2f2f2;}
.code .groovy .kw1 {color: #b1b100;}
.code .groovy .kw2 {color: #000000; font-weight: bold;}
.code .groovy .kw3 {color: #aaaadd; font-weight: bold;}
.code .groovy .kw4 {color: #993333;}
.code .groovy .kw5 {color: #663399;}
.code .groovy .kw6 {color: #CC0099;}
.code .groovy .kw7 {color: #FFCC33;}
.code .groovy .kw8 {color: #993399;}
.code .groovy .kw9 {color: #993399; font-weight: bold;}
.code .groovy .co1 {color: #808080; font-style: italic;}
.code .groovy .co2 {color: #a1a100;}
.code .groovy .co3 {color: #808080; font-style: italic;}
.code .groovy .coMULTI {color: #808080; font-style: italic;}
.code .groovy .es0 {color: #000099; font-weight: bold;}
.code .groovy .br0 {color: #66cc66;}
.code .groovy .sy0 {color: #66cc66;}
.code .groovy .st0 {color: #ff0000;}
.code .groovy .nu0 {color: #cc66cc;}
.code .groovy .me1 {color: #006600;}
.code .groovy .me2 {color: #006600;}
.code .groovy .re0 {color: #0000ff;}
.code .groovy .ln-xtra, .code .groovy li.ln-xtra, .code .groovy div.ln-xtra {background-color: #ffc;}
.code .groovy span.xtra { display:block; }

.code .haskell .de1, .code .haskell .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .haskell  {font-family:monospace; font-size: 12px;}
.code .haskell .imp {font-weight: bold; color: red;}
.code .haskell li, .code .haskell .li1 {font-weight: normal; vertical-align:top;}
.code .haskell .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .haskell .li2 {background: #f2f2f2;}
.code .haskell .kw1 {color: #06c; font-weight: bold;}
.code .haskell .kw2 {color: #06c; font-weight: bold;}
.code .haskell .kw3 {font-weight: bold;}
.code .haskell .kw4 {color: #cccc00; font-weight: bold;}
.code .haskell .kw5 {color: maroon;}
.code .haskell .co1 {color: #5d478b; font-style: italic;}
.code .haskell .co2 {color: #339933; font-weight: bold;}
.code .haskell .coMULTI {color: #5d478b; font-style: italic;}
.code .haskell .es0 {background-color: #3cb371; font-weight: bold;}
.code .haskell .br0 {color: green;}
.code .haskell .sy0 {color: #339933; font-weight: bold;}
.code .haskell .st0 {background-color: #3cb371;}
.code .haskell .nu0 {color: red;}
.code .haskell .me1 {color: #060;}
.code .haskell .ln-xtra, .code .haskell li.ln-xtra, .code .haskell div.ln-xtra {background-color: #ffc;}
.code .haskell span.xtra { display:block; }

.code .hq9plus .de1, .code .hq9plus .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .hq9plus  {font-family:monospace; font-size: 12px;}
.code .hq9plus .imp {font-weight: bold; color: red;}
.code .hq9plus li, .code .hq9plus .li1 {font-weight: normal; vertical-align:top;}
.code .hq9plus .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .hq9plus .li2 {background: #f2f2f2;}
.code .hq9plus .br0 {color: #66cc66;}
.code .hq9plus .sy0 {color: #a16000;}
.code .hq9plus .st0 {color: #ff0000;}
.code .hq9plus .ln-xtra, .code .hq9plus li.ln-xtra, .code .hq9plus div.ln-xtra {background-color: #ffc;}
.code .hq9plus span.xtra { display:block; }

.code .html4strict .de1, .code .html4strict .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .html4strict  {font-family:monospace; font-size: 12px;}
.code .html4strict .imp {font-weight: bold; color: red;}
.code .html4strict li, .code .html4strict .li1 {font-weight: normal; vertical-align:top;}
.code .html4strict .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .html4strict .li2 {background: #f2f2f2;}
.code .html4strict .kw2 {color: #000000; font-weight: bold;}
.code .html4strict .kw3 {color: #000066;}
.code .html4strict .es0 {color: #000099; font-weight: bold;}
.code .html4strict .br0 {color: #66cc66;}
.code .html4strict .sy0 {color: #66cc66;}
.code .html4strict .st0 {color: #ff0000;}
.code .html4strict .nu0 {color: #cc66cc;}
.code .html4strict .sc-1 {color: #808080; font-style: italic;}
.code .html4strict .sc0 {color: #00bbdd;}
.code .html4strict .sc1 {color: #ddbb00;}
.code .html4strict .sc2 {color: #009900;}
.code .html4strict .ln-xtra, .code .html4strict li.ln-xtra, .code .html4strict div.ln-xtra {background-color: #ffc;}
.code .html4strict span.xtra { display:block; }

.code .html5 .de1, .code .html5 .de2 {font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top; line-height: 150%;}
.code .html5 {font-family:monospace; font-size: 12px;}
.code .html5 .imp {font-weight: bold; color: red;}
.code .html5 li, .code .html5 .li1 {font-weight: normal; vertical-align:top;}
.code .html5 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .html5 .li2 {font-weight: bold; vertical-align:top;background: #f2f2f2;}
.code .html5 .kw2 {color: #000000; font-weight: bold;}
.code .html5 .kw3 {color: #000066;}
.code .html5 .es0 {color: #000099; font-weight: bold;}
.code .html5 .br0 {color: #66cc66;}
.code .html5 .sy0 {color: #66cc66;}
.code .html5 .st0 {color: #ff0000;}
.code .html5 .nu0 {color: #cc66cc;}
.code .html5 .sc-2 {color: #404040;}
.code .html5 .sc-1 {color: #808080; font-style: italic;}
.code .html5 .sc0 {color: #00bbdd;}
.code .html5 .sc1 {color: #ddbb00;}
.code .html5 .sc2 {color: #009900;}
.code .html5 .ln-xtra, .code .html5 li.ln-xtra, .code .html5 div.ln-xtra {background-color: #ffc;}
.code .html5 span.xtra { display:block; }

.code .idl .de1, .code .idl .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .idl  {font-family:monospace; font-size: 12px;}
.code .idl .imp {font-weight: bold; color: red;}
.code .idl li, .code .idl .li1 {font-weight: normal; vertical-align:top;}
.code .idl .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .idl .li2 {background: #f2f2f2;}
.code .idl .kw1 {color: #990078; font-weight: bold}
.code .idl .kw2 {color: #36dd1c;}
.code .idl .kw3 {color: #990078; font-weight: bold}
.code .idl .kw4 {color: #0000ec;}
.code .idl .co1 {color: #3f7f5f;}
.code .idl .co2 {color: #808080;}
.code .idl .coMULTI {color: #4080ff; font-style: italic;}
.code .idl .es0 {color: #666666; font-weight: bold;}
.code .idl .br0 {color: #808080;}
.code .idl .sy0 {color: #66cc66;}
.code .idl .st0 {color: #ff0000;}
.code .idl .nu0 {color: #0000dd;}
.code .idl .ln-xtra, .code .idl li.ln-xtra, .code .idl div.ln-xtra {background-color: #ffc;}
.code .idl span.xtra { display:block; }

.code .ini .de1, .code .ini .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .ini  {font-family:monospace; font-size: 12px;}
.code .ini .imp {font-weight: bold; color: red;}
.code .ini li, .code .ini .li1 {font-weight: normal; vertical-align:top;}
.code .ini .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .ini .li2 {background: #f2f2f2;}
.code .ini .co0 {color: #666666; font-style: italic;}
.code .ini .sy0 {color: #000066; font-weight:bold;}
.code .ini .st0 {color: #933;}
.code .ini .re0 {color: #000066; font-weight:bold;}
.code .ini .re1 {color: #000099;}
.code .ini .re2 {color: #660066;}
.code .ini .ln-xtra, .code .ini li.ln-xtra, .code .ini div.ln-xtra {background-color: #ffc;}
.code .ini span.xtra { display:block; }

.code .inno .de1, .code .inno .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .inno  {font-family:monospace; font-size: 12px;}
.code .inno .imp {font-weight: bold; color: red;}
.code .inno li, .code .inno .li1 {font-weight: normal; vertical-align:top;}
.code .inno .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .inno .li2 {background: #f2f2f2;}
.code .inno .kw1 {color: #000000; font-weight: bold;}
.code .inno .kw2 {color: #000000;font-style: italic;}
.code .inno .kw3 {color: #0000FF;}
.code .inno .kw4 {color: #CC0000;}
.code .inno .co1 {color: #33FF00; font-style: italic;}
.code .inno .coMULTI {color: #33FF00; font-style: italic;}
.code .inno .br0 {color: #66cc66;}
.code .inno .sy0 {color: #000000; font-weight: bold;}
.code .inno .st0 {color: #ff0000;}
.code .inno .nu0 {color: #cc66cc;}
.code .inno .me1 {color: #006600;}
.code .inno .ln-xtra, .code .inno li.ln-xtra, .code .inno div.ln-xtra {background-color: #ffc;}
.code .inno span.xtra { display:block; }

.code .intercal .de1, .code .intercal .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .intercal  {font-family:monospace; font-size: 12px;}
.code .intercal .imp {font-weight: bold; color: red;}
.code .intercal li, .code .intercal .li1 {font-weight: normal; vertical-align:top;}
.code .intercal .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .intercal .li2 {background: #f2f2f2;}
.code .intercal .kw1 {color: #000080; font-weight: bold;}
.code .intercal .kw2 {color: #000080; font-weight: bold;}
.code .intercal .br0 {color: #66cc66;}
.code .intercal .sy0 {color: #66cc66;}
.code .intercal .st0 {color: #ff0000;}
.code .intercal .re1 {color: #808080; font-style: italic;}
.code .intercal .ln-xtra, .code .intercal li.ln-xtra, .code .intercal div.ln-xtra {background-color: #ffc;}
.code .intercal span.xtra { display:block; }

.code .io .de1, .code .io .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .io  {font-family:monospace; font-size: 12px;}
.code .io .imp {font-weight: bold; color: red;}
.code .io li, .code .io .li1 {font-weight: normal; vertical-align:top;}
.code .io .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .io .li2 {background: #f2f2f2;}
.code .io .kw1 {color: #b1b100;}
.code .io .kw2 {color: #000000; font-weight: bold;}
.code .io .kw3 {color: #000066;}
.code .io .co1 {color: #808080; font-style: italic;}
.code .io .co2 {color: #808080; font-style: italic;}
.code .io .coMULTI {color: #808080; font-style: italic;}
.code .io .es0 {color: #000099; font-weight: bold;}
.code .io .br0 {color: #66cc66;}
.code .io .sy0 {color: #66cc66;}
.code .io .st0 {color: #ff0000;}
.code .io .nu0 {color: #cc66cc;}
.code .io .me1 {color: #006600;}
.code .io .me2 {color: #006600;}
.code .io .ln-xtra, .code .io li.ln-xtra, .code .io div.ln-xtra {background-color: #ffc;}
.code .io span.xtra { display:block; }

.code .java .de1, .code .java .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .java  {font-family:monospace; font-size: 12px;}
.code .java .imp {font-weight: bold; color: red;}
.code .java li, .code .java .li1 {font-weight: normal; vertical-align:top;}
.code .java .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .java .li2 {background: #f2f2f2;}
.code .java .kw1 {color: #000000; font-weight: bold;}
.code .java .kw2 {color: #000066; font-weight: bold;}
.code .java .kw3 {color: #003399;}
.code .java .kw4 {color: #000066; font-weight: bold;}
.code .java .co1 {color: #666666; font-style: italic;}
.code .java .co2 {color: #006699;}
.code .java .co3 {color: #008000; font-style: italic; font-weight: bold;}
.code .java .coMULTI {color: #666666; font-style: italic;}
.code .java .es0 {color: #000099; font-weight: bold;}
.code .java .br0 {color: #009900;}
.code .java .sy0 {color: #339933;}
.code .java .st0 {color: #0000ff;}
.code .java .nu0 {color: #cc66cc;}
.code .java .me1 {color: #006633;}
.code .java .me2 {color: #006633;}
.code .java .ln-xtra, .code .java li.ln-xtra, .code .java div.ln-xtra {background-color: #ffc;}
.code .java span.xtra { display:block; }

.code .java5 .de1, .code .java5 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .java5  {font-family:monospace; font-size: 12px;}
.code .java5 .imp {font-weight: bold; color: red;}
.code .java5 li, .code .java5 .li1 {font-weight: normal; vertical-align:top;}
.code .java5 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .java5 .li2 {background: #f2f2f2;}
.code .java5 .kw1 {color: #000000;  font-weight: bold;}
.code .java5 .kw2 {color: #000000; font-weight: bold;}
.code .java5 .kw3 {color: #006600; font-weight: bold;}
.code .java5 .kw4 {color: #006600; font-weight: bold;}
.code .java5 .kw5 {color: #003399; font-weight: bold;}
.code .java5 .kw6 {color: #003399; font-weight: bold;}
.code .java5 .kw7 {color: #003399; font-weight: bold;}
.code .java5 .kw8 {color: #003399; font-weight: bold;}
.code .java5 .kw9 {color: #003399; font-weight: bold;}
.code .java5 .kw10 {color: #003399; font-weight: bold;}
.code .java5 .kw11 {color: #003399; font-weight: bold;}
.code .java5 .kw12 {color: #003399; font-weight: bold;}
.code .java5 .kw13 {color: #003399; font-weight: bold;}
.code .java5 .kw14 {color: #003399; font-weight: bold;}
.code .java5 .kw15 {color: #003399; font-weight: bold;}
.code .java5 .kw16 {color: #003399; font-weight: bold;}
.code .java5 .kw17 {color: #003399; font-weight: bold;}
.code .java5 .kw18 {color: #003399; font-weight: bold;}
.code .java5 .kw19 {color: #003399; font-weight: bold;}
.code .java5 .kw20 {color: #003399; font-weight: bold;}
.code .java5 .kw21 {color: #003399; font-weight: bold;}
.code .java5 .kw22 {color: #003399; font-weight: bold;}
.code .java5 .kw23 {color: #003399; font-weight: bold;}
.code .java5 .kw24 {color: #003399; font-weight: bold;}
.code .java5 .kw25 {color: #003399; font-weight: bold;}
.code .java5 .kw26 {color: #003399; font-weight: bold;}
.code .java5 .kw27 {color: #003399; font-weight: bold;}
.code .java5 .kw28 {color: #003399; font-weight: bold;}
.code .java5 .kw29 {color: #003399; font-weight: bold;}
.code .java5 .kw30 {color: #003399; font-weight: bold;}
.code .java5 .kw31 {color: #003399; font-weight: bold;}
.code .java5 .kw32 {color: #003399; font-weight: bold;}
.code .java5 .kw33 {color: #003399; font-weight: bold;}
.code .java5 .kw34 {color: #003399; font-weight: bold;}
.code .java5 .kw35 {color: #003399; font-weight: bold;}
.code .java5 .kw36 {color: #003399; font-weight: bold;}
.code .java5 .kw37 {color: #003399; font-weight: bold;}
.code .java5 .kw38 {color: #003399; font-weight: bold;}
.code .java5 .kw39 {color: #003399; font-weight: bold;}
.code .java5 .kw40 {color: #003399; font-weight: bold;}
.code .java5 .kw41 {color: #003399; font-weight: bold;}
.code .java5 .kw42 {color: #003399; font-weight: bold;}
.code .java5 .kw43 {color: #003399; font-weight: bold;}
.code .java5 .kw44 {color: #003399; font-weight: bold;}
.code .java5 .kw45 {color: #003399; font-weight: bold;}
.code .java5 .kw46 {color: #003399; font-weight: bold;}
.code .java5 .kw47 {color: #003399; font-weight: bold;}
.code .java5 .kw48 {color: #003399; font-weight: bold;}
.code .java5 .kw49 {color: #003399; font-weight: bold;}
.code .java5 .kw50 {color: #003399; font-weight: bold;}
.code .java5 .kw51 {color: #003399; font-weight: bold;}
.code .java5 .kw52 {color: #003399; font-weight: bold;}
.code .java5 .kw53 {color: #003399; font-weight: bold;}
.code .java5 .kw54 {color: #003399; font-weight: bold;}
.code .java5 .kw55 {color: #003399; font-weight: bold;}
.code .java5 .kw56 {color: #003399; font-weight: bold;}
.code .java5 .kw57 {color: #003399; font-weight: bold;}
.code .java5 .kw58 {color: #003399; font-weight: bold;}
.code .java5 .kw59 {color: #003399; font-weight: bold;}
.code .java5 .kw60 {color: #003399; font-weight: bold;}
.code .java5 .kw61 {color: #003399; font-weight: bold;}
.code .java5 .kw62 {color: #003399; font-weight: bold;}
.code .java5 .kw63 {color: #003399; font-weight: bold;}
.code .java5 .kw64 {color: #003399; font-weight: bold;}
.code .java5 .kw65 {color: #003399; font-weight: bold;}
.code .java5 .kw66 {color: #003399; font-weight: bold;}
.code .java5 .kw67 {color: #003399; font-weight: bold;}
.code .java5 .kw68 {color: #003399; font-weight: bold;}
.code .java5 .kw69 {color: #003399; font-weight: bold;}
.code .java5 .kw70 {color: #003399; font-weight: bold;}
.code .java5 .kw71 {color: #003399; font-weight: bold;}
.code .java5 .kw72 {color: #003399; font-weight: bold;}
.code .java5 .kw73 {color: #003399; font-weight: bold;}
.code .java5 .kw74 {color: #003399; font-weight: bold;}
.code .java5 .kw75 {color: #003399; font-weight: bold;}
.code .java5 .kw76 {color: #003399; font-weight: bold;}
.code .java5 .kw77 {color: #003399; font-weight: bold;}
.code .java5 .kw78 {color: #003399; font-weight: bold;}
.code .java5 .kw79 {color: #003399; font-weight: bold;}
.code .java5 .kw80 {color: #003399; font-weight: bold;}
.code .java5 .kw81 {color: #003399; font-weight: bold;}
.code .java5 .kw82 {color: #003399; font-weight: bold;}
.code .java5 .kw83 {color: #003399; font-weight: bold;}
.code .java5 .kw84 {color: #003399; font-weight: bold;}
.code .java5 .kw85 {color: #003399; font-weight: bold;}
.code .java5 .kw86 {color: #003399; font-weight: bold;}
.code .java5 .kw87 {color: #003399; font-weight: bold;}
.code .java5 .kw88 {color: #003399; font-weight: bold;}
.code .java5 .kw89 {color: #003399; font-weight: bold;}
.code .java5 .kw90 {color: #003399; font-weight: bold;}
.code .java5 .kw91 {color: #003399; font-weight: bold;}
.code .java5 .kw92 {color: #003399; font-weight: bold;}
.code .java5 .kw93 {color: #003399; font-weight: bold;}
.code .java5 .kw94 {color: #003399; font-weight: bold;}
.code .java5 .kw95 {color: #003399; font-weight: bold;}
.code .java5 .kw96 {color: #003399; font-weight: bold;}
.code .java5 .kw97 {color: #003399; font-weight: bold;}
.code .java5 .kw98 {color: #003399; font-weight: bold;}
.code .java5 .kw99 {color: #003399; font-weight: bold;}
.code .java5 .kw100 {color: #003399; font-weight: bold;}
.code .java5 .kw101 {color: #003399; font-weight: bold;}
.code .java5 .kw102 {color: #003399; font-weight: bold;}
.code .java5 .kw103 {color: #003399; font-weight: bold;}
.code .java5 .kw104 {color: #003399; font-weight: bold;}
.code .java5 .kw105 {color: #003399; font-weight: bold;}
.code .java5 .kw106 {color: #003399; font-weight: bold;}
.code .java5 .kw107 {color: #003399; font-weight: bold;}
.code .java5 .kw108 {color: #003399; font-weight: bold;}
.code .java5 .kw109 {color: #003399; font-weight: bold;}
.code .java5 .kw110 {color: #003399; font-weight: bold;}
.code .java5 .kw111 {color: #003399; font-weight: bold;}
.code .java5 .kw112 {color: #003399; font-weight: bold;}
.code .java5 .kw113 {color: #003399; font-weight: bold;}
.code .java5 .kw114 {color: #003399; font-weight: bold;}
.code .java5 .kw115 {color: #003399; font-weight: bold;}
.code .java5 .kw116 {color: #003399; font-weight: bold;}
.code .java5 .kw117 {color: #003399; font-weight: bold;}
.code .java5 .kw118 {color: #003399; font-weight: bold;}
.code .java5 .kw119 {color: #003399; font-weight: bold;}
.code .java5 .kw120 {color: #003399; font-weight: bold;}
.code .java5 .kw121 {color: #003399; font-weight: bold;}
.code .java5 .kw122 {color: #003399; font-weight: bold;}
.code .java5 .kw123 {color: #003399; font-weight: bold;}
.code .java5 .kw124 {color: #003399; font-weight: bold;}
.code .java5 .kw125 {color: #003399; font-weight: bold;}
.code .java5 .kw126 {color: #003399; font-weight: bold;}
.code .java5 .kw127 {color: #003399; font-weight: bold;}
.code .java5 .kw128 {color: #003399; font-weight: bold;}
.code .java5 .kw129 {color: #003399; font-weight: bold;}
.code .java5 .kw130 {color: #003399; font-weight: bold;}
.code .java5 .kw131 {color: #003399; font-weight: bold;}
.code .java5 .kw132 {color: #003399; font-weight: bold;}
.code .java5 .kw133 {color: #003399; font-weight: bold;}
.code .java5 .kw134 {color: #003399; font-weight: bold;}
.code .java5 .kw135 {color: #003399; font-weight: bold;}
.code .java5 .kw136 {color: #003399; font-weight: bold;}
.code .java5 .kw137 {color: #003399; font-weight: bold;}
.code .java5 .kw138 {color: #003399; font-weight: bold;}
.code .java5 .kw139 {color: #003399; font-weight: bold;}
.code .java5 .kw140 {color: #003399; font-weight: bold;}
.code .java5 .kw141 {color: #003399; font-weight: bold;}
.code .java5 .kw142 {color: #003399; font-weight: bold;}
.code .java5 .kw143 {color: #003399; font-weight: bold;}
.code .java5 .kw144 {color: #003399; font-weight: bold;}
.code .java5 .kw145 {color: #003399; font-weight: bold;}
.code .java5 .kw146 {color: #003399; font-weight: bold;}
.code .java5 .kw147 {color: #003399; font-weight: bold;}
.code .java5 .kw148 {color: #003399; font-weight: bold;}
.code .java5 .kw149 {color: #003399; font-weight: bold;}
.code .java5 .kw150 {color: #003399; font-weight: bold;}
.code .java5 .kw151 {color: #003399; font-weight: bold;}
.code .java5 .kw152 {color: #003399; font-weight: bold;}
.code .java5 .kw153 {color: #003399; font-weight: bold;}
.code .java5 .kw154 {color: #003399; font-weight: bold;}
.code .java5 .kw155 {color: #003399; font-weight: bold;}
.code .java5 .kw156 {color: #003399; font-weight: bold;}
.code .java5 .kw157 {color: #003399; font-weight: bold;}
.code .java5 .kw158 {color: #003399; font-weight: bold;}
.code .java5 .kw159 {color: #003399; font-weight: bold;}
.code .java5 .kw160 {color: #003399; font-weight: bold;}
.code .java5 .kw161 {color: #003399; font-weight: bold;}
.code .java5 .kw162 {color: #003399; font-weight: bold;}
.code .java5 .kw163 {color: #003399; font-weight: bold;}
.code .java5 .kw164 {color: #003399; font-weight: bold;}
.code .java5 .kw165 {color: #003399; font-weight: bold;}
.code .java5 .kw166 {color: #003399; font-weight: bold;}
.code .java5 .co1 {color: #666666; font-style: italic;}
.code .java5 .co2 {color: #006699;}
.code .java5 .co3 {color: #008000; font-style: italic; font-weight: bold;}
.code .java5 .coMULTI {color: #666666; font-style: italic;}
.code .java5 .es0 {color: #000099; font-weight: bold;}
.code .java5 .br0 {color: #009900;}
.code .java5 .sy0 {color: #339933;}
.code .java5 .st0 {color: #0000ff;}
.code .java5 .nu0 {color: #cc66cc;}
.code .java5 .me1 {color: #006633;}
.code .java5 .me2 {color: #006633;}
.code .java5 .ln-xtra, .code .java5 li.ln-xtra, .code .java5 div.ln-xtra {background-color: #ffc;}
.code .java5 span.xtra { display:block; }

.code .javascript .de1, .code .javascript .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .javascript  {font-family:monospace; font-size: 12px;}
.code .javascript .imp {font-weight: bold; color: red;}
.code .javascript li, .code .javascript .li1 {font-weight: normal; vertical-align:top;}
.code .javascript .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .javascript .li2 {background: #f2f2f2;}
.code .javascript .kw1 {color: #000066; font-weight: bold;}
.code .javascript .kw2 {color: #003366; font-weight: bold;}
.code .javascript .kw3 {color: #000066;}
.code .javascript .co1 {color: #006600; font-style: italic;}
.code .javascript .co2 {color: #009966; font-style: italic;}
.code .javascript .coMULTI {color: #006600; font-style: italic;}
.code .javascript .es0 {color: #000099; font-weight: bold;}
.code .javascript .br0 {color: #009900;}
.code .javascript .sy0 {color: #339933;}
.code .javascript .st0 {color: #3366CC;}
.code .javascript .nu0 {color: #CC0000;}
.code .javascript .me1 {color: #660066;}
.code .javascript .ln-xtra, .code .javascript li.ln-xtra, .code .javascript div.ln-xtra {background-color: #ffc;}
.code .javascript span.xtra { display:block; }

.code .kixtart .de1, .code .kixtart .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .kixtart  {font-family:monospace; font-size: 12px;}
.code .kixtart .imp {font-weight: bold; color: red;}
.code .kixtart li, .code .kixtart .li1 {font-weight: normal; vertical-align:top;}
.code .kixtart .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .kixtart .li2 {background: #f2f2f2;}
.code .kixtart .kw1 {color: #b1b100;}
.code .kixtart .kw2 {color: #000000; font-weight: bold;}
.code .kixtart .kw3 {color: #000066;}
.code .kixtart .co1 {color: #808080; font-style: italic;}
.code .kixtart .coMULTI {color: #808080; font-style: italic;}
.code .kixtart .es0 {color: #000099; font-weight: bold;}
.code .kixtart .br0 {color: #66cc66;}
.code .kixtart .sy0 {color: #66cc66;}
.code .kixtart .st0 {color: #ff0000;}
.code .kixtart .nu0 {color: #cc66cc;}
.code .kixtart .me1 {color: #006600;}
.code .kixtart .me2 {color: #006600;}
.code .kixtart .ln-xtra, .code .kixtart li.ln-xtra, .code .kixtart div.ln-xtra {background-color: #ffc;}
.code .kixtart span.xtra { display:block; }

.code .klonec .de1, .code .klonec .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .klonec  {font-family:monospace; font-size: 12px;}
.code .klonec .imp {font-weight: bold; color: red;}
.code .klonec li, .code .klonec .li1 {font-weight: normal; vertical-align:top;}
.code .klonec .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .klonec .li2 {background: #f2f2f2;}
.code .klonec .kw1 {color: #b1b100; font-weight: bold;}
.code .klonec .kw2 {color: #000000; font-weight: bold;}
.code .klonec .kw3 {color: #6600FF;}
.code .klonec .kw4 {color: #6600FF;}
.code .klonec .kw5 {color: #0099FF; font-weight: bold;}
.code .klonec .kw6 {color: #990099; font-weight: bold;}
.code .klonec .kw7 {color: #000066;}
.code .klonec .co1 {color: #808080; font-style: italic;}
.code .klonec .co2 {color: #339933;}
.code .klonec .coMULTI {color: #808080; font-style: italic;}
.code .klonec .es0 {color: #000099; font-weight: bold;}
.code .klonec .br0 {color: #000000;}
.code .klonec .sy0 {color: #000000;}
.code .klonec .sy1 {color: #000000; font-weight: bold;}
.code .klonec .st0 {color: #ff0000;}
.code .klonec .nu0 {color: #cc66cc;}
.code .klonec .me1 {color: #006600;}
.code .klonec .me2 {color: #006600;}
.code .klonec .sc0 {background-color:#ffccff; font-weight: bold; color:#000000;}
.code .klonec .sc3 {color: #00bbdd; font-weight: bold;}
.code .klonec .sc4 {color: #ddbb00;}
.code .klonec .sc5 {color: #009900;}
.code .klonec .ln-xtra, .code .klonec li.ln-xtra, .code .klonec div.ln-xtra {background-color: #ffc;}
.code .klonec span.xtra { display:block; }

.code .klonecpp .de1, .code .klonecpp .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .klonecpp  {font-family:monospace; font-size: 12px;}
.code .klonecpp .imp {font-weight: bold; color: red;}
.code .klonecpp li, .code .klonecpp .li1 {font-weight: normal; vertical-align:top;}
.code .klonecpp .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .klonecpp .li2 {background: #f2f2f2;}
.code .klonecpp .kw1 {color: #b1b100; font-weight: bold;}
.code .klonecpp .kw2 {color: #000000; font-weight: bold;}
.code .klonecpp .kw3 {color: #6600FF;}
.code .klonecpp .kw4 {color: #6600FF;}
.code .klonecpp .kw5 {color: #0099FF; font-weight: bold;}
.code .klonecpp .kw6 {color: #990099; font-weight: bold;}
.code .klonecpp .kw7 {color: #000066;}
.code .klonecpp .co1 {color: #808080; font-style: italic;}
.code .klonecpp .co2 {color: #339933;}
.code .klonecpp .coMULTI {color: #808080; font-style: italic;}
.code .klonecpp .es0 {color: #000099; font-weight: bold;}
.code .klonecpp .br0 {color: #000000;}
.code .klonecpp .sy0 {color: #000000;}
.code .klonecpp .sy1 {color: #000000; font-weight: bold;}
.code .klonecpp .st0 {color: #ff0000;}
.code .klonecpp .nu0 {color: #cc66cc;}
.code .klonecpp .me1 {color: #006600;}
.code .klonecpp .me2 {color: #006600;}
.code .klonecpp .sc0 {background-color:#ffccff; font-weight: bold; color:#000000;}
.code .klonecpp .sc3 {color: #00bbdd; font-weight: bold;}
.code .klonecpp .sc4 {color: #ddbb00;}
.code .klonecpp .sc5 {color: #009900;}
.code .klonecpp .ln-xtra, .code .klonecpp li.ln-xtra, .code .klonecpp div.ln-xtra {background-color: #ffc;}
.code .klonecpp span.xtra { display:block; }

.code .latex .de1, .code .latex .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .latex  {font-family:monospace; font-size: 12px;}
.code .latex .imp {font-weight: bold; color: red;}
.code .latex li, .code .latex .li1 {font-weight: normal; vertical-align:top;}
.code .latex .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .latex .li2 {background: #f2f2f2;}
.code .latex .kw1 {color: #800000;}
.code .latex .co1 {color: #2C922C; font-style: italic;}
.code .latex .es0 {color: #000000; font-weight: bold;}
.code .latex .sy0 {color: #E02020; }
.code .latex .st0 {color: #000000;}
.code .latex .re1 {color: #8020E0; font-weight: normal;}
.code .latex .re2 {color: #C08020; font-weight: normal;}
.code .latex .re3 {color: #8020E0; font-weight: normal;}
.code .latex .re4 {color: #800000; font-weight: normal;}
.code .latex .re5 {color: #00008B; font-weight: bold;}
.code .latex .re6 {color: #800000; font-weight: normal;}
.code .latex .re7 {color: #0000D0; font-weight: normal;}
.code .latex .re8 {color: #C00000; font-weight: normal;}
.code .latex .re9 {color: #2020C0; font-weight: normal;}
.code .latex .re10 {color: #800000; font-weight: normal;}
.code .latex .re11 {color: #E00000; font-weight: normal;}
.code .latex .re12 {color: #800000; font-weight: normal;}
.code .latex .ln-xtra, .code .latex li.ln-xtra, .code .latex div.ln-xtra {background-color: #ffc;}
.code .latex span.xtra { display:block; }

.code .lisp .de1, .code .lisp .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .lisp  {font-family:monospace; font-size: 12px;}
.code .lisp .imp {font-weight: bold; color: red;}
.code .lisp li, .code .lisp .li1 {font-weight: normal; vertical-align:top;}
.code .lisp .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .lisp .li2 {background: #f2f2f2;}
.code .lisp .kw1 {color: #b1b100;}
.code .lisp .co1 {color: #808080; font-style: italic;}
.code .lisp .coMULTI {color: #808080; font-style: italic;}
.code .lisp .es0 {color: #000099; font-weight: bold;}
.code .lisp .br0 {color: #66cc66;}
.code .lisp .sy0 {color: #66cc66;}
.code .lisp .st0 {color: #ff0000;}
.code .lisp .nu0 {color: #cc66cc;}
.code .lisp .me0 {color: #555;}
.code .lisp .me1 {color: #555;}
.code .lisp .ln-xtra, .code .lisp li.ln-xtra, .code .lisp div.ln-xtra {background-color: #ffc;}
.code .lisp span.xtra { display:block; }

.code .locobasic .de1, .code .locobasic .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .locobasic  {font-family:monospace; font-size: 12px;}
.code .locobasic .imp {font-weight: bold; color: red;}
.code .locobasic li, .code .locobasic .li1 {font-weight: normal; vertical-align:top;}
.code .locobasic .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .locobasic .li2 {background: #f2f2f2;}
.code .locobasic .kw1 {color: #0000ff; font-weight: bold;}
.code .locobasic .kw2 {color: #008888; font-weight: bold;}
.code .locobasic .co1 {color: #808080;}
.code .locobasic .co2 {color: #808080;}
.code .locobasic .es0 {color: #000099;}
.code .locobasic .br0 {color: #ff0000;}
.code .locobasic .sy0 {color: #66cc66;}
.code .locobasic .st0 {color: #ff0000;}
.code .locobasic .nu0 {color: #0044ff;}
.code .locobasic .me0 {color: #66cc66;}
.code .locobasic .ln-xtra, .code .locobasic li.ln-xtra, .code .locobasic div.ln-xtra {background-color: #ffc;}
.code .locobasic span.xtra { display:block; }

.code .lolcode .de1, .code .lolcode .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .lolcode  {font-family:monospace; font-size: 12px;}
.code .lolcode .imp {font-weight: bold; color: red;}
.code .lolcode li, .code .lolcode .li1 {font-weight: normal; vertical-align:top;}
.code .lolcode .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .lolcode .li2 {background: #f2f2f2;}
.code .lolcode .kw1 {color: #008000;}
.code .lolcode .kw2 {color: #000080;}
.code .lolcode .kw3 {color: #000080;}
.code .lolcode .kw4 {color: #800000;}
.code .lolcode .co1 {color: #666666; font-style: italic;}
.code .lolcode .co2 {color: #666666; font-style: italic;}
.code .lolcode .br0 {color: #66cc66;}
.code .lolcode .sy0 {color: #66cc66;}
.code .lolcode .st0 {color: #ff0000;}
.code .lolcode .ln-xtra, .code .lolcode li.ln-xtra, .code .lolcode div.ln-xtra {background-color: #ffc;}
.code .lolcode span.xtra { display:block; }

.code .lotusformulas .de1, .code .lotusformulas .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .lotusformulas  {font-family:monospace; font-size: 12px;}
.code .lotusformulas .imp {font-weight: bold; color: red;}
.code .lotusformulas li, .code .lotusformulas .li1 {font-weight: normal; vertical-align:top;}
.code .lotusformulas .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .lotusformulas .li2 {background: #f2f2f2;}
.code .lotusformulas .kw1 {color: #800000;}
.code .lotusformulas .kw2 {color: #0000FF;}
.code .lotusformulas .co1 {color: #008000;}
.code .lotusformulas .es0 {color: #000099;}
.code .lotusformulas .br0 {color: #000000;}
.code .lotusformulas .sy0 {color: #66cc66;}
.code .lotusformulas .st0 {color: #FF00FF;}
.code .lotusformulas .nu0 {color: #FF00FF;}
.code .lotusformulas .me1 {color: #0000AA;}
.code .lotusformulas .ln-xtra, .code .lotusformulas li.ln-xtra, .code .lotusformulas div.ln-xtra {background-color: #ffc;}
.code .lotusformulas span.xtra { display:block; }

.code .lotusscript .de1, .code .lotusscript .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .lotusscript  {font-family:monospace; font-size: 12px;}
.code .lotusscript .imp {font-weight: bold; color: red;}
.code .lotusscript li, .code .lotusscript .li1 {font-weight: normal; vertical-align:top;}
.code .lotusscript .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .lotusscript .li2 {background: #f2f2f2;}
.code .lotusscript .kw1 {color: #0000FF;}
.code .lotusscript .kw2 {color: #0000EE;}
.code .lotusscript .co1 {color: #008000;}
.code .lotusscript .es0 {color: #000099;}
.code .lotusscript .br0 {color: #000000;}
.code .lotusscript .sy0 {color: #006600;}
.code .lotusscript .st0 {color: #000000;}
.code .lotusscript .nu0 {color: #FF00FF;}
.code .lotusscript .me1 {color: #0000AA;}
.code .lotusscript .ln-xtra, .code .lotusscript li.ln-xtra, .code .lotusscript div.ln-xtra {background-color: #ffc;}
.code .lotusscript span.xtra { display:block; }

.code .lscript .de1, .code .lscript .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .lscript  {font-family:monospace; font-size: 12px;}
.code .lscript .imp {font-weight: bold; color: red;}
.code .lscript li, .code .lscript .li1 {font-weight: normal; vertical-align:top;}
.code .lscript .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .lscript .li2 {background: #f2f2f2;}
.code .lscript .kw1 {color: #000000; font-weight: bold;}
.code .lscript .kw2 {color: #FF6820; font-weight: bold;}
.code .lscript .kw3 {color: #007F7F; font-weight: bold;}
.code .lscript .kw4 {color: #800080; font-weight: bold;}
.code .lscript .kw5 {color: #51BD95; font-weight: bold;}
.code .lscript .kw6 {color: #416F85; font-weight: bold;}
.code .lscript .kw7 {color: #C92929; font-weight: bold;}
.code .lscript .co1 {color: #7F7F7F;}
.code .lscript .coMULTI {color: #7F7F7F;}
.code .lscript .br0 {color: #0040A0;}
.code .lscript .sy0 {color: #0040A0;}
.code .lscript .st0 {color: #00C800;}
.code .lscript .nu0 {color: #6953AC;}
.code .lscript .ln-xtra, .code .lscript li.ln-xtra, .code .lscript div.ln-xtra {background-color: #ffc;}
.code .lscript span.xtra { display:block; }

.code .lsl2 .de1, .code .lsl2 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .lsl2  {font-family:monospace; font-size: 12px;}
.code .lsl2 .imp {font-weight: bold; color: red;}
.code .lsl2 li, .code .lsl2 .li1 {font-weight: normal; vertical-align:top;}
.code .lsl2 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .lsl2 .li2 {background: #f2f2f2;}
.code .lsl2 .kw1 {color: #0000ff;}
.code .lsl2 .kw2 {color: #000080;}
.code .lsl2 .kw3 {color: #008080;}
.code .lsl2 .kw4 {color: #228b22;}
.code .lsl2 .kw5 {color: #b22222;}
.code .lsl2 .kw6 {color: #8b0000; background-color: #ffff00;}
.code .lsl2 .kw7 {color: #8b0000; background-color: #fa8072;}
.code .lsl2 .kw8 {color: #000000; background-color: #ba55d3;}
.code .lsl2 .co1 {color: #ff7f50; font-style: italic;}
.code .lsl2 .es0 {color: #000099;}
.code .lsl2 .br0 {color: #000000;}
.code .lsl2 .sy0 {color: #000000;}
.code .lsl2 .st0 {color: #006400;}
.code .lsl2 .nu0 {color: #000000;}
.code .lsl2 .ln-xtra, .code .lsl2 li.ln-xtra, .code .lsl2 div.ln-xtra {background-color: #ffc;}
.code .lsl2 span.xtra { display:block; }

.code .lua .de1, .code .lua .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .lua  {font-family:monospace; font-size: 12px;}
.code .lua .imp {font-weight: bold; color: red;}
.code .lua li, .code .lua .li1 {font-weight: normal; vertical-align:top;}
.code .lua .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .lua .li2 {background: #f2f2f2;}
.code .lua .kw1 {color: #b1b100;}
.code .lua .co1 {color: #808080; font-style: italic;}
.code .lua .coMULTI {color: #808080; font-style: italic;}
.code .lua .es0 {color: #000099; font-weight: bold;}
.code .lua .br0 {color: #66cc66;}
.code .lua .sy0 {color: #66cc66;}
.code .lua .st0 {color: #ff0000;}
.code .lua .nu0 {color: #cc66cc;}
.code .lua .me0 {color: #b1b100;}
.code .lua .ln-xtra, .code .lua li.ln-xtra, .code .lua div.ln-xtra {background-color: #ffc;}
.code .lua span.xtra { display:block; }

.code .m68k .de1, .code .m68k .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .m68k  {font-family:monospace; font-size: 12px;}
.code .m68k .imp {font-weight: bold; color: red;}
.code .m68k li, .code .m68k .li1 {font-weight: normal; vertical-align:top;}
.code .m68k .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .m68k .li2 {background: #f2f2f2;}
.code .m68k .kw1 {color: #0000ff; font-weight:bold;}
.code .m68k .kw2 {color: #0000ff;}
.code .m68k .kw3 {color: #46aa03; font-weight:bold;}
.code .m68k .co1 {color: #adadad; font-style: italic;}
.code .m68k .es0 {color: #000099; font-weight: bold;}
.code .m68k .br0 {color: #0000ff;}
.code .m68k .sy0 {color: #008000;}
.code .m68k .st0 {color: #7f007f;}
.code .m68k .nu0 {color: #dd22dd;}
.code .m68k .re0 {color: #22bbff;}
.code .m68k .re1 {color: #22bbff;}
.code .m68k .re2 {color: #993333;}
.code .m68k .ln-xtra, .code .m68k li.ln-xtra, .code .m68k div.ln-xtra {background-color: #ffc;}
.code .m68k span.xtra { display:block; }

.code .make .de1, .code .make .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .make  {font-family:monospace; font-size: 12px;}
.code .make .imp {font-weight: bold; color: red;}
.code .make li, .code .make .li1 {font-weight: normal; vertical-align:top;}
.code .make .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .make .li2 {background: #f2f2f2;}
.code .make .kw1 {color: #666622; font-weight: bold;}
.code .make .kw2 {color: #990000;}
.code .make .co1 {color: #339900; font-style: italic;}
.code .make .co2 {color: #000099; font-weight: bold;}
.code .make .es0 {color: #000099; font-weight: bold;}
.code .make .br0 {color: #004400;}
.code .make .sy0 {color: #004400;}
.code .make .st0 {color: #CC2200;}
.code .make .nu0 {color: #CC2200;}
.code .make .re0 {color: #000088; font-weight: bold;}
.code .make .re1 {color: #0000CC; font-weight: bold;}
.code .make .re2 {color: #000088;}
.code .make .ln-xtra, .code .make li.ln-xtra, .code .make div.ln-xtra {background-color: #ffc;}
.code .make span.xtra { display:block; }

.code .matlab .de1, .code .matlab .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .matlab  {font-family:monospace; font-size: 12px;}
.code .matlab .imp {font-weight: bold; color: red;}
.code .matlab li, .code .matlab .li1 {font-weight: normal; vertical-align:top;}
.code .matlab .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .matlab .li2 {background: #f2f2f2;}
.code .matlab .kw1 {color: #0000FF;}
.code .matlab .kw2 {color: #0000FF;}
.code .matlab .co1 {color: #228B22;}
.code .matlab .co2 {color:#A020F0;}
.code .matlab .br0 {color: #080;}
.code .matlab .sy0 {color: #080;}
.code .matlab .nu0 {color: #33f;}
.code .matlab .re0 {color: #33f;}
.code .matlab .ln-xtra, .code .matlab li.ln-xtra, .code .matlab div.ln-xtra {background-color: #ffc;}
.code .matlab span.xtra { display:block; }

.code .mirc .de1, .code .mirc .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .mirc  {font-family:monospace; font-size: 12px;}
.code .mirc .imp {font-weight: bold; color: red;}
.code .mirc li, .code .mirc .li1 {font-weight: normal; vertical-align:top;}
.code .mirc .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .mirc .li2 {background: #f2f2f2;}
.code .mirc .kw1 {color: #994444;}
.code .mirc .kw2 {color: #000000; font-weight: bold;}
.code .mirc .kw3 {color: #990000; font-weight: bold;}
.code .mirc .co1 {color: #808080; font-style: italic;}
.code .mirc .br0 {color: #FF0000;}
.code .mirc .sy0 {color: #FF0000;}
.code .mirc .me0 {color: #008000;}
.code .mirc .re0 {color: #000099;}
.code .mirc .re1 {color: #990000;}
.code .mirc .re2 {color: #000099;}
.code .mirc .re3 {color: #888800;}
.code .mirc .re4 {color: #888800;}
.code .mirc .re5 {color: #000099;}
.code .mirc .re6 {color: #990000; font-weight: bold;}
.code .mirc .re7 {color: #990000; font-weight: bold;}
.code .mirc .ln-xtra, .code .mirc li.ln-xtra, .code .mirc div.ln-xtra {background-color: #ffc;}
.code .mirc span.xtra { display:block; }

.code .modula3 .de1, .code .modula3 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .modula3  {font-family:monospace; font-size: 12px;}
.code .modula3 .imp {font-weight: bold; color: red;}
.code .modula3 li, .code .modula3 .li1 {font-weight: normal; vertical-align:top;}
.code .modula3 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .modula3 .li2 {background: #f2f2f2;}
.code .modula3 .kw1 {color: #000000; font-weight: bold;}
.code .modula3 .kw2 {color: #000000; font-weight: bold;}
.code .modula3 .kw3 {color: #000066;}
.code .modula3 .kw4 {color: #000066; font-weight: bold;}
.code .modula3 .coMULTI {color: #666666; font-style: italic;}
.code .modula3 .es0 {color: #000099; font-weight: bold;}
.code .modula3 .es_h {color: #000099; font-weight: bold;}
.code .modula3 .br0 {color: #009900;}
.code .modula3 .sy0 {color: #339933;}
.code .modula3 .st0 {color: #ff0000;}
.code .modula3 .st_h {color: #ff0000;}
.code .modula3 .nu0 {color: #cc66cc;}
.code .modula3 .me1 {color: #0066ee;}
.code .modula3 .ln-xtra, .code .modula3 li.ln-xtra, .code .modula3 div.ln-xtra {background-color: #ffc;}
.code .modula3 span.xtra { display:block; }

.code .mpasm .de1, .code .mpasm .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .mpasm  {font-family:monospace; font-size: 12px;}
.code .mpasm .imp {font-weight: bold; color: red;}
.code .mpasm li, .code .mpasm .li1 {font-weight: normal; vertical-align:top;}
.code .mpasm .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .mpasm .li2 {background: #f2f2f2;}
.code .mpasm .kw1 {color: #00007f;}
.code .mpasm .kw2 {color: #0000ff;}
.code .mpasm .kw3 {color: #007f00;}
.code .mpasm .kw4 {color: #46aa03; font-weight:bold;}
.code .mpasm .kw5 {color: #7f0000;}
.code .mpasm .co1 {color: #adadad; font-style: italic;}
.code .mpasm .es0 {color: #000099; font-weight: bold;}
.code .mpasm .br0 {color: #66cc66;}
.code .mpasm .sy0 {color: #66cc66;}
.code .mpasm .st0 {color: #7f007f;}
.code .mpasm .nu0 {color: #ff0000;}
.code .mpasm .re0 {color: #ff0000;}
.code .mpasm .re1 {color: #ff0000;}
.code .mpasm .ln-xtra, .code .mpasm li.ln-xtra, .code .mpasm div.ln-xtra {background-color: #ffc;}
.code .mpasm span.xtra { display:block; }

.code .mxml .de1, .code .mxml .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .mxml  {font-family:monospace; font-size: 12px;}
.code .mxml .imp {font-weight: bold; color: red;}
.code .mxml li, .code .mxml .li1 {font-weight: normal; vertical-align:top;}
.code .mxml .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .mxml .li2 {background: #f2f2f2;}
.code .mxml .coMULTI {color: #808080; font-style: italic;}
.code .mxml .es0 {color: #000099; font-weight: bold;}
.code .mxml .br0 {color: #66cc66;}
.code .mxml .sy0 {color: #66cc66;}
.code .mxml .st0 {color: #ff0000;}
.code .mxml .nu0 {color: #cc66cc;}
.code .mxml .sc0 {color: #00bbdd;}
.code .mxml .sc1 {color: #ddbb00;}
.code .mxml .sc2 {color: #339933;}
.code .mxml .sc3 {color: #000000;}
.code .mxml .re0 {font-weight: bold; color: black;}
.code .mxml .re1 {color: #7400FF;}
.code .mxml .re2 {color: #7400FF;}
.code .mxml .ln-xtra, .code .mxml li.ln-xtra, .code .mxml div.ln-xtra {background-color: #ffc;}
.code .mxml span.xtra { display:block; }

.code .mysql .de1, .code .mysql .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .mysql  {font-family:monospace; font-size: 12px;}
.code .mysql .imp {font-weight: bold; color: red;}
.code .mysql li, .code .mysql .li1 {font-weight: normal; vertical-align:top;}
.code .mysql .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .mysql .li2 {background: #f2f2f2;}
.code .mysql .kw1 {color: #990099; font-weight: bold;}
.code .mysql .kw2 {color: #990099; font-weight: bold;}
.code .mysql .kw3 {color: #9900FF; font-weight: bold;}
.code .mysql .kw4 {color: #999900; font-weight: bold;}
.code .mysql .kw5 {color: #999900; font-weight: bold;}
.code .mysql .kw6 {color: #FF9900; font-weight: bold;}
.code .mysql .kw7 {color: #FF9900; font-weight: bold;}
.code .mysql .kw8 {color: #9900FF; font-weight: bold;}
.code .mysql .kw9 {color: #9900FF; font-weight: bold;}
.code .mysql .kw10 {color: #CC0099; font-weight: bold;}
.code .mysql .kw11 {color: #CC0099; font-weight: bold;}
.code .mysql .kw12 {color: #009900;}
.code .mysql .kw13 {color: #000099;}
.code .mysql .kw14 {color: #000099;}
.code .mysql .kw15 {color: #000099;}
.code .mysql .kw16 {color: #000099;}
.code .mysql .kw17 {color: #000099;}
.code .mysql .kw18 {color: #000099;}
.code .mysql .kw19 {color: #000099;}
.code .mysql .kw20 {color: #000099;}
.code .mysql .kw21 {color: #000099;}
.code .mysql .kw22 {color: #000099;}
.code .mysql .kw23 {color: #000099;}
.code .mysql .kw24 {color: #000099;}
.code .mysql .kw25 {color: #000099;}
.code .mysql .kw26 {color: #000099;}
.code .mysql .kw27 {color: #00CC00;}
.code .mysql .coMULTI {color: #808000; font-style: italic;}
.code .mysql .co1 {color: #808080; font-style: italic;}
.code .mysql .co2 {color: #808080; font-style: italic;}
.code .mysql .es0 {color: #004000; font-weight: bold;}
.code .mysql .es1 {color: #008080; font-weight: bold;}
.code .mysql .br0 {color: #FF00FF;}
.code .mysql .sy1 {color: #CC0099;}
.code .mysql .sy2 {color: #000033;}
.code .mysql .st0 {color: #008000;}
.code .mysql .nu0 {color: #008080;}
.code .mysql .ln-xtra, .code .mysql li.ln-xtra, .code .mysql div.ln-xtra {background-color: #ffc;}
.code .mysql span.xtra { display:block; }

.code .nsis .de1, .code .nsis .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .nsis  {font-family:monospace; font-size: 12px;}
.code .nsis .imp {font-weight: bold; color: red;}
.code .nsis li, .code .nsis .li1 {font-weight: normal; vertical-align:top;}
.code .nsis .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .nsis .li2 {background: #f2f2f2;}
.code .nsis .kw1 {color: #000066; font-weight:bold;}
.code .nsis .kw2 {color: #000066;}
.code .nsis .kw3 {color: #003366;}
.code .nsis .kw4 {color: #000099;}
.code .nsis .kw5 {color: #ff6600;}
.code .nsis .kw6 {color: #ff6600;}
.code .nsis .kw7 {color: #006600;}
.code .nsis .kw8 {color: #006600;}
.code .nsis .kw9 {color: #006600;}
.code .nsis .kw10 {color: #006600;}
.code .nsis .kw11 {color: #006600;}
.code .nsis .kw12 {color: #006600;}
.code .nsis .kw13 {color: #006600;}
.code .nsis .kw14 {color: #006600;}
.code .nsis .kw15 {color: #006600;}
.code .nsis .kw16 {color: #006600;}
.code .nsis .co1 {color: #666666; font-style: italic;}
.code .nsis .co2 {color: #666666; font-style: italic;}
.code .nsis .coMULTI {color: #666666; font-style: italic;}
.code .nsis .es0 {color: #660066; font-weight: bold;}
.code .nsis .st0 {color: #660066;}
.code .nsis .re0 {color: #660000;}
.code .nsis .re1 {color: #660000;}
.code .nsis .re2 {color: #660000;}
.code .nsis .re3 {color: #660000;}
.code .nsis .re4 {color: #660000;}
.code .nsis .re5 {color: #660000;}
.code .nsis .re6 {color: #660000;}
.code .nsis .re7 {color: #000099;}
.code .nsis .re8 {color: #003399;}
.code .nsis .ln-xtra, .code .nsis li.ln-xtra, .code .nsis div.ln-xtra {background-color: #ffc;}
.code .nsis span.xtra { display:block; }

.code .oberon2 .de1, .code .oberon2 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .oberon2  {font-family:monospace; font-size: 12px;}
.code .oberon2 .imp {font-weight: bold; color: red;}
.code .oberon2 li, .code .oberon2 .li1 {font-weight: normal; vertical-align:top;}
.code .oberon2 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .oberon2 .li2 {background: #f2f2f2;}
.code .oberon2 .kw1 {color: #000000; font-weight: bold;}
.code .oberon2 .kw2 {color: #000000; font-weight: bold;}
.code .oberon2 .kw3 {color: #000066;}
.code .oberon2 .kw4 {color: #000066; font-weight: bold;}
.code .oberon2 .coMULTI {color: #666666; font-style: italic;}
.code .oberon2 .es0 {color: #000099; font-weight: bold;}
.code .oberon2 .es_h {color: #000099; font-weight: bold;}
.code .oberon2 .br0 {color: #009900;}
.code .oberon2 .sy0 {color: #339933;}
.code .oberon2 .st0 {color: #ff0000;}
.code .oberon2 .st_h {color: #ff0000;}
.code .oberon2 .nu0 {color: #cc66cc;}
.code .oberon2 .me1 {color: #0066ee;}
.code .oberon2 .ln-xtra, .code .oberon2 li.ln-xtra, .code .oberon2 div.ln-xtra {background-color: #ffc;}
.code .oberon2 span.xtra { display:block; }

.code .objc .de1, .code .objc .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .objc  {font-family:monospace; font-size: 12px;}
.code .objc .imp {font-weight: bold; color: red;}
.code .objc li, .code .objc .li1 {font-weight: normal; vertical-align:top;}
.code .objc .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .objc .li2 {background: #f2f2f2;}
.code .objc .kw1 {color: #a61390;}
.code .objc .kw2 {color: #a61390;}
.code .objc .kw3 {color: #a61390;}
.code .objc .kw4 {color: #a61390;}
.code .objc .kw5 {color: #400080;}
.code .objc .kw6 {color: #2a6f76;}
.code .objc .kw7 {color: #400080;}
.code .objc .kw8 {color: #2a6f76;}
.code .objc .kw9 {color: #400080;}
.code .objc .co1 {color: #6e371a;}
.code .objc .co2 {color: #11740a; font-style: italic;}
.code .objc .co3 {color: #bf1d1a;}
.code .objc .coMULTI {color: #11740a; font-style: italic;}
.code .objc .es0 {color: #2400d9;}
.code .objc .br0 {color: #002200;}
.code .objc .sy0 {color: #002200;}
.code .objc .st0 {color: #bf1d1a;}
.code .objc .nu0 {color: #2400d9;}
.code .objc .ln-xtra, .code .objc li.ln-xtra, .code .objc div.ln-xtra {background-color: #ffc;}
.code .objc span.xtra { display:block; }

.code .ocaml .de1, .code .ocaml .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .ocaml  {font-family:monospace; font-size: 12px;}
.code .ocaml .imp {font-weight: bold; color: red;}
.code .ocaml li, .code .ocaml .li1 {font-weight: normal; vertical-align:top;}
.code .ocaml .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .ocaml .li2 {background: #f2f2f2;}
.code .ocaml .kw1 {color: #06c; font-weight: bold;}
.code .ocaml .kw2 {color: #06c; font-weight: bold;}
.code .ocaml .kw3 {color: #06c; font-weight: bold;}
.code .ocaml .kw4 {color: #06c; font-weight: bold;}
.code .ocaml .kw5 {color: #06c; font-weight: bold;}
.code .ocaml .coMULTI {color: #5d478b; font-style: italic;}
.code .ocaml .br0 {color: #6c6;}
.code .ocaml .sy0 {color: #a52a2a;}
.code .ocaml .st0 {color: #3cb371;}
.code .ocaml .nu0 {color: #c6c;}
.code .ocaml .me1 {color: #060;}
.code .ocaml .ln-xtra, .code .ocaml li.ln-xtra, .code .ocaml div.ln-xtra {background-color: #ffc;}
.code .ocaml span.xtra { display:block; }

.code .ocaml-brief .de1, .code .ocaml-brief .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .ocaml-brief  {font-family:monospace; font-size: 12px;}
.code .ocaml-brief .imp {font-weight: bold; color: red;}
.code .ocaml-brief li, .code .ocaml-brief .li1 {font-weight: normal; vertical-align:top;}
.code .ocaml-brief .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .ocaml-brief .li2 {background: #f2f2f2;}
.code .ocaml-brief .kw1 {color: #06c; font-weight: bold;}
.code .ocaml-brief .coMULTI {color: #5d478b; font-style: italic;}
.code .ocaml-brief .br0 {color: #6c6;}
.code .ocaml-brief .sy0 {color: #a52a2a;}
.code .ocaml-brief .st0 {color: #3cb371;}
.code .ocaml-brief .nu0 {color: #c6c;}
.code .ocaml-brief .me1 {color: #060;}
.code .ocaml-brief .ln-xtra, .code .ocaml-brief li.ln-xtra, .code .ocaml-brief div.ln-xtra {background-color: #ffc;}
.code .ocaml-brief span.xtra { display:block; }

.code .oobas .de1, .code .oobas .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .oobas  {font-family:monospace; font-size: 12px;}
.code .oobas .imp {font-weight: bold; color: red;}
.code .oobas li, .code .oobas .li1 {font-weight: normal; vertical-align:top;}
.code .oobas .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .oobas .li2 {background: #f2f2f2;}
.code .oobas .kw1 {color: #b1b100;}
.code .oobas .co1 {color: #808080;}
.code .oobas .co2 {color: #808080;}
.code .oobas .es0 {color: #000099;}
.code .oobas .br0 {color: #66cc66;}
.code .oobas .sy0 {color: #66cc66;}
.code .oobas .st0 {color: #ff0000;}
.code .oobas .nu0 {color: #cc66cc;}
.code .oobas .me1 {color: #006600;}
.code .oobas .ln-xtra, .code .oobas li.ln-xtra, .code .oobas div.ln-xtra {background-color: #ffc;}
.code .oobas span.xtra { display:block; }

.code .oracle11 .de1, .code .oracle11 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .oracle11  {font-family:monospace; font-size: 12px;}
.code .oracle11 .imp {font-weight: bold; color: red;}
.code .oracle11 li, .code .oracle11 .li1 {font-weight: normal; vertical-align:top;}
.code .oracle11 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .oracle11 .li2 {background: #f2f2f2;}
.code .oracle11 .kw1 {color: #993333; font-weight: bold; text-transform: uppercase;}
.code .oracle11 .co1 {color: #808080; font-style: italic;}
.code .oracle11 .es0 {color: #000099; font-weight: bold;}
.code .oracle11 .br0 {color: #66cc66;}
.code .oracle11 .sy0 {color: #66cc66;}
.code .oracle11 .st0 {color: #ff0000;}
.code .oracle11 .nu0 {color: #cc66cc;}
.code .oracle11 .me1 {color: #ff0000;}
.code .oracle11 .ln-xtra, .code .oracle11 li.ln-xtra, .code .oracle11 div.ln-xtra {background-color: #ffc;}
.code .oracle11 span.xtra { display:block; }

.code .oracle8 .de1, .code .oracle8 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .oracle8  {font-family:monospace; font-size: 12px;}
.code .oracle8 .imp {font-weight: bold; color: red;}
.code .oracle8 li, .code .oracle8 .li1 {font-weight: normal; vertical-align:top;}
.code .oracle8 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .oracle8 .li2 {background: #f2f2f2;}
.code .oracle8 .kw1 {color: #993333; font-weight: bold; text-transform: uppercase;}
.code .oracle8 .co1 {color: #808080; font-style: italic;}
.code .oracle8 .es0 {color: #000099; font-weight: bold;}
.code .oracle8 .br0 {color: #66cc66;}
.code .oracle8 .sy0 {color: #66cc66;}
.code .oracle8 .st0 {color: #ff0000;}
.code .oracle8 .nu0 {color: #cc66cc;}
.code .oracle8 .me1 {color: #ff0000;}
.code .oracle8 .ln-xtra, .code .oracle8 li.ln-xtra, .code .oracle8 div.ln-xtra {background-color: #ffc;}
.code .oracle8 span.xtra { display:block; }

.code .pascal .de1, .code .pascal .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .pascal  {font-family:monospace; font-size: 12px;}
.code .pascal .imp {font-weight: bold; color: red;}
.code .pascal li, .code .pascal .li1 {font-weight: normal; vertical-align:top;}
.code .pascal .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .pascal .li2 {background: #f2f2f2;}
.code .pascal .kw1 {color: #000000; font-weight: bold;}
.code .pascal .kw2 {color: #000000; font-weight: bold;}
.code .pascal .kw3 {color: #000066;}
.code .pascal .kw4 {color: #000066; font-weight: bold;}
.code .pascal .co1 {color: #666666; font-style: italic;}
.code .pascal .coMULTI {color: #666666; font-style: italic;}
.code .pascal .es0 {color: #000099; font-weight: bold;}
.code .pascal .es_h {color: #000099; font-weight: bold;}
.code .pascal .br0 {color: #009900;}
.code .pascal .sy0 {color: #339933;}
.code .pascal .st0 {color: #ff0000;}
.code .pascal .st_h {color: #ff0000;}
.code .pascal .nu0 {color: #cc66cc;}
.code .pascal .me1 {color: #0066ee;}
.code .pascal .ln-xtra, .code .pascal li.ln-xtra, .code .pascal div.ln-xtra {background-color: #ffc;}
.code .pascal span.xtra { display:block; }

.code .per .de1, .code .per .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .per  {font-family:monospace; font-size: 12px;}
.code .per .imp {font-weight: bold; color: red;}
.code .per li, .code .per .li1 {font-weight: normal; vertical-align:top;}
.code .per .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .per .li2 {background: #f2f2f2;}
.code .per .kw1 {color: #0600FF;}
.code .per .kw2 {color: #0000FF; font-weight: bold;}
.code .per .co1 {color: #008080; font-style: italic;}
.code .per .co2 {color: #008080;}
.code .per .coMULTI {color: green}
.code .per .es0 {color: #008080; font-weight: bold;}
.code .per .br0 {color: #000000;}
.code .per .sy0 {color: #008000;}
.code .per .st0 {color: #808080;}
.code .per .nu0 {color: #FF0000;}
.code .per .me1 {color: #0000FF;}
.code .per .me2 {color: #0000FF;}
.code .per .ln-xtra, .code .per li.ln-xtra, .code .per div.ln-xtra {background-color: #ffc;}
.code .per span.xtra { display:block; }

.code .perl .de1, .code .perl .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .perl  {font-family:monospace; font-size: 12px;}
.code .perl .imp {font-weight: bold; color: red;}
.code .perl li, .code .perl .li1 {font-weight: normal; vertical-align:top;}
.code .perl .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .perl .li2 {background: #f2f2f2;}
.code .perl .kw1 {color: #b1b100;}
.code .perl .kw2 {color: #000000; font-weight: bold;}
.code .perl .kw3 {color: #000066;}
.code .perl .co1 {color: #666666; font-style: italic;}
.code .perl .co2 {color: #009966; font-style: italic;}
.code .perl .co3 {color: #0000ff;}
.code .perl .co4 {color: #cc0000; font-style: italic;}
.code .perl .co5 {color: #0000ff;}
.code .perl .coMULTI {color: #666666; font-style: italic;}
.code .perl .es0 {color: #000099; font-weight: bold;}
.code .perl .es_h {color: #000099; font-weight: bold;}
.code .perl .br0 {color: #009900;}
.code .perl .sy0 {color: #339933;}
.code .perl .st0 {color: #ff0000;}
.code .perl .st_h {color: #ff0000;}
.code .perl .nu0 {color: #cc66cc;}
.code .perl .me1 {color: #006600;}
.code .perl .me2 {color: #006600;}
.code .perl .re0 {color: #0000ff;}
.code .perl .re4 {color: #009999;}
.code .perl .ln-xtra, .code .perl li.ln-xtra, .code .perl div.ln-xtra {background-color: #ffc;}
.code .perl span.xtra { display:block; }

.code .php .de1, .code .php .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .php  {font-family:monospace; font-size: 12px;}
.code .php .imp {font-weight: bold; color: red;}
.code .php li, .code .php .li1 {font-weight: normal; vertical-align:top;}
.code .php .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .php .li2 {background: #f2f2f2;}
.code .php .kw1 {color: #b1b100;}
.code .php .kw2 {color: #000000; font-weight: bold;}
.code .php .kw3 {color: #990000;}
.code .php .kw4 {color: #009900; font-weight: bold;}
.code .php .co1 {color: #666666; font-style: italic;}
.code .php .co2 {color: #666666; font-style: italic;}
.code .php .co3 {color: #0000cc; font-style: italic;}
.code .php .co4 {color: #009933; font-style: italic;}
.code .php .coMULTI {color: #666666; font-style: italic;}
.code .php .es0 {color: #000099; font-weight: bold;}
.code .php .es1 {color: #000099; font-weight: bold;}
.code .php .es2 {color: #660099; font-weight: bold;}
.code .php .es3 {color: #660099; font-weight: bold;}
.code .php .es4 {color: #006699; font-weight: bold;}
.code .php .es5 {color: #006699; font-weight: bold; font-style: italic;}
.code .php .es6 {color: #009933; font-weight: bold;}
.code .php .es_h {color: #000099; font-weight: bold;}
.code .php .br0 {color: #009900;}
.code .php .sy0 {color: #339933;}
.code .php .sy1 {color: #000000; font-weight: bold;}
.code .php .st0 {color: #0000ff;}
.code .php .st_h {color: #0000ff;}
.code .php .nu0 {color: #cc66cc;}
.code .php .nu8 {color: #208080;}
.code .php .nu12 {color: #208080;}
.code .php .nu19 {color:#800080;}
.code .php .me1 {color: #004000;}
.code .php .me2 {color: #004000;}
.code .php .re0 {color: #000088;}
.code .php .ln-xtra, .code .php li.ln-xtra, .code .php div.ln-xtra {background-color: #ffc;}
.code .php span.xtra { display:block; }

.code .php-brief .de1, .code .php-brief .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .php-brief  {font-family:monospace; font-size: 12px;}
.code .php-brief .imp {font-weight: bold; color: red;}
.code .php-brief li, .code .php-brief .li1 {font-weight: normal; vertical-align:top;}
.code .php-brief .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .php-brief .li2 {background: #f2f2f2;}
.code .php-brief .kw1 {color: #b1b100;}
.code .php-brief .kw2 {color: #000000; font-weight: bold;}
.code .php-brief .kw3 {color: #990000;}
.code .php-brief .co1 {color: #666666; font-style: italic;}
.code .php-brief .co2 {color: #666666; font-style: italic;}
.code .php-brief .co3 {color: #0000cc; font-style: italic;}
.code .php-brief .coMULTI {color: #666666; font-style: italic;}
.code .php-brief .es0 {color: #000099; font-weight: bold;}
.code .php-brief .es_h {color: #000099; font-weight: bold;}
.code .php-brief .br0 {color: #009900;}
.code .php-brief .sy0 {color: #339933;}
.code .php-brief .sy1 {color: #000000; font-weight: bold;}
.code .php-brief .st0 {color: #0000ff;}
.code .php-brief .st_h {color: #0000ff;}
.code .php-brief .nu0 {color: #cc66cc;}
.code .php-brief .nu8 {color: #208080;}
.code .php-brief .nu12 {color: #208080;}
.code .php-brief .nu19 {color:#800080;}
.code .php-brief .me1 {color: #004000;}
.code .php-brief .me2 {color: #004000;}
.code .php-brief .re0 {color: #0000ff;}
.code .php-brief .ln-xtra, .code .php-brief li.ln-xtra, .code .php-brief div.ln-xtra {background-color: #ffc;}
.code .php-brief span.xtra { display:block; }

.code .pic16 .de1, .code .pic16 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .pic16  {font-family:monospace; font-size: 12px;}
.code .pic16 .imp {font-weight: bold; color: red;}
.code .pic16 li, .code .pic16 .li1 {font-weight: normal; vertical-align:top;}
.code .pic16 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .pic16 .li2 {background: #f2f2f2;}
.code .pic16 .kw1 {color: #0000a0; font-weight: bold;}
.code .pic16 .kw2 {color: #aa3300; font-weight: bold;}
.code .pic16 .kw3 {color: #0000ff;}
.code .pic16 .co1 {color: #00a000;}
.code .pic16 .es0 {color: #ff0000;}
.code .pic16 .br0 {color: #0000ff;}
.code .pic16 .sy0 {color: #7777ff;}
.code .pic16 .st0 {color: #ff7700;}
.code .pic16 .nu0 {color: #ff7700;}
.code .pic16 .ln-xtra, .code .pic16 li.ln-xtra, .code .pic16 div.ln-xtra {background-color: #ffc;}
.code .pic16 span.xtra { display:block; }

.code .pixelbender .de1, .code .pixelbender .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .pixelbender  {font-family:monospace; font-size: 12px;}
.code .pixelbender .imp {font-weight: bold; color: red;}
.code .pixelbender li, .code .pixelbender .li1 {font-weight: normal; vertical-align:top;}
.code .pixelbender .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .pixelbender .li2 {background: #f2f2f2;}
.code .pixelbender .kw1 {color: #0033ff;}
.code .pixelbender .kw2 {color: #0033ff; font-weight: bold;}
.code .pixelbender .kw3 {color: #0033ff;}
.code .pixelbender .kw4 {color: #9900cc; font-weight: bold;}
.code .pixelbender .kw5 {color: #333333;}
.code .pixelbender .kw6 {color: #666666;}
.code .pixelbender .kw7 {color: #990000;}
.code .pixelbender .co1 {color: #009900;}
.code .pixelbender .coMULTI {color: #3f5fbf;}
.code .pixelbender .br0 {color: #000000;}
.code .pixelbender .sy0 {color: #000000; font-weight: bold;}
.code .pixelbender .st0 {color: #990000;}
.code .pixelbender .nu0 {color: #000000; font-weight:bold;}
.code .pixelbender .me0 {color: #000000;}
.code .pixelbender .ln-xtra, .code .pixelbender li.ln-xtra, .code .pixelbender div.ln-xtra {background-color: #ffc;}
.code .pixelbender span.xtra { display:block; }

.code .plsql .de1, .code .plsql .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .plsql  {font-family:monospace; font-size: 12px;}
.code .plsql .imp {font-weight: bold; color: red;}
.code .plsql li, .code .plsql .li1 {font-weight: normal; vertical-align:top;}
.code .plsql .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .plsql .li2 {background: #f2f2f2;}
.code .plsql .kw1 {color: #00F;}
.code .plsql .kw2 {color: #000;}
.code .plsql .kw3 {color: #00F;}
.code .plsql .kw4 {color: #F00;}
.code .plsql .kw5 {color: #800;}
.code .plsql .co1 {color: #080; font-style: italic;}
.code .plsql .coMULTI {color: #080; font-style: italic;}
.code .plsql .es0 {color: #000; font-weight: bold;}
.code .plsql .br0 {color: #00F;}
.code .plsql .sy0 {color: #00F;}
.code .plsql .st0 {color: #F00;}
.code .plsql .nu0 {color: #800;}
.code .plsql .me0 {color: #0F0;}
.code .plsql .sc0 {color: #0F0;}
.code .plsql .ln-xtra, .code .plsql li.ln-xtra, .code .plsql div.ln-xtra {background-color: #ffc;}
.code .plsql span.xtra { display:block; }

.code .povray .de1, .code .povray .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .povray  {font-family:monospace; font-size: 12px;}
.code .povray .imp {font-weight: bold; color: red;}
.code .povray li, .code .povray .li1 {font-weight: normal; vertical-align:top;}
.code .povray .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .povray .li2 {background: #f2f2f2;}
.code .povray .kw1 {color: #a63123;}
.code .povray .kw2 {color: #2312bc;}
.code .povray .kw3 {color: #cc1122; font-weight: bold;}
.code .povray .kw4 {color: #116688; font-weight: bold;}
.code .povray .co1 {color: #808080; font-style: italic;}
.code .povray .coMULTI {color: #808080; font-style: italic;}
.code .povray .es0 {color: #000099; font-weight: bold;}
.code .povray .br0 {color: #66cc66;}
.code .povray .sy0 {color: #66cc66;}
.code .povray .st0 {color: #ff0000;}
.code .povray .nu0 {color: #cc66aa;}
.code .povray .me1 {color: #006600;}
.code .povray .me2 {color: #006600;}
.code .povray .re0 {color: #6666cc; font-weight: bold;}
.code .povray .re1 {color: #66cc66; font-weight: bold;}
.code .povray .re2 {color: #66cc66; font-weight: bold;}
.code .povray .ln-xtra, .code .povray li.ln-xtra, .code .povray div.ln-xtra {background-color: #ffc;}
.code .povray span.xtra { display:block; }

.code .powershell .de1, .code .powershell .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .powershell  {font-family:monospace; font-size: 12px;}
.code .powershell .imp {font-weight: bold; color: red;}
.code .powershell li, .code .powershell .li1 {font-weight: normal; vertical-align:top;}
.code .powershell .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .powershell .li2 {background: #f2f2f2;}
.code .powershell .kw1 {color: #008080; font-weight: bold;}
.code .powershell .kw2 {color: #008080; font-weight: bold;}
.code .powershell .kw3 {color: #0000FF;}
.code .powershell .kw4 {color: #FF0000;}
.code .powershell .kw5 {color: #008080; font-style: italic;}
.code .powershell .kw6 {color: #000080;}
.code .powershell .co1 {color: #008000;}
.code .powershell .coMULTI {color: #008000;}
.code .powershell .es0 {color: #008080; font-weight: bold;}
.code .powershell .br0 {color: #000000;}
.code .powershell .sy0 {color: pink;}
.code .powershell .st0 {color: #800000;}
.code .powershell .nu0 {color: #804000;}
.code .powershell .me0 {color: pink;}
.code .powershell .re0 {color: #800080;}
.code .powershell .re3 {color: #008080;}
.code .powershell .re4 {color: #008080;}
.code .powershell .re5 {color: #800000;}
.code .powershell .re6 {color: #000080;}
.code .powershell .ln-xtra, .code .powershell li.ln-xtra, .code .powershell div.ln-xtra {background-color: #ffc;}
.code .powershell span.xtra { display:block; }

.code .progress .de1, .code .progress .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .progress  {font-family:monospace; font-size: 12px;}
.code .progress .imp {font-weight: bold; color: red;}
.code .progress li, .code .progress .li1 {font-weight: normal; vertical-align:top;}
.code .progress .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .progress .li2 {background: #f2f2f2;}
.code .progress .kw1 {color: #0000ff; font-weight: bold;}
.code .progress .kw2 {color: #1D16B2;}
.code .progress .kw3 {color: #993333;}
.code .progress .kw4 {color: #0000ff;}
.code .progress .coMULTI {color: #808080; font-style: italic;}
.code .progress .es0 {color: #000099; font-weight: bold;}
.code .progress .br0 {color: #66cc66;}
.code .progress .sy0 {color: #66cc66;}
.code .progress .st0 {color: #ff0000;}
.code .progress .nu0 {color: #cc66cc;}
.code .progress .me0 {color: #006600;}
.code .progress .ln-xtra, .code .progress li.ln-xtra, .code .progress div.ln-xtra {background-color: #ffc;}
.code .progress span.xtra { display:block; }

.code .prolog .de1, .code .prolog .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .prolog  {font-family:monospace; font-size: 12px;}
.code .prolog .imp {font-weight: bold; color: red;}
.code .prolog li, .code .prolog .li1 {font-weight: normal; vertical-align:top;}
.code .prolog .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .prolog .li2 {background: #f2f2f2;}
.code .prolog .kw1 {color: #990000;}
.code .prolog .co1 {color: #666666; font-style: italic;}
.code .prolog .coMULTI {color: #666666; font-style: italic;}
.code .prolog .es0 {color: #000099; font-weight: bold;}
.code .prolog .es_h {color: #000099; font-weight: bold;}
.code .prolog .br0 {color: #009900;}
.code .prolog .sy0 {color: #339933;}
.code .prolog .sy1 {color: #339933;}
.code .prolog .sy2 {color: #339933;}
.code .prolog .sy3 {color: #339933;}
.code .prolog .sy4 {color: #339933;}
.code .prolog .sy5 {color: #339933;}
.code .prolog .sy6 {color: #339933;}
.code .prolog .st0 {color: #0000ff;}
.code .prolog .st_h {color: #0000ff;}
.code .prolog .nu0 {color: #800080;}
.code .prolog .re0 {color: #008080;}
.code .prolog .ln-xtra, .code .prolog li.ln-xtra, .code .prolog div.ln-xtra {background-color: #ffc;}
.code .prolog span.xtra { display:block; }

.code .properties .de1, .code .properties .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .properties  {font-family:monospace; font-size: 12px;}
.code .properties .imp {font-weight: bold; color: red;}
.code .properties li, .code .properties .li1 {font-weight: normal; vertical-align:top;}
.code .properties .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .properties .li2 {background: #f2f2f2;}
.code .properties .kw1 {font-weight: bold;}
.code .properties .co1 {color: #808080; font-style: italic;}
.code .properties .sy0 {color: #000000;}
.code .properties .st0 {color: #933;}
.code .properties .re0 {color: #000080; font-weight:bold;}
.code .properties .re1 {color: #008000; font-weight:bold;}
.code .properties .ln-xtra, .code .properties li.ln-xtra, .code .properties div.ln-xtra {background-color: #ffc;}
.code .properties span.xtra { display:block; }

.code .providex .de1, .code .providex .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .providex  {font-family:monospace; font-size: 12px;}
.code .providex .imp {font-weight: bold; color: red;}
.code .providex li, .code .providex .li1 {font-weight: normal; vertical-align:top;}
.code .providex .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .providex .li2 {background: #f2f2f2;}
.code .providex .kw1 {color: navy;}
.code .providex .kw2 {color: blue;}
.code .providex .kw3 {color: blue;}
.code .providex .kw4 {color: #6A5ACD; font-style: italic;}
.code .providex .kw5 {color: #BDB76B;}
.code .providex .co1 {color: #008080; font-style: italic;}
.code .providex .co2 {color: #008080;}
.code .providex .coMULTI {color: #008080; font-style: italic;}
.code .providex .es0 {color: #000099;}
.code .providex .br0 {color: #000066;}
.code .providex .sy0 {color: #008000;}
.code .providex .sy1 {color: #000099;}
.code .providex .sy2 {color: #000099;}
.code .providex .sy3 {color: #0000C9;}
.code .providex .sy4 {color: #000099;}
.code .providex .st0 {color: green;}
.code .providex .nu0 {color: #00008B;}
.code .providex .re1 {color: #006400; font-weight: bold}
.code .providex .re2 {color: #6A5ACD;}
.code .providex .ln-xtra, .code .providex li.ln-xtra, .code .providex div.ln-xtra {background-color: #ffc;}
.code .providex span.xtra { display:block; }

.code .python .de1, .code .python .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .python  {font-family:monospace; font-size: 12px;}
.code .python .imp {font-weight: bold; color: red;}
.code .python li, .code .python .li1 {font-weight: normal; vertical-align:top;}
.code .python .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .python .li2 {background: #f2f2f2;}
.code .python .kw1 {color: #ff7700;font-weight:bold;}
.code .python .kw2 {color: #008000;}
.code .python .kw3 {color: #dc143c;}
.code .python .kw4 {color: #0000cd;}
.code .python .co1 {color: #808080; font-style: italic;}
.code .python .coMULTI {color: #808080; font-style: italic;}
.code .python .es0 {color: #000099; font-weight: bold;}
.code .python .br0 {color: black;}
.code .python .sy0 {color: #66cc66;}
.code .python .st0 {color: #483d8b;}
.code .python .nu0 {color: #ff4500;}
.code .python .me1 {color: black;}
.code .python .ln-xtra, .code .python li.ln-xtra, .code .python div.ln-xtra {background-color: #ffc;}
.code .python span.xtra { display:block; }

.code .qbasic .de1, .code .qbasic .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .qbasic  {font-family:monospace; font-size: 12px;}
.code .qbasic .imp {font-weight: bold; color: red;}
.code .qbasic li, .code .qbasic .li1 {font-weight: normal; vertical-align:top;}
.code .qbasic .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .qbasic .li2 {background: #f2f2f2;}
.code .qbasic .kw1 {color: #a1a100;}
.code .qbasic .kw3 {color: #000066;}
.code .qbasic .co1 {color: #808080;}
.code .qbasic .co2 {color: #808080;}
.code .qbasic .es0 {color: #000099;}
.code .qbasic .br0 {color: #66cc66;}
.code .qbasic .sy0 {color: #66cc66;}
.code .qbasic .st0 {color: #ff0000;}
.code .qbasic .nu0 {color: #cc66cc;}
.code .qbasic .ln-xtra, .code .qbasic li.ln-xtra, .code .qbasic div.ln-xtra {background-color: #ffc;}
.code .qbasic span.xtra { display:block; }

.code .rails .de1, .code .rails .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .rails  {font-family:monospace; font-size: 12px;}
.code .rails .imp {font-weight: bold; color: red;}
.code .rails li, .code .rails .li1 {font-weight: normal; vertical-align:top;}
.code .rails .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .rails .li2 {background: #f2f2f2;}
.code .rails .kw1 {color:#9966CC; font-weight:bold;}
.code .rails .kw2 {color:#0000FF; font-weight:bold;}
.code .rails .kw3 {color:#CC0066; font-weight:bold;}
.code .rails .kw4 {color:#CC00FF; font-weight:bold;}
.code .rails .kw5 {color:#5A0A0A; font-weight:bold;}
.code .rails .co1 {color:#008000; font-style:italic;}
.code .rails .coMULTI {color:#000080; font-style:italic;}
.code .rails .es0 {color:#000099;}
.code .rails .br0 {color:#006600; font-weight:bold;}
.code .rails .sy0 {color:#006600; font-weight:bold;}
.code .rails .st0 {color:#996600;}
.code .rails .nu0 {color:#006666;}
.code .rails .me1 {color:#9900CC;}
.code .rails .re0 {color:#ff6633; font-weight:bold;}
.code .rails .re1 {color:#0066ff; font-weight:bold;}
.code .rails .re2 {color:#6666ff; font-weight:bold;}
.code .rails .re3 {color:#ff3333; font-weight:bold;}
.code .rails .ln-xtra, .code .rails li.ln-xtra, .code .rails div.ln-xtra {background-color: #ffc;}
.code .rails span.xtra { display:block; }

.code .rebol .de1, .code .rebol .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .rebol  {font-family:monospace; font-size: 12px;}
.code .rebol .imp {font-weight: bold; color: red;}
.code .rebol li, .code .rebol .li1 {font-weight: normal; vertical-align:top;}
.code .rebol .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .rebol .li2 {background: #f2f2f2;}
.code .rebol .kw1 {color: #b1b100;}
.code .rebol .kw2 {color: #000000; font-weight: bold;}
.code .rebol .kw3 {color: #000066;}
.code .rebol .co1 {color: #808080; font-style: italic;}
.code .rebol .coMULTI {color: #808080; font-style: italic;}
.code .rebol .es0 {color: #000099; font-weight: bold;}
.code .rebol .br0 {color: #66cc66;}
.code .rebol .sy0 {color: #66cc66;}
.code .rebol .st0 {color: #ff0000;}
.code .rebol .nu0 {color: #cc66cc;}
.code .rebol .me1 {color: #006600;}
.code .rebol .me2 {color: #006600;}
.code .rebol .re0 {color: #0000ff;}
.code .rebol .ln-xtra, .code .rebol li.ln-xtra, .code .rebol div.ln-xtra {background-color: #ffc;}
.code .rebol span.xtra { display:block; }

.code .reg .de1, .code .reg .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .reg  {font-family:monospace; font-size: 12px;}
.code .reg .imp {font-weight: bold; color: red;}
.code .reg li, .code .reg .li1 {font-weight: normal; vertical-align:top;}
.code .reg .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .reg .li2 {background: #f2f2f2;}
.code .reg .kw3 {color: #800000;}
.code .reg .co1 {color: #009900;}
.code .reg .br0 {color: #000000;}
.code .reg .sy0 {color: #000000;}
.code .reg .st0 {color: #009900;}
.code .reg .re0 {color: #00CCFF;}
.code .reg .code_registry_header {color: #0000FF;}
.code .reg .re3 {color: #0000FF;}
.code .reg .code_variable {color: #0000FF;}
.code .reg .code_guid {color: #FF6600;}
.code .reg .ln-xtra, .code .reg li.ln-xtra, .code .reg div.ln-xtra {background-color: #ffc;}
.code .reg span.xtra { display:block; }

.code .robots .de1, .code .robots .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .robots  {font-family:monospace; font-size: 12px;}
.code .robots .imp {font-weight: bold; color: red;}
.code .robots li, .code .robots .li1 {font-weight: normal; vertical-align:top;}
.code .robots .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .robots .li2 {background: #f2f2f2;}
.code .robots .kw1 {color: #b1b100;}
.code .robots .co1 {color: #808080; font-style: italic;}
.code .robots .es0 {color: #000099; font-weight: bold;}
.code .robots .br0 {color: #66cc66;}
.code .robots .sy0 {color: #66cc66;}
.code .robots .st0 {color: #ff0000;}
.code .robots .nu0 {color: #cc66cc;}
.code .robots .ln-xtra, .code .robots li.ln-xtra, .code .robots div.ln-xtra {background-color: #ffc;}
.code .robots span.xtra { display:block; }

.code .ruby .de1, .code .ruby .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .ruby  {font-family:monospace; font-size: 12px;}
.code .ruby .imp {font-weight: bold; color: red;}
.code .ruby li, .code .ruby .li1 {font-weight: normal; vertical-align:top;}
.code .ruby .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .ruby .li2 {background: #f2f2f2;}
.code .ruby .kw1 {color:#9966CC; font-weight:bold;}
.code .ruby .kw2 {color:#0000FF; font-weight:bold;}
.code .ruby .kw3 {color:#CC0066; font-weight:bold;}
.code .ruby .kw4 {color:#CC00FF; font-weight:bold;}
.code .ruby .co1 {color:#008000; font-style:italic;}
.code .ruby .coMULTI {color:#000080; font-style:italic;}
.code .ruby .es0 {color:#000099;}
.code .ruby .br0 {color:#006600; font-weight:bold;}
.code .ruby .sy0 {color:#006600; font-weight:bold;}
.code .ruby .st0 {color:#996600;}
.code .ruby .nu0 {color:#006666;}
.code .ruby .me1 {color:#9900CC;}
.code .ruby .re0 {color:#ff6633; font-weight:bold;}
.code .ruby .re1 {color:#0066ff; font-weight:bold;}
.code .ruby .re2 {color:#6666ff; font-weight:bold;}
.code .ruby .re3 {color:#ff3333; font-weight:bold;}
.code .ruby .ln-xtra, .code .ruby li.ln-xtra, .code .ruby div.ln-xtra {background-color: #ffc;}
.code .ruby span.xtra { display:block; }

.code .sas .de1, .code .sas .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .sas  {font-family:monospace; font-size: 12px;}
.code .sas .imp {font-weight: bold; color: red;}
.code .sas li, .code .sas .li1 {font-weight: normal; vertical-align:top;}
.code .sas .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .sas .li2 {background: #f2f2f2;}
.code .sas .kw1 {color: #0000ff;}
.code .sas .kw2 {color: #0000ff;}
.code .sas .kw3 {color: #0000ff;}
.code .sas .kw4 {color: #0000ff;}
.code .sas .kw5 {color: #0000ff;}
.code .sas .kw6 {color: #000080; font-weight: bold;}
.code .sas .kw7 {color: #ff0000;}
.code .sas .kw8 {color: #00ff00;}
.code .sas .kw9 {color: #0000ff;}
.code .sas .coMULTI {color: #006400; font-style: italic;}
.code .sas .es0 {color: #000099; font-weight: bold;}
.code .sas .br0 {color: #66cc66;}
.code .sas .sy0 {color: #66cc66;}
.code .sas .st0 {color: #a020f0;}
.code .sas .nu0 {color: #2e8b57; font-weight: bold;}
.code .sas .re0 {color: #0000ff; font-weight: bold;}
.code .sas .re1 {color: #000080; font-weight: bold;}
.code .sas .re2 {color: #006400; font-style: italic;}
.code .sas .re3 {color: #006400; font-style: italic;}
.code .sas .re4 {color: #006400; font-style: italic;}
.code .sas .re5 {color: #ff0000; font-weight: bold;}
.code .sas .re6 {color: #00ff00; font-style: italic;}
.code .sas .re7 {color: #0000ff; font-style: normal;}
.code .sas .re8 {color: #b218b2; font-weight: bold;}
.code .sas .re9 {color: #b218b2; font-weight: bold;}
.code .sas .ln-xtra, .code .sas li.ln-xtra, .code .sas div.ln-xtra {background-color: #ffc;}
.code .sas span.xtra { display:block; }

.code .scala .de1, .code .scala .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .scala  {font-family:monospace; font-size: 12px;}
.code .scala .imp {font-weight: bold; color: red;}
.code .scala li, .code .scala .li1 {font-weight: normal; vertical-align:top;}
.code .scala .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .scala .li2 {background: #f2f2f2;}
.code .scala .kw1 {color: #0000ff; font-weight: bold;}
.code .scala .kw2 {color: #9999cc; font-weight: bold;}
.code .scala .co1 {color: #008000; font-style: italic;}
.code .scala .coMULTI {color: #00ff00; font-style: italic;}
.code .scala .es0 {color: #0000ff; font-weight: bold;}
.code .scala .br0 {color: #F78811;}
.code .scala .sy0 {color: #000080;}
.code .scala .st0 {color: #6666FF;}
.code .scala .nu0 {color: #F78811;}
.code .scala .me1 {color: #000000;}
.code .scala .me2 {color: #000000;}
.code .scala .ln-xtra, .code .scala li.ln-xtra, .code .scala div.ln-xtra {background-color: #ffc;}
.code .scala span.xtra { display:block; }

.code .scheme .de1, .code .scheme .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .scheme  {font-family:monospace; font-size: 12px;}
.code .scheme .imp {font-weight: bold; color: red;}
.code .scheme li, .code .scheme .li1 {font-weight: normal; vertical-align:top;}
.code .scheme .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .scheme .li2 {background: #f2f2f2;}
.code .scheme .kw1 {color: #b1b100;}
.code .scheme .co1 {color: #808080; font-style: italic;}
.code .scheme .coMULTI {color: #808080; font-style: italic;}
.code .scheme .es0 {color: #000099; font-weight: bold;}
.code .scheme .br0 {color: #66cc66;}
.code .scheme .sy0 {color: #66cc66;}
.code .scheme .st0 {color: #ff0000;}
.code .scheme .nu0 {color: #cc66cc;}
.code .scheme .me0 {color: #202020;}
.code .scheme .ln-xtra, .code .scheme li.ln-xtra, .code .scheme div.ln-xtra {background-color: #ffc;}
.code .scheme span.xtra { display:block; }

.code .scilab .de1, .code .scilab .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .scilab  {font-family:monospace; font-size: 12px;}
.code .scilab .imp {font-weight: bold; color: red;}
.code .scilab li, .code .scilab .li1 {font-weight: normal; vertical-align:top;}
.code .scilab .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .scilab .li2 {background: #f2f2f2;}
.code .scilab .kw1 {color: #b1b100;}
.code .scilab .kw2 {color: #000000; font-weight: bold;}
.code .scilab .kw3 {color: #000066;}
.code .scilab .co1 {color: #666666; font-style: italic;}
.code .scilab .coMULTI {color: #666666; font-style: italic;}
.code .scilab .es0 {color: #000099; font-weight: bold;}
.code .scilab .es_h {color: #000099; font-weight: bold;}
.code .scilab .br0 {color: #009900;}
.code .scilab .sy0 {color: #339933;}
.code .scilab .st0 {color: #ff0000;}
.code .scilab .st_h {color: #ff0000;}
.code .scilab .nu0 {color: #cc66cc;}
.code .scilab .me1 {color: #006600;}
.code .scilab .me2 {color: #006600;}
.code .scilab .re0 {color: #0000ff;}
.code .scilab .re4 {color: #009999;}
.code .scilab .ln-xtra, .code .scilab li.ln-xtra, .code .scilab div.ln-xtra {background-color: #ffc;}
.code .scilab span.xtra { display:block; }

.code .sdlbasic .de1, .code .sdlbasic .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .sdlbasic  {font-family:monospace; font-size: 12px;}
.code .sdlbasic .imp {font-weight: bold; color: red;}
.code .sdlbasic li, .code .sdlbasic .li1 {font-weight: normal; vertical-align:top;}
.code .sdlbasic .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .sdlbasic .li2 {background: #f2f2f2;}
.code .sdlbasic .kw1 {color: #b1b100;}
.code .sdlbasic .co1 {color: #808080;}
.code .sdlbasic .co2 {color: #808080;}
.code .sdlbasic .co3 {color: #808080;}
.code .sdlbasic .co4 {color: #808080;}
.code .sdlbasic .es0 {color: #000099;}
.code .sdlbasic .br0 {color: #66cc66;}
.code .sdlbasic .sy0 {color: #66cc66;}
.code .sdlbasic .st0 {color: #ff0000;}
.code .sdlbasic .nu0 {color: #cc66cc;}
.code .sdlbasic .me0 {color: #66cc66;}
.code .sdlbasic .ln-xtra, .code .sdlbasic li.ln-xtra, .code .sdlbasic div.ln-xtra {background-color: #ffc;}
.code .sdlbasic span.xtra { display:block; }

.code .smalltalk .de1, .code .smalltalk .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .smalltalk  {font-family:monospace; font-size: 12px;}
.code .smalltalk .imp {font-weight: bold; color: red;}
.code .smalltalk li, .code .smalltalk .li1 {font-weight: normal; vertical-align:top;}
.code .smalltalk .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .smalltalk .li2 {background: #f2f2f2;}
.code .smalltalk .kw1 {color: #7f007f;}
.code .smalltalk .coMULTI {color: #007f00; font-style: italic;}
.code .smalltalk .sy0 {color: #000066; font-weight:bold;}
.code .smalltalk .st0 {color: #7f0000;}
.code .smalltalk .nu0 {color: #7f0000;}
.code .smalltalk .re0 {color: #0000ff;}
.code .smalltalk .re1 {color: #7f0000;}
.code .smalltalk .re2 {color: #7f0000;}
.code .smalltalk .re3 {color: #00007f;}
.code .smalltalk .re4 {color: #7f007f;}
.code .smalltalk .re5 {color: #00007f;}
.code .smalltalk .re6 {color: #00007f;}
.code .smalltalk .ln-xtra, .code .smalltalk li.ln-xtra, .code .smalltalk div.ln-xtra {background-color: #ffc;}
.code .smalltalk span.xtra { display:block; }

.code .smarty .de1, .code .smarty .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .smarty  {font-family:monospace; font-size: 12px;}
.code .smarty .imp {font-weight: bold; color: red;}
.code .smarty li, .code .smarty .li1 {font-weight: normal; vertical-align:top;}
.code .smarty .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .smarty .li2 {background: #f2f2f2;}
.code .smarty .kw1 {color: #0600FF;}
.code .smarty .kw2 {color: #008000;}
.code .smarty .kw3 {color: #0600FF;}
.code .smarty .kw4 {color: #804040;}
.code .smarty .kw5 {color: #008000;}
.code .smarty .kw6 {color: #6A0A0A;}
.code .smarty .kw7 {color: #D36900;}
.code .smarty .kw8 {color: #0600FF;}
.code .smarty .coMULTI {color: #008080; font-style: italic;}
.code .smarty .es0 {color: #000099; font-weight: bold;}
.code .smarty .br0 {color: #D36900;}
.code .smarty .sy0 {color: #D36900;}
.code .smarty .st0 {color: #ff0000;}
.code .smarty .nu0 {color: #cc66cc;}
.code .smarty .me1 {color: #006600;}
.code .smarty .sc1 {color: #808080; font-style: italic;}
.code .smarty .sc2 {color: #009000;}
.code .smarty .re0 {color: #00aaff;}
.code .smarty .ln-xtra, .code .smarty li.ln-xtra, .code .smarty div.ln-xtra {background-color: #ffc;}
.code .smarty span.xtra { display:block; }

.code .sql .de1, .code .sql .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .sql  {font-family:monospace; font-size: 12px;}
.code .sql .imp {font-weight: bold; color: red;}
.code .sql li, .code .sql .li1 {font-weight: normal; vertical-align:top;}
.code .sql .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .sql .li2 {background: #f2f2f2;}
.code .sql .kw1 {color: #993333; font-weight: bold;}
.code .sql .co1 {color: #808080; font-style: italic;}
.code .sql .co2 {color: #808080; font-style: italic;}
.code .sql .coMULTI {color: #808080; font-style: italic;}
.code .sql .es0 {color: #000099; font-weight: bold;}
.code .sql .br0 {color: #66cc66;}
.code .sql .sy0 {color: #66cc66;}
.code .sql .st0 {color: #ff0000;}
.code .sql .nu0 {color: #cc66cc;}
.code .sql .ln-xtra, .code .sql li.ln-xtra, .code .sql div.ln-xtra {background-color: #ffc;}
.code .sql span.xtra { display:block; }

.code .tcl .de1, .code .tcl .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .tcl  {font-family:monospace; font-size: 12px;}
.code .tcl .imp {font-weight: bold; color: red;}
.code .tcl li, .code .tcl .li1 {font-weight: normal; vertical-align:top;}
.code .tcl .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .tcl .li2 {background: #f2f2f2;}
.code .tcl .kw1 {color: #ff7700;font-weight:bold;}
.code .tcl .kw2 {color: #008000;}
.code .tcl .kw3 {color: #dc143c;}
.code .tcl .co1 {color: #808080; font-style: italic;}
.code .tcl .co2 {color: #483d8b;}
.code .tcl .coMULTI {color: #808080; font-style: italic;}
.code .tcl .es0 {color: #000099; font-weight: bold;}
.code .tcl .br0 {color: black;}
.code .tcl .sy0 {color: #66cc66;}
.code .tcl .st0 {color: #483d8b;}
.code .tcl .nu0 {color: #ff4500;}
.code .tcl .me1 {color: black;}
.code .tcl .re0 {color: #ff3333;}
.code .tcl .ln-xtra, .code .tcl li.ln-xtra, .code .tcl div.ln-xtra {background-color: #ffc;}
.code .tcl span.xtra { display:block; }

.code .teraterm .de1, .code .teraterm .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .teraterm  {font-family:monospace; font-size: 12px;}
.code .teraterm .imp {font-weight: bold; color: red;}
.code .teraterm li, .code .teraterm .li1 {font-weight: normal; vertical-align:top;}
.code .teraterm .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .teraterm .li2 {background: #f2f2f2;}
.code .teraterm .kw1 {color: #000080; font-weight: bold!important;}
.code .teraterm .kw2 {color: #808000; font-weight: bold;}
.code .teraterm .kw3 {color: #ff0000; font-weight: bold;}
.code .teraterm .kw4 {color: #ff00ff; font-weight: bold;}
.code .teraterm .co1 {color: #008000; font-style: italic;}
.code .teraterm .br0 {color: #ff00ff; font-weight: bold;}
.code .teraterm .sy0 {color: #ff00ff; font-weight: bold;}
.code .teraterm .st0 {color: #800080;}
.code .teraterm .nu0 {color: #008080;}
.code .teraterm .re0 {color: #0000ff; font-weight: bold;}
.code .teraterm .ln-xtra, .code .teraterm li.ln-xtra, .code .teraterm div.ln-xtra {background-color: #ffc;}
.code .teraterm span.xtra { display:block; }

.code .text .de1, .code .text .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .text  {font-family:monospace; font-size: 12px;}
.code .text .imp {font-weight: bold; color: red;}
.code .text li, .code .text .li1 {font-weight: normal; vertical-align:top;}
.code .text .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .text .li2 {background: #f2f2f2;}
.code .text .ln-xtra, .code .text li.ln-xtra, .code .text div.ln-xtra {background-color: #ffc;}
.code .text span.xtra { display:block; }

.code .thinbasic .de1, .code .thinbasic .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .thinbasic  {font-family:monospace; font-size: 12px;}
.code .thinbasic .imp {font-weight: bold; color: red;}
.code .thinbasic li, .code .thinbasic .li1 {font-weight: normal; vertical-align:top;}
.code .thinbasic .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .thinbasic .li2 {background: #f2f2f2;}
.code .thinbasic .kw1 {color: #0000FF; font-weight: bold;}
.code .thinbasic .kw2 {color: #993333; font-style: italic; font-weight: bold;}
.code .thinbasic .co1 {color: #008000;}
.code .thinbasic .es0 {color: #000099;}
.code .thinbasic .br0 {color: #333333;}
.code .thinbasic .sy0 {color: #333333;}
.code .thinbasic .st0 {color: #800080;}
.code .thinbasic .nu0 {color: #CC0000;}
.code .thinbasic .me1 {color: #66cc66;}
.code .thinbasic .ln-xtra, .code .thinbasic li.ln-xtra, .code .thinbasic div.ln-xtra {background-color: #ffc;}
.code .thinbasic span.xtra { display:block; }

.code .tsql .de1, .code .tsql .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .tsql  {font-family:monospace; font-size: 12px;}
.code .tsql .imp {font-weight: bold; color: red;}
.code .tsql li, .code .tsql .li1 {font-weight: normal; vertical-align:top;}
.code .tsql .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .tsql .li2 {background: #f2f2f2;}
.code .tsql .kw1 {color: #0000FF;}
.code .tsql .kw2 {color: #FF00FF;}
.code .tsql .kw3 {color: #AF0000;}
.code .tsql .kw4 {color: #AF0000;}
.code .tsql .co1 {color: #008080;}
.code .tsql .coMULTI {color: #008080;}
.code .tsql .es0 {color: #000099; font-weight: bold;}
.code .tsql .br0 {color: #808080;}
.code .tsql .sy0 {color: #808080;}
.code .tsql .st0 {color: #FF0000;}
.code .tsql .nu0 {color: #000;}
.code .tsql .me1 {color: #202020;}
.code .tsql .me2 {color: #202020;}
.code .tsql .ln-xtra, .code .tsql li.ln-xtra, .code .tsql div.ln-xtra {background-color: #ffc;}
.code .tsql span.xtra { display:block; }

.code .typoscript .de1, .code .typoscript .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .typoscript  {font-family:monospace; font-size: 12px;}
.code .typoscript .imp {font-weight: bold; color: red;}
.code .typoscript li, .code .typoscript .li1 {font-weight: normal; vertical-align:top;}
.code .typoscript .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .typoscript .li2 {background: #f2f2f2;}
.code .typoscript .kw1 {color: #ed7d14;}
.code .typoscript .kw2 {font-weight: bold;}
.code .typoscript .kw3 {color: #990000; font-weight: bold;}
.code .typoscript .kw4 {color: #990000; font-weight: bold;}
.code .typoscript .kw5 {color: #990000; font-weight: bold;}
.code .typoscript .kw6 {color: #990000; font-weight: bold;}
.code .typoscript .kw7 {color: #990000; font-weight: bold;}
.code .typoscript .kw8 {font-weight: bold;}
.code .typoscript .kw9 {color: #990000; font-weight: bold;}
.code .typoscript .co1 {color: #aaa; font-style: italic;}
.code .typoscript .co2 {color: #aaa; font-style: italic;}
.code .typoscript .coMULTI {color: #aaa; font-style: italic;}
.code .typoscript .br0 {color: #009900;}
.code .typoscript .sy0 {color: #339933; font-weight: bold;}
.code .typoscript .sy1 {color: #009900; font-weight: bold;}
.code .typoscript .st0 {color: #ac14aa;}
.code .typoscript .nu0 {color: #cc0000;}
.code .typoscript .me1 {color: #0000e0; font-weight: bold;}
.code .typoscript .me2 {color: #0000e0; font-weight: bold;}
.code .typoscript .re0 {color: #009900;}
.code .typoscript .re1 {color: #009900; font-weight: bold;}
.code .typoscript .re2 {color: #3366CC;}
.code .typoscript .re3 {color: #000066; font-weight: bold;}
.code .typoscript .re4 {color: #ed7d14;}
.code .typoscript .re5 {color: #000066; font-weight: bold;}
.code .typoscript .re6 {color: #009900;}
.code .typoscript .re7 {color: #3366CC;}
.code .typoscript .ln-xtra, .code .typoscript li.ln-xtra, .code .typoscript div.ln-xtra {background-color: #ffc;}
.code .typoscript span.xtra { display:block; }

.code .vb .de1, .code .vb .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .vb  {font-family:monospace; font-size: 12px;}
.code .vb .imp {font-weight: bold; color: red;}
.code .vb li, .code .vb .li1 {font-weight: normal; vertical-align:top;}
.code .vb .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .vb .li2 {background: #f2f2f2;}
.code .vb .kw1 {color: #000080;}
.code .vb .co1 {color: #008000;}
.code .vb .es0 {color: #800000; font-weight: bold;}
.code .vb .st0 {color: #800000;}
.code .vb .ln-xtra, .code .vb li.ln-xtra, .code .vb div.ln-xtra {background-color: #ffc;}
.code .vb span.xtra { display:block; }

.code .vbnet .de1, .code .vbnet .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .vbnet  {font-family:monospace; font-size: 12px;}
.code .vbnet .imp {font-weight: bold; color: red;}
.code .vbnet li, .code .vbnet .li1 {font-weight: normal; vertical-align:top;}
.code .vbnet .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .vbnet .li2 {background: #f2f2f2;}
.code .vbnet .kw1 {color: #0600FF;}
.code .vbnet .kw2 {color: #FF8000;}
.code .vbnet .kw3 {color: #008000;}
.code .vbnet .kw4 {color: #FF0000;}
.code .vbnet .kw5 {color: #804040;}
.code .vbnet .kw6 {color: #0600FF;}
.code .vbnet .kw7 {color: #0600FF;}
.code .vbnet .kw8 {color: #0600FF;}
.code .vbnet .co1 {color: #008080; font-style: italic;}
.code .vbnet .coMULTI {color: #008080; font-style: italic;}
.code .vbnet .es0 {color: #008080; font-weight: bold;}
.code .vbnet .br0 {color: #000000;}
.code .vbnet .sy0 {color: #008000;}
.code .vbnet .st0 {color: #808080;}
.code .vbnet .nu0 {color: #FF0000;}
.code .vbnet .me1 {color: #0000FF;}
.code .vbnet .ln-xtra, .code .vbnet li.ln-xtra, .code .vbnet div.ln-xtra {background-color: #ffc;}
.code .vbnet span.xtra { display:block; }

.code .verilog .de1, .code .verilog .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .verilog  {font-family:monospace; font-size: 12px;}
.code .verilog .imp {font-weight: bold; color: red;}
.code .verilog li, .code .verilog .li1 {font-weight: normal; vertical-align:top;}
.code .verilog .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .verilog .li2 {background: #f2f2f2;}
.code .verilog .kw1 {color: #A52A2A; font-weight: bold;}
.code .verilog .kw2 {color: #9932CC;}
.code .verilog .kw3 {color: #008800;}
.code .verilog .co1 {color: #00008B; font-style: italic;}
.code .verilog .coMULTI {color: #00008B; font-style: italic;}
.code .verilog .es0 {color: #9F79EE}
.code .verilog .br0 {color: #9F79EE;}
.code .verilog .sy0 {color: #5D478B;}
.code .verilog .st0 {color: #FF00FF;}
.code .verilog .nu0 {color: #ff0055;}
.code .verilog .me1 {color: #202020;}
.code .verilog .me2 {color: #202020;}
.code .verilog .re0 {color: #ff0055;}
.code .verilog .re1 {color: #ff0055;}
.code .verilog .ln-xtra, .code .verilog li.ln-xtra, .code .verilog div.ln-xtra {background-color: #ffc;}
.code .verilog span.xtra { display:block; }

.code .vhdl .de1, .code .vhdl .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .vhdl  {font-family:monospace; font-size: 12px;}
.code .vhdl .imp {font-weight: bold; color: red;}
.code .vhdl li, .code .vhdl .li1 {font-weight: normal; vertical-align:top;}
.code .vhdl .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .vhdl .li2 {background: #f2f2f2;}
.code .vhdl .kw1 {color: #000080; font-weight: bold;}
.code .vhdl .kw2 {color: #0000ff;}
.code .vhdl .co1 {color: #008000; font-style: italic;}
.code .vhdl .coMULTI {color: #008000; font-style: italic;}
.code .vhdl .es0 {color: #000099; font-weight: bold;}
.code .vhdl .br0 {color: #000066;}
.code .vhdl .sy0 {color: #000066;}
.code .vhdl .st0 {color: #7f007f;}
.code .vhdl .nu0 {color: #ff0000;}
.code .vhdl .re0 {color: #ff0000;}
.code .vhdl .re1 {color: #ff0000;}
.code .vhdl .ln-xtra, .code .vhdl li.ln-xtra, .code .vhdl div.ln-xtra {background-color: #ffc;}
.code .vhdl span.xtra { display:block; }

.code .vim .de1, .code .vim .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .vim  {font-family:monospace; font-size: 12px;}
.code .vim .imp {font-weight: bold; color: red;}
.code .vim li, .code .vim .li1 {font-weight: normal; vertical-align:top;}
.code .vim .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .vim .li2 {background: #f2f2f2;}
.code .vim .kw1 {color: #804040;}
.code .vim .kw2 {color: #668080;}
.code .vim .kw3 {color: #25BB4D;}
.code .vim .co1 {color: #adadad; font-style: italic;}
.code .vim .br0 {color: #000000;}
.code .vim .sy0 {color: #000000;}
.code .vim .st0 {color: #C5A22D;}
.code .vim .nu0 {color: #000000; font-weight:bold;}
.code .vim .me0 {color: #000000;}
.code .vim .ln-xtra, .code .vim li.ln-xtra, .code .vim div.ln-xtra {background-color: #ffc;}
.code .vim span.xtra { display:block; }

.code .visualfoxpro .de1, .code .visualfoxpro .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .visualfoxpro  {font-family:monospace; font-size: 12px;}
.code .visualfoxpro .imp {font-weight: bold; color: red;}
.code .visualfoxpro li, .code .visualfoxpro .li1 {font-weight: normal; vertical-align:top;}
.code .visualfoxpro .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .visualfoxpro .li2 {background: #f2f2f2;}
.code .visualfoxpro .kw1 {color: blue;}
.code .visualfoxpro .kw2 {color: blue;}
.code .visualfoxpro .kw3 {color: blue;}
.code .visualfoxpro .kw4 {color: blue;}
.code .visualfoxpro .co1 {color: green; font-style: italic;}
.code .visualfoxpro .co2 {color: green; font-style: italic;}
.code .visualfoxpro .coMULTI {color: #808080; font-style: italic;}
.code .visualfoxpro .es0 {color: #000099; font-weight: bold;}
.code .visualfoxpro .br0 {color: blue;}
.code .visualfoxpro .sy0 {color: blue;}
.code .visualfoxpro .st0 {color: #ff0000;}
.code .visualfoxpro .nu0 {color: #cc66cc;}
.code .visualfoxpro .me1 {color: #006600;}
.code .visualfoxpro .ln-xtra, .code .visualfoxpro li.ln-xtra, .code .visualfoxpro div.ln-xtra {background-color: #ffc;}
.code .visualfoxpro span.xtra { display:block; }

.code .visualprolog .de1, .code .visualprolog .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .visualprolog  {font-family:monospace; font-size: 12px;}
.code .visualprolog .imp {font-weight: bold; color: red;}
.code .visualprolog li, .code .visualprolog .li1 {font-weight: normal; vertical-align:top;}
.code .visualprolog .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .visualprolog .li2 {background: #f2f2f2;}
.code .visualprolog .kw1 {color: #808000;}
.code .visualprolog .kw2 {color: #333399;}
.code .visualprolog .kw3 {color: #800080;}
.code .visualprolog .co1 {color: #AA77BD}
.code .visualprolog .coMULTI {color: #AA77BD}
.code .visualprolog .es0 {color: #008080;}
.code .visualprolog .br0 {color: #000000;}
.code .visualprolog .sy0 {color: #000000;}
.code .visualprolog .st0 {color: #00B7B7;}
.code .visualprolog .nu0 {color: #0000FF;}
.code .visualprolog .re0 {color: #008000;}
.code .visualprolog .re1 {color: #808000;}
.code .visualprolog .re2 {color: #333399;}
.code .visualprolog .ln-xtra, .code .visualprolog li.ln-xtra, .code .visualprolog div.ln-xtra {background-color: #ffc;}
.code .visualprolog span.xtra { display:block; }

.code .whitespace .de1, .code .whitespace .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .whitespace  {font-family:monospace; font-size: 12px;}
.code .whitespace .imp {font-weight: bold; color: red;}
.code .whitespace li, .code .whitespace .li1 {font-weight: normal; vertical-align:top;}
.code .whitespace .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .whitespace .li2 {background: #f2f2f2;}
.code .whitespace .co3 {color: #666666; font-style: italic;}
.code .whitespace .br0 {color: #66cc66;}
.code .whitespace .st0 {color: #ff0000;}
.code .whitespace .re2 {background-color: #FF9999;}
.code .whitespace .re3 {background-color: #9999FF;}
.code .whitespace .ln-xtra, .code .whitespace li.ln-xtra, .code .whitespace div.ln-xtra {background-color: #ffc;}
.code .whitespace span.xtra { display:block; }

.code .whois .de1, .code .whois .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .whois  {font-family:monospace; font-size: 12px;}
.code .whois .imp {font-weight: bold; color: red;}
.code .whois li, .code .whois .li1 {font-weight: normal; vertical-align:top;}
.code .whois .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .whois .li2 {background: #f2f2f2;}
.code .whois .kw1 {color: #0000FF; font-weight: bold;}
.code .whois .kw2 {color: #000080; font-weight: bold;}
.code .whois .kw3 {color: #990000; font-weight: bold;}
.code .whois .co1 {color: #666666; font-style: italic;}
.code .whois .co2 {color: #666666; font-style: italic;}
.code .whois .co3 {color: #404080;}
.code .whois .co4 {color: #408040;}
.code .whois .co5 {color: #408040;}
.code .whois .co6 {color: #408040;}
.code .whois .co7 {color: #804040;}
.code .whois .co8 {color: #804040;}
.code .whois .coMULTI {color: #666666; font-style: italic;}
.code .whois .es0 {color: #000099; font-weight: bold;}
.code .whois .es_h {color: #000099; font-weight: bold;}
.code .whois .br0 {color: #009900;}
.code .whois .sy0 {color: #0000FF;}
.code .whois .nu0 {color: #000080;}
.code .whois .re0 {color: #000088;}
.code .whois .ln-xtra, .code .whois li.ln-xtra, .code .whois div.ln-xtra {background-color: #ffc;}
.code .whois span.xtra { display:block; }

.code .winbatch .de1, .code .winbatch .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .winbatch  {font-family:monospace; font-size: 12px;}
.code .winbatch .imp {font-weight: bold; color: red;}
.code .winbatch li, .code .winbatch .li1 {font-weight: normal; vertical-align:top;}
.code .winbatch .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .winbatch .li2 {background: #f2f2f2;}
.code .winbatch .kw1 {color: #800080;}
.code .winbatch .kw2 {color: #0080FF; font-weight: bold;}
.code .winbatch .kw3 {color: #0000FF;}
.code .winbatch .kw4 {color: #FF00FF;}
.code .winbatch .kw5 {color: #008000;}
.code .winbatch .co1 {color: #008000; font-style: italic;}
.code .winbatch .co2 {color: #FF1010; font-weight: bold;}
.code .winbatch .coMULTI {color: #808080; font-style: italic;}
.code .winbatch .es0 {color: #000099; font-weight: bold;}
.code .winbatch .br0 {color: #66cc66;}
.code .winbatch .sy0 {color: #66cc66;}
.code .winbatch .st0 {color: #ff0000;}
.code .winbatch .nu0 {color: #cc66cc;}
.code .winbatch .me0 {color: #006600;}
.code .winbatch .re0 {color: #0000ff;}
.code .winbatch .ln-xtra, .code .winbatch li.ln-xtra, .code .winbatch div.ln-xtra {background-color: #ffc;}
.code .winbatch span.xtra { display:block; }

.code .xml .de1, .code .xml .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .xml  {font-family:monospace; font-size: 12px;}
.code .xml .imp {font-weight: bold; color: red;}
.code .xml li, .code .xml .li1 {font-weight: normal; vertical-align:top;}
.code .xml .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .xml .li2 {background: #f2f2f2;}
.code .xml .es0 {color: #000099; font-weight: bold;}
.code .xml .br0 {color: #66cc66;}
.code .xml .sy0 {color: #66cc66;}
.code .xml .st0 {color: #ff0000;}
.code .xml .nu0 {color: #cc66cc;}
.code .xml .sc-1 {color: #808080; font-style: italic;}
.code .xml .sc0 {color: #00bbdd;}
.code .xml .sc1 {color: #ddbb00;}
.code .xml .sc2 {color: #339933;}
.code .xml .sc3 {color: #009900;}
.code .xml .re0 {color: #000066;}
.code .xml .re1 {color: #000000; font-weight: bold;}
.code .xml .re2 {color: #000000; font-weight: bold;}
.code .xml .ln-xtra, .code .xml li.ln-xtra, .code .xml div.ln-xtra {background-color: #ffc;}
.code .xml span.xtra { display:block; }

.code .xorg_conf .de1, .code .xorg_conf .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .xorg_conf  {font-family:monospace; font-size: 12px;}
.code .xorg_conf .imp {font-weight: bold; color: red;}
.code .xorg_conf li, .code .xorg_conf .li1 {font-weight: normal; vertical-align:top;}
.code .xorg_conf .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .xorg_conf .li2 {background: #f2f2f2;}
.code .xorg_conf .kw1 {color: #b1b100;}
.code .xorg_conf .kw2 {color: #990000;}
.code .xorg_conf .kw3 {color: #550000;}
.code .xorg_conf .co1 {color: #adadad; font-style: italic;}
.code .xorg_conf .st0 {color: #0000ff;}
.code .xorg_conf .nu0 {color: #cc66cc;}
.code .xorg_conf .ln-xtra, .code .xorg_conf li.ln-xtra, .code .xorg_conf div.ln-xtra {background-color: #ffc;}
.code .xorg_conf span.xtra { display:block; }

.code .xpp .de1, .code .xpp .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .xpp  {font-family:monospace; font-size: 12px;}
.code .xpp .imp {font-weight: bold; color: red;}
.code .xpp li, .code .xpp .li1 {font-weight: normal; vertical-align:top;}
.code .xpp .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .xpp .li2 {background: #f2f2f2;}
.code .xpp .kw1 {color: #0000ff;}
.code .xpp .kw2 {color: #0000ff;}
.code .xpp .kw3 {color: #0000ff;}
.code .xpp .kw4 {color: #0000ff;}
.code .xpp .co1 {color: #007f00;}
.code .xpp .coMULTI {color: #007f00; font-style: italic;}
.code .xpp .es0 {color: #000000;}
.code .xpp .br0 {color: #000000;}
.code .xpp .sy0 {color: #00007f;}
.code .xpp .st0 {color: #ff0000;}
.code .xpp .nu0 {color: #000000;}
.code .xpp .me1 {color: #000000;}
.code .xpp .me2 {color: #000000;}
.code .xpp .ln-xtra, .code .xpp li.ln-xtra, .code .xpp div.ln-xtra {background-color: #ffc;}
.code .xpp span.xtra { display:block; }

.code .z80 .de1, .code .z80 .de2 {/*font: normal normal 1em/1.2em monospace;*/ margin:0; padding-top:0; background:none; vertical-align:top; line-height: 150%;}
.code .z80  {font-family:monospace; font-size: 12px;}
.code .z80 .imp {font-weight: bold; color: red;}
.code .z80 li, .code .z80 .li1 {font-weight: normal; vertical-align:top;}
.code .z80 .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;border-right:2px solid #e0e8ef;font-weight: bold;color: #333;}
.code .z80 .li2 {background: #f2f2f2;}
.code .z80 .kw1 {color: #0000ff; font-weight:bold;}
.code .z80 .kw2 {color: #0000ff;}
.code .z80 .kw3 {color: #46aa03; font-weight:bold;}
.code .z80 .co1 {color: #adadad; font-style: italic;}
.code .z80 .es0 {color: #000099; font-weight: bold;}
.code .z80 .br0 {color: #0000ff;}
.code .z80 .sy0 {color: #008000;}
.code .z80 .st0 {color: #7f007f;}
.code .z80 .nu0 {color: #dd22dd;}
.code .z80 .re0 {color: #22bbff;}
.code .z80 .re1 {color: #22bbff;}
.code .z80 .re2 {color: #993333;}
.code .z80 .ln-xtra, .code .z80 li.ln-xtra, .code .z80 div.ln-xtra {background-color: #ffc;}
.code .z80 span.xtra { display:block; }
";

// Generate Multi Array 
$new_ary= array();
$ary= explode("\n", $string);
foreach ($ary as $val)
{
	if ( !empty($val) )
	{
		preg_match("#\.code\s\.([0-9a-z_-]+)\s(.*)#", $val, $matches);
		$new_ary[$matches[1]][]= $matches[0];
	}
}

// Save Array to file
$path= 'css/';
foreach ($new_ary as $key => $val)
{
	$file = $key .'.css';
	file_put_contents($path . $file, implode("\n", $val) );
}
