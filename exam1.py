# calculate pay stub
# 12/14/20
# Angela Matta

# will be provided code that you modify and produce output
# the wage is hard set to $ 15 p/hour

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


# calc weekly pay for 2 weeks
def twoWeeks():
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


# calc the net pay and display the earned pay, tax amount, and net pay
  netPay = beforeTax - incomeTax


  print("=" * 20)
  print("Paycheck summary: ")
  print("="*20)
  print("For the last 2 weeks, you earned: $", format(beforeTax, ".2f"))
  print("The total taxes withheld: $", format(incomeTax,".2f"))
  print("="*20)
  print("Your net pay is: $", format(netPay,".2f"))


twoWeeks()




