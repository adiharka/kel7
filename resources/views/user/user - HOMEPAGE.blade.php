<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="{{ asset('style-homepage.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
    <style type="text/css">
        .box{
            margin: 100px auto;
            border: 4px solid #FCA311;
            width: 400px;
            border-radius: 40px;
            height: 42px;
        }
        .input{
            outline: none;
            height: 40px;
            width: 300px;
            border-radius: 30px;
            border: 0;
        } 
        .src{
            background:transparent;
            outline: none;
            border: 0;
            padding-left: 10px;
        }
        .box:hover{
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="navigation flex-column">
        <div class="logo flex-column">
            <img src="Asset/letter_p_PNG119 1.svg" alt="">
            <h1>harmacy</h1>
        </div>
        <!-- <div class="box">
           <h2>Find the drug item needed</h2>
            <img src="search.png" alt="">
        </div> -->
        <!-- <div class="menu flex-column">
            <img src="Asset/clarity_notification-outline-badged.png" alt="">
            <img src="Asset/emojione_shopping-cart (1).png" alt="">
        </div> -->
        <!-- <div class=" form-group primary-button end">
            <button type="submit">REGIST</button>
        </div> -->
        <div class="button-add">
            <a href="user - form regist.html">
                <input type="button" value="Regist">
            </a>
            <a href="user - form login.html">
                <input type="button" value="Login">
            </a>
        </div>
    </div>
    <div class="container">
        <h1>Drugs Category</h1>
        <img src="Asset/1.png" alt="">
        <img src="Asset/2.png" alt="">
        <img src="Asset/3.png" alt="">
        <img src="Asset/4.png" alt="">
        <img src="Asset/5.png" alt="">
        <img src="Asset/9.png" alt="">
        <ul>
            <li>Free Medicine</li>
            <li>Limited Free Medicine</li>
            <li>Hard Medicine</li>
            <li>Narkotic Medicine</li>
            <li>Phythopharmaka Medicine</li>
            <li>Herbal Medicine</li>
        </ul>
        <h2>Read More Than 100+ Article</h2>
        <div class="option">
            <ul>
                <a href="#"><li>The Lastest</li></a>
                <a href="#"><li>Most Popular</li></a>
                <a href="#"><li>Coronavirus</li></a>
            </ul>
            <article>
                <h1>What is Drug Addiction?</h1>
                <img src="Asset/OBAT.png" alt="">
                <p>Addiction is a disease that affects your brain and behavior. When you’re addicted to drugs, you can’t resist the urge to use them, no matter how much harm the drugs may cause. The earlier you get treatment for drug addiction, the more likely you are to avoid some of the more dire consequences of the disease.
                    Drug addiction isn’t about just heroin, cocaine, or other illegal drugs. You can get addicted to alcohol, nicotine, sleep and anti-anxiety medications, and other legal substances. 
                    You can also get addicted to prescription or illegally obtained narcotic pain medications, or opioids. This problem is at epidemic levels in the United States. In 2018, opioids played a role in two-thirds of all drug overdose deaths.
                    At first, you may choose to take a drug because you like the way it makes you feel. You may think you can control how much and how often you use it. But over time, drugs change how your brain works. These physical changes can last a long time. They make you lose control and can lead to damaging behaviors.</p>
            </article>
        </div>
    </div>
</body>
</html>