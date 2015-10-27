---
layout: post
title: "Criando Tabs com RadioButtonList"
date: 2015-10-18 13:26
category: Studies
---

<p class="txt-post">
Criando tabs no padrão do Foundadion aplicando o css no componente asp RadioButtonList
</p>

<p class="txt-post">
Componente ASP
<pre><code> &lt;asp:RadioButtonList ID="rblExemplo" CssClass="tabs" runat="server" RepeatDirection="Horizontal"&gt;  
   &lt;asp:ListItem Selected="True"&gt;Primeira Aba&lt;/asp:ListItem&gt;  
   &lt;asp:ListItem&gt;Segunda Aba&lt;/asp:ListItem&gt;  
   &lt;asp:ListItem&gt;Terceira Aba&lt;/asp:ListItem&gt;  
   &lt;asp:ListItem&gt;Quarta Aba&lt;/asp:ListItem&gt;  
   &lt;asp:ListItem Enabled="False"&gt;Aba Desativada&lt;/asp:ListItem&gt;  
 &lt;/asp:RadioButtonList&gt;  
</code></pre>
</br>
</p>

<p class="txt-post">
CSS</br>
<pre><code> .tabs {  
   position: relative;  
   clear: both;  
   margin: 0;  
   padding: 0 !important;  
   border: 0;  
 }  
 .tabs tr td {  
   padding-bottom: 0 !important;  
 }  
 tr {  
   float: left;  
   margin: 0;  
 }  
 td {  
   margin: 0;  
   padding-left: 1%;  
   padding-top: 1%;  
   padding-right: 1%;  
   padding-bottom: 0;  
 }  
 td label {  
   background: #eee;  
   padding: 10px;  
   text-align: center;  
   width: 100%;  
 }  
 td [type=radio] {  
   display: none;  
   padding: 0 !important;  
 }  
 [type=radio]:checked ~ label {  
   background: #008316;  
   border: 1px solid #008316;  
   z-index: 2;  
   color: #ffffff;  
 }  
   [type=radio]:checked ~ label ~ .content {  
     z-index: 1;  
   }  
 [type=radio]:disabled ~ label {  
   color: #ccc;  
 }  
</code></pre>
</p>
