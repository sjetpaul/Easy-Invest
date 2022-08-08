# Easy Invest

Cryptocurrency Investment Suggestion Application Based on user Risk Profile.

•	App build User Risk Profile Based on user response on 10 Financial Position Questions.

•	5 different Risk Type defined Crypto Suggested to User based on User Risk Profile.

•	User seek more information about Crypto by looking into the Chart, Build using API data Source of alphaventage.com and coingeko.com.

# Logic

How apllication Defineing user Risk Profile

# Risk Profile
Conservative (1)
Seeking safety of capital, minimal risk and minimum or low returns

Moderately Conservative (2)
Willing to take small level of risk for potential returns over medium to long term

Moderate (3)
Looking for relatively higher returns over the medium to long term with ..

Moderately Aggressive (4)
Seeking to maximize returns over medium to long term with high risk

Aggressive  (5)
Willing to take significant risks to maximize returns over the long term

# Risk Question 
Each questions has 5 options and each option has different value based on different type of Risk Profile. Like

Question : What is your current age?

1.18 to 30 years old  (5) 

2.31 to 40 years old	(4) 

3.41 to 50 years old	(3)

4.51 to 60 years old	(2)

5.Above 60 years old	(1)

User had to give 10 question answer.

# Risk Profile Analyze

So Total of all the answer lies between 10-50 had a differnce of 40. and this difference separated in 5 groups (as Risk Profile).So

Conservative (1)     >=10 & <= 18
 
Moderately Conservative (2)    >=19  & <= 26
 
Moderate (3)  		>=27&>= 34
 
Moderately Aggressive (4)	>=35&<=42
 
Aggressive  (5)    	>=43&& <=50

# Coin Suggestion
Application Updated with 5 groups of 10 Coin for each Risk Profile. Based on user Risk relavant coin suggested to users.For more info follow the Crypto details pdf.
![Easy-Invest1](https://user-images.githubusercontent.com/92737056/183352977-bf65361b-d63f-4306-a5d2-ecddaa583bfd.png)

# API Details

Market Data Source

https://coingecko.com/en

Chart Data Source

https://www.alphavantage.co/

Chart Data fetch limit 500 calls a day. 
