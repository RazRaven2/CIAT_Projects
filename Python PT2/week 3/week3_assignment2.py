# 1. Write a statement that creates a dictionary containing the following key-value pairs:
# 'a' : 1
#  'b' : 2
#  'c' : 3
# 3. Assume the variable dct references a dictionary. 
#Write an if statement that determines whether the key 'James' exists in the dictionary. 
#If so, display the value that is associated with that key. 
#If the key is not in the dictionary, display a message indicating so.


my_dict = {
     'a':1,
     'b':2,
     'c':3
}

name = input("Enter Name: ")
if name not in my_dict:
     print("Name Not Found.")
else:
     print("Found Name.")