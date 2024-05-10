<html>
    <head>
    <title>firstexam</title>
   <link rel="stylesheet" href="pagest.css">
    <script type="text/javascript">
       
        var i=300;
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
        <h1>EXAM1</h1>
    <form name="exam">
        <br>
        <p>Q1.In a row of girls, position of Shreya from left side of the row is 11th and Aishwarya from the rightside of the row is 17th. If Reema is sitting just in the middle of Shreya and Aishwarya and her position from Shreya is 5th, then how many girls are sitting in the row?</p>
        <ol><li ><input type="radio"  name="question1" value="35" > 35</li>
            <li><input type="radio"  name="question1" value="37"> 37</li>
            <li><input type="radio"  name="question1" value="26"> 26</li>
            <li> <input type="radio"  name="question1" value="39">29</li>
            <li> <input type="radio"  name="question1" value="31">31</li>
          
        </ol>
        <p>Directions Q. (2-3): Read the following information carefully and answer the questions that follow:</p>
        <p>‘A * B’ means ‘A is the mother of B’</p>
        <p>‘A x B’ means ‘A is the father of B’</p>
        <p>‘A + B’ means ‘A is the sister of B’</p>
        <p>‘A - B’ means ‘A is the brother of B’</p>
        <p>‘A > B’ means ‘A is the son of B’</p>
        <p>‘A less than B’ means ‘A is the daughter of B’</p>
        <p>Q. (2) In the expression ‘P x Q + Y > Z’, how is Z related to P?</p>
<ol>
    <li><input type="radio"  name="question2" value="1">Daughter-in-law</li>
    <li><input type="radio"  name="question2" value="2">Daughter</li>
    <li><input type="radio"  name="question2" value="3">Wife</li>
    <li><input type="radio"  name="question2" value="4">Sister</li>
    <li><input type="radio"  name="question2" value="5">Brother</li>
</ol>
        <P>Q. (3) In the expression ‘ X + Y > M - N’, how is X related to N?</P>
<ol>
    <li><input type="radio"  name="question3" value="1">Son</li>
    <li><input type="radio"  name="question3" value="2"> Daughter</li>
    <li><input type="radio"  name="question3" value="3"> Nephew</li>
    <li><input type="radio"  name="question3" value="4"> Niece</li>
    <li><input type="radio"  name="question3" value="5">Mother</li>
</ol>
    <p>Directions Q. (4-5): In these questions, the relationship between different elements is shown in the statements. The statements are followed by two conclusions. Mark your answer as:</p>
        <p>a If only conclusion I is true</p>
        <p>b If only conclusion II is true</p>
        <p>c If either conclusion I or II is true</p>
        <p>d If neither conclusion I nor II is true</p>
        <p>e If both the conclusions I and II are true.</p>
        <p>Q. (4) Statement: A > B ≥ C; D less than B less than E</p>
<p>Conclusions:</p>
        <p>I. A > D</p>
        <p>II. C less than E</p>
<ol>
    <li><input type="radio"  name="question4" value="a">a</li>
    <li><input type="radio"  name="question4" value="b">b</li>
    <li><input type="radio"  name="question4" value="c">c</li>
    <li><input type="radio"  name="question4" value="d">d</li>
    <li><input type="radio"  name="question4" value="e">e</li>

        
</ol>
        <p>Q.(5) Statement: P less than Q = O ≥ N > M</p>
        <p>Conclusions:</p>
        <p>I. Q > M</p>
        <p>II. P less than N</p>
    <ol>
    <li><input type="radio"  name="question5" value="a">a</li>
    <li><input type="radio"  name="question5" value="b">b</li>
    <li><input type="radio"  name="question5" value="c">c</li>
    <li><input type="radio"  name="question5" value="d">d</li>
    <li><input type="radio"  name="question5" value="e">e</li>

        
</ol>
<p>Directions Q. (6-7): Read the following statement carefully and answer the question given below.<br>
Point Q is 6 metres towards the North of point P.<br>
Point T is 10 metres towards the East of point Q.<br>
Point R is 7 metres towards the East of point P.<br>
Point S is 11 metres towards the West of point R.</p>
<p>Q. (6) How far should one walk from point P in order to reach point S?</p>
<ol>
<li><input type="radio"  name="question6" value="6">7</li>
    <li><input type="radio"  name="question6" value="4">4</li>
    <li><input type="radio"  name="question6" value="8">8</li>
    <li><input type="radio"  name="question6" value="11">11</li>
    <li><input type="radio"  name="question6" value="9">9</li>

        </ol>

                <p>Q. (7) If a person walks 6 metres South from the point T and then walks after taking a right turn, which of the following points would he reach first?</p>
       <ol>
