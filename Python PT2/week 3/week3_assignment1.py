#7. Write a function that accepts a string as an argument and displays the string backwards.

def backward_print(word):
     
     backward=word[::-1]
     print(backward)

if __name__ == "__main__":
     word=input("Enter a string: ")
     backward_print(word)