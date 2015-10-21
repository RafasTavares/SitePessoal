---
layout: post
title: "Criando Tabs com RadioButtonList"
date: 2015-10-18 13:26
category: Studies
---

<p class="txt-post">
Criando tabs no padrão do Foundadion aplicando o css no componente asp RadioButtonList
</p>
</br>
<p class="txt-post">
Componente ASP
<asp:RadioButtonList ID="rblExemplo" CssClass="tabs" runat="server" RepeatDirection="Horizontal">
    <asp:ListItem Selected="True">Primeira Aba</asp:ListItem>
    <asp:ListItem>Segunda Aba</asp:ListItem>
    <asp:ListItem>Terceira Aba</asp:ListItem>
    <asp:ListItem>Quarta Aba</asp:ListItem>
    <asp:ListItem Enabled="False">Aba Desativada</asp:ListItem>
</asp:RadioButtonList>

</br></br>
CSS</br>
[code language="css"]
.tabs {
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
[/code]
</p>
