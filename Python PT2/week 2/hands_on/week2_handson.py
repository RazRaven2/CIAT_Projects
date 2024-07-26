#(0) Refer to the states.txt file.  (see contents below, manually create this file in your project directory)
#(1) Create a program, that uses in a try/except block for file handling operation
#(2) Open the file handle variable for reading "states.txt"
#(3) Creates a list named states
#(4) Store 50 United States state names in the list, one state per element in the list (without a number)
#(5) Create a function that prints the content of the list to the screen in the descending order (Z to A).

def main():
     try:
          infile = open('states.txt', 'r')
     except FileNotFoundError:
          print("File not found.")
     
     states = []
    
     for count in range(1,51):
          #read lines, filter out '1.' from iterations, and add to list
          line1 = infile.readline()
          f = filter(str.isalpha, line1)
          line_filtered ="".join(f)
          states.append(line_filtered)
     
     reverse_print(states)
     infile.close()

def reverse_print(states):
     states.reverse()
     
     for state in states:
          print(state)

#call the main function
if __name__ == '__main__':
     main()

