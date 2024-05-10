<html>
    <head>
    <title>secondexam</title>
    <link rel="stylesheet" href="pagest.css">
    <script type="text/javascript">
        var i=10;
        function countdown()
            {
                 mydate= new Date();
                 document.form.hr.value=mydate.getHours();
                 document.form.min.value=mydate.getMinutes();
                 document.form.sec.value=mydate.getSeconds();
                 document.form.box.value=i;
                 i=i-1;
                 if(i==-1)
                {
                    alert('Time Up');
                    clearInterval(myinterval);
                }
                
            }
        myinterval=  window.setInterval("countdown()",1000);
    </script>
    </head>
<body >
    <div class="timer">
        <form name="form">
            <input type="text" name="hr" size="2">
            <input type="text" name="min" size="2">
            <input type="text" name="sec" size="2">
            <input type="text" name="box" size="2">
        </form>
        </div>
    <div class="bg5">
        <h1>EXAM2</h1>
    <form name="exam">
        <br>
        <table border="2"><tr>
                    <td>Villages</td>
                    <td>Ratio (literate : illiterate)</td>
                    <td>Population</td>
            
                </tr>
                <tr>
                    <td>A</td>
                    <td>9:2</td>
                    <td>2354</td>
                </tr>
                 <tr>
                    <td>B</td>
                    <td>4:1</td>
                    <td>2540</td>
                </tr>
             <tr>
                    <td>C</td>
                    <td>7:2</td>
                    <td>2709</td>
                </tr>
        
        </table>
    <p>Directions Q. (1-4):The table given bshows the ratio between literate and illiterate persons
and the population of seven villages of a district. Study the table and select the most appropriate
answers. </p>
 <P>Q. (1)  If 42% of the illiterates of village C are males, then what is the number of illiterate women in this
village?</P>   
<ol>
    <li><input type="radio"  name="question1" value="1">499</li>
    <li><input type="radio"  name="question1" value="2">544</li>
    <li><input type="radio"  name="question1" value="3">901</li>
    <li><input type="radio"  name="question1" value="4">1200</li>
    
</ol>
        <P>Q. (2)What is the difference between the number of literates in Village C and the number of illiterates in Village A? </P>
<ol>
    <li><input type="radio"  name="question2" value="1">1500</li>
    <li><input type="radio"  name="question2" value="2">1679 </li>
    <li><input type="radio"  name="question2" value="3">1342</li>
    <li><input type="radio"  name="question2" value="4">230</li>
    
</ol>
    <p> Q. (3)If the ratio between males and females in the village A is 11 : 8 and 60% females in village G
are illiterates, then how many males of this village are illiterate?</p>
        
<ol>
    <li><input type="radio"  name="question3" value="a">200</li>
    <li><input type="radio"  name="question3" value="b">252</li>
    <li><input type="radio"  name="question3" value="c">170</li>
    <li><input type="radio"  name="question3" value="d">380</li>
    
        
</ol>
        <p>Q.(4) By what percentage is the number of literates in village B is more than the number of literates in
village A? </p>
    <ol>
    <li><input type="radio"  name="question4" value="a">80%</li>
    <li><input type="radio"  name="question4" value="b">60%</li>
    <li><input type="radio"  name="question4" value="c">82.5%</li>
    <li><input type="radio"  name="question4" value="d">50%</li>
    
        
</ol>
<p> Q. (5): What is the Antonym of Churn</p>
<ol>
<li><input type="radio"  name="question5" value="1">Agitate</li>
    <li><input type="radio"  name="question5" value="2">Seethe</li>
    <li><input type="radio"  name="question5" value="3">Embed</li>
    <li><input type="radio"  name="question5" value="4">Heave</li>
    
        </ol>

                <center>
    <input type="submit" onclick="check()">
        </center>
    </form>
    </div>
    <script language="javascript">
        function check()
        {
            
            var count=0;
            var valid=0;
            var per;
            var a1=document.exam.question1;
            var a2=document.exam.question2;
            var a3=document.exam.question3;
            var a4=document.exam.question4;
            var a5=document.exam.question5;
            for(var i=0;i<a1.length;i++)
            {
                if(a1[i].checked)
                {
                    valid=valid+1;
                    if(a1[i].value=="2")
                       count+=1;
                    else
                        count-=1;
                }
                if(a2[i].checked)
                {
                    valid=valid+1;
                    if(a2[i].value=="1")
                       count+=1;
                    else
                        count-=1;
                }
                  if(a3[i].checked)
                {
                    valid=valid+1;
                    if(a3[i].value=="d")
                       count+=1;
                    else
                        count-=1;
                }
               
                if(a4[i].checked)
                {
                    valid=valid+1;
                    if(a4[i].value=="c")
                       count+=1;
                    else
                        count-=1;
                }
                  
                if(a5[i].checked)
                {
                    valid=valid+1;
                    if(a5[i].value=="2")
                       count+=1;
                    else
                        count-=1;
                }
                
        }
            per=((count/5)*100);
            if(per>=80 && valid==5)
            {
                window.location.replace("http://localhost/xampp/finalproject/section2.php");
            }
            else if(valid<5)
            {
                alert('Please answer all questions');
            }
            else
            {
                alert(per);
                
            }
        }
        
    
    </script>
    </body>
    </html>
