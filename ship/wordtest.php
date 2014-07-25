<?php

if (!isset($_REQUEST['submitted'])){
include('header.php');
}

$title1 = "FEND-40.05.00.00-012-A-LIS";
if (isset($_REQUEST["title1"])){
	$title1 = $_REQUEST["title1"];
	$docname = $title1 . '.doc';
}
$heading1 = "EU-FEIC Front End";
if (isset($_REQUEST["heading1"])){
	$heading1 = $_REQUEST["heading1"];
}
$heading2 = "Electronics Chassis #1 and #2";
if (isset($_REQUEST["heading2"])){
	$heading2 = $_REQUEST["heading2"];
}

if (!isset($_REQUEST['submitted'])){
	include('testwordform.php');
	
}



if (isset($_REQUEST['submitted'])){
$date = date(Y . "-" . d . "-" . m);
	
header("Content-type: application/msword"); 
header("Content-Disposition: attachment; filename=$docname"); 
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office" 
xmlns:w="urn:schemas-microsoft-com:office:word" 
xmlns="http://www.w3.org/TR/REC-html40"> 
<head> 
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252"> 
    <meta name=ProgId content=Word.Document> 
    <meta name=Generator content="Microsoft Word 9"> 
    <meta name=Originator content="Microsoft Word 9"> 
    <title></title> 
</head> 
'; 
echo "<!--[if gte mso 9]> 
<xml> 
    <o:DocumentProperties> 
    <o:Author>Author</o:Author> 
    <o:LastAuthor>LastAuthor</o:LastAuthor> 
    <o:Revision>Revisions</o:Revision> 
    <o:TotalTime>TotalTime</o:TotalTime> 
    <o:Created>CreateDate</o:Created> 
    <o:LastSaved>LastSaveDate</o:LastSaved> 
    <o:Pages>Pages</o:Pages> 
    <o:Company>Company</o:Company> 
    <o:Lines>Lines</o:Lines> 
    <o:Paragraphs>Paragraphs</o:Paragraphs> 
    <o:Version>Version</o:Version> 
    </o:DocumentProperties> 
</xml>
";
?>


<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:st1="urn:schemas-microsoft-com:office:smarttags"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 11">
<meta name=Originator content="Microsoft Word 11">
<link rel=File-List
href="filelist.php">
<link rel=Edit-Time-Data
href="files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>FEIC - NA to EA Transfer List of Front End Production and Test Equipment</title>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceName"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="PlaceType"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="City"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="place"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="address"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="Street"/>
<o:SmartTagType namespaceuri="urn:schemas-microsoft-com:office:smarttags"
 name="stockticker"/>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Subject>List of FE equipment to be transfered to East Asia.</o:Subject>
  <o:Author>A. Perfetto</o:Author>
  <o:LastAuthor>Josh Crabtree</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>8483</o:TotalTime>
  <o:LastPrinted>2008-04-29T15:47:00Z</o:LastPrinted>
  <o:Created>2008-12-01T15:56:00Z</o:Created>
  <o:LastSaved>2008-12-01T15:56:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>2440</o:Words>
  <o:Characters>13908</o:Characters>
  <o:Category>ALMA</o:Category>
  <o:Manager>A. Perfetto</o:Manager>
  <o:Company>NRAO</o:Company>
  <o:Lines>115</o:Lines>
  <o:Paragraphs>32</o:Paragraphs>
  <o:CharactersWithSpaces>16316</o:CharactersWithSpaces>
  <o:Version>11.9999</o:Version>
 </o:DocumentProperties>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:DrawingGridHorizontalSpacing>2.85 pt</w:DrawingGridHorizontalSpacing>
  <w:DisplayVerticalDrawingGridEvery>2</w:DisplayVerticalDrawingGridEvery>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:Compatibility>
   <w:SelectEntireFieldWithStartOrEnd/>
   <w:UseWord2002TableStyleRules/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
 </w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" LatentStyleCount="156">
 </w:LatentStyles>
</xml><![endif]--><!--[if !mso]><object
 classid="clsid:38481807-CA0E-42D2-BF39-B33AF135CC4D" id=ieooui></object>
<style>
st1\:*{behavior:url(#ieooui) }
</style>
<![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:"MS Mincho";
	panose-1:2 2 6 9 4 2 5 8 3 4;
	mso-font-alt:"Arial Unicode MS";
	mso-font-charset:128;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:fixed;
	mso-font-signature:1 134676480 16 0 131072 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:1627421319 -2147483648 8 0 66047 0;}
@font-face
	{font-family:"\@MS Mincho";
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-charset:128;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:fixed;
	mso-font-signature:1 134676480 16 0 131072 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
h1
	{mso-style-update:auto;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:-.5in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	text-indent:0in;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	mso-list:l0 level1 lfo1;
	tab-stops:list .25in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-font-kerning:0pt;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
h2
	{mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.4in;
	margin-bottom:.0001pt;
	text-indent:-.4in;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	mso-list:l0 level2 lfo1;
	tab-stops:list .4in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	font-weight:bold;}
h3
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	text-indent:-.5in;
	mso-pagination:widow-orphan;
	mso-outline-level:3;
	mso-list:l0 level3 lfo1;
	tab-stops:list .5in;
	font-size:12.0pt;
	mso-bidi-font-size:13.5pt;
	font-family:"Times New Roman";
	font-weight:bold;}
h4
	{mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.6in;
	margin-bottom:.0001pt;
	text-indent:-.6in;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	mso-list:l0 level4 lfo1;
	tab-stops:list .6in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	font-weight:bold;}
h5
	{mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.7in;
	margin-bottom:.0001pt;
	text-indent:-.7in;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:5;
	mso-list:l0 level5 lfo1;
	tab-stops:list .7in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;}
h6
	{mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.8in;
	margin-bottom:.0001pt;
	text-indent:-.8in;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:6;
	mso-list:l0 level6 lfo1;
	tab-stops:list .8in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.9in;
	margin-bottom:.0001pt;
	text-indent:-.9in;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:7;
	mso-list:l0 level7 lfo1;
	tab-stops:list .9in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.MsoHeading8, li.MsoHeading8, div.MsoHeading8
	{mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:1.0in;
	margin-bottom:.0001pt;
	text-indent:-1.0in;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:8;
	mso-list:l0 level8 lfo1;
	tab-stops:list 1.0in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:Arial;
	font-weight:bold;}
p.MsoHeading9, li.MsoHeading9, div.MsoHeading9
	{mso-style-next:Normal;
	mso-margin-top-alt:auto;
	margin-right:.5in;
	mso-margin-bottom-alt:auto;
	margin-left:1.1in;
	text-align:center;
	text-indent:-1.1in;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:9;
	mso-list:l0 level9 lfo1;
	tab-stops:list 1.1in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc1, li.MsoToc1, div.MsoToc1
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	text-transform:uppercase;}
p.MsoToc2, li.MsoToc2, div.MsoToc2
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:10.0pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc3, li.MsoToc3, div.MsoToc3
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:20.0pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc4, li.MsoToc4, div.MsoToc4
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:30.0pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc5, li.MsoToc5, div.MsoToc5
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:40.0pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc6, li.MsoToc6, div.MsoToc6
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:50.0pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc7, li.MsoToc7, div.MsoToc7
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:60.0pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc8, li.MsoToc8, div.MsoToc8
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:70.0pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoToc9, li.MsoToc9, div.MsoToc9
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:80.0pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoCommentText, li.MsoCommentText, div.MsoCommentText
	{mso-style-noshow:yes;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 3.0in right 6.0in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 3.0in right 6.0in;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoCaption, li.MsoCaption, div.MsoCaption
	{mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:6.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
p.MsoTof, li.MsoTof, div.MsoTof
	{mso-style-update:auto;
	mso-style-noshow:yes;
	mso-style-next:Normal;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:24.0pt;
	margin-bottom:.0001pt;
	text-indent:-24.0pt;
	mso-pagination:widow-orphan;
	tab-stops:right dotted 431.5pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	text-transform:uppercase;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-margin-top-alt:auto;
	margin-right:.5in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
	{margin:0in;
	margin-bottom:.0001pt;
	text-indent:.5in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoSubtitle, li.MsoSubtitle, div.MsoSubtitle
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:0in;
	text-align:center;
	mso-pagination:widow-orphan;
	mso-outline-level:2;
	font-size:12.0pt;
	font-family:Arial;
	mso-fareast-font-family:"Times New Roman";}
p.MsoDate, li.MsoDate, div.MsoDate
	{mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBodyTextIndent2, li.MsoBodyTextIndent2, div.MsoBodyTextIndent2
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBodyTextIndent3, li.MsoBodyTextIndent3, div.MsoBodyTextIndent3
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:1.25in;
	margin-bottom:.0001pt;
	text-indent:-.75in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
p.MsoBlockText, li.MsoBlockText, div.MsoBlockText
	{mso-margin-top-alt:auto;
	margin-right:.5in;
	mso-margin-bottom-alt:auto;
	margin-left:.5in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;
	text-underline:single;}
p.MsoDocumentMap, li.MsoDocumentMap, div.MsoDocumentMap
	{mso-style-noshow:yes;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	background:navy;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:Tahoma;
	mso-fareast-font-family:"Times New Roman";}
p
	{mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";}
pre
	{margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Courier New";}
p.DefinitionTerm, li.DefinitionTerm, div.DefinitionTerm
	{mso-style-name:"Definition Term";
	mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:none;
	font-size:12.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	layout-grid-mode:line;}
p.author, li.author, div.author
	{mso-style-name:author;
	mso-style-parent:Subtitle;
	mso-style-next:institute;
	margin-top:0in;
	margin-right:59.25pt;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	text-align:center;
	mso-line-height-alt:0pt;
	mso-pagination:widow-orphan lines-together;
	page-break-after:avoid;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	letter-spacing:-.7pt;
	mso-font-kerning:14.0pt;}
p.institute, li.institute, div.institute
	{mso-style-name:institute;
	mso-style-parent:author;
	mso-style-next:author;
	margin-top:0in;
	margin-right:59.05pt;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-line-height-alt:0pt;
	mso-pagination:widow-orphan lines-together;
	page-break-after:avoid;
	font-size:14.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	letter-spacing:-.7pt;
	mso-font-kerning:14.0pt;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.documenttype, li.documenttype, div.documenttype
	{mso-style-name:"document type";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	font-style:italic;
	mso-bidi-font-style:normal;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("http://www.cv.nrao.edu/~jcrabtre/header.htm") fs;
	mso-footnote-continuation-separator:url("http://www.cv.nrao.edu/~jcrabtre/header.htm") fcs;
	mso-endnote-separator:url("http://www.cv.nrao.edu/~jcrabtre/header.htm") es;
	mso-endnote-continuation-separator:url("http://www.cv.nrao.edu/~jcrabtre/header.htm") ecs;}
@page Section1
	{size:8.5in 11.0in;
	margin:1.0in 1.25in 1.0in 1.25in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-header:url("http://www.cv.nrao.edu/~jcrabtre/header.htm") h1;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
@page Section2
	{size:8.5in 11.0in;
	margin:1.0in 1.25in 1.0in 1.25in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-header:url("http://www.cv.nrao.edu/~jcrabtre/header.htm") h2;
	mso-paper-source:0;}
div.Section2
	{page:Section2;}
@page Section3
	{size:11.0in 8.5in;
	mso-page-orientation:landscape;
	margin:1.25in 1.0in 1.25in 1.0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-header:url("http://www.cv.nrao.edu/~jcrabtre/header.htm") h2;
	mso-paper-source:0;}
div.Section3
	{page:Section3;}
@page Section4
	{size:11.0in 8.5in;
	mso-page-orientation:landscape;
	margin:1.25in 1.0in 1.25in 1.0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-header:url("http://www.cv.nrao.edu/~jcrabtre/header.htm") h2;
	mso-paper-source:0;}
div.Section4
	{page:Section4;}
 /* List Definitions */
 @list l0
	{mso-list-id:787042952;
	mso-list-template-ids:-942512942;}
@list l0:level1
	{mso-level-style-link:"Heading 1";
	mso-level-text:%1;
	mso-level-tab-stop:.25in;
	mso-level-number-position:left;
	margin-left:0in;
	text-indent:0in;}
@list l0:level2
	{mso-level-style-link:"Heading 2";
	mso-level-text:"%1\.%2";
	mso-level-tab-stop:.4in;
	mso-level-number-position:left;
	margin-left:.4in;
	text-indent:-.4in;}
@list l0:level3
	{mso-level-style-link:"Heading 3";
	mso-level-text:"%1\.%2\.%3";
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	margin-left:.5in;
	text-indent:-.5in;}
@list l0:level4
	{mso-level-style-link:"Heading 4";
	mso-level-text:"%3\.%1\.%2\.%4";
	mso-level-tab-stop:.6in;
	mso-level-number-position:left;
	margin-left:.6in;
	text-indent:-.6in;}
@list l0:level5
	{mso-level-style-link:"Heading 5";
	mso-level-text:"%1\.%2\.%3\.%4\.%5";
	mso-level-tab-stop:.7in;
	mso-level-number-position:left;
	margin-left:.7in;
	text-indent:-.7in;}
@list l0:level6
	{mso-level-style-link:"Heading 6";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6";
	mso-level-tab-stop:.8in;
	mso-level-number-position:left;
	margin-left:.8in;
	text-indent:-.8in;}
@list l0:level7
	{mso-level-style-link:"Heading 7";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7";
	mso-level-tab-stop:.9in;
	mso-level-number-position:left;
	margin-left:.9in;
	text-indent:-.9in;}
@list l0:level8
	{mso-level-style-link:"Heading 8";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8";
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	margin-left:1.0in;
	text-indent:-1.0in;}
@list l0:level9
	{mso-level-style-link:"Heading 9";
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9";
	mso-level-tab-stop:1.1in;
	mso-level-number-position:left;
	margin-left:1.1in;
	text-indent:-1.1in;}
@list l1
	{mso-list-id:1581213510;
	mso-list-type:hybrid;
	mso-list-template-ids:1218628832 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l1:level1
	{mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2
	{mso-list-id:1628849517;
	mso-list-type:hybrid;
	mso-list-template-ids:1675247900 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l3
	{mso-list-id:1698002982;
	mso-list-type:hybrid;
	mso-list-template-ids:1061845200 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-ansi-language:#0400;
	mso-fareast-language:#0400;
	mso-bidi-language:#0400;}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-ansi-language:#0400;
	mso-fareast-language:#0400;
	mso-bidi-language:#0400;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="3074"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US link=blue vlink=purple style='tab-interval:.5in'>

<div class=Section1>

<p class=MsoNormal><b><span style='mso-spacerun:yes'>�</span><o:p></o:p></b></p>

<p class=MsoNormal><b><o:p>&nbsp;</o:p></b></p>

<p class=MsoNormal><b><o:p>&nbsp;</o:p></b></p>

<p class=MsoNormal><b><o:p>&nbsp;</o:p></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:18.0pt;'><?php echo($heading1) ?><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:18.0pt;'><?php echo($heading2) ?>
</span></b><b><span style='font-size:18.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><o:p>&nbsp;</o:p></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:18.0pt'>Shipping Inspection Checklist<o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:14.0pt;'><?php echo($title1) ?><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal align=center style='text-align:center'>Version: A</p>

<p class=MsoNormal align=center style='text-align:center'>Status:<span
style='mso-spacerun:yes'>� </span>Released</p>

<p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'><span style=''><?php echo($date); ?></span></p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'><b style='mso-bidi-font-weight:normal'><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>

</div>

<b style='mso-bidi-font-weight:normal'><span style='font-size:14.0pt;
mso-bidi-font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
mso-break-type:section-break'>
</span></b>

<div class=Section2>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:26.1pt'>
  <td width=527 valign=top style='width:395.45pt;padding:0in 5.4pt 0in 5.4pt;
  height:26.1pt'>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:205.65pt'>
    <td width=527 colspan=2 valign=top style='width:395.45pt;padding:0in 5.4pt 0in 5.4pt;
    height:205.65pt'>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
     style='border-collapse:collapse;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:26.1pt'>
      <td width=513 valign=top style='width:384.65pt;padding:0in 5.4pt 0in 5.4pt;
      height:26.1pt'>
      <p class=MsoNormal style='tab-stops:.5in;mso-layout-grid-align:none;
      text-autospace:none'><b><span style='font-size:10.0pt;mso-bidi-font-size:
      12.0pt'><o:p>&nbsp;</o:p></span></b></p>
      <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
       width=498 style='width:373.35pt;border-collapse:collapse;border:none;
       mso-border-alt:solid windowtext .5pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;
       mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
        <td width=246 valign=top style='width:184.25pt;border:solid windowtext 1.0pt;
        mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>Prepared
        By:<o:p></o:p></span></b></p>
        </td>
        <td width=156 valign=top style='width:117.0pt;border:solid windowtext 1.0pt;
        border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
        solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>Organization<o:p></o:p></span></b></p>
        </td>
        <td width=96 valign=top style='width:72.1pt;border:solid windowtext 1.0pt;
        border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
        solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>Date<o:p></o:p></span></b></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:1;height:31.9pt'>
        <td width=246 style='width:184.25pt;border:solid windowtext 1.0pt;
        border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
        solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:31.9pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'>A. Perfetto<o:p></o:p></span></p>
        </td>
        <td width=156 style='width:117.0pt;border-top:none;border-left:none;
        border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
        height:31.9pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>NRAO<o:p></o:p></span></p>
        </td>
        <td width=96 style='width:72.1pt;border-top:none;border-left:none;
        border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
        height:31.9pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        '><?php echo($date); ?></span><span
        style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:2;height:14.35pt'>
        <td width=246 valign=top style='width:184.25pt;border:solid windowtext 1.0pt;
        border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
        solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.35pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>FE
        Management Approval:<o:p></o:p></span></b></p>
        </td>
        <td width=156 valign=top style='width:117.0pt;border-top:none;
        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:
        solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
        mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
        padding:0in 5.4pt 0in 5.4pt;height:14.35pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>Organization<o:p></o:p></span></b></p>
        </td>
        <td width=96 valign=top style='width:72.1pt;border-top:none;border-left:
        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
        height:14.35pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>Date<o:p></o:p></span></b></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:3;height:14.35pt'>
        <td width=246 valign=top style='width:184.25pt;border:solid windowtext 1.0pt;
        border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
        solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.35pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'>Mark
        Harman<o:p></o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'>Ferdinand
        Patt<o:p></o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        '><o:p>&nbsp;</o:p></span></b></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'>Antonio
        Perfetto<o:p></o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        '><o:p>&nbsp;</o:p></span></b></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        '><o:p>&nbsp;</o:p></span></b></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        '><o:p>&nbsp;</o:p></span></b></p>
        </td>
        <td width=156 valign=top style='width:117.0pt;border-top:none;
        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:
        solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
        mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
        padding:0in 5.4pt 0in 5.4pt;height:14.35pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'>STFC/RAL<o:p></o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'>ESO<o:p></o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        ;mso-bidi-font-weight:bold'>NRAO<o:p></o:p></span></p>
        </td>
        <td width=96 valign=top style='width:72.1pt;border-top:none;border-left:
        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
        height:14.35pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:4;height:9.4pt'>
        <td width=246 valign=top style='width:184.25pt;border:solid windowtext 1.0pt;
        border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
        solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:9.4pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>FE
        IPT Leader Approvals:<o:p></o:p></span></b></p>
        </td>
        <td width=156 valign=top style='width:117.0pt;border-top:none;
        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:
        solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
        mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
        padding:0in 5.4pt 0in 5.4pt;height:9.4pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>Organization<o:p></o:p></span></b></p>
        </td>
        <td width=96 valign=top style='width:72.1pt;border-top:none;border-left:
        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
        height:9.4pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>Date<o:p></o:p></span></b></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:74.65pt'>
        <td width=246 valign=top style='width:184.25pt;border:solid windowtext 1.0pt;
        border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
        solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:74.65pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'>J. Webber<o:p></o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'>G.H. Tan<o:p></o:p></span></p>
        </td>
        <td width=156 valign=top style='width:117.0pt;border-top:none;
        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:
        solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
        mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
        padding:0in 5.4pt 0in 5.4pt;height:74.65pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>NRAO<o:p></o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'>ESO<o:p></o:p></span></p>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
        mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
        </td>
        <td width=96 valign=top style='width:72.1pt;border-top:none;border-left:
        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
        height:74.65pt'>
        <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:
        none'><b><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
        </td>
       </tr>
      </table>
      <p class=MsoNormal style='tab-stops:.5in;mso-layout-grid-align:none;
      text-autospace:none'><b><span style='font-size:10.0pt;mso-bidi-font-size:
      12.0pt'><o:p></o:p></span></b></p>
      </td>
     </tr>
    </table>
    <p class=MsoNormal style='tab-stops:.5in;mso-layout-grid-align:none;
    text-autospace:none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:26.1pt'>
    <td width=513 valign=top style='width:384.65pt;padding:0in 5.4pt 0in 5.4pt;
    height:26.1pt'><a name="OLE_LINK1"></a>
    <p class=MsoNormal style='tab-stops:.5in;mso-layout-grid-align:none;
    text-autospace:none'><span style='mso-bookmark:OLE_LINK1'><b><span
    style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></span></p>
    </td>
    <span style='mso-bookmark:OLE_LINK1'></span>
   </tr>
  </table>
  <span style='mso-bookmark:OLE_LINK1'></span>
  <p class=MsoNormal style='tab-stops:.5in;mso-layout-grid-align:none;
  text-autospace:none'><span style='mso-bookmark:OLE_LINK1'><span
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></span></p>
  </td>
  <span style='mso-bookmark:OLE_LINK1'></span>
 </tr>
</table>

<span style='mso-bookmark:OLE_LINK1'></span><b style='mso-bidi-font-weight:
normal'><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:
"Times New Roman";mso-fareast-font-family:"Times New Roman";mso-ansi-language:
EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always'>
</span></b>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt'>Change Record<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=600
 style='width:450.3pt;margin-left:5.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0in 5.4pt 0in 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.5pt'>
  <td width=61 valign=top style='width:45.6pt;border:solid windowtext 2.25pt;
  background:#E6E6E6;padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt'>Version<o:p></o:p></span></b></p>
  </td>
  <td width=87 valign=top style='width:65.55pt;border:solid windowtext 2.25pt;
  border-left:none;mso-border-left-alt:solid windowtext 2.25pt;background:#E6E6E6;
  padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt'>Date<o:p></o:p></span></b></p>
  </td>
  <td width=80 valign=top style='width:59.85pt;border:solid windowtext 2.25pt;
  border-left:none;mso-border-left-alt:solid windowtext 2.25pt;background:#E6E6E6;
  padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt'>Affected Section(s)<o:p></o:p></span></b></p>
  </td>
  <td width=110 valign=top style='width:82.65pt;border:solid windowtext 2.25pt;
  border-left:none;mso-border-left-alt:solid windowtext 2.25pt;background:#E6E6E6;
  padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt'>Change Request #<o:p></o:p></span></b></p>
  </td>
  <td width=262 valign=top style='width:196.65pt;border:solid windowtext 2.25pt;
  border-left:none;mso-border-left-alt:solid windowtext 2.25pt;background:#E6E6E6;
  padding:0in 5.4pt 0in 5.4pt;height:22.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt'>Reason/Initiation/Remarks<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.9pt'>
  <td width=61 valign=top style='width:45.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0in 5.4pt 0in 5.4pt;height:18.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>A1<o:p></o:p></span></p>
  </td>
  <td width=87 valign=top style='width:65.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;'>2008-04-23</span><span style='font-size:10.0pt;
  mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=80 valign=top style='width:59.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>All<o:p></o:p></span></p>
  </td>
  <td width=110 valign=top style='width:82.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.9pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>NA<o:p></o:p></span></p>
  </td>
  <td width=262 valign=top style='width:196.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.9pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>First
  draft<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:20.65pt'>
  <td width=61 valign=top style='width:45.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=87 valign=top style='width:65.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=80 valign=top style='width:59.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.65pt'>
  <p class=MsoCommentText align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=110 valign=top style='width:82.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=262 valign=top style='width:196.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.65pt'>
  <p class=MsoNormal><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:16.6pt'>
  <td width=61 valign=top style='width:45.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=87 valign=top style='width:65.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=80 valign=top style='width:59.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.6pt'>
  <p align=center style='margin:0in;margin-bottom:.0001pt;text-align:center'><span
  style='mso-bidi-font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=110 valign=top style='width:82.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=262 valign=top style='width:196.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:16.6pt'>
  <p class=MsoNormal><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:18.4pt'>
  <td width=61 valign=top style='width:45.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=87 valign=top style='width:65.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=80 valign=top style='width:59.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=110 valign=top style='width:82.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=262 valign=top style='width:196.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.4pt'>
  <p class=MsoNormal><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
</table>

<p class=MsoBodyTextIndent><o:p>&nbsp;</o:p></p>

<span style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always'>
</span>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'>Table of Contents<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoToc1 style='tab-stops:20.0pt right dotted 431.5pt'><!--[if supportFields]><span
style='mso-bidi-font-size:12.0pt;text-transform:none;mso-bidi-font-weight:bold'><span
style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'>�</span>TOC \o &quot;1-3&quot; \h \z <span
style='mso-element:field-separator'></span></span><![endif]--><span
class=MsoHyperlink><span style='mso-no-proof:yes'><a href="#_Toc197010933">1<span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
color:windowtext;text-transform:none;mso-fareast-language:JA;text-decoration:
none;text-underline:none'><span style='mso-tab-count:1'>���� </span></span>Introduction<span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'><span style='mso-tab-count:1 dotted'>.. </span></span><!--[if supportFields]><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'><span style='mso-element:field-begin'></span></span><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'> PAGEREF _Toc197010933 \h </span><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-separator'></span></span><![endif]--><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'>4</span><span style='color:windowtext;display:none;
mso-hide:screen;text-decoration:none;text-underline:none'><!--[if gte mso 9]><xml>
 <w:data>08D0C9EA79F9BACE118C8200AA004BA90B02000000080000000E0000005F0054006F0063003100390037003000310030003900330033000000</w:data>
</xml><![endif]--></span><!--[if supportFields]><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-end'></span></span><![endif]--></a></span></span><span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
text-transform:none;mso-fareast-language:JA;mso-no-proof:yes'><o:p></o:p></span></p>

<p class=MsoToc1 style='tab-stops:20.0pt right dotted 431.5pt'><span
class=MsoHyperlink><span style='mso-no-proof:yes'><a href="#_Toc197010934">2<span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
color:windowtext;text-transform:none;mso-fareast-language:JA;text-decoration:
none;text-underline:none'><span style='mso-tab-count:1'>���� </span></span>Reference
Documents<span style='color:windowtext;display:none;mso-hide:screen;text-decoration:
none;text-underline:none'><span style='mso-tab-count:1 dotted'>. </span></span><!--[if supportFields]><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'><span style='mso-element:field-begin'></span></span><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'> PAGEREF _Toc197010934 \h </span><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-separator'></span></span><![endif]--><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'>4</span><span style='color:windowtext;display:none;
mso-hide:screen;text-decoration:none;text-underline:none'><!--[if gte mso 9]><xml>
 <w:data>08D0C9EA79F9BACE118C8200AA004BA90B02000000080000000E0000005F0054006F0063003100390037003000310030003900330034000000</w:data>
</xml><![endif]--></span><!--[if supportFields]><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-end'></span></span><![endif]--></a></span></span><span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
text-transform:none;mso-fareast-language:JA;mso-no-proof:yes'><o:p></o:p></span></p>

<p class=MsoToc2 style='tab-stops:40.0pt right dotted 431.5pt'><span
class=MsoHyperlink><span style='mso-no-proof:yes'><a href="#_Toc197010935">2.1<span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
color:windowtext;mso-fareast-language:JA;text-decoration:none;text-underline:
none'><span style='mso-tab-count:1'>���� </span></span>Abbreviations and
Acronyms<span style='color:windowtext;display:none;mso-hide:screen;text-decoration:
none;text-underline:none'><span style='mso-tab-count:1 dotted'>. </span></span><!--[if supportFields]><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'><span style='mso-element:field-begin'></span></span><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'> PAGEREF _Toc197010935 \h </span><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-separator'></span></span><![endif]--><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'>5</span><span style='color:windowtext;display:none;
mso-hide:screen;text-decoration:none;text-underline:none'><!--[if gte mso 9]><xml>
 <w:data>08D0C9EA79F9BACE118C8200AA004BA90B02000000080000000E0000005F0054006F0063003100390037003000310030003900330035000000</w:data>
</xml><![endif]--></span><!--[if supportFields]><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-end'></span></span><![endif]--></a></span></span><span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
mso-fareast-language:JA;mso-no-proof:yes'><o:p></o:p></span></p>

<p class=MsoToc1 style='tab-stops:20.0pt right dotted 431.5pt'><span
class=MsoHyperlink><span style='mso-no-proof:yes'><a href="#_Toc197010936">3<span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
color:windowtext;text-transform:none;mso-fareast-language:JA;text-decoration:
none;text-underline:none'><span style='mso-tab-count:1'>���� </span></span>FE
Electronics Chassis S/N-05 Shipping List<span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-tab-count:1 dotted'>. </span></span><!--[if supportFields]><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'><span style='mso-element:field-begin'></span></span><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'> PAGEREF _Toc197010936 \h </span><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-separator'></span></span><![endif]--><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'>6</span><span style='color:windowtext;display:none;
mso-hide:screen;text-decoration:none;text-underline:none'><!--[if gte mso 9]><xml>
 <w:data>08D0C9EA79F9BACE118C8200AA004BA90B02000000080000000E0000005F0054006F0063003100390037003000310030003900330036000000</w:data>
</xml><![endif]--></span><!--[if supportFields]><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-end'></span></span><![endif]--></a></span></span><span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
text-transform:none;mso-fareast-language:JA;mso-no-proof:yes'><o:p></o:p></span></p>

<p class=MsoToc1 style='tab-stops:20.0pt right dotted 431.5pt'><span
class=MsoHyperlink><span style='mso-no-proof:yes'><a href="#_Toc197010937">4<span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
color:windowtext;text-transform:none;mso-fareast-language:JA;text-decoration:
none;text-underline:none'><span style='mso-tab-count:1'>���� </span></span>FE Electronics
Chassis S/N-06 Shipping List<span style='color:windowtext;display:none;
mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-tab-count:1 dotted'>. </span></span><!--[if supportFields]><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'><span style='mso-element:field-begin'></span></span><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'> PAGEREF _Toc197010937 \h </span><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-separator'></span></span><![endif]--><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'>15</span><span style='color:windowtext;display:none;
mso-hide:screen;text-decoration:none;text-underline:none'><!--[if gte mso 9]><xml>
 <w:data>08D0C9EA79F9BACE118C8200AA004BA90B02000000080000000E0000005F0054006F0063003100390037003000310030003900330037000000</w:data>
</xml><![endif]--></span><!--[if supportFields]><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-end'></span></span><![endif]--></a></span></span><span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
text-transform:none;mso-fareast-language:JA;mso-no-proof:yes'><o:p></o:p></span></p>

<p class=MsoToc1 style='tab-stops:20.0pt right dotted 431.5pt'><span
class=MsoHyperlink><span style='mso-no-proof:yes'><a href="#_Toc197010938">5<span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
color:windowtext;text-transform:none;mso-fareast-language:JA;text-decoration:
none;text-underline:none'><span style='mso-tab-count:1'>���� </span></span>Parts
not listed under sections 3 and 4 Shipping List<span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-tab-count:1 dotted'>. </span></span><!--[if supportFields]><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'><span style='mso-element:field-begin'></span></span><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'> PAGEREF _Toc197010938 \h </span><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-separator'></span></span><![endif]--><span
style='color:windowtext;display:none;mso-hide:screen;text-decoration:none;
text-underline:none'>23</span><span style='color:windowtext;display:none;
mso-hide:screen;text-decoration:none;text-underline:none'><!--[if gte mso 9]><xml>
 <w:data>08D0C9EA79F9BACE118C8200AA004BA90B02000000080000000E0000005F0054006F0063003100390037003000310030003900330038000000</w:data>
</xml><![endif]--></span><!--[if supportFields]><span style='color:windowtext;
display:none;mso-hide:screen;text-decoration:none;text-underline:none'><span
style='mso-element:field-end'></span></span><![endif]--></a></span></span><span
style='mso-bidi-font-size:12.0pt;mso-fareast-font-family:"MS Mincho";
text-transform:none;mso-fareast-language:JA;mso-no-proof:yes'><o:p></o:p></span></p>

<h2 style='margin-left:.5in;text-indent:0in;mso-list:none;tab-stops:.5in'><!--[if supportFields]><span
style='mso-bidi-font-size:12.0pt;font-weight:normal;mso-bidi-font-weight:bold'><span
style='mso-element:field-end'></span></span><![endif]--><span style='font-weight:
normal;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></h2>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='mso-spacerun:yes'>�</span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:10.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always'>
</span></b>

<h1 style='margin-left:0in;text-indent:0in'><a name="_Toc197010933"><![if !supportLists]><span
style='mso-list:Ignore'>1<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Introduction</a></h1>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='text-align:justify'>This document is the Shipping
Inspection Checklist for the EU
FE #1 and #2 components transferred from the NA-FEIC to the EU-FEIC. The main
assemblies are two FE Electronics Chassis (cabling included) and the support
electronics subracks.</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>NOTES:<o:p></o:p></b></p>

<p class=MsoNormal style='margin-left:.25in'><o:p>&nbsp;</o:p></p>

<ul style='margin-top:0in' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l2 level1 lfo3;
     tab-stops:list .5in'>The electronics
     plug-in modules are shipped installed on the FE chassis subracks.<o:p></o:p></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l2 level1 lfo3;
     tab-stops:list .5in'>Shipping
     packages: <o:p></o:p></li>
 <ul style='margin-top:0in' type=circle>
  <li class=MsoNormal style='text-align:justify;mso-list:l2 level2 lfo3;
      tab-stops:list 1.0in'>The
      items listed in this document are shipped packaged inside three pallet
      type wooden crates.<o:p></o:p></li>
  <li class=MsoNormal style='text-align:justify;mso-list:l2 level2 lfo3;
      tab-stops:list 1.0in'>One
      crate each for chassis SN-05 and SN-06 listed on Sections 3 and 4
      respectively. The SN-05 Chassis Frame was fitted with a battery powered
      shock recorder (section 3, item 52). <o:p></o:p></li>
  <li class=MsoNormal style='text-align:justify;mso-list:l2 level2 lfo3;
      tab-stops:list 1.0in'>Miscellaneous
      hardware listed under Section 5 is packaged inside the third crate. <o:p></o:p></li>
 </ul>
</ul>

<p class=MsoNormal style='text-align:justify'><o:p>&nbsp;</o:p></p>

<ul style='margin-top:0in' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo4;
     tab-stops:list .5in'>Both
     chassis assemblies are not complete and tested units. PAI and <st1:stockticker
     w:st="on">PAS</st1:stockticker> test procedures are undefined at this time<o:p></o:p></li>
</ul>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<h1 style='margin-left:0in;text-indent:0in'><a name="_Toc197010934"></a><a
name="_Toc6801395"><span style='mso-bookmark:_Toc197010934'><![if !supportLists]><span
style='mso-list:Ignore'>2<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Reference Documents</span></a></h1>

<h2 style='margin-left:0in;text-indent:0in;mso-list:none;tab-stops:.5in'><span
style='mso-bidi-font-size:12.0pt;font-weight:normal'><o:p>&nbsp;</o:p></span></h2>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width=613 style='width:460.1pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-table-lspace:9.0pt;margin-left:6.75pt;
 mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-anchor-vertical:paragraph;
 mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:-3.85pt;
 mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.5pt'>
  <td width=55 valign=top style='width:41.45pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#E6E6E6;padding:0in 5.4pt 0in 5.4pt;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0in;
  margin-bottom:3.0pt;margin-left:0in;text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:-3.85pt;
  mso-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:11.0pt'>No.<o:p></o:p></span></b></p>
  </td>
  <td width=306 valign=top style='width:229.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#E6E6E6;padding:0in 5.4pt 0in 5.4pt;
  height:17.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:0in;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt'>Document<span
  style='mso-spacerun:yes'>� </span>Title</span></b><span style='font-size:
  11.0pt'><o:p></o:p></span></p>
  </td>
  <td width=252 valign=top style='width:189.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#E6E6E6;padding:0in 5.4pt 0in 5.4pt;
  height:17.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  3.0pt;margin-left:1.7pt;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:11.0pt'>Reference</span></b><span
  style='font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:24.65pt'>
  <td width=55 style='width:41.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0in;margin-bottom:
  1.0pt;margin-left:0in;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>RD 01<o:p></o:p></span></b></p>
  </td>
  <td width=306 style='width:229.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><span
  style='font-size:10.0pt'>ALMA Product Tree<o:p></o:p></span></p>
  </td>
  <td width=252 style='width:189.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><span
  style='font-size:10.0pt'>ALMA-80.13.00.00-001-N-LIS<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:24.65pt'>
  <td width=55 style='width:41.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0in;margin-bottom:
  1.0pt;margin-left:0in;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>RD 02<o:p></o:p></span></b></p>
  </td>
  <td width=306 style='width:229.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:margin;
  mso-element-top:-3.85pt;mso-height-rule:exactly'><st1:place w:st="on"><st1:City
   w:st="on"><span style='font-size:10.0pt'>ALMA</span></st1:City></st1:place><span
  style='font-size:10.0pt'> Acronyms and Abbreviations<o:p></o:p></span></p>
  </td>
  <td width=252 style='width:189.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0in;margin-bottom:
  1.0pt;margin-left:1.7pt;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><span
  style='font-size:10.0pt;color:black'>ALMA-80.02.00.00-004-A-LIS<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:24.65pt'>
  <td width=55 style='width:41.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0in;margin-bottom:
  1.0pt;margin-left:0in;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=306 style='width:229.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:margin;
  mso-element-top:-3.85pt;mso-height-rule:exactly'><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=252 style='width:189.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.65pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0in;margin-bottom:
  1.0pt;margin-left:1.7pt;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-3.85pt;mso-height-rule:exactly'><span
  style='font-size:10.0pt;color:black'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-left:.4in'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='mso-spacerun:yes'>�</span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<h2><a name="_Toc197010935"></a><a name="_Toc6801397"><span style='mso-bookmark:
_Toc197010935'><![if !supportLists]><span style='mso-list:Ignore'>2.1<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Abbreviations and Acronyms</span></a></h2>

<h2 style='margin-left:0in;text-indent:0in;mso-list:none;tab-stops:.5in'><span
style='mso-bidi-font-size:12.0pt;font-weight:normal'><o:p>&nbsp;</o:p></span></h2>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=ES
style='mso-ansi-language:ES'>ALMA</span></b><span lang=ES style='mso-ansi-language:
ES'><span style='mso-tab-count:1'>����������� </span>Atacama Large Millimeter
Array<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=ES
style='mso-ansi-language:ES'>CAN</span></b><span lang=ES style='mso-ansi-language:
ES'><span style='mso-tab-count:2'>��������������� </span>Controller Area
Network<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=ES
style='mso-ansi-language:ES'>CPDS</span></b><span lang=ES style='mso-ansi-language:
ES'><span style='mso-tab-count:2'>������������� </span>Cartridge Power
Distribution System<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>EU-FEIC<span
style='mso-tab-count:1'>�������� </span></b>European � <st1:place w:st="on"><st1:PlaceName
 w:st="on">Front</st1:PlaceName> <st1:PlaceName w:st="on">End</st1:PlaceName> <st1:PlaceName
 w:st="on">Integration</st1:PlaceName> <st1:PlaceType w:st="on">Center</st1:PlaceType></st1:place></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>FE</b><span
style='mso-tab-count:2'>������������������ </span>Front End</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>FEIC</b><span
style='mso-tab-count:2'>�������������� </span><st1:place w:st="on"><st1:PlaceName
 w:st="on">Front</st1:PlaceName> <st1:PlaceName w:st="on">End</st1:PlaceName> <st1:PlaceName
 w:st="on">Integration</st1:PlaceName> <st1:PlaceType w:st="on">Center</st1:PlaceType></st1:place></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>FEMC</b><span
style='mso-tab-count:2'>������������ </span>Front End Monitor and Control</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>FESS</b><span
style='mso-tab-count:2'>�������������� </span>Front End Support Structure</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>FLOOG<span
style='mso-tab-count:1'>��������� </span></b>First Local Oscillator Offset
Generator</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>HVAC<span
style='mso-tab-count:1'> </span></b><span style='mso-tab-count:1'>����������� </span>Heating,
Ventilation and Air Conditioning</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>IF</b><span
style='mso-tab-count:2'>������������������� </span>Intermediate Frequency</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>LO</b><span
style='mso-tab-count:2'>������������������ </span>Local Oscillator</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>M&amp;C</b><span
style='mso-tab-count:2'>������������� </span>Monitor and Control</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>NA</b><span
style='mso-tab-count:2'>����������������� </span>Not Applicable</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>NRAO</b><span
style='mso-tab-count:2'>����������������������� </span>National Radio Astronomy
Observatory</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>RF<span
style='mso-tab-count:2'>������������������ </span></b>Radio Frequency</p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'>WCA</b><span
style='mso-tab-count:2'>�������������� </span>Warm Cartridge Assembly</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>A comprehensive list of abbreviations and acronyms is
available in <b style='mso-bidi-font-weight:normal'>[RD02]</b>. An acronym
search tool is available on ALMA EDM.</p>

<h2 style='margin-left:0in;text-indent:0in;mso-list:none;tab-stops:.5in'><span
style='mso-bidi-font-size:12.0pt;mso-bidi-font-weight:normal'><o:p>&nbsp;</o:p></span></h2>

<p class=MsoNormal>`</p>

</div>

<span style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
mso-break-type:section-break'>
</span>

<div class=Section3>

<h1 style='margin-left:0in;text-indent:0in'><a name="_Toc197010936"><![if !supportLists]><span style='mso-list:Ignore'>3<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>FE Electronics Chassis <u>S/N-05</u> Shipping List</a><o:p></o:p></h1>

</div>

<b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:10.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";;mso-ansi-language:
EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span></b>

<div class=Section4>

<p class=MsoNormal><span style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=836
 style='width:627.0pt;margin-left:5.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:480;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <thead>
  <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
   height:45.4pt'>
   <td width=53 valign=top style='width:39.9pt;border:solid windowtext 1.0pt;
   mso-border-alt:solid windowtext .5pt;background:#FFCC99;padding:0in 5.4pt 0in 5.4pt;
   height:45.4pt'>
   <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Item</span></b><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial'><o:p></o:p></span></b></p>
   <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
   </td>
   <td width=103 style='width:76.95pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#FFCC99;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>ALMA Product No.<o:p></o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>[RD 01]</span></b><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial'><o:p></o:p></span></b></p>
   </td>
   <td width=213 style='width:159.6pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#FFCC99;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Product Name /
   Description</span></b><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p></o:p></span></b></p>
   </td>
   <td width=144 style='width:108.3pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#FFCC99;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Manufacturer /
   Distributor<o:p></o:p></span></b></p>
   </td>
   <td width=65 style='width:48.45pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#FFCC99;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Qty</span></b><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial'><o:p></o:p></span></b></p>
   </td>
   <td width=258 style='width:193.8pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#FFCC99;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Serial Numbers<o:p></o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Notes &amp;
   Comments</span></b><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p></o:p></span></b></p>
   </td>
  </tr>
 </thead>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'>40.05.00.00<o:p></o:p></span></i></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:Arial'>FE Electronics Chassis Assembly<o:p></o:p></span></i></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'>NRAO<o:p></o:p></span></i></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'>1<o:p></o:p></span></i></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'><o:p>&nbsp;</o:p></span></i></b></p>
  <p class=MsoNormal><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:Arial'>S/N-05<o:p></o:p></span></i></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'><o:p>&nbsp;</o:p></span></i></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>2<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>40.05.01.01<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Front End
  Electronics Chassis Frame<o:p></o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>NRAO<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>Various <o:p></o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>S/N-05<o:p></o:p></span></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Frame
  fully assembled.<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Includes:<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>CPDS Rack<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>IF Switch
  Rack<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>FEMC Rack<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Cryostat
  MC Rack<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>10 �Dummy�
  WCA frames<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Chassis
  connectors bulkhead panel<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>DC Power
  Distribution Box<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Side
  Panels<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Cabling
  (see list below)<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Not
  included in this shipment:<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>LPR Module
  and associated FO cabling. <o:p></o:p></span></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>3<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'>40.05.02.01<o:p></o:p></span></i></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:Arial'>Coaxial Cabling<o:p></o:p></span></i></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=258 valign=top style='width:193.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>4<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><a name="OLE_LINK9"></a><a
  name="OLE_LINK8"><span style='mso-bookmark:OLE_LINK9'><span style='font-size:
  9.0pt;font-family:Arial'>40.05.02.01</span></span></a><span style='font-size:
  9.0pt;font-family:Arial'><o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>IF Cables
  � Cartridges to IF Switch<o:p></o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>Micro-mode <st1:place w:st="on">Co.</st1:place><o:p></o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>22<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>IF cables
  installed on the cartridges bands 3, 4, 6, 7, 8, and 9.<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>5<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>40.05.02.01</span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>IF Cables
  � IF Switch to chassis connectors bulkhead panel<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>Micro-mode <st1:place w:st="on">Co.</st1:place><o:p></o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>4<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>IF output
  cables. Installed.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>6<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>40.05.02.01</span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>FLOOG
  Distributor to Cartridges cabling<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>Koaxis<o:p></o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>6<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>FLOOG
  cables installed for the cartridges bands 3, 4, 6, 7, 8 and 9.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>7<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>40.05.02.01</span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>FLOOG
  Distributor to connectors bulkhead panel<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>Koaxis<o:p></o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>FLOOG
  signal input cable. Installed.<o:p></o:p></span></p>
  </td>
 </tr>

 <tr style='mso-yfti-irow:54;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>END<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=258 valign=top style='width:193.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>




















<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>

<h1 style='margin-left:0in;text-indent:0in'><a name="_Toc197010937"><![if !supportLists]><span style='mso-list:Ignore'>4<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>FE Electronics Chassis <u>S/N-06</u> Shipping List</a><o:p></o:p></h1>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=836
 style='width:627.0pt;margin-left:5.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:480;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <thead>
  <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
   height:45.4pt'>
   <td width=53 valign=top style='width:39.9pt;border:solid windowtext 1.0pt;
   mso-border-alt:solid windowtext .5pt;background:#CCFFFF;padding:0in 5.4pt 0in 5.4pt;
   height:45.4pt'>
   <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Item</span></b><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial'><o:p></o:p></span></b></p>
   <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
   </td>
   <td width=103 style='width:76.95pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFFF;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>ALMA Product No.<o:p></o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>[RD 01]</span></b><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial'><o:p></o:p></span></b></p>
   </td>
   <td width=213 style='width:159.6pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFFF;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Product Name /
   Description</span></b><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p></o:p></span></b></p>
   </td>
   <td width=144 style='width:108.3pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFFF;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Manufacturer /
   Distributor</span></b><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p></o:p></span></b></p>
   </td>
   <td width=65 style='width:48.45pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFFF;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Qty</span></b><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial'><o:p></o:p></span></b></p>
   </td>
   <td width=258 style='width:193.8pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFFF;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Serial Numbers<o:p></o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Notes &amp;
   Comments</span></b><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial'><o:p></o:p></span></b></p>
   </td>
  </tr>
 </thead>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'>40.05.00.00<o:p></o:p></span></i></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:Arial'>FE Electronics Chassis Assembly<o:p></o:p></span></i></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'>NRAO<o:p></o:p></span></i></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'>1<o:p></o:p></span></i></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'><o:p>&nbsp;</o:p></span></i></b></p>
  <p class=MsoNormal><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:Arial'>S/N-06<o:p></o:p></span></i></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'><o:p>&nbsp;</o:p></span></i></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>2<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>40.05.01.01<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Front End
  Electronics Chassis Frame<o:p></o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>NRAO<o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>Various <o:p></o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>S/N-06<o:p></o:p></span></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Frame
  fully assembled.<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Includes:<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>CPDS Rack<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>IF Switch
  Rack<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>FEMC Rack<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Cryostat
  MC Rack<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>10 �Dummy�
  WCA frames<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Chassis
  connectors bulkhead panel<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Side
  Panels<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Cabling
  (see list below)<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Not
  included in this shipment:<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>LPR Module
  and associated FO cabling. <o:p></o:p></span></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>3<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span style='font-size:9.0pt;font-family:
  Arial'>40.05.02.01<o:p></o:p></span></i></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><i style='mso-bidi-font-style:normal'><span
  style='font-size:9.0pt;font-family:Arial'>Coaxial Cabling<o:p></o:p></span></i></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=258 valign=top style='width:193.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:50;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>END<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=258 valign=top style='width:193.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>












<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<h1 style='margin-left:0in;text-indent:0in'><a name="_Toc197010938"><![if !supportLists]><span style='mso-list:Ignore'>5<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Parts not listed under sections 3 and 4 Shipping List</a><o:p></o:p></h1>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=836
 style='width:627.0pt;margin-left:5.4pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:480;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <thead>
  <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
   height:45.4pt'>
   <td width=53 valign=top style='width:39.9pt;border:solid windowtext 1.0pt;
   mso-border-alt:solid windowtext .5pt;background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt;
   height:45.4pt'>
   <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
   style='font-size:11.0pt;font-family:Arial;'><o:p>&nbsp;</o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Item<o:p></o:p></span></b></p>
   </td>
   <td width=103 style='width:76.95pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>ALMA Product No.<o:p></o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>[RD 01]<o:p></o:p></span></b></p>
   </td>
   <td width=213 style='width:159.6pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Product Name /
   Description<o:p></o:p></span></b></p>
   </td>
   <td width=144 style='width:108.3pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Manufacturer /
   Distributor<o:p></o:p></span></b></p>
   </td>
   <td width=65 style='width:48.45pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Qty<o:p></o:p></span></b></p>
   </td>
   <td width=258 style='width:193.8pt;border:solid windowtext 1.0pt;border-left:
   none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
   background:#CCFFCC;padding:0in 5.4pt 0in 5.4pt;height:45.4pt'>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Serial Numbers<o:p></o:p></span></b></p>
   <p class=MsoNormal align=center style='text-align:center'><b
   style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
   font-family:Arial;'>Notes &amp;
   Comments<o:p></o:p></span></b></p>
   </td>
  </tr>
 </thead>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>40.04.09.00<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>FE
  Engineering M&amp;C Software<o:p></o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>NRAO<o:p></o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Not
  included in this shipment.<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>2<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>40.03.03.04<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Gate Valve
  Driver Module<o:p></o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>NRAO<o:p></o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>2<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>S/N-005
  and S/N-006<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>3<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>40.05.02.02<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Solenoid
  Valve to ALMA Front End Chassis Corner Plate<span
  style='mso-spacerun:yes'>����������������������������������� </span>AC Power
  Cable<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>NRAO</span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>2<o:p></o:p></span></p>
  </td>
  <td width=258 style='width:193.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>Qty for
  two chassis.<o:p></o:p></span></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'>S/N: NA<o:p></o:p></span></p>
  </td>
 </tr>

 <tr style='mso-yfti-irow:29;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:.3in'>
  <td width=53 style='width:39.9pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'>END<o:p></o:p></span></p>
  </td>
  <td width=103 style='width:76.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=213 style='width:159.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=144 style='width:108.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=65 style='width:48.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=258 valign=top style='width:193.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:.3in'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

</body>

</html>

<?php 
}//end if submitted

if (!isset($_REQUEST['submitted'])){
	
	
include('footer.php');
}

?>
