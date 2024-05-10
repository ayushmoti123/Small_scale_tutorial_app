<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style3.css">
    <script type="text/javascript">
    document
    function check_cardnumber()
        {
            var str=document.form1.cnum.value;
            var issue=document.form1.issuer.value;
            str= str.replace(/[\s-]/g, '');
            if (!/^\d+$/.test(str)) 
                return false;
            if(issue==='visa')
                return /^4(\d{12}|\d{15})$/.test(str);
            else if(issue==='master')
                return /^5[1-5]\d{14}$/.test(str);
            else
                 return /^3[47]\d{13}$/.test(str);
            
        }
    function check_cvv()
        {
            var str=document.form1.cvv.value;
            str = str.replace(/\s/g, '');  
            if (!/^\d+$/.test(str)) 
                return false;
            if(!/^\d{3}$/.test(cvv))
                return false;
        }
    function put_amt()
    {
        let dropdown = document.querySelector('#p0');
        let amount = document.querySelector('#p1');
        let duration=document.querySelector('#p2');
        let selected_value=dropdown.value;
        if(selected_value==="T1")
        {
            amount.value="2500";
            duration.value="3 months";
        }
    }
    function check_card_details()
        {
            if(!check_cvv())
                alert("Enter CVV in proper format");
            if(!check_cardnumber())
                alert("Enter card number in proper format");
        }
    
    
    </script>
</head>
<body>
    <form name="form1" action="postpayment.php" method="post">
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <div class="first-row">
            <div class="selection">
                <h3>Package Name</h3>
                <select name="pack" id="p0" onchange="put_amt()" required>
                <option value="T0"> </option>
                <option value="T1">SSC CGL tutorial</option>
                </select>
            </div>
        </div>
        <div class="second-row">
            <div class="amount">
                <h3>Amount</h3>
                <div class="input-field">
                    <input type="text" id="p1" name="n1" required>
                </div>
            </div>
             <div class="duration">
                <h3>Time duration</h3>
                <div class="input-field">
                    <input type="text" id="p2" name="n2" required>
                </div>
            </div>
           
        </div>
       
        <div class="third-row">
            <div class="card-number">
                <h3>CardNumber</h3>
                <div class="input-field">
                    <input type="text" id="p3" name="cnum" onchange="check_cardnumber()"required>
                </div>
            </div>
             <div class="cvv">
                <h3>CVV</h3>
                    <div class="input-field">
                    <input type="password" id="p2" name="cvv" onchange="check_cvv()"required>
                    </div>
            </div>
            <div class="Issuer">
            <h3> Card Issuer</h3>
                <select name="issuer" id="p3" required>
                <option value="none"> </option>
                <option value="master">Mastercard</option>
                <option value="visa">Visa</option>
                <option value="Amex">American Express</option>
                </select>
            </div>
            
        </div>
        <div class="fourth-row">
            <h3>Expiry Date</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months" required>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years" required>
                        <option value="2020">2021</option>
                        <option value="2019">2022</option>
                        <option value="2018">2023</option>
                        <option value="2017">2024</option>
                        <option value="2016">2025</option>
                        <option value="2015">2026</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="mc.png" alt="">
                    <img src="vi.png" alt="">
                    <img src="amex.png" alt="">
                </div>
               
            </div> 
             <div class="select card">
                    <h3>Select card type</h3>
                    <input type="radio" name="in" value="credit">Credit
                    <input type="radio" name="in" value="debit">Debit
                    
                </div>
        </div>
        <div class="confirm">
        <input type="submit" onclick="check_card_details()" value="CONFIRM PAYMENT"/> 
        
        </div>
        
    </div>
    </form>
        
    

</body>
</html>