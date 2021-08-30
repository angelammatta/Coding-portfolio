# Debug given code
# date: 9/30/20
# By Angela Matta

TAX = 0.06


def salesTax(total):
    salesTax = total * TAX
    return salesTax


def main():
    print("Sales Tax Calculator")
    total = float(input("Enter total amount: "))
    totalAfterTax = round(total+salesTax(total), 2)
    print("Total after tax:", totalAfterTax)


main()
