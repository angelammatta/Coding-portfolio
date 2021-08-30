# use program 1 and use it as investment program
# 12/14/20
# Angela Matta

# calc 2 weeks of pay that will be invested





def calcWeeklyWages(totalHours, hourlyWage):

   if totalHours <= 40:
     totalWages = hourlyWage*totalHours
     print("You had no overtime this week")
     return totalWages

   else:
     overtime = totalHours - 40
     totalWages = hourlyWage*40+(1.5*hourlyWage)*overtime
     print("Your overtime hours this week are :", overtime, "hours.")
     return totalWages


def calcInvest():

# calc weekly pay for 2 weeks

# week 1

  hours = float(input("Enter the hours worked"))
  total = calcWeeklyWages(hours,15)

# week 2

  hours2 = float(input("Enter the hours worked"))
  total2 = calcWeeklyWages(hours2,15)

# total before tax
# add the wages from week 1 and 2
  beforeTax = total + total2


# calculate the income tax that employer withhold to gov
  incomeTax = beforeTax * 0.18


# calc the net pay and display
  netPay = beforeTax - incomeTax


  print("=" * 40)
  print("Your net pay is: $", format(netPay,".2f"))
  print("Investing your net pay for 4 years at 6% interest will generate:")
  print("*" * 40)


# calc investment
  startBalance = netPay
  years = 4
  rate = 6

# convert interest rate to decimal

  rate = rate/100

# initialize total interest accumulator

  totalInterest = 0.0


# print columns
  print("%4s%18s%10s%16s" % \
         ("Year","Starting Balance","Interest","Ending Balance"))

  for year in range(1, years+1):
    interest = startBalance*rate
    endBalance = startBalance +interest
    print("%4d%18.2f%10.2f%16.2f" % \
    (year,startBalance,interest,endBalance))
    startBalance = endBalance
    totalInterest += interest

  print("*" * 40)
  print("Ending balance: $",format(endBalance,".2f"))
  print("Total interest earned: $",format(totalInterest, ".2f"))
  print("*" * 40)

calcInvest()











