# program that converts the number of miles the you walked to the number of feet
# date: 9/29/20
# By: Angela Matta


def milesToFeet(miles):
    feet = miles * 5280
    feet = int(round(feet))
    return feet


# main program starts
print("Hike Calculator")
miles = float(input("How many miles did you walk?: "))
feet = milesToFeet(miles)  # conversion function called

print("You walked ", feet, "feet.")
