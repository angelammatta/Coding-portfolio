# program to give back change in quarters, nickels, dimes and pennies
# date: 9/29/20
# By Angela Matta

def changeCalc(change):
    # num of quarters and cents left

    numQr = int(change/25)
    change = change % 25
    print("Number of quarters: ", numQr)

    # num of dimes and cents left

    numDm = int(change / 10)
    change = change % 10
    print("Number of dimes: ", numDm)

    # num of nickels and cents left

    numNc = int(change / 5)
    change = change % 5
    print("Number of nickels: ", numNc)

    # num of pennies

    print("Number of pennies: ", change)


change = int(input("Please enter the number of cents: "))
changeCalc(change)
