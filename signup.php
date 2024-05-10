<html>
    <head>
            <title>sign-up_form</title>
            <link rel="stylesheet" href="style6.css">
            <script>
                <script>
	function validate_date()
        {
            var date=document.formname.i2.value;
            var mydate=new Date(date);
            var curdate=new Date();
            var myyear=mydate.getFullYear();
            var curyear=curdate.getFullYear();
            if(myyear>curyear)
                alert("You cannot enter a future year");
            else if(curyear-myyear<18)
                alert("You are too young to access");
            else
                return true
        }
	function validate_email()
        {
            var str=document.fname.mail.value;
            if(str.charAt(0)=='')
                alert("Enter Mail");
            if(!str.includes("@gmail.com"))
                alert("Enter mail in proper format");
            
            
        }
	function validate_password()
        {
            var str1=document.fname.pass1.value;
            var str2=document.fname.pass2.value;
            if(!(str1==str2))
                alert("The passwords don't match");
            
        }
	function validate_number()
        {
            var num=document.fname.num.value;
            len=num.length;
            if(len<10){
                alert("Phone number consists of 10 digits");
                return false;
            }
            for(i=0;i<len;i++)
            {
                if(num.charAt(i)!="0"||num.charAt(i)!="1"||num.charAt(i)!="2"||
                  num.charAt(i)!="3"||num.charAt(i)!="4"||num.charAt(i)!="5"||
                  num.charAt(i)!="6"||num.charAt(i)!="7"||num.charAt(i)!="8"||
                  num.charAt(i)!="9")
                    {
                        alert("Enter number in proper format");
                        break;
                    }
            }
            
        }
            
	  function form_check()
        {
            validate_email();
	    validate_password();
            validate_date();
            validate_number();
	
        }

</script>
                
            </script>
    </head>
    <body>
        <div class="bg">
        <div class="signup">
            <h1>SIGN-UP FORM</h1>
            <form action="insert_login1.php" method="post" id="form" name="formname">
            <div class="txt">
                <input type="text"  name="i1" id="t1" required>
                <span></span>
                <label>NAME</label>
            </div>
            <div class="txt">
                <span></span>
                <label for="i2">STATE</label>
                <select name="i2" id="t2" required>
                        <option value="anp">Andhra Pradesh</option>
                        <option value="arp">Arunachal Pradesh</option>
                        <option value="as">Assam</option>
                        <option value="b">Bihar</option>
                        <option value="c">Chhattisgarh</option>
                        <option value="go">Goa</option>
                        <option value="gu">Gujarat</option>
                        <option value="h">Haryana</option>
                        <option value="hp">Himachal Pradesh</option>
                        <option value="j">Jharkhand</option>
                        <option value="k">Karnataka</option>
                        <option value="ke">Kerala</option>
                        <option value="mp">Madhya Pradesh</option>
                        <option value="ma">Maharashtra</option>
                        <option value="Man">Manipur</option>
                        <option value="me">Meghalaya</option>
                        <option value="mi">Mizoram</option>
                        <option value="na">Nagaland</option>
                        <option value="o">Odisha</option>
                        <option value="p">Punjab</option>
                        <option value="r">Rajasthan</option>
                        <option value="s">Sikkim</option>
                        <option value="ta">Tamil Ndau</option>
                        <option value="te">Telengana</option>
                        <option value="tr">Tripura</option>
                        <option value="u">Uttarakhand</option>
                        <option value="up">Uttar Pradesh</option>
                        <option value="wb">West Bengal</option>
                        
                      </select>
                
            </div>
            <div class="txt">
                <input type="text" name="i3" id="t3" required>
                <span></span>
                <label>CITY</label>
                
                
                
            </div>
            <div class="txt">
                <input type="date" name="i4" id="t5" required>
                <span></span>
                <label>DATE OF BIRTH</label>
               
                
            </div>
            <div class="txt">
                <input type="text" name="i5" id="t6" required>
                <span></span>
                <label>CONTACT NUMBER</label>
                
                
                
            </div>
            
            <div class="txt">
                <input type="mail" name="i6" id="t6" required>
                <span></span>
                <label>MAIL-ID</label>
               
                
                
            </div>
            <div class="txt">
                <input type="password" name="i7" id="t7" required>
                <span></span>
                <label>CREATE PASSWORD</label>
                
            </div>
           
             <div class="txt">
            <input type="password" placeholder="Enter previous password here" id="t8" name="i8" required>
            <span></span>
            <label>CONFIRM PASSWORD</label>
    
        </div>
        
      
    <center>
    <input type="reset" value="Clear Form" id="res">
    </center>
         <input type ="submit" value="SIGN-UP" name="i9" onclick="form_check()">
    
    </form>
        </div>
        </div>
        
    
    </body>

</html>