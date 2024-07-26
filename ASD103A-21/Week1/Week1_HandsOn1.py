# Write your code below:

import statistics

#Returns mode of a list
def mode(lyst):
   return statistics.mode(lyst)

#Returns median of a list
def median(lyst):
   return statistics.median(lyst)

#Returns mean of a list
def mean(lyst):
   return statistics.mean(lyst)




def main():
    """Tests the functions."""
    lyst = []
    for i in range(6):
      lyst.append(int(input('Enter a integer value for the list: ')))
    lyst.sort()
    print("List:", lyst)
    print("Mode:", mode(lyst))
    print("Median:", median(lyst))
    print("Mean:", mean(lyst))

if __name__ == "__main__":
    main()
