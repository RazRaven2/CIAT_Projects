# Implement a Stack data structure using a Python list
 #The isEmpty() and isFull() methods that return Boolean values indicating whether the stack has no items or is at capacity.
# The peek() method checks for an empty stack and returns the top value only if there is one. To avoid errors, 
 #a client program would need to use isEmpty() before calling pop(). 
 #The class also includes methods to measure the stack depth and a string conversion method for convenience in displaying stack contents.
class Stack(object):
   def __init__(self, max):                # Constructor
      self.__stack_list= [None] * max       # The stack stored as a list
      self.__top = -1                       # No items initially
      
   def push(self, item):                   # Insert item at top of stack
      self.__top += 1                       # Advance the pointer
      self.__stack_list[self.__top] = item   # Store item
 
   def pop(self):                          # Remove top item from stack
      top = self.__stack_list[self.__top]  # Top item
      self.__stack_list[self.__top] = None # Remove item reference
      self.__top -= 1                      # Decrease the pointer
      return top                           #Return top item
 
   def peek(self):                         # Return top item
      if not self.isEmpty():                  # If stack is not empty
         return self.__stack_list[self.__top] # Return the top item
 
   def isEmpty(self):                      # Check if stack is empty
      return self.__top < 0
 
   def isFull(self):                       # Check if stack is full
      return self.__top >= len(self.__stack_list) - 1
 
   def __len__(self):                      # Return # of items on stack
      return self.__top + 1
 
   def __str__(self):                      # Convert stack to string
      # Start with left bracket
      # Loop through current items
      # Except next to left bracket,
      # separate items with comma
      # Add string form of item
      # Close with right bracket
      ans = "["
      for i in range(self.__top + 1):
         if len(ans) > 1:
            ans += ", "
         ans += str(self.__stack_list[i])
      ans += "]"
      return ans