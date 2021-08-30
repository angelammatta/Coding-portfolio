# Quiz score with average
# date: 9/29/20
# By Angela Matta

def getUserScore(num):
    score = int(input("Please enter the quiz #" + num + " score: "))
    return score


def calcAverageScore(score1, score2, score3):
    averageScore = (score1+score2+score3)/3
    print("Your quiz average is: \t\t",  round(averageScore), "%")

# call function 3 times


score1 = getUserScore("1")
score2 = getUserScore("2")
score3 = getUserScore("3")

calcAverageScore(score1, score2, score3)
