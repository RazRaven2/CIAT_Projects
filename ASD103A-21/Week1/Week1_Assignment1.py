# Write your code below:

import random

class Student():
    #variables

    #Constructor
    def __init__(self, name, numScores) -> None:
        self.name = name
        self.numScores = numScores

    #Methods
    def __str__(self) -> str:
        #return string for scores
        print("Name: " + self.name)
        count = 0
        for score in self.numScores:
            count += 1
            print("Score " + str(count) + ": " + str(score))
        return ""

    def setScore(self, index, score):
        self.numScores[index] = score

def main(numScores = [0,0,0]):

    """Tests sorting."""
    # Create the list and put 5 students into it
    students = list()

    names = ("Juan", "Bill", "Stacy", "Maria", "Charley")
    for name in names:
        s = Student(name, numScores)
        for i in range(len(numScores)):
            s.setScore(i, random.randint(70, 100))
        students.append(s)
    # Print the contents
    print("The list of students:")
    for s in students:
        print(s)
        
if __name__ == "__main__":
    main()