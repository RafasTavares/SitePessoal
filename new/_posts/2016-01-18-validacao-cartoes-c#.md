---
layout: post
title: "Validando Cartões e Bandeiras com C#"
date: 2016-01-18 19:57
category: Studies
---

<p class="txt-post">
Método básico utilizando REGEX para validação do número do cartão de acordo com a bandeira.
</p>

<p class="txt-post">
Método C#

<pre><code>   
private bool ValidarCartao(string numeroCartao, string bandeira)
{
    string nrCartao = numeroCartao.Replace("-", "");
    switch (bandeira.ToUpper())
    {
        case "VISA":
            if (Regex.IsMatch(nrCartao, "^(4)"))
                return nrCartao.Length == 13 || nrCartao.Length == 16;
            break;
        case "MASTERCARD":
            if (Regex.IsMatch(nrCartao, "^(51|52|53|54|55)"))
                return nrCartao.Length == 16;
            break;
        case "AMEX":
            if (Regex.IsMatch(nrCartao, "^(34|37)"))
                return nrCartao.Length == 15;
            break;
        case "DINERS":
             if (Regex.IsMatch(cardNumber, "^(300|301|302|303|304|305|36|38)"))
                return cardNumber.Length == 14;
            break;
    }

    return false;
}
</code></pre>
</br>
</p>
</p>
