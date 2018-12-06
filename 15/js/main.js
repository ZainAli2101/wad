var details = {
    title:'Zain Ali',
    currency1:'PKRS',
    balance:'9000',
    IBAN:'PKR123456789'
}

document.getElementById("title").innerHTML=details.title;
document.getElementById("currency").innerHTML=details.currency1;
document.getElementById("balance").innerHTML=details.balance;
document.getElementById("IBAN").innerHTML=details.IBAN;



function DepositMoney(e)
{
    // alert("hello");
    if(e.Key=="Enter")
    {
        var val=document.getElementById("deposit").value;
        var a = parseInt(val);
        if(a>details.balance)
        {
            document.InnerText("Not enough balance");
        }
    }
}