<li><input type="radio"  name="question7" value="a">P</li>
    <li><input type="radio"  name="question7" value="b">Q</li>
    <li><input type="radio"  name="question7" value="c">R</li>
    <li><input type="radio"  name="question7" value="d">S</li>
    <li><input type="radio"  name="question7" value="e">None of the above</li>

        </ol>

        <p>Directions Q. (8): In each of the following questions, a question is followed by two statements. You have to select a statement that answers the question. Mark your answer as:</p>
        <p>a-If the data in statement I alone is sufficient to answer the question while the data in statement II alone is not sufficient to answer the question.</p>
        <p>b- If the data in statement II alone is sufficient to answer the question while the data in statement I alone is not sufficient to answer the question.</p>
        <p>c- If the data either in statement I alone or in statement II alone is sufficient to answer the question.</p>
        <p>d- If the data in both statements I and II together are not sufficient to answer the question.</p>
        <p>e- If the data in both statements I and II together are necessary to answer the question.</p>
        <p>(8) Six girls A, B, C, D, E and F are sitting around a circular table with an equal distance between them. If all the girls are facing the centre, then who is sitting opposite to F?</p>
        <p>Statements:</p>
        <p>I. F is sitting between A and D while E is sitting adjacent to B and D.</p>
        <p>II. A is adjacent to both F and C while B is sitting adjacent to C.</p>
    <ol>
<li><input type="radio"  name="question8" value="a">a</li>
    <li><input type="radio"  name="question8" value="b">b</li>
    <li><input type="radio"  name="question8" value="c">c</li>
    <li><input type="radio"  name="question8" value="d">d</li>
    <li><input type="radio"  name="question8" value="e">e</li>

        </ol>
        <p>Directions Q. (9-11): What will come in place of (?) in the given series?</p>
        <p>Q. (9) 22, 23, 27, 36, 52, 77, (?)</p>
<ol>
<li><input type="radio"  name="question9" value="a">92</li>
    <li><input type="radio"  name="question9" value="b">96</li>
    <li><input type="radio"  name="question9" value="c">113</li>
    <li><input type="radio"  name="question9" value="d">117</li>
    <li><input type="radio"  name="question9" value="e">120</li>

</ol>
        <p>Q. (10) 5, 30, 185, 1300, (?), 93650</p>
<ol>
<li><input type="radio"  name="question10" value="a">10200</li>
    <li><input type="radio"  name="question10" value="b">10405</li>
    <li><input type="radio"  name="question10" value="c">5450</li>
    <li><input type="radio"  name="question10" value="d">7800</li>
    <li><input type="radio"  name="question10" value="e">7650</li>

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
            var a6=document.exam.question6;
            var a7=document.exam.question7;
            var a8=document.exam.question8;
            var a9=document.exam.question9;
            var a10=document.exam.question10;
            for(var i=0;i<a1.length;i++)
            {
                if(a1[i].checked)
                {
                    valid=valid+1;
                    if(a1[i].value=="37")
                       count+=1;
                    else
                        count-=0.25;
                }
                if(a2[i].checked)
                {
                    valid=valid+1;
                    if(a2[i].value=="3")
                       count+=1;
                    else
                        count-=0.25;
                }
                  if(a3[i].checked)
                {
                    valid=valid+1;
                    if(a3[i].value=="2")
                       count+=1;
                    else
                        count-=0.25;
                }
               
                if(a4[i].checked)
                {
                    valid=valid+1;
                    if(a4[i].value=="e")
                       count+=1;
                    else
                        count-=0.25;
                }
                  
                if(a5[i].checked)
                {
                    valid=valid+1;
                    if(a5[i].value=="e")
                       count+=1;
                    else
                        count-=0.25;
                }
                if(a6[i].checked)
                {
                    valid=valid+1;
                    if(a6[i].value=="4")
                       count+=1;
                    else
                        count-=0.25;
                }
                
                if(a7[i].checked)
                {
                    valid=valid+1;
                    if(a7[i].value=="c")
                       count+=1;
                    else
                        count-=0.25;
                }
                if(a8[i].checked)
                {
                    valid=valid+1;
                    if(a8[i].value=="e")
                       count+=1;
                    else
                        count-=0.25;
                }
                if(a9[i].checked)
                {
                    valid=valid+1;
                    if(a9[i].value=="c")
                       count+=1;
                    else
                        count-=0.25;
                }
                 if(a10[i].checked)
                {
                    valid=valid+1;
                    if(a9[i].value=="c")
                       count+=1;
                    else
                        count-=0.25;
                }
        }
            
           per=((count/10)*100);
            if(per>=80 && valid==10)
            {
                window.location.replace("http://localhost/xampp/finalproject/prepayment.php");
            }
            else if(valid<5)
            {
                alert('Please answer all questions');
            }
            else
            {
                alert(per+"% Try Again");
                
            }
        }
    </script>
    </body>
    </html>
