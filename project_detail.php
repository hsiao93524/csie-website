<?php
$data = array(
array(
"第一組",
"具視覺化操作介面次世代定序基因表現估測平台建置",
"吳栢翰 / 許佑熙",
"陳榮銘",
"1.pdf",
"摘要在此"
),
array(
"第二組",
"以多感測器為基礎之行動機器人入塢系統",
"沈志翰 / 許頌頤",
"朱明毅",
"2.pdf",
"摘要在此"
),
array(
"第三組",
"無線區域網路WiFi基地台連結拓樸自動化建構與管理之研製",
"李育縉 / 陳揮揚",
"陳宗禧",
"3.pdf",
"摘要在此"
),
array(
"第四組",
"採用緊急性感知片段選擇之BitTorrent協定提供同儕式影音串流服務構",
"吳健民 / 蕭銘麒 / 鄭宇翔",
"林朝興",
"4.pdf",
"摘要在此"
),
array(
"第五組",
"台南市垃圾車清運點APP",
"黃建彰 / 沈佩蓁",
"李建樹",
"5.pdf",
"摘要在此"
),
array(
"第六組",
"機器手臂視覺伺服定位研究",
"許景皓 / 陳俊仁",
"朱明毅",
"6.pdf",
"摘要在此"
),
array(
"第七組",
"植基於PPG技術之手持非接觸式心跳速率量測系統",
"林冠瑋 / 薛佳綾",
"李建樹",
"7.pdf",
"摘要在此"
),
array(
"第八組",
"NFC火車時刻表＆點餐及管理系統",
"李保頡 / 黃偉哲",
"楊文霖",
"8.pdf",
"摘要在此"
),array(
"第九組",
"利用Openflow技術無線區域網路WiFi基地台省電機制之研製",
"黃昱翔 / 李舜泰",
"陳宗禧",
"10.pdf",
"摘要在此"
),
array(
"第十組",
"具環境適應性之語音撥號手機應用軟體設計",
"王奕淳 / 陳權佑 / 吳孟蓁",
"陳榮銘",
"10.pdf",
"摘要在此"
),
array(
"第十一組",
"智慧型影像景點辨識標記系統之研製",
"施華桐 / 傅章賢",
"錢炳全",
"11.pdf",
"摘要在此"
),
array(
"第十二組",
"個人旅遊規劃與日誌系統之互動式網頁",
"呂旺芃 / 林美秀",
"楊文霖",
"12.pdf",
"摘要在此"
),
array(
"第十三組",
"於行動應用程式開發之都市區噪音地圖繪製工具",
"黃濬文",
"林朝興",
"13.pdf",
"摘要在此"
),
array(
"第十四組",
"智慧型手機路平檢驗監控系統",
"魏志任",
"林朝興",
"14.pdf",
"摘要在此"
),
array(
"第十五組",
"視覺導引行動機器人入塢系統",
"施冠廷 / 巫振輝",
"朱明毅",
"15.pdf",
"摘要在此"
),
array(
"第十六組",
"植基於頭部轉動判斷之駕駛瞌睡偵測系統",
"彭思倩 / 廖禹棠",
"李建樹",
"16.pdf",
"摘要在此"
),
array(
"第十七組",
"印刷局部UV上光自動檢測系統",
"陳以撒",
"李建樹",
"17.pdf",
"摘要在此"
),
array(
"第十八組",
"中小學生線上適性評量測驗系統",
"蔡元勳 / 黃尉庭",
"李健興",
"18.pdf",
"摘要在此"
)
);

if(isset($_GET['p']) && $_GET['p'] != "") {
	$p = ((int) htmlspecialchars($_GET['p'])) - 1;
?>
<style type="text/css">
table {
	boder: 1px solid #000;
}
th {
	width: 100px;
	background-color: #DDD;
}
</style>
<table>
<tr><th><?php echo $data[$p][0];?></th><td><?php echo $data[$p][1];?> (<a href="post/<?php echo $data[$p][4];?>" target="_blank">PDF</a>)</td></tr>
<tr><th>專題學生</th><td><?php echo $data[$p][2];?></td></tr>
<tr><th>指導教授</th><td><?php echo $data[$p][3];?></td></tr>
<tr><th>摘要</th><td><p style="line-height: 22px;"><?php echo $data[$p][5];?></p></td></tr>
</table>
<?php
} else {
	echo "Error";
}
?>
