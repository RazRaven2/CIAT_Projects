#import Stack file, created in the previous step
#Description- The program allocates  a small stack of 10 elements, pushes some strings onto the stack, displays the contents, then pops them off, 
#printing them left to right, separated by spaces. 

#The program shows the following output:

#After pushing 6 words on the stack, it contains:
# [May, the, force, be, with, you]
#Is stack full? False
#Popping items off the stack:
#you with be force the May

#The client creates a small stack of 10 elements 
#pushes some strings onto the stack, 
#displays the contents, along with a number of words
#pops them off, 
#printing them left to right separated by spaces

from Stack import *

stack = Stack(6)
for word in ["May", "the", "force", "be", "with", "you"]:
     stack.push(word)

print("Current stack:/n", stack)
print('Attempt to push')
stack.push("Maybe")

stack2 = Stack(1)
print('New Empty Stack:')
stack2.pop()
