# Create a list of 10 random numbers between 1 and 100.
# Use the map function to square each number in the list.
# Use the filter function to select only the even numbers from the squared list.
# Print the original list of numbers, the squared list, and the filtered list.

# Author: Razielle DeLaCerda
# Date: 21May2024

import random

def main():
    oldList = list()
    for i in range(0,9) :
        oldList.append(random.randint(0,100))

    newList = list(map(int, oldList))
    for i in range(0, len(newList)):
        newList[i] = pow(newList[i], 2)

    evenList = list(filter(lambda x: x%2 == 0, newList))

    print("Original List: " + str(oldList))
    print("Squared List: " + str(newList))
    print("Filtered only: " + str(evenList))


if __name__ == "__main__":
    main()