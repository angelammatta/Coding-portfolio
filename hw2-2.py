# a program to calculate the area of a circle
# date: 9/29/20
# By Angela Matta

# user def function

def calcCircleArea():
    PI = 3.14
    r = float(input("Enter the radius of the circle:"))
    area = PI * r**2
    return area

# function call


area = calcCircleArea()


# output


print("The area of the circle is: ", round(area, 2))
